<!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Facturación
			<span>
				<i class='fa fa-arrow-right'></i>
				Boletas
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
		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-boleta-cliente" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
					<h2>Nueva Boleta </h2>
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">	
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						<form action="#" class="smart-form">
							<fieldset>
								<div class="row">
									<div class="col col-md-12 col-xs-12 animated fadeIn">
										<div class="row">
											<div class="col col-md-7 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
													<input type="text" id="nfCodigoCliente" name="nfCodigoCliente" placeholder="DNI / RUC">
													<b class="tooltip tooltip-top-left">Buscar Cliente</b>
												</label>
											</div>
											<div class="col col-md-5 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
													<input type="text" id="nfFechaBoleta" name="nfFechaBoleta" placeholder="Fecha" class="text-center datepicker" data-dateformat='dd/mm/yy'>
													<b class="tooltip tooltip-top-left">Fecha de Nueva Boleta</b>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-12 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" id="nfNombreCliente" name="nfNombreCliente" placeholder="Nombre de Cliente">
												</label>
											</div>
											
										</div>
										<div class="row">
											<div class="col col-md-12 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-home"></i>
													<input type="text" id="nfDireccionCliente" name="nfDireccionCliente" placeholder="Dirección">
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-globe"></i>
													<input type="text" id="nfCiudad" name="nfCiudad" placeholder="Ciudad">
												</label>
											</div>
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="tel" id="nfTelefono" name="nfTelefono" placeholder="Teléfono">
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
													<input type="email" id="nfEmail" name="nfEmail" placeholder="E-mail">
												</label>
											</div>
											<div class="col col-md-6 col-xs-12">
												<label class="input"> <i class="icon-prepend fa fa-tags"></i>
													<input type="text" id="nfNumReferencia" name="nfNumReferencia" placeholder="Nº Ref">
												</label>
											</div>
										</div>

									</div>
								</div>
							<hr>
							</fieldset>
							
						</form>
						<form action="#" class="smart-form">
							<fieldset>
								<div class="row">
									<div class="col col-md-2">&nbsp;</div>
									<div class="text-center col col-md-6 col-xs-12">
										<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
											<input type="text" id="nfRemito" placeholder="Codigo de Envío">
											<b class="tooltip tooltip-top-left">Código de barras del ticket</b>
										</label>
									</div>
									<div class="text-center col col-md-4 col-xs-12">
										<button class="btn btn-danger smart-btn" id="agregaRemito" type="submit">
											Agregar Remito
										</button>
									</div>
								</div>
							</fieldset>
						</form>
						
						<form action="#" id="nfDetalle" class="">
							<fieldset>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="text-center">REMITO</th>
												<th class="text-center">DST</th>
												<th class="text-center">TIPO</th>
												<th class="text-center">DETALLE</th>
												<th class="text-center">MONTO S/.</th>
												<th class="text-center">&nbsp;</th>
											</tr>
										</thead>
										<tbody id="itemsBoletas">
											
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table table-hover">
										<tr>
											<td class="text-right">TOTAL S/.</td>
											<td class="text-right factura-totals" id="nfTotal">0.00</td>
										</tr>
									</table>
								</div>
							</fieldset>
						</form>
						<form action="#" id="nfNotas" class="smart-form">
							<fieldset>
								<section>
									<label class="textarea textarea-resizable"> 										
										<textarea rows="3" id="nfNotes" class="custom-scroll" placeholder="Notas adicionales"></textarea> 
									</label>
								</section>
								
							</fieldset>
							<footer>
								<button type="submit" class="btn btn-primary">Crear Boleta</button>
							</footer>
						</form>

					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>

		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-boleta-items" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
					<h2>Últimas Boletas Creadas </h2>
				</header>
				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">	
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						<form action="#" id="formBuscaBoleta" class="smart-form">
							<fieldset>
								<div class="row">
									<section class="col col-4 text-align-center">
										<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
											<input type="text" id="buscaFecha" name="buscaFecha" placeholder="Fecha" class="datepicker" data-dateformat='dd/mm/yy'>
											<b class="tooltip tooltip-top-left">Buscar desde esta fecha</b>
										</label>
									</section>
									<section class="col col-4 text-align-center">
										<select class="select2" id="buscaAgencia" name="buscaAgencia" style="margin:2px;width: 100%;">
											<!-- cargaAgencias(); -->
										</select>
									</section>
									<section class="col col-4 text-align-right">
										<button class="btn btn-success smart-btn" type="submit">
											Busca Boleta
										</button>
									</section>
								</div>
							</fieldset>
						</form>
						<table id="ultimasBoletas" class="table table-striped table-bordered table-hover table-condensed" width="100%">
							<!-- -->
						</table>
					</div>
				</div>
			</div>
		</article>
		<!-- WIDGET END -->
		
	</div>

	<!-- end row -->

	<!-- row -->

	<div class="row">

		<!-- a blank row to get started -->
		<div class="col-sm-12">
			<!-- your contents here -->
		</div>
			
	</div>

	<!-- end row -->

