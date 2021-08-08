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

<!--
	The ID "widget-grid" will start to initialize all widgets below 
	You do not need to use widgets if you dont want to. Simply remove 
	the <section></section> and you can use wells or panels instead 
	-->

<!-- widget grid -->
<section id="widget-grid" class="animated bounceInLeft">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-sortable jarviswidget-color-teal" id="wid-general-1" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-gear"></i> </span>
					<h2>Configuración General </h2>
				</header>

				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">	
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						<form action="#" id="generalForm" class="smart-form">
							<header>
								Información General de la Empresa
							</header>
							<fieldset>
								<div class="row">
									<div class="col col-xs-6">
										<label class="label">Nombre Comercial</label>
										<label class="input"> <i class="icon-prepend fa fa-building"></i>
											<input type="text" id="generalNombre" placeholder="Nombre Comercial">
										</label>
									</div>
									<div class="col col-xs-6">
										<label class="label">Razón Social</label>
										<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
											<input type="text" id="generalRazonSocial" placeholder="Razón Social">
										</label>
									</div>
									
								</div>
								<div class="row">
									<div class="col col-xs-4">
										<label class="label">RUC</label>
										<label class="input"> <i class="icon-prepend fa fa-codepen"></i>
											<input type="text" id="generalRUC" placeholder="RUC">
										</label>
									</div>
									<div class="col col-xs-4">
										<label class="label">Página Web</label>
										<label class="input"> <i class="icon-prepend fa fa-link"></i>
											<input type="text" id="generalWeb" placeholder="Página Web">
										</label>
									</div>
									<div class="col col-xs-4">
										<label class="label">Email</label>
										<label class="input"> <i class="icon-prepend fa fa-codepen"></i>
											<input type="email" id="generalEmail" placeholder="Email">
										</label>
									</div>
								</div>
								
								<div class="row">
									<div class="col col-xs-12">
										<label class="label">Dirección</label>
										<label class="input"> <i class="icon-prepend fa fa-globe"></i>
											<input type="text" id="generalDireccion" placeholder="Dirección">
										</label>
									</div>
								</div>

								<div class="row">
									<div class="col col-xs-3">
										<label class="label">Ciudad</label>
										<label class="input"> <i class="icon-prepend fa fa-location-arrow"></i>
											<input type="text" id="generalCiudad" placeholder="Ciudad">
										</label>
									</div>
									<div class="col col-xs-3">
										<label class="label">País</label>
										<label class="input"> <i class="icon-prepend fa fa-globe"></i>
											<input type="text" id="generalPais" placeholder="País">
										</label>
									</div>
									<div class="col col-xs-3">
										<label class="label">Teléfono</label>
										<label class="input"> <i class="icon-prepend fa fa-phone"></i>
											<input type="tel" id="generalTelefono" placeholder="Telefono">
										</label>
									</div>
									<div class="col col-xs-3">
										<label class="label">Móvil</label>
										<label class="input"> <i class="icon-prepend fa fa-mobile"></i>
											<input type="tel" id="generalMovil" placeholder="Móvil">
										</label>
									</div>
								</div>
							</fieldset>
							
							<header>
								Configuración para Impresión
							</header>

							<fieldset>
								<div class="row">
									<div class="col col-xs-4">
										<label class="label">Serie de Impresora de Facturas</label>
										<label class="input"> <i class="icon-prepend fa fa-print"></i>
											<input type="text" id="generalImpFactura" placeholder="Serie de Impresora de Facturas">
										</label>
									</div>
									<div class="col col-xs-4">
										<label class="label">Serie de Impresora de Tickets</label>
										<label class="input"> <i class="icon-prepend fa fa-print"></i>
											<input type="text" id="generalImpTicket" placeholder="Serie de Impresora de Tickets">
										</label>
									</div>
									<div class="col col-xs-4">
										<label class="label">Código de Autorización</label>
										<label class="input"> <i class="icon-prepend fa fa-gavel"></i>
											<input type="text" id="generalCodigoAutorizacion" placeholder="Código de Autorización">
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col col-md-6" style="margin-left:25% !important;">
										<label class="label">Firma en las Impresiones</label>
										<label class="input"> <i class="icon-prepend fa fa-pencil"></i>
											<input type="text" id="generalFirmaTicket" placeholder="Firma en los Tickets Impresos">
										</label>
									</div>
								</div>
							</fieldset>
							<footer>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</footer>
						</form>
						<div class="space"></div>

					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->
		
	</div>

	<!-- end row -->


