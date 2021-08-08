<?php
    include('webservice/settings.php');
    
    // Definicion de variables globales
    $globalUsuarioDNI       = "";
    $globalUsuarioNombre    = "";
    $globalUsuarioTelefono 	= "";
    $globalUsuarioAgencia   = "";
    $globalUsuarioEmail    	= "";
    $globalUsuarioRol 		= "";

    $globalIsAdmin          = false;
    $userExists             = false;
    
    if (isset($_POST["user"])){  
    	// SI entra por POST del index.php cargamos las variables con los datos del POST
        $postUser 		= $_POST['user'];
        $postPassword   = $_POST['password'];
        
        // Conectamos
        $conexion = @new mysqli($server, $username, $password, $database, $port);

        // Matar todo si no hay conexion
        if ($conexion->connect_error){
            die('Error de conexión: ' . $conexion->connect_error);
        }
        
        // Verificar la existencia del usuario y almacenar el nombre en la variable globalNombreUsuario 
        $sql="SELECT `dni`, `nombre`, `telefono`, `agencia`, `email`, `rol` FROM sistema 
        WHERE `dni`='$postUser' AND `password`='$postPassword' LIMIT 1";

        echo $sql;
       
        $result = $conexion->query($sql);
        if ($result->num_rows > 0){
        	// Si tenemos resultados
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $globalUsuarioDNI       = $row['dni'];
                $globalUsuarioNombre    = $row['nombre'];
                $globalUsuarioTelefono 	= $row['telefono'];
                $globalUsuarioAgencia   = $row['agencia'];
                $globalUsuarioEmail    	= $row['email'];
                $globalUsuarioRol 		= $row['rol'];
            }
            $userExists = true;



        } else {
        	// Si no hay resultados
            $userExists     = false;
            $globalIsAdmin  = false;
        }

        $conexion->close(); //cerramos la conexión
        
    }else{
    // SI entra directamente por la web dispatch.php iniciamos las variables de sesion       

        if (is_session_started() === FALSE) {
            session_start();   
        }

        if(isset($_SESSION["globalUsuarioAgencia"])){
            // Si ya existe una variable idEmpresa entonces se considera que ya esta logeado
            // y se carga las variables de la sesion en las varibales de trabajo
            $userExists             = true;

            $globalUsuarioDNI     	= $_SESSION["globalUsuarioDNI"];   
            $globalUsuarioNombre    = $_SESSION["globalUsuarioNombre"];
            $globalUsuarioTelefono 	= $_SESSION["globalUsuarioTelefono"];
            $globalUsuarioAgencia   = $_SESSION["globalUsuarioAgencia"];   
            $globalUsuarioEmail    	= $_SESSION["globalUsuarioEmail"];
            $globalUsuarioRol       = $_SESSION["globalUsuarioRol"];

            
        }else{ // Si no existe la sesion regresa a index.php
            echo "No existe una sesion cargada. Inicie sesion para continuar";
            ?>
            <script type="text/javascript">
                // alert("No has iniciado sesión");
                // window.location="index.php";
                console.log("tes");
            </script>
            <?php
        }
        
    }

    // Si existe usuario proceder con almacenar las variables globales en la sesion
    if($userExists){

        if ($globalUsuarioRol == 'ADM'){
            $globalIsAdmin  = true;
        }

        if (is_session_started() === FALSE) {
            session_start();   
        }
        // Se crean las variables con los datos de la sesion actual
        $_SESSION["globalUsuarioDNI"]      	=   $globalUsuarioDNI;
        $_SESSION["globalUsuarioNombre"]  	=   $globalUsuarioNombre;
        $_SESSION["globalUsuarioTelefono"] 	=   $globalUsuarioTelefono;
        $_SESSION["globalUsuarioAgencia"]   =   $globalUsuarioAgencia;
        $_SESSION["globalUsuarioEmail"]  	=   $globalUsuarioEmail;
        $_SESSION["globalUsuarioRol"] 		=   $globalUsuarioRol;

        // Redundancia
        // $globalIdUsuario        = $_SESSION["idUsuario"];
        // $globalNombreUsuario    = $_SESSION["nombreUsuario"];
        // $globalIdEmpresa        = $_SESSION["idEmpresa"];

    }else{
        ?>
        <script type="text/javascript">
        // alert("No existe registro con los datos proporcionados!");
        // window.location="index.php";
        console.log("user no existe");
        </script>
        <?php
    }

?>