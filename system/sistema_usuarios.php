<!-- Bread crumb is created dynamically -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Sistema
			<span>
				<i class='fa fa-arrow-right'></i>
				Usuarios
			</span>
		</h1>
	</div>
	<!-- end col -->
	
</div>
<!-- end row -->

<!-- widget grid -->
<section id="widget-grid" class="animated bounceInLeft">

	<!-- row -->
	<div class="row">
		
		<article class="col-xs-12 col-sm-12 col-md-12">
	<!-- <article class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"> -->
			
			<!-- Widget ID (each widget will need unique ID)-->
			<!-- <div class="jarviswidget" id="wid-sistema-usuarios-edit" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-collapsed="false"> -->
			<div class="jarviswidget jarviswidget-sortable" id="wid-usuarios" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" role="widget">
				<header>
					<span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
					<h2>Administración de Usuarios</h2>
					<ul class="nav nav-tabs pull-right in">
						<li class="active">
							<a data-toggle="tab" href="#hr1" aria-expanded="true">
								<i class="fa fa-lg fa-users"></i>
								<span class="hidden-mobile hidden-tablet"> Lista de Usuarios </span>
							</a>
						</li>
						<li class="">
							<a data-toggle="tab" href="#hr2" aria-expanded="false">
								<i class="fa fa-lg fa-user-plus"></i>
								<span class="hidden-mobile hidden-tablet"> Nuevo Usuario </span>
							</a>
						</li>
					</ul>
				</header>

				<div>
					<div class="jarviswidget-editbox">
						<input class="form-control" type="text">	
					</div>

					<div class="widget-body no-padding">
						<div class="tab-content">
							<div class="tab-pane active" id="hr1">
								<div class="space"></div>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="text-center">DNI</th>
												<th class="text-center">Nombre Completo</th>
												<th class="text-center">Teléfono</th>
												<th class="text-center">Email</th>
												<th class="text-center">Agencia</th>
												<th class="text-center">Rol</th>
												<th class="text-center"  style="min-width: 145px;max-width: 145px;width:145px">&nbsp;</th>
											</tr>
										</thead>
										<tbody id="userList">
											<!-- ajax -->
										</tbody>
									</table>
									<div class="space"></div>
									<div id="editWell" class="well">
										<form action="#" id="editForm" class="smart-form animated fadeIn">
											<fieldset>
												<div class="row">
													<div class="col col-md-6 col-xs-12">
														<label class="label">DNI:</label>
														<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
															<input type="text" id="editarDni" name="editarDni" placeholder="DNI">
															<b class="tooltip tooltip-top-left">Se usará este campo como login para el sistema</b>
														</label>
													</div>
													<div class="col col-md-6 col-xs-12">
														<label class="label">Contraseña:</label>
														<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
															<input type="password" id="editarPassword" name="editarPassword" placeholder="Contraseña">
															<b class="tooltip tooltip-top-left">Contraseña para ingresar al sistema</b>
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12 col-xs-12">
														<label class="input"> <i class="icon-prepend fa fa-user"></i>
															<input type="text" id="editarNombre" name="editarNombre" placeholder="Nombre Completo">
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12 col-xs-12">
														<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
															<input type="email" id="editarEmail" name="editarEmail" placeholder="E-mail">
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col col-md-4 col-xs-12">
														<label class="input"> <i class="icon-prepend fa fa-phone"></i>
															<input type="tel" id="editarTelefono" name="editarTelefono" placeholder="Teléfono">
														</label>
													</div>
													<div class="col col-md-4 col-xs-12">
														<select class="select2" id="editarAgencia" name="editarAgencia" style="margin:2px;width: 95%;">
															<!-- cargaAgencias(); -->
														</select>
													</div>
													<div class="col col-md-4 col-xs-12">
														<select class="select2" id="editarRol" name="editarRol" style="margin:2px;width: 95%;">
															<option value="ADM">Administrador</option>
															<option value="USR">Usuario</option>
															<option value="SUP">Supervisor</option>
														</select>
													</div>
												</div>
											</fieldset>
											<footer>
												<button type="cancel" id="editCancel" class="btn btn-default">Cerrar</button>
												<button type="submit" class="btn btn-danger">Guardar Cambios</button>
											</footer>
										</form>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="hr2">
								<div class="space"></div>
								<form action="#" id="nuevoForm" class="smart-form animated fadeIn">
									<fieldset>
										<div class="row">
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
													<input type="text" id="nuevoDni" name="nuevoDni" placeholder="DNI">
													<b class="tooltip tooltip-top-left">Se usará este campo como login para el sistema</b>
												</label>
											</div>
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
													<input type="password" id="nuevoPassword" name="nuevoPassword" placeholder="Contraseña">
													<b class="tooltip tooltip-top-left">Contraseña para ingresar al sistema</b>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-12 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" id="nuevoNombre" name="nuevoNombre" placeholder="Nombre Completo">
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-12 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
													<input type="email" id="nuevoEmail" name="nuevoEmail" placeholder="E-mail">
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-4 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="tel" id="nuevoTelefono" name="nuevoTelefono" placeholder="Teléfono">
												</label>
											</div>
											<div class="col col-md-4 col-xs-12">
												<select class="" id="nuevoAgencia" name="nuevoAgencia" style="margin:2px;width: 95%;">
													<!-- cargaAgencias(); -->
												</select>
											</div>
											<div class="col col-md-4 col-xs-12">
												<select class="select2" id="nuevoRol" name="nuevoRol" style="margin:2px;width: 95%;">
													<option value="USR" selected>Usuario</option>
													<option value="ADM">Administrador</option>
													<option value="SUP">Supervisor</option>
												</select>
											</div>
										</div>
									</fieldset>
									<footer>
										<button type="submit" class="btn btn-primary">Crear Usuario</button>
									</footer>
								</form>
								<div class="space"></div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</article>
		
	</div>

</section>
<!-- end widget grid -->

<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">

	pageSetUp();
	
	var pagefunction = function() {
		// clears the variable if left blank
	};
	
	

	var pagedestroy = function(){
		
	}

	// run pagefunction
	pagefunction();

	function loading(action){
		
		if(action){
			$(".webloading").css("visibility", "visible");
			// console.log("Loading on");
		} else {
			
			$(".webloading").css("visibility", "hidden");
			// console.log("Loading off");
		}
	}

	function cargaAgencias(){
		$.ajax({
	        url: "webservice/_cargaAgencias.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            loading(false);
	        },
	        success: function(datos){
	        	loading(false);
	            var options 	= "";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";
	            var cant 		= 0;

	            $.each(resp,function(index,value){
	            	cant++;
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";
            	});

            	lg("Agencias cargadas. Total: " + cant);

            	$("#nuevoAgencia").select2("destroy");
            	$("#nuevoAgencia").append(options).trigger('create', true);
            	$("#nuevoAgencia").select2({
            		placeholder: "Agencia Asignada"
            	});
            	$("#nuevoAgencia").val(usrAgn).trigger("change");

            	$("#editarAgencia").select2("destroy");
            	$("#editarAgencia").append(options).trigger('create', true);
            	$("#editarAgencia").select2({
            		placeholder: "Agencia Asignada"
            	});
            	
	        }
	    });
	}

	function cargaUsuarios(){
		$.ajax({
	        url: "webservice/_cargaUsuarios.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            loading(false);
	        },
	        success: function(datos){
	        	loading(false);
	            var htmlTable 	= "";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";
	            var cant 		= 0;

	            $.each(resp,function(index,value){
	            	cant++;

	            	var userInfo = {
	            		dni: 		resp[index].dni,
	            		nombre: 	resp[index].nombre,
	            		telefono: 	resp[index].telefono,
	            		email: 		resp[index].email,
	            		agencia: 	resp[index].agencia,
	            		oficina: 	resp[index].oficina,
	            		rol: 		resp[index].rol,
	            		password: 	resp[index].password
	            	};

	            	var bt 	= 	JSON.stringify(userInfo);
	            	
	            	htmlTable 	+= "<tr>";
					htmlTable 	+= "		<td class='text-center'>"+userInfo.dni+"</td>";
					htmlTable 	+= "		<td class='text-center'>"+userInfo.nombre+"</td>";
					htmlTable 	+= "		<td class='text-center'>"+userInfo.telefono+"</td>";
					htmlTable 	+= "		<td class='text-center'>"+userInfo.email+"</td>";
					htmlTable 	+= "		<td class='text-center'>"+userInfo.oficina+"</td>";
					
					if (userInfo.rol == "ADM"){
						htmlTable 	+= "	<td class='text-center'>Administrador</td>";

					} else if (userInfo.rol == "SUP") {
						htmlTable 	+= "	<td class='text-center'>Supervisor</td>";

					} else if (userInfo.rol == "USR") {
						htmlTable 	+= "	<td class='text-center'>Usuario</td>";

					} else {
						htmlTable 	+= "	<td class='text-center'>"+userInfo.rol+"</td>";

					}
					htmlTable 	+= "		<td class='text-left'>";
					htmlTable 	+= "			<a class='btn btn-info btn-xs' href='javascript:editar("+bt+");'><i class='fa fa-pencil'></i> Editar</a>";
					
					if ( userInfo.rol != "ADM" ){
						htmlTable 	+= "		<a class='btn btn-danger btn-xs' href='javascript:borrar(\""+userInfo.dni+"\");'><i class='fa fa-trash-o'></i> Borrar</a>";	
					}
					
					htmlTable 	+= "		</td>";
					htmlTable 	+= "</tr>";
            	});

            	$("#userList").empty();
            	$("#userList").append(htmlTable).trigger('create', true);

				lg("Usuarios cargados. Total: " + cant);
            	
	        }
	    });
	}

	function editar(bt){
		$("#editWell").hide();
		loading(true);

		setTimeout(function(){
			try {
			    $("#editarDni").val(bt.dni);
				$("#editarPassword").val(bt.password);
				$("#editarNombre").val(bt.nombre);
				$("#editarEmail").val(bt.email);
				$("#editarTelefono").val(bt.telefono);
				$("#editarAgencia").val(bt.agencia).trigger("change");
				$("#editarRol").val(bt.rol).trigger("change");
			}
			catch(err){
			    lg("Error: " + err.message)
			}
		
			$("#editWell").show();
			loading(false);
		}, 300);
	}

	function updateUser(){
		$.ajax({
	        url: "webservice/_cargaUsuarios.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        data: {
	        	action: 	"edit",
	        	dni: 		$("#editarDni").val(),
	        	password: 	$("#editarPassword").val(),
	        	nombre: 	$("#editarNombre").val(),
	        	email: 		$("#editarEmail").val(),
	        	telefono:	$("#editarTelefono").val(),
	        	agencia: 	$("#editarAgencia").val(),
	        	rol: 		$("#editarRol").val()
	        },
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            loading(false);
	        },
	        success: function(datos){
	        	loading(false);
	            var resp = $.parseJSON(datos);
            	var statusCode = resp[0].statusCode;

            	$("#editWell").hide();
            	
            	if (statusCode == "OK"){
            		cargaUsuarios();
            		
            		$.smallBox({
						title : statusCode,
						content : "<i class='fa fa-clock-o'></i> <i> Usuario modificado con éxito!</i>",
						color : "#296191",
						iconSmall : "fa fa-thumbs-up bounce animated",
						timeout : 4000
					});
            	} else{
            		$.smallBox({
						title : statusCode,
						content : "No se pudo actualizar el usuario",
						color : "#a90329",
						iconSmall : "fa fa-thumbs-up bounce animated",
						timeout : 4000
					});
            	}
	        }
	    });
	}

	function insertUser(){
		$.ajax({
	        url: "webservice/_cargaUsuarios.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        data: {
	        	action: 	"add",
	        	dni: 		$("#nuevoDni").val(),
	        	password: 	$("#nuevoPassword").val(),
	        	nombre: 	$("#nuevoNombre").val(),
	        	email: 		$("#nuevoEmail").val(),
	        	telefono:	$("#nuevoTelefono").val(),
	        	agencia: 	$("#nuevoAgencia").val(),
	        	rol: 		$("#nuevoRol").val()
	        },
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            loading(false);
	        },
	        success: function(datos){
	        	loading(false);
	            var resp = $.parseJSON(datos);
            	var statusCode = resp[0].statusCode;

            	if (statusCode == "OK"){
            		cargaUsuarios();
            		
            		$.smallBox({
						title : statusCode,
						content : "<i class='fa fa-clock-o'></i> <i> Nuevo Usuario creado con éxito!</i>",
						color : "#296191",
						iconSmall : "fa fa-thumbs-up bounce animated",
						timeout : 4000
					});
            	} else{
            		$.smallBox({
						title : statusCode,
						content : "No se pudo crear el usuario, es posible que ya exista el DNI.",
						color : "#a90329",
						iconSmall : "fa fa-thumbs-up bounce animated",
						timeout : 4000
					});
            	}

            	$('#nuevoForm').trigger("reset");

	        }
	    });
	}

	function borrar(dni){
		var r = confirm("¿Está Seguro?");
		if (r == true) {
		    $.ajax({
		        url: "webservice/_cargaUsuarios.php",
		        timeout: 10000,
		        beforeSend: function(xhr){
		        	loading(true);
		        },
		        data: {
		        	action: 	"del",
		        	dni: 		dni
		        },
		        error: function(x,t,m){
		            if (t==="timeout"){
		                alert("Se sobrepasó el tiempo de espera");
		            }
		            loading(false);
		        },
		        success: function(datos){
		        	loading(false);
		            var resp = $.parseJSON(datos);
	            	var statusCode = resp[0].statusCode;

	            	console.log("STATUS: " + statusCode);
	            	
	            	if (statusCode == "OK"){
	            		cargaUsuarios();
	            		$("#editWell").hide();
	            		$.smallBox({
							title : 	statusCode,
							content : 	"<i class='fa fa-clock-o'></i> <i> Usuario Eliminado!</i>",
							color : 	"#296191",
							iconSmall : "fa fa-thumbs-up bounce animated",
							timeout : 	4000
						});
	            	} else{
	            		$.smallBox({
							title : 	statusCode,
							content : 	"No se pudo borrar el usuario!",
							color : 	"#a90329",
							iconSmall : "fa fa-thumbs-up bounce animated",
							timeout : 	4000
						});
	            	}
		        }
		    });
		} 
		
	}

	$(document).ready(function() {
		cargaAgencias();
		cargaUsuarios();
		$("#editWell").hide();

		$("#editForm").submit(function(){
			updateUser();
			return false;
		});

		$("#editCancel").click(function(){
			$("#editWell").hide();
		})

		$("#nuevoForm").submit(function(){
			var newDNI 	= $("#nuevoDni").val();
			if ( newDNI != "" ){
				insertUser();
			}else {
				$.smallBox({
					title : "Error",
					content : "No ha especificado un DNI válido",
					color : "#a90329",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
			}
			

			return false;
		});		

	});
	
</script>
