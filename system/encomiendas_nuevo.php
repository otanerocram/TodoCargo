<!-- Bread crumb is created dynamically -->
<!-- row -->

<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Encomiendas
			<span>
				<i class='fa fa-arrow-right'></i>
				Nuevo envío
			</span>
		</h1>
	</div>
	<!-- end col -->
	
</div>
<!-- end row -->


<div class="row">
	<div class="col-xs12 col-sm-12 col-md-12">
		<form action="webservice/_nuevoEnvio.php" method="get" id="formularioEnvio" class="smart-form" novalidate="novalidate">
			<fieldset>
				<div class="row">
					<section class="col col-2">
						<label class="label">Tipo de Servicio</label>
						<select class="select2" id="tipoServicio" name="tipoServicio" style="width: 95%;">
							<option value="PQT" selected>Paquetes</option>
							<option value="SOB">Sobre</option>
							<option value="GIR">Giro</option>
						</select>
					</section>
					<section class="col col-2">
						<label class="label">Recoge en </label>
						<select class="select2" id="recogeEn" name="recogeEn" style="width: 95%">
							<option value="AGN" selected>Oficina</option>
							<option value="DEL">Delivery</option>
						</select> 
					</section>
					<section class="col col-2">
						<label class="label">Agencia Origen</label>
						<select class="select2" id="agenciaOrigen" name="agenciaOrigen" style="width: 95%">
							<!-- Ajax -->
						</select>
					</section>
					<section class="col col-2">
						<label class="label">Agencia Destino</label>
						<select class="select2" id="agenciaDestino" name="agenciaDestino" style="width: 95%">
							<!-- Ajax -->
						</select>
					</section>
					<section class="col col-2">
						<label class="label">Doc. Adjunto</label>
						<select class="select2" id="docAdjunto" name="docAdjunto" style="width: 95%;">
							<option value="TCK" selected>Declaración</option>
							<option value="GIA">Guía de Remisión</option>
							<option value="BOL">Boleta de Venta</option>
							<option value="FCT">Factura</option>
							<option value="NON">Sin Doc. Adjunto</option>
						</select>
					</section>
					<section class="col col-2">
						<label class="label">Forma de Pago</label>
						<select class="select2" id="formaPago" name="formaPago" style="width: 95%">
							<option value="CONT" selected>Contado</option>
							<option value="PPG">Pago en Destino</option>
							<option value="VISA">Visa</option>
							<option value="MSTR">Mastercard</option>
						</select>
					</section>
					
				</div>
			</fieldset>
			<fieldset>
				<div class="row">
					<section class="col col-6">
						<h5>Detalle del Remitente</h5>
						
						<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
							<input type="text" id="remiteCodigoCliente" name="remiteCodigoCliente" placeholder="DNI / RUC">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-user"></i>
							<input type="text" id="remiteCliente" name="remiteCliente" readonly placeholder="Nombre/Empresa Remitente">
						</label>
						
						<label class="input"> <i class="icon-prepend fa fa-home"></i>
							<input type="text" id="remiteDireccion" name="remiteDireccion" readonly placeholder="Dirección">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-flag-checkered"></i>
							<input type="text" id="remiteCiudad" name="remiteCiudad" readonly placeholder="Ciudad">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-phone"></i>
							<input type="tel" id="remiteTelefono" name="remiteTelefono" readonly placeholder="Teléfono">
						</label>
						
						<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
							<input type="email" id="remiteEmail" name="remiteEmail" readonly placeholder="E-mail">
						</label>

						<button type="button" id="btnGuardaRemitente" class="btn btn-primary formBtn">
							Guardar
						</button>
						
					</section>
					<section class="col col-6">
						<h5>Detalle del Destinatario</h5>
						<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
							<input type="text" id="destinoCodigoCliente" name="destinoCodigoCliente" placeholder="DNI / RUC">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-user"></i>
							<input type="text" id="destinoCliente" name="destinoCliente" readonly placeholder="Nombre/Empresa Destinatario">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-home"></i>
							<input type="text" id="destinoDireccion" name="destinoDireccion" readonly placeholder="Dirección">
						</label>

						<label class="input"> <i class="icon-prepend fa fa-flag-checkered"></i>
							<input type="text" id="destinoCiudad" name="destinoCiudad" readonly placeholder="Ciudad">
						</label>
						
						<label class="input"> <i class="icon-prepend fa fa-phone"></i>
							<input type="tel" id="destinoTelefono" name="destinoTelefono" readonly placeholder="Teléfono">
						</label>
						
						<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
							<input type="email" id="destinoEmail" name="destinoEmail" readonly placeholder="E-mail">
						</label>
						
						<button type="button" id="btnGuardaDestinatario" class="btn btn-primary formBtn">
							Guardar
						</button>
					</section>
				</div>
			</fieldset>

			<fieldset id="panelPaquete" class="animated bounceInUp">
				<div class="row">
					<section class="col col-2">
						<label class="label">Nº Bultos a enviar</label>
						<label class="input">
							<i class="icon-prepend ">#</i>
							<input type="text" id="numBultos" name="numBultos" value="0" placeholder="Cantidad">
						</label>

						<label class="label">Peso Total</label>
						<label class="input">
							<input type="text" id="pesoTotal" name="pesoTotal" value="0" placeholder="Peso" class="text-align-center">
							<i class="icon-append ">Kg.</i>
						</label>
						
					</section>
					<section class="col col-4">
						<label class="label">Declaración de Contenido</label>
						<label class="textarea"> 										
							<textarea rows="6" id="contenido" value="" placeholder="Contenido..." class="custom-scroll"></textarea> 
						</label>
					</section>
					
					<section class="col col-2">
						<label class="label">Valor de la Carga</label>
						<label class="input">
							<i class="icon-prepend ">S/.</i>
							<input type="text" id="valorCarga" name="valorCarga" value="0.00" class="text-align-right" placeholder="Valor de la carga">
							<b class="tooltip tooltip-bottom-right">Valor declarado de la carga</b>
						</label>
						<div class="isDelivery">
							<label class="label">Hora de Entrega</label>
							<label class="input"> <i class="icon-prepend fa fa-clock-o"></i>
								<input class="form-control text-align-center" id="horaEntrega" type="text" placeholder="Hora de entrega" value="12:00" data-autoclose="true">
								<b class="tooltip tooltip-bottom-right">Introduzca Hora de Entrega en caso de delivery</b>
							</label>
						</div>

					</section>
					<section class="col col-2">
						<blockquote>
							<label class="label">&nbsp;&nbsp;Cargo por envío</label>
							<label class="input">
								<i class="icon-prepend ">S/.</i>
								<input type="text" class="text-align-right" id="cargoPorEnvio" name="cargoPorEnvio" value="0.00" placeholder="Cargo por envío">
								<b class="tooltip tooltip-bottom-right">Cargo por envío</b>
							</label>
							<div class="isDelivery">
								<label class="label">&nbsp;&nbsp;Cargo por Delivery</label>
								<label class="input">
									<i class="icon-prepend ">S/.</i>
									<input type="text" class="text-align-right" id="cargoPorDelivery" name="cargoPorDelivery" value="0.00" placeholder="Cargo por Delívery">
									<b class="tooltip tooltip-bottom-right">Cargo por Delívery</b>
								</label>
							</div>
						</blockquote>
					</section>
					<section class="col col-2">
						<blockquote>
							<label class="label">&nbsp;&nbsp;Precio Sugerido</label>
							<label class="input">
								<i class="icon-prepend ">S/.</i>
								<input type="text" class="text-align-right" id="precioSugerido" name="precioSugerido" placeholder="Precio Sugerido" value="0.00" disabled="disabled">
							</label>
							<label class="label">&nbsp;&nbsp;Total a Pagar</label>
							<label class="input">
								<i class="icon-prepend ">S/.</i>
								<input type="text" class="text-align-right" id="cargaTotalPagar" name="cargaTotalPagar" value="0.00" placeholder="Total a Pagar">
							</label>
						</blockquote>
					</section>
				</div>
			</fieldset>

			<fieldset id="panelGiro" class="animated bounceInUp">
				<div class="row">
					<section class="col col-3">
					</section>
					<section class="col col-3">
						<label class="label">Monto a Enviar</label>
						<label class="input">
							<i class="icon-prepend ">S/.</i>
							<input type="number" class="text-align-right" id="giroMonto" name="giroMonto" value="0.00" placeholder="Monto a Enviar">
							<b class="tooltip tooltip-bottom-right">Monto a Envíar</b>
						</label>
						
					</section>
					<section class="col col-3">
						<label class="label">Comisión</label>
						<label class="input">
							<i class="icon-prepend ">S/.</i>
							<input type="number" class="text-align-right" id="giroComision" name="giroComision" value="0.00" placeholder="Comisión">
							<b class="tooltip tooltip-bottom-right">Comisión</b>
						</label>
					</section>
					<section class="col col-3">
						<label class="label">Total a Pagar</label>
						<label class="input">
							<i class="icon-prepend ">S/.</i>
							<input type="number" class="text-align-right" id="giroTotal" name="giroTotal" value="0.00" placeholder="Total a Pagar">
							<b class="tooltip tooltip-bottom-right">Total a Pagar</b>
						</label>
					</section>
				</div>
			</fieldset>
	
			<footer>
				<button type="submit" id="procesaEnvio" class="btn btn-primary">
					Procesar envío
				</button>
				<a href="javascript:void(0);" id="calculaPago" class="btn btn-success"><i class="fa fa-usd"></i> Calcular</a>
			</footer>

		</form>
	</div>