</section>
<!-- end widget grid -->

<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">
	

	pageSetUp();
	
	var pagefunction = function() {
		// clears the variable if left blank
		loading(false);
		cargaGeneral("list");
	};
	
	var pagedestroy = function(){
		
		$("#widget-grid").removeClass("animated bounceInLeft");
		$("#widget-grid").addClass("animated bounceOutRight");
		lg("Destruurrrr");
	}

	function loading(action){
		if(action){
			$(".webloading").css("visibility", "visible");
			// console.log("Loading on");
		} else {
			
			$(".webloading").css("visibility", "hidden");
			// console.log("Loading off");
		}
	}

	function cargaGeneral(action){

		$.ajax({
	        url: "webservice/_cargaGeneral.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        data: 	{
	        	action: 			action,
	        	codigo: 			codigoEmpresa,
	        	nombre: 			$("#generalNombre").val(),
	        	razonSocial: 		$("#generalRazonSocial").val(),
	        	ruc: 				$("#generalRUC").val(),
	        	direccion: 			$("#generalDireccion").val(),
	        	ciudad: 			$("#generalCiudad").val(),
	        	pais: 				$("#generalPais").val(),
	        	telefono: 			$("#generalTelefono").val(),
	        	movil: 				$("#generalMovil").val(),
	        	email: 				$("#generalEmail").val(),
	        	website: 			$("#generalWeb").val(),
	        	serImpFactura: 		$("#generalImpFactura").val(),
	        	serImpTicket: 		$("#generalImpTicket").val(),
	        	firmaTicket: 		$("#generalFirmaTicket").val(),
	        	codigoAutorizacion: $("#generalCodigoAutorizacion").val()
	        },
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            loading(false);
	        },
	        success: function(datos){
	        	loading(false);
	        	
	            var resp 		= $.parseJSON(datos);
	            
	            var cant 		= 0;


	            $.each(resp,function(index,value){

	            	var operation 	= resp[index].operation;
	            	var statusCode 	= resp[index].statusCode;

	            	if (operation == "list"){
	            		$("#generalNombre").val(resp[index].nombre);
		            	$("#generalRazonSocial").val(resp[index].razonSocial);
		            	$("#generalRUC").val(resp[index].ruc);
		            	$("#generalDireccion").val(resp[index].direccion);
		            	$("#generalCiudad").val(resp[index].ciudad);
		            	$("#generalPais").val(resp[index].pais);
		            	$("#generalTelefono").val(resp[index].telefono);
		            	$("#generalMovil").val(resp[index].movil);
		            	$("#generalEmail").val(resp[index].email);
		            	$("#generalWeb").val(resp[index].website);
		            	$("#generalImpFactura").val(resp[index].serImpFactura);
		            	$("#generalImpTicket").val(resp[index].serImpTicket);
		            	$("#generalFirmaTicket").val(resp[index].firmaTicket);
		            	$("#generalCodigoAutorizacion").val(resp[index].codigoAutorizacion);	

		            	lg("Información del Sistema Cargado!");
	            	
	            	} else if (operation == "edit" && statusCode == "OK"){

	            		lg("Se guardaron los cambios!");

	            		$.smallBox({
							title : statusCode,
							content : "<i> Se guardaron los cambios!</i>",
							color : "#296191",
							iconSmall : "fa fa-thumbs-up bounce animated",
							timeout : 4000
						});

	            	} else if (statusCode == "ERROR"){
	            		$.smallBox({
							title : statusCode,
							content : "No se pudo completar el procedimiento",
							color : "#a90329",
							iconSmall : "fa fa-thumbs-up bounce animated",
							timeout : 4000
						});
	            	}
            	});
	        }
	    });
	}
	
	// run pagefunction
	pagefunction();


	$(document).ready(function() {
		$("#generalForm").submit(function(){

			cargaGeneral("edit");
			return false;
		})

	});
	

	
</script>