</section>
<!-- end widget grid -->
<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">

	var items 	= 0;
	var total 	= 0;

	var tickets 	= new Array();
	var boletaItems	= new Array();
	
	function loading(action){
		if(action){
			$(".webloading").css("visibility", "visible");
			// console.log("Loading on");
		} else {
			
			$(".webloading").css("visibility", "hidden");
			// console.log("Loading off");
		}
	}

	pageSetUp();
	
	var pagefunction = function() {
		// clears the variable if left blank
	};
	
	var pagedestroy = function(){
		
	}

	// run pagefunction
	pagefunction();

	$(document).ready(function() {

		$("#nfFechaBoleta").datepicker().datepicker("setDate", new Date());

		cargaAgencias();
		
	    $("#agregaRemito").click(function(e){
	    	e.preventDefault();
	    	
	    	var codigoEnvio = $("#nfRemito").val();

        	if (codigoEnvio != ""){
        		cargaEnvio(codigoEnvio);
        	} else {
        		$.smallBox({
					title : 	"Ups",
					content : 	"Debe especificar un código de envío",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#nfRemito").focus();
        	}
	    });

	    $("#formBuscaBoleta").submit(function(){
	    	var oficina 	= $("#buscaAgencia").val();
	    	var fechaBusca	= $("#buscaFecha").datepicker('getDate') / 1000;
	    	cargaUltimasBoletas(oficina, fechaBusca, 1500);
	    	return false;
	    });

	    $("#nfNotas").submit(function(){
	    	while (tickets.length) { tickets.pop(); }
	    	while (boletaItems.length) { boletaItems.pop(); }

	    	var boletaBody 	= $("#itemsBoletas tr");
	    	var totalItems 	= boletaBody.length;
	    	
	    	var $row = boletaBody.closest("tr");
	    	var $tds = $row.find("td");

	    	$.each($tds, function(key, value) {
	    		var test = $(this).text().trim();

	    		if (test != ""){
	    			tickets.push(test);
	    		}
		    });

		    var arrayCount 		= tickets.length;

		    for (j=0; j < totalItems; j++){
				var d = (arrayCount / totalItems) * j;
				var data = {
					codigoEnvio: 	tickets[d],
					destino: 		tickets[d+1],
					tipoServicio: 	tickets[d+2],
					detalle: 		tickets[d+3],
					monto: 			tickets[d+4],
				}
				boletaItems.push(data);
			}

			// console.log(boletaItems;

		    var f = {
		    	oper:  				"add",
	    		fechaBoleta: 		$("#nfFechaBoleta").datepicker('getDate') / 1000,
	    		codigoDespachador: 	usrDni,
	    		codigoCliente: 		$("#nfCodigoCliente").val(),
	    		nombreCliente: 		$("#nfNombreCliente").val(),
	    		direccionCliente: 	$("#nfDireccionCliente").val(),
	    		numReferencia: 		$("#nfNumReferencia").val(),
	    		total: 				$("#nfTotal").html(),
	    		notas: 				$("#nfNotes").val(),
	    		estado: 			"OK",
	    		codigoAgencia: 		usrAgn,
	    		tickets: 			boletaItems
	    	}

	    	// console.log(f);

	    	if (f.fechaBoleta == 0){
	    		$.smallBox({
					title : 	"Ups",
					content : 	"La fecha no es válida",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#nfFechaBoleta").focus();
	    	} else if (f.codigoCliente == "" || f.nombreCliente == ""){
	    		$.smallBox({
					title : 	"Ups",
					content : 	"Debe indicar un código de Cliente registrado",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#nfCodigoCliente").focus();
	    	} else if (total == 0){
	    		$.smallBox({
					title : 	"Ups",
					content : 	"No ha especificado servicios para esta boleta",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#nfRemito").focus();
	    	} else if (f.codigoCliente.length != 8){
				$.smallBox({
					title : 	"Ups",
					content : 	"Ese no es un DNI Válido",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
				$("#nfCodigoCliente").focus();
	    	} else{
	    		console.clear();
	    		$.ajax({
					url: "webservice/_insertaBoleta.php",
					data: f,
					method: "POST",
					timeout: 30000,
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
						var numBoleta;
				       	var resp 		= $.parseJSON(datos);
						
						$.each(resp,function(index,value){
							numBoleta 	= resp[index].numBoleta;
						});

						if (numBoleta > 0){

							var onclick = "onclick='imprimirBoleta(\""+numBoleta+"\")'";

							var mensaje	=  "Código de la Boleta: "+ numBoleta + ", <br soft>";
							mensaje 	+= "¡Se ha creado la boleta satisfactoriamente!<br>";
							mensaje 	+= "<h5>¿Desea Imprimir?</h5>";
							mensaje 	+= "<p class='text-align-right'>";
							mensaje 	+= "	<a href='javascript:void(0);' class='btn btn-default btn-sm' " + onclick + ">Imprimir Boleta</a>";
							mensaje 	+= "	<a href='javascript:void(0);' class='btn btn-default btn-sm'>No</a>";
							mensaje 	+= "</p>";

							
			            	setTimeout(function(){
			            		$.smallBox({
									title : "Éxito",
									content : mensaje,
									color : "#4A4A4C",
									icon : "fa fa-bell swing animated"
								});
								$('.smart-form')[0].reset();
								$('#nfNotas')[0].reset();
								$("#itemsBoletas").empty();
								$("#nfSubTotal").empty();
								$("#nfImpuesto").empty();
								$("#nfTotal").empty();
								total = 0;
								ajustaTotal();
								cargaUltimasBoletas(usrAgn, 0, 20);
			            	},300);

							
						}


				    }
				});
	    	}

	    	return false;
	    });

	    // Carga los datos del Cliente.
	    $("#nfCodigoCliente").focusout(function(e){
	    	var codigoCliente = $(this).val();
  			
  			if (codigoCliente.length > 7){
  				cargaDatosCliente(codigoCliente);
  			}

	    });

	    cargaUltimasBoletas(usrAgn, 0, 20);

	    loading(false);
	});

	function cargaDatosCliente(codCliente){
		$.ajax({
	        url: "webservice/_cargaDatosCliente.php",
	        data: {
	            codCliente: 	codCliente
	        },
	        beforeSend: function(xhr){
	            loading(true);
	        },
	        timeout: 30000,
	        error: function(x,t,m){
	            if (t==="timeout"){
	                alert("Se sobrepasó el tiempo de espera");
	            }
	          	loading(false);
	          	lg("Buscar Cliente, ID: " + codCliente + " ERROR!");
	        },
	        success: function(datos){
	            var resp = $.parseJSON(datos);
	            var nombre = resp[0].nombre;

	            if (nombre != ""){
            		$("#nfNombreCliente").val(resp[0].nombre);
	            	$("#nfDireccionCliente").val(resp[0].direccion);
	            	$("#nfCiudad").val(resp[0].ciudad);	
	            	$("#nfTelefono").val(resp[0].telefono);
	            	$("#nfEmail").val(resp[0].email);
            		
            		$('#nfNombreCliente').prop('readonly', true);
	            	$('#nfDireccionCliente').prop('readonly', true);
	            	$('#nfCiudad').prop('readonly', true);
	            	$('#nfTelefono').prop('readonly', true);
	            	$('#nfEmail').prop('readonly', true);
	            	
	            	lg("ID de Cliente: " + codCliente + " => " + resp[0].nombre);
	            	$("#nfRemito").focus();

            	}else{
            		$("#nfNombreCliente").val("");
	            	$("#nfDireccionCliente").val("");
	            	$("#nfCiudad").val("");
	            	$("#nfTelefono").val("");
	            	$("#nfEmail").val("");	
            		
            		
            		$('#nfNombreCliente').prop('readonly', true);
	            	$('#nfDireccionCliente').prop('readonly', true);
	            	$('#nfCiudad').prop('readonly', true);
	            	$('#nfTelefono').prop('readonly', true);
	            	$('#nfEmail').prop('readonly', true);

	            	lg("ID de Cliente: " + codCliente + " No existe!");
	            	$("#nfCodigoCliente").focus();
            	}
            	loading(false);
	            
	        }
	    });
	}


	function cargaEnvio(codigoEnvio){
		
		$.ajax({
			url: "webservice/_cargaEnvio.php",
			data: {
				codigoEnvio: codigoEnvio
			},
			timeout: 30000,
			beforeSend: function(xhr){
				loading(true);
			},
			error: function(x,t,m){
			   if (t==="timeout"){
			       alert("Se sobrepasó el tiempo de espera");
			   }
			   loading(false);
			   lg("Insertar Remito: " +  codigoEnvio + " error!");
			},
		    success: function(datos){
		       	loading(false);
		       	
				var htmlTable 	= "";
				var resp 		= $.parseJSON(datos);
				var sel 		= "";

				/** RESPONSE JSON
				'codigoEnvio', 'fechaIngreso', 'fechaIngresoStr', 'codigoEstado',
		        'codigoRemitente', 'codigoDestinatario', 'codigoUsuario', 'fechaEntrega'
		        'fechaEntregaStr', 'codigoUsuarioDesp', 'tipoServicio', 'recogeEn',
		        'agenciaOrigen', 'agenciaDestino', 'docAdjunto',
		        'formPago', 'numBultos', 'pesoTotal', 'contenido',
		        'valorCarga', 'horaEntrega', 'cargoPorEnvio','cargoPorDelivery',
		        'precioSugerido', 'cargaTotalPagar', 'giroMonto',
		        'giroComision', 'giroTotal', 'origen', 'destino',
				'remite', 'remiteDir', 'remiteCiudad', 'remiteTel',
				'remiteEmail', 'consignado', 'consignadoDir',
				'consignadoCiudad', 'consignadoTel', 'consignadoEmail',
				**/
				
				$.each(resp,function(index,value){
					var codEnvio 	= resp[index].codigoEnvio;
					
					if (codEnvio != ""){
						items += 1;
						var tipEnv 		= resp[index].tipoServicio;
						// lg("Tipo de Envío: " + tipEnv);
						var monto 		= 0;
						var detalle 	= "";

						if (tipEnv == "GIR"){
							monto 	= parseFloat(resp[index].giroComision).toFixed(2);
							detalle = "<span class='label label-success'>Giro de S/. " + parseFloat(resp[index].giroMonto).toFixed(2) + "</span>";
						}else{
							monto 	= parseFloat(resp[index].cargaTotalPagar).toFixed(2);
							nb 		= parseInt(resp[index].numBultos).toFixed(0);

							detalle = "<span class='label label-success'>"+nb+" bto(s)</span> ";
							detalle += "<span class='label label-primary'>"+resp[index].pesoTotal+"Kg</span>";
						}

						var fila 	= {
		            		idItem: 	"items_" + items,
		            		monto: 		monto
		            	};

		            	var bt 	= 	JSON.stringify(fila);

						var onclick = "onclick='resta("+bt+")'";

						htmlTable 	+= "<tr id='"+fila.idItem+"'>";
						htmlTable 	+= "	<td class='text-center'>"+ resp[index].codigoEnvio +"</td>";
						htmlTable 	+= "	<td class='text-center'>"+ resp[index].agenciaDestino +"</td>";
						htmlTable 	+= "	<td class='text-center'>"+ tipEnv +"</td>";
						htmlTable 	+= "	<td class='text-center'>"+ detalle +"</td>";
						htmlTable 	+= "	<td class='text-right'>"+ monto +"</td>";
						htmlTable 	+= "	<td class='text-right'>";
						htmlTable 	+= "		<a "+onclick+" class='btn btn-danger btn-xs' href='javascript:void(0);'>";
						htmlTable 	+= "		<i class='fa fa-minus'></i></a>";
						htmlTable 	+= "	</td>";
						htmlTable 	+= "</tr>";

						sumar(monto);
						lg("Insertar Remito: " +  codigoEnvio + " OK!");

					}else{
						$.smallBox({
							title : 	"Ups",
							content : 	"No existe Código de Envío",
							color : 	"#B53636",
							timeout : 	4000,
							icon : 		"fa fa-bell swing animated",
						});
						lg("Remito: " +  codigoEnvio + " No existe!");
					}
				});

				$("#nfRemito").focus();
				$("#nfRemito").val("");
				$("#itemsBoletas").append(htmlTable).trigger('create', true);
				
		    }
		});
	}

	function resta(fila){
		// lg("Quitar Fila: " + fila.idItem);
		$("#"+fila.idItem).remove();

		// Restar del Total
		//lg("Restar: " + fila.monto);
		total = parseFloat(total) - parseFloat(fila.monto);
		ajustaTotal();
	}

	function sumar(monto){
		var mnt = parseFloat(total) + parseFloat(monto);
		// lg("Sumar " + total + " + " + monto + " = " +  mnt);
		total = mnt;
		ajustaTotal();
	}

	function ajustaTotal(){
		var amount 	= parseFloat(total).toFixed(2);
		$("#nfTotal").html(amount);

		// var net 	= parseFloat(amount / 1.18).toFixed(2);
		// $("#nfSubTotal").html(net);

		// var taxes 	= parseFloat(amount - net).toFixed(2);
		// $("#nfImpuesto").html(taxes);
	}

	function imprimirBoleta(numBoleta){
		window.open("webservice/_imprimirBoleta.php?numBoleta="+numBoleta,'_blank');
	}

	function cargaUltimasBoletas(agencia, fecha, limit ){
		// lg("cargaUltimasBoletas. Agencia: " + agencia + ", Fecha: "+ fecha + ", Limite: " + limit);
		$.ajax({
	        url: "webservice/_cargaUltimasBoletas.php",
	        data: {
	        	agencia: 		agencia,
	        	fechaBoleta: 	fecha,
	        	limit: 			limit
	        },
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
	            var cant 		= 0;


	            if ( resp[0].codigoBoleta > 0){
	            	htmlTable 	+= "<thead>";
		            htmlTable 	+= "	<tr>";
		            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-barcode txt-color-blue hidden-md hidden-sm hidden-xs'></i> #</th>";
		            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs'></i> Fecha </th>";
		            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-building txt-color-blue hidden-md hidden-sm hidden-xs'></i> Cliente</th>";
		            // htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-archive txt-color-red hidden-md hidden-sm hidden-xs'></i> F. Pago</th>";
		            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-archive txt-color-red hidden-md hidden-sm hidden-xs'></i> Total</th>";
		            htmlTable 	+= "	</tr>";
		            htmlTable 	+= "</thead>";
		            htmlTable 	+= "<tbody>";
					
		            $.each(resp,function(index,value){
		            	cant++;
		            	var onclick = "onclick='imprimirBoleta(\""+resp[index].codigoBoleta+"\")'";
		            	
		            	var codBol 	= parseInt(resp[index].codigoBoleta);
		            	htmlTable += "	<tr>";
		            	htmlTable += "		<td class='text-center'><a href='javascript:void(0);' "+onclick+">" + pad(codBol, 4) + "</a></td>";
		            	htmlTable += "		<td class='text-center'>" + resp[index].fecha + "</td>";
		            	htmlTable += "		<td class='text-center'>" + resp[index].nombreCliente + "</td>";
		            	htmlTable += "		<td class='text-center'>S/ " + parseFloat(resp[index].total).toFixed(2) + "</td>";
		            	htmlTable += "	</tr>";

	            	});
	            	htmlTable 	+= "</tbody>";

	            	$("#ultimasBoletas").empty();
	            	$("#ultimasBoletas").append(htmlTable).trigger('refresh', true);
	            	
	            	lg("Últimas boletas cargadas!. Agencia: " + agencia + ". Total: " + cant);
	            }else{
	            	htmlTable 	+= "<thead>";
		            htmlTable 	+= "	<tr>";
		            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-barcode txt-color-blue hidden-md hidden-sm hidden-xs'></i> #</th>";
		            htmlTable 	+= "	</tr>";
		            htmlTable 	+= "</thead>";
		            htmlTable 	+= "<tbody>";
		            htmlTable 	+= "	<tr>";
	            	htmlTable 	+= "		<td class='text-center'>No hay resultados</td>";
	            	htmlTable 	+= "	</tr>";
	            	htmlTable 	+= "</tbody>";
	            	$("#ultimasBoletas").empty();
	            	$("#ultimasBoletas").append(htmlTable).trigger('refresh', true);
	            	lg("No hay boletas...");
	            }

	            
	        }
	    });
	}

	function pad(num, size) {
	    var s = num+"";
	    while (s.length < size) s = "0" + s;
	    return s;
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
	            var options 	= "<option value=''>Todas</option>";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";
	            var cant 		= 0;

	            $.each(resp,function(index,value){
	            	cant++;
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";
            	});

            	lg("Agencias cargadas. Total: " + cant);

            	$("#buscaAgencia").select2("destroy");
            	$("#buscaAgencia").append(options).trigger('refresh', true);
            	$("#buscaAgencia").select2({
            		placeholder: "Agencia Origen"
            	});
            	$("#buscaAgencia").val(usrAgn).trigger("change");
	        }
	    });
	}

	
</script>