</div>

<script type="text/javascript">

	var tarifas = {
		precioBase: 			0,	// tarifa mínima por envío
		kilosBase: 				0,	// Kg Max por tarifa mínima
		kiloAdicional: 			0,	// precio por Kg adicional sobre el precio base
		cargoPorDelivery: 		0,	// cargo adicional por delivery
		cargoPorPagoDestino: 	0, 	// cargo por pago en destino
		comisionPorGiro: 		0 	// Porcentaje del total del giro enviado
	}

	

	$(document).ready(function() {

  		$("#btnGuardaRemitente").hide();
  		$("#btnGuardaDestinatario").hide();
  		$("#panelGiro").hide();
  		$(".isDelivery").hide();

  		$("#remiteCodigoCliente").focus();

  		cargaAgencias();
  		cargaTarifas();

  		var $form = $('#formularioEnvio');
  		var userDNI = usrDni;

  		$form.submit(function(e){

  			var envio = {
  				remiteCodigoCliente: 	$("#remiteCodigoCliente").val(),
  				destinoCodigoCliente: 	$("#destinoCodigoCliente").val(),
  				codigoUsuario: 			usrDni,
  				tipoServicio: 			$("#tipoServicio").val(),
  				recogeEn: 				$("#recogeEn").val(),
  				agenciaOrigen: 			$("#agenciaOrigen").val(),
  				agenciaDestino: 		$("#agenciaDestino").val(),
  				docAdjunto: 			$("#docAdjunto").val(),
  				formaPago: 				$("#formaPago").val(),
  				numBultos: 				$("#numBultos").val(),
  				pesoTotal: 				$("#pesoTotal").val(),
  				contenido: 				$("#contenido").val(),
  				valorCarga: 			$("#valorCarga").val(),
  				horaEntrega: 			$("#horaEntrega").val(),
  				cargoPorEnvio: 			$("#cargoPorEnvio").val(),
  				cargoPorDelivery: 		$("#cargoPorDelivery").val(),
  				precioSugerido: 		$("#precioSugerido").val(),
  				cargaTotalPagar: 		$("#cargaTotalPagar").val(),
  				giroMonto: 				$("#giroMonto").val(),
  				giroComision: 			$("#giroComision").val(),
  				giroTotal: 				$("#giroTotal").val()
  			}

  			if (envio.agenciaOrigen == envio.agenciaDestino){
  				$.smallBox({
					title : 	"Error",
					content : 	"Las agencias de origen y destino no pueden ser las mismas",
					color : 	"#A52643",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#agenciaDestino").select2("open");
				return false;
  			}

  			if (envio.remiteCodigoCliente == "" ){
  				$.smallBox({
					title : 	"No se ha especificado Cliente Remitente",
					content : 	"Ingrese un número de DNI/RUC para cargar un cliente.",
					color : 	"#A52643",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#remiteCodigoCliente").focus();
				return false;
  			}else if(envio.destinoCodigoCliente == ""){
				$.smallBox({
					title : 	"No se ha especificado Cliente Destinatario",
					content : 	"Ingrese un número de DNI/RUC para cargar un cliente.",
					color : 	"#A52643",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#destinoCodigoCliente").focus();
				return false;
  			}

  			var esGiro 	= (envio.tipoServicio == "GIR")? true : false;

  			if (esGiro){

  				if (envio.giroMonto == "" || envio.giroMonto < 50){
  					$.smallBox({
						title : 	"Error",
						content : 	"La mínima cantidad de dinero para el Giro es de S/ 50.00",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#giroMonto").focus();

  				} else if(envio.giroComision == "" || envio.giroComision == 0) {
  					$.smallBox({
						title : 	"Error",
						content : 	"La comisión no puede ser S/ 0.00",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#giroComision").focus();

  				} else if(envio.giroTotal == "" || envio.giroTotal == 0) {
  					$.smallBox({
						title : 	"Error",
						content : 	"El Total a pagar no puede ser S/ 0.00",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#giroTotal").focus();

  				} else {
  					
  					var msg = "" + envio.agenciaOrigen + " -> " + envio.agenciaDestino + "<br soft/>";
  					msg += "Para: " + $("#destinoCliente").val() + "<br soft/>";
  					msg += "Total a pagar: " +  envio.giroTotal;


  					$.SmartMessageBox({
						title : "Generar nuevo Envío",
						content : msg,
						buttons : '[No][Guardar]'
					}, function(ButtonPressed) {
						
						if (ButtonPressed === "Guardar") {

							$.ajax({
						        url: $("#formularioEnvio").attr('action'),
						        data: envio,
						        type: "POST",
						        beforeSend: function(xhr){
						            
						        },
						        timeout: 10000,
						        error: function(x,t,m){
						            if (t==="timeout"){
						                alert("Se sobrepasó el tiempo de espera");
						            }
						        },
						        success: function(datos){
						            var resp = $.parseJSON(datos);
						            var statusCode = resp[0].statusCode;

						            if(statusCode == "OK"){

						            	var onclick = "onclick='imprimeTicket(\""+resp[0].codigoEnvio+"\")'";

						            	setTimeout(function(){
						            		$.smallBox({
												title : "Éxito",
												content : "Se registró el envío. ¿Desea imprimir Ticket? <p class='text-align-right'><a href='javascript:void(0);' "+onclick+" class='btn btn-primary btn-sm'>Sí</a> <a href='javascript:void(0);' class='btn btn-danger btn-sm'>No</a></p>",
												color : "#4A4A4C",
												icon : "fa fa-bell swing animated"
											});
											$('#formularioEnvio').trigger("reset");
						            	},100);
						            	
						            }else if (statusCode == "ERROR"){
						            	$.smallBox({
											title : 	"No se pudo registrar este envío",
											content : 	"Parece que hubo un error con esta operación",
											color : 	"#B53636",
											timeout : 	4000,
											icon : 		"fa fa-bell swing animated",
										});
						            }else{
						            	$.smallBox({
											title : 	"Error de Sistema",
											content : 	"Consulte con su soporte técnico",
											color : 	"#333",
											timeout : 	4000,
											icon : 		"fa fa-bell swing animated",
										});
						            }
						        }
						    });
						}
					});
					e.preventDefault();

  				}

  			}else{
  				if (envio.numBultos == "" || envio.numBultos == 0){
  					$.smallBox({
						title : 	"Error",
						content : 	"La cantidad de bultos a enviar no puede ser cero (0)",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#numBultos").focus();

  				} else if (envio.pesoTotal == "" || envio.pesoTotal == 0){
  					$.smallBox({
						title : 	"Error",
						content : 	"Debe ingresar el peso total en kilos",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#pesoTotal").focus();

  				} else if (envio.pesoTotal == "" || envio.pesoTotal == 0){
  					$.smallBox({
						title : 	"Error",
						content : 	"Indique un peso válido en kilos Kg.",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#pesoTotal").focus();

  				} else if (envio.contenido == "" || envio.contenido == 0){
  					$.smallBox({
						title : 	"Error",
						content : 	"Detalle el contenido del envío.",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#contenido").focus();

  				} else if (envio.valorCarga == "" || envio.valorCarga == 0){
  					$.smallBox({
						title : 	"Error",
						content : 	"Introduzca el valor de la carga declarada.",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#valorCarga").focus();

  				} else if (envio.cargoPorEnvio == ""){
  					$.smallBox({
						title : 	"Error",
						content : 	"El cargo por envío no puede estar vacío",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#cargoPorEnvio").focus();

  				} else if (envio.recogeEn == "DEL" && envio.cargoPorDelivery == ""){
  					$.smallBox({
						title : 	"Error",
						content : 	"El cargo por delivery no puede estar vacío",
						color : 	"#A52643",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});

					$("#cargoPorDelivery").focus();
					
  				} else {

  					var msg = "" + envio.agenciaOrigen + " -> " + envio.agenciaDestino + "<br soft/>";
  					msg += "Para: " + $("#destinoCliente").val() + "<br soft/>";
  					msg += "Total a pagar: " +  $("#cargaTotalPagar").val();


  					$.SmartMessageBox({
						title : "Generar nuevo Envío",
						content : msg,
						buttons : '[No][Guardar]'
					}, 
					function(ButtonPressed) {
						
						if (ButtonPressed === "Guardar") {

							$.ajax({
						        url: $("#formularioEnvio").attr('action'),
						        data: envio,
						        type: "POST",
						        beforeSend: function(xhr){
						            
						        },
						        timeout: 10000,
						        error: function(x,t,m){
						            if (t==="timeout"){
						                alert("Se sobrepasó el tiempo de espera");
						            }
						        },
						        success: function(datos){
						            var resp = $.parseJSON(datos);
						            var statusCode = resp[0].statusCode;

						            if(statusCode == "OK"){
						            	var onclick = "onclick='imprimeTicket(\""+resp[0].codigoEnvio+"\")'";

						            	setTimeout(function(){
						            		$.smallBox({
												title : "Éxito",
												content : "Se registró el envío. ¿Desea imprimir Ticket? <p class='text-align-right'><a href='javascript:void(0);' "+onclick+" class='btn btn-primary btn-sm'>Sí</a> <a href='javascript:void(0);' class='btn btn-danger btn-sm'>No</a></p>",
												color : "#4A4A4C",
												icon : "fa fa-bell swing animated"
											});
											$('#formularioEnvio').trigger("reset");
						            	},100);
										
						            }else if (statusCode == "ERROR"){
						            	$.smallBox({
											title : 	"No se pudo registrar este envío",
											content : 	"Parece que hubo un error con esta operación",
											color : 	"#B53636",
											timeout : 	4000,
											icon : 		"fa fa-bell swing animated",
										});
						            }else{
						            	$.smallBox({
											title : 	"Error de Sistema",
											content : 	"Consulte con su soporte técnico",
											color : 	"#333",
											timeout : 	4000,
											icon : 		"fa fa-bell swing animated",
										});
						            }
						        }
						    });
						}
					});
					e.preventDefault();
  				}

  			}

  			return false;
  		});

  		$("#btnGuardaRemitente").click(function(e){
  			e.preventDefault();

  			var cliente = {
  				codigo: 	$("#remiteCodigoCliente"),
  				nombre: 	$("#remiteCliente"),
  				direccion: 	$("#remiteDireccion"),
  				ciudad: 	$("#remiteCiudad"),
  				telefono: 	$("#remiteTelefono"),
  				email: 		$("#remiteEmail")
  			}

  			var altBox 	= {
  				active: 	false,
  				title: 		"Formulario de Cliente Incompleto",
  				content: 	"",
  				color: 		"#A52643",
  				timeout: 	4000

  			}

  			if (cliente.nombre.val() == ""){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba el nombre del cliente";
  				cliente.nombre.focus();
  			} else if (cliente.direccion.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba una dirección válida";
  				cliente.direccion.focus();
  			} else if (cliente.ciudad.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Debe especificar una ciudad";
  				cliente.ciudad.focus();
  			} else if (cliente.telefono.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Ingrese un número telefónico";
  				cliente.telefono.focus();
  			} else if (cliente.email.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba un correo electrónico de contacto";
  				cliente.email.focus();
  			} else{
  				altBox.active 	= false;
  				altBox.content 	= "";
  			}


  			if (altBox.active){
  				$.smallBox({
					title : 	altBox.title,
					content : 	altBox.content,
					color : 	altBox.color,
					timeout : 	altBox.timeout,
					icon : 		"fa fa-bell swing animated",
				});
  			}else{
  				var clnt = {
	  				codigo: 	cliente.codigo.val(),
	  				nombre: 	cliente.nombre.val(),
	  				direccion: 	cliente.direccion.val(),
	  				ciudad: 	cliente.ciudad.val(),
	  				telefono: 	cliente.telefono.val(),
	  				email: 		cliente.email.val(),
	  			}
  				ingresaCliente(JSON.stringify(clnt));	
  			}

  			return false;
  		})

  		$("#btnGuardaDestinatario").click(function(e){
  			e.preventDefault();

  			var cliente = {
  				codigo: 	$("#destinoCodigoCliente"),
  				nombre: 	$("#destinoCliente"),
  				direccion: 	$("#destinoDireccion"),
  				ciudad: 	$("#destinoCiudad"),
  				telefono: 	$("#destinoTelefono"),
  				email: 		$("#destinoEmail")
  			}

  			var altBox 	= {
  				active: 	false,
  				title: 		"Formulario de Cliente Incompleto",
  				content: 	"",
  				color: 		"#A52643",
  				timeout: 	4000

  			}

  			if (cliente.nombre.val() == ""){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba el nombre del cliente";
  				cliente.nombre.focus();
  			} else if (cliente.direccion.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba una dirección válida";
  				cliente.direccion.focus();
  			} else if (cliente.ciudad.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Debe especificar una ciudad";
  				cliente.ciudad.focus();
  			} else if (cliente.telefono.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Ingrese un número telefónico";
  				cliente.telefono.focus();
  			} else if (cliente.email.val() == "" ){
  				altBox.active 	= true;
  				altBox.content 	= "Escriba un correo electrónico de contacto";
  				cliente.email.focus();
  			} else{
  				altBox.active 	= false;
  				altBox.content 	= "";
  			}


  			if (altBox.active){
  				$.smallBox({
					title : 	altBox.title,
					content : 	altBox.content,
					color : 	altBox.color,
					timeout : 	altBox.timeout,
					icon : 		"fa fa-bell swing animated",
				});
  			}else{
  				var clnt = {
	  				codigo: 	cliente.codigo.val(),
	  				nombre: 	cliente.nombre.val(),
	  				direccion: 	cliente.direccion.val(),
	  				ciudad: 	cliente.ciudad.val(),
	  				telefono: 	cliente.telefono.val(),
	  				email: 		cliente.email.val(),
	  			}
  				ingresaCliente(JSON.stringify(clnt));
  			}

  			return false;
  		})

  		$("#remiteCodigoCliente").focusout(function(e){
  			var codRemite = $(this).val();
  			
  			if (codRemite.length > 7){
  				cargaDatosCliente(codRemite,true);
  			}
  		});

  		$("#destinoCodigoCliente").focusout(function(e){
  			var codRemite = $(this).val();
  			
  			if (codRemite.length > 7){
  				cargaDatosCliente(codRemite,false);
  			}
  		});

  		$("#giroMonto").focusout(function(e){
  			e.preventDefault();
  			var monto 		= parseFloat($(this).val());
			var comision 	= (monto * tarifas.comisionPorGiro);
  			var total 		= monto + comision;
  			
  			$("#giroComision").val(comision.toFixed(2))
  			$("#giroTotal").val(total.toFixed(2));
  		});

  		$("#giroComision").focusout(function(e){
  			e.preventDefault();
  			var monto 		= parseFloat($("#giroMonto").val());
  			var comision 	= parseFloat($(this).val());
  			var total 		= monto + comision;
  			
  			$("#giroTotal").val(total.toFixed(2));
  		});

  		$("#calculaPago").click(function(e){
  			console.log("Calculando...");
  			var cargoPorDelivery 	= ($("#recogeEn").val() == "DEL")? $("#cargoPorDelivery").val() : 0;
  			var cargoPorPagoDestino = ($("#formaPago").val() == "PPG")? tarifas.cargoPorPagoDestino : 0;
  			var pesoTotal 			= $("#pesoTotal").val();
  			
  			var precioKgAdicional 	= 0;

  			if (pesoTotal <= tarifas.kilosBase){
  				precioKgAdicional 	= 0;
  			}else {
  				precioKgAdicional 	= (pesoTotal - tarifas.kilosBase) * tarifas.kiloAdicional;
  			}

  			var totalEnvio 	= parseFloat(tarifas.precioBase) + parseFloat(cargoPorPagoDestino) + parseFloat(precioKgAdicional);
  			var totalPagar 	= parseFloat(totalEnvio) + parseFloat(cargoPorDelivery);
  			
  			$("#cargoPorEnvio").val(totalEnvio.toFixed(2))
  			$("#precioSugerido").val(totalPagar.toFixed(2))
  			$("#cargaTotalPagar").val(totalPagar.toFixed(2))

  			e.preventDefault();
  		});

  		$("#pesoTotal").focusout(function(e){
  			$("#calculaPago").click();
  		});


  		$("#tipoServicio").on("change", function(e){
  			e.preventDefault();
  			var tipoServ 	= $(this).val();

  			if (tipoServ == "GIR"){
  				$("#panelGiro").show();
  				$("#panelPaquete").hide();
  				$("#recogeEn").prop("disabled", true);
  			}else{
  				$("#panelGiro").hide();
  				$("#panelPaquete").show();
  				$("#recogeEn").prop("disabled", false);
  			}
  		});

  		$("#recogeEn").on("change", function(e){
  			e.preventDefault();

  			var recogeEn 	= $(this).val();

  			if (recogeEn == "DEL"){
  				$(".isDelivery").show();
  				$("#cargoPorDelivery").val(parseFloat(tarifas.cargoPorDelivery).toFixed(2));
  			}else{
  				$(".isDelivery").hide();
  			}
  			$("#calculaPago").click();
  		})

  		$("#formaPago").on("change", function(e){
  			e.preventDefault();
  			$("#calculaPago").click();
  		})

  		$("#cargoPorEnvio").on("change", function(e){
  			e.preventDefault();
  			$("#calculaPago").click();
  		})

  		$("#cargoPorDelivery").on("change", function(e){
  			e.preventDefault();
  			$("#calculaPago").click();
  		})
  		

	});

	function ingresaCliente(cliente){
		var cliente 	= JSON.parse(cliente);
		$.ajax({
	        url: "webservice/_ingresaCliente.php",
	        data: {
	            codigo: 	cliente.codigo,
	            nombre: 	cliente.nombre,
	            direccion: 	cliente.direccion,
	            ciudad: 	cliente.ciudad,
	            telefono: 	cliente.telefono,
	            email: 		cliente.email
	        },
	        beforeSend: function(xhr){
	            
	        },
	        timeout: 10000,
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            
	        },
	        success: function(datos){
	            var resp = $.parseJSON(datos);
	            var statusCode = resp[0].statusCode;

	            console.log("STATUS: " + statusCode);

	            if(statusCode == "OK"){
	            	try{
	            		$("#btnGuardaRemitente").hide();
	            		$("#btnGuardaDestinatario").hide();

	            		$('#remiteCliente').prop('readonly', true);
		            	$('#remiteDireccion').prop('readonly', true);
		            	$('#remiteCiudad').prop('readonly', true);
		            	$('#remiteTelefono').prop('readonly', true);
		            	$('#remiteEmail').prop('readonly', true);
		            	

		            	$('#destinoCliente').prop('readonly', true);
		            	$('#destinoDireccion').prop('readonly', true);
		            	$('#destinoCiudad').prop('readonly', true);
		            	$('#destinoTelefono').prop('readonly', true);
		            	$('#destinoEmail').prop('readonly', true);
		            	
	            	}catch (e){
	            		console.log("Error...");
	            	}

	            	$.smallBox({
						title : 	"Nuevo cliente creado satisfactoriamente",
						content : 	cliente.nombre + " ha sido registrado en el sistema!",
						color : 	"#1F4879",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});
					
	            }else if (statusCode == "ERROR"){
	            	$.smallBox({
						title : 	"No se pudo ingresar el cliente",
						content : 	"Parece que hubo un error con esta operación",
						color : 	"#B53636",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});
	            }else{
	            	$.smallBox({
						title : 	"Error de Sistema",
						content : 	"Consulte con su soporte técnico",
						color : 	"#333",
						timeout : 	4000,
						icon : 		"fa fa-bell swing animated",
					});
	            }
	        }
	    });
	}

	function cargaDatosCliente(codCliente,remitente){
		$.ajax({
	        url: "webservice/_cargaDatosCliente.php",
	        data: {
	            codCliente: 	codCliente
	        },
	        beforeSend: function(xhr){
	            
	        },
	        timeout: 10000,
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            
	        },
	        success: function(datos){
	            var resp = $.parseJSON(datos);
	            var nombre = resp[0].nombre;

	            if (remitente){
	            	if (nombre != ""){
	            		$("#remiteCliente").val(resp[0].nombre);
		            	$("#remiteDireccion").val(resp[0].direccion);
		            	$("#remiteCiudad").val(resp[0].ciudad);	
		            	$("#remiteTelefono").val(resp[0].telefono);
		            	$("#remiteEmail").val(resp[0].email);
	            		
	            		$('#remiteCliente').prop('readonly', true);
		            	$('#remiteDireccion').prop('readonly', true);
		            	$('#remiteCiudad').prop('readonly', true);
		            	$('#remiteTelefono').prop('readonly', true);
		            	$('#remiteEmail').prop('readonly', true);
		            	
		            	$("#btnGuardaRemitente").hide();
	            	}else{
	            		$("#remiteCliente").val("");
		            	$("#remiteTelefono").val("");
		            	$("#remiteEmail").val("");
		            	$("#remiteDireccion").val("");
		            	$("#remiteCiudad").val("");	
	            		$("#btnGuardaRemitente").show();
	            		
	            		$('#remiteCliente').prop('readonly', false);
		            	$('#remiteDireccion').prop('readonly', false);
		            	$('#remiteCiudad').prop('readonly', false);
		            	$('#remiteTelefono').prop('readonly', false);
		            	$('#remiteEmail').prop('readonly', false);
		            	
	            	}
	            }else{
	            	if (nombre != ""){
	            		$("#destinoCliente").val(resp[0].nombre);
		            	$("#destinoTelefono").val(resp[0].telefono);
		            	$("#destinoEmail").val(resp[0].email);
		            	$("#destinoDireccion").val(resp[0].direccion);
		            	$("#destinoCiudad").val(resp[0].ciudad);

		            	$('#destinoCliente').prop('readonly', true);
		            	$('#destinoDireccion').prop('readonly', true);
		            	$('#destinoCiudad').prop('readonly', true);
		            	$('#destinoTelefono').prop('readonly', true);
		            	$('#destinoEmail').prop('readonly', true);

		            	$("#btnGuardaDestinatario").hide();
	            	}else{
	            		$("#destinoCliente").val("");
		            	$("#destinoTelefono").val("");
		            	$("#destinoEmail").val("");
		            	$("#destinoDireccion").val("");
		            	$("#destinoCiudad").val("");

		            	$('#destinoCliente').prop('readonly', false);
		            	$('#destinoDireccion').prop('readonly', false);
		            	$('#destinoCiudad').prop('readonly', false);
		            	$('#destinoTelefono').prop('readonly', false);
		            	$('#destinoEmail').prop('readonly', false);

	            		$("#btnGuardaDestinatario").show();
	            	}
	            	
	            }
	            
	        }
	    });
	}

	function cargaAgencias(){
		$.ajax({
	        url: "webservice/_cargaAgencias.php",
	        data: {
	            //
	        },
	        beforeSend: function(xhr){
	            
	        },
	        timeout: 10000,
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            
	        },
	        success: function(datos){
	            var options 	= "";
	            var resp 		= $.parseJSON(datos);

	            var sel = "";

	            $.each(resp,function(index,value){
	            	
	            	sel = (index == 0) ? "selected" : "";
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";

            	});

            	$("#agenciaOrigen").select2("destroy");
            	$("#agenciaDestino").select2("destroy");
            	$("#agenciaOrigen").append(options).trigger('refresh', true);
            	$("#agenciaDestino").append(options).trigger('refresh', true);

            	$("#agenciaOrigen").select2();
            	$("#agenciaDestino").select2();

            	$("#agenciaOrigen").val(usrAgn).trigger("change");
	            
	        }
	    });
	}

	function cargaTarifas(){
		$.ajax({
	        url: "webservice/_cargaTarifas.php",
	        data: {},
	        beforeSend: function(xhr){
	            
	        },
	        timeout: 10000,
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	            
	        },
	        success: function(datos){
	            var sel 		= "";
	            var options 	= "";
	            var resp 		= $.parseJSON(datos);
	            
	            $.each(resp,function(index,value){
	            	var codigo 	= resp[index].codigo;
	            	var tarifa 	= resp[index].tarifa;

	            	if (codigo == "DEL"){
	            		tarifas.cargoPorDelivery = parseFloat(tarifa);

	            	} else if (codigo == "GIRCOM"){
	            		tarifas.comisionPorGiro = parseFloat(tarifa);

	            	} else if (codigo == "KGADI"){
	            		tarifas.kiloAdicional = parseFloat(tarifa);

	            	} else if (codigo == "KGBASE"){
	            		tarifas.kilosBase = parseFloat(tarifa);

	            	} else if (codigo == "PBASE"){
	            		tarifas.precioBase 	= parseFloat(tarifa);

	            	} else if (codigo == "PGD"){
	            		tarifas.cargoPorPagoDestino = parseFloat(tarifa);

	            	} else{
	            		// console.log("No conozco esta tarifa: [" + codigo +"] -> " + tarifa);
	            	}
	            });
	            // root.console.log("Tarifas cargadas!");
	        }
	    });
	}

	function imprimeTicket(ticketID){
		window.open("webservice/_imprimeTicket.php?ticket="+ticketID,'_blank');
	}
	
	pageSetUp();
	
	var pagefunction = function() {

		var $checkoutForm = $('#formularioEnvio').validate({
			rules : {
				remiteCodigoCliente : {
					required : true,
					minlength : 8,
					digits: true
				},
				remiteCliente: {
					required : true,
					minlength : 6,
				},
				remiteDireccion: {
					required : true
				},
				remiteCiudad: {
					required : true
				},
				destinoCodigoCliente : {
					required : true,
					minlength : 8,
					digits: true
				},
				destinoCliente: {
					required : true,
					minlength : 6,
				},
				destinoDireccion: {
					required : true
				},
				destinoCiudad: {
					required : true
				},
			},
	
			messages : {
				remiteCodigoCliente : {
					required : 'Ingrese DNI/RUC del Remitente',
					minlength : 'Ingrese al menos 8 dígitos',
					digits : 	'Ingrese sólo números'
				},
				remiteCliente: {
					required : 'Ingrese el nombre del Remitente',
					minlength : 'Ingrese un nombre válido',
				},
				remiteDireccion: {
					required : 'Ingrese la dirección del remitente'
				},
				remiteCiudad: {
					required : 'Ingrese la ciudad del remitente'
				},
				destinoCodigoCliente : {
					required : 'Ingrese DNI/RUC del Destinatario',
					minlength : 'Ingrese al menos 8 dígitos',
					digits : 	'Ingrese sólo números'
				},
				destinoCliente: {
					required : 'Ingrese el nombre del Destinatario',
					minlength : 'Ingrese un nombre válido',
				},
				destinoDireccion: {
					required : 'Ingrese la direccion del Destinatario'
				},
				destinoCiudad: {
					required : 'Ingrese la ciudad del Destinatario'
				},

				
			},
	
			// Do not change code below
			errorPlacement : function(error, element) {
				error.insertAfter(element.parent());
			}
		});
		
	};

	
	// Load form valisation dependency 
	loadScript("js/plugin/jquery-form/jquery-form.min.js", pagefunction);

	loadScript("js/plugin/clockpicker/clockpicker.min.js", runClockPicker);
	
	function runClockPicker(){
		$('#horaEntrega').clockpicker({
			placement: 'top',
		    donetext: 'Done'
		});
	}
	
</script>
