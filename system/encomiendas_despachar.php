<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-table fa-fw "></i> 
				Encomiendas 
			<span>
				<i class='fa fa-arrow-right'></i>
				Despachar
			</span>
		</h1>
	</div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="animated bounceInLeft">

	<!-- row -->
	<div class="row">

		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<!-- Buscar Envio -->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-buscar" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>Buscar Envío</h2>				
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						<form action="webservice/_buscaTicket.php" method="get" id="formBusca" class="smart-form" novalidate="novalidate">
							<fieldset>
								<div class="row">
									<section class="col col-6">
										<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
											<input type="text" id="buscaRemito" name="buscaRemito" placeholder="Código Envio">
											<b class="tooltip tooltip-top-left">Introduzca el código de Remito</b>
										</label>
									</section>
									<section class="col col-6">
										<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
											<input type="text" id="buscaDocumento" name="buscaDocumento" placeholder="DNI/RUC">
											<b class="tooltip tooltip-top-left">Introduzca el DNI o RUC del destinatario</b>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-6">
										<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
											<input type="text" id="buscaFecha" name="buscaFecha" placeholder="Fecha" class="datepicker" data-dateformat='dd/mm/yy'>
											<b class="tooltip tooltip-top-left">Fecha aproximada del envío</b>
										</label>
									</section>
									<section class="col col-6">
										<select class="select2" id="buscaAgencia" name="buscaAgencia" style="width: 95%;">
											<!-- cargaAgencias(); -->
										</select>
									</section>
								</div>
							</fieldset>
							<footer>
								<button type="submit" class="btn btn-primary">
									Buscar
								</button>
							</footer>
						</form>

					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- FIN: Buscar Envío -->

			<!-- Resultados de Búsqueda -->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-resultados" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Resultados de la búsqueda </h2>
				</header>

				<div>
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
					</div>
					<div class="widget-body no-padding">
						<div class="table-responsive">
							<table id="resultadosBuscar" class="table table-striped table-hover" width="100%">
								<!-- -->
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- FIN: Resultados de Búsqueda -->

		</article>


		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

			<!-- Últimas LLegadas -->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-llegadas" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Últimas llegadas </h2>
				</header>

				<div>
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
					</div>
					<div class="widget-body no-padding">
						<table id="ultimasLlegadas" class="table table-striped table-bordered table-hover table-condensed" width="100%">
							<!-- -->
						</table>
					</div>
				</div>
			</div>
			<!-- FIN: Últimas LLegadas -->

			<!-- Despachar -->
			<div class="jarviswidget jarviswidget-color-red" id="wid-despacho" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Despachar </h2>
				</header>

				<div>

					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
					</div>

					<div class="widget-body no-padding">
						<div class="panel-group smart-accordion-default" id="accordion-2">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> 
											<i class="fa fa-fw fa-plus-circle txt-color-green"></i> 
											<i class="fa fa-fw fa-minus-circle txt-color-red"></i> 
											<span class="toFor">Remito: </span><span id="d_CodigoEnvio" class="toForDesc">----</span> <span id="d_origenDestino" class="pull-right from-to">--- <i class="fa fa-arrow-right"></i> ---</span>
										</a>
									</h4>
								</div>
								<div id="collapseOne-1" class="panel-collapse collapse in">
									<div class="panel-body no-padding">
										<table class="table table-bordered table-striped table-hover">
											<tbody>
												<tr>
													<td colspan="4" class="text-center">
														<img id="d_barcode" alt="123ABC" src="webservice/barcode.php?codetype=Code128&size=50&text=5669e19c" />
													</td>
												</tr>
												<tr>
													<td class="text-center"><a id="d_codigoEstado" href="javascript:void(0);" rel="popover-hover" data-placement="top" data-content="Ubicación actual del envío"></a></td>
													<td class="text-center"><a href="javascript:void(0);" rel="popover-hover" data-placement="top" data-content="Tipo de envío y cantidad."><span id="d_tipoServicio" class="label label-primary font-sm">---</span>&nbsp;<span id="d_numBultos" class="badge">0</span></a></td>
													<td class="text-center"><a id="d_recogeEn" href="javascript:void(0);" rel="popover-hover" data-placement="top" data-content="Destino final del envío">&nbsp;</a></td>
													<td class="text-center"><a id="d_formPago"  href="javascript:void(0);" rel="popover-hover" data-placement="top" data-content="Forma de pago."></a></td>
												</tr>
												<tr class="isPQT">
													<td class="text-left"><a href="javascript:void(0);">Peso Total: </a></td>
													<td id="d_pesoTotal">--- </td>
													<td class="text-left"><a href="javascript:void(0);" rel="popover-hover" data-placement="top" data-content="Horario preferido para la entrega. Sólo para entregas a domicilio.">Hora Ent:</a></td>
													<td id="d_horaEntrega">--:--</td>
												</tr>
												<tr class="isPQT">
													<td>Contenido:</td>
													<td id="d_contenido" colspan="3">...</td>
												</tr>
												<tr class="isPQT" valign="middle">
													<td valign="middle" class="text-left">
														<a href="javascript:void(0);" 
														rel="popover-hover" 
														data-placement="top" 
														data-content="Valor declarado de la carga según el remitente.">Valor Dec:</a>
													</td>
													<td id="d_valorCarga" valign="middle">S/ 0.00 </td>
													<td class="text-left" valign="middle">
														<a href="javascript:void(0);" 
														rel="popover-hover" 
														data-placement="top" 
														data-content="Monto total a pagar.">Total a Pagar:</a>
													</td>
													<td valign="middle" class="text-right">
														<span id="d_cargaTotalPagar" class="text-danger font-lg blink_me">S/. 0.00</span>
													</td>
												</tr>
												<tr class="isMoney" valign="middle">
													<td class="text-left" colspan="3" valign="middle">
														<a href="javascript:void(0);" 
														rel="popover-hover" 
														data-placement="top" 
														data-content="Monto total enviado, no incluye gastos por comisión ni otros. Es envío neto.">Total Dinero Enviado:</a>
													</td>
													<td valign="middle" class="text-right">
														<span id="d_giroMonto" class="text-danger font-lg blink_me">S/. 0.00</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed">
											<i class="fa fa-fw fa-plus-circle txt-color-green"></i>
											<i class="fa fa-fw fa-minus-circle txt-color-red"></i>
											<span class="toFor">De: </span><span id="d_remite" class="toForDesc">Marco Renato Beltrán Gálvez</span>
										</a>
									</h4>
								</div>
								<div id="collapseTwo-1" class="panel-collapse collapse">
									<div class="panel-body no-padding">
										<table class="table table-condensed">
											<tbody>
												<tr>
													<td class="col-md-3 text-left">DNI/RUC:</td>
													<td id="d_codigoRemitente" class="col-md-9">41492620 </td>
												</tr>
												<tr>
													<td class="text-left">Dirección:</td>
													<td id="d_remiteDir" >CALLE ELEODORO ZEVALLOS 173 INT C 101. URB. VILLA SOL, LOS OLIVOS</td>
												</tr>
												<tr>
													<td class="text-left">Ciudad:</td>
													<td id="d_remiteCiudad">AREQUIPA </td>
													
												</tr>
												<tr>
													<td class="text-left"><i class="fa fa-phone"></i> Teléfono:</td>
													<td id="d_remiteTel" class="text-left">5250754</td>
												</tr>
												<tr>
													<td class="text-left"><i class="fa fa-envelope"></i> Email</td>
													<td id="d_remiteEmail" class="text-left">informes@aguilacontrol.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed">
											<i class="fa fa-fw fa-plus-circle txt-color-green"></i>
											<i class="fa fa-fw fa-minus-circle txt-color-red"></i>
											<span class="toFor">Para: </span><span id="d_consignado" class="toForDesc">Nayuf Lissette Benavides Vásquez</span>
										</a>
									</h4>
								</div>
								<div id="collapseThree-1" class="panel-collapse collapse">
									<div class="panel-body no-padding">
										<table class="table table-condensed">
											<tbody>
												<tr>
													<td class="col-md-3 text-left">DNI/RUC:</td>
													<td id="d_codigoDestinatario" class="col-md-9">41492620 </td>
												</tr>
												<tr>
													<td class="text-left">Dirección:</td>
													<td id="d_consignadoDir" >CALLE ELEODORO ZEVALLOS 173 INT C 101. URB. VILLA SOL, LOS OLIVOS</td>
												</tr>
												<tr>
													<td class="text-left">Ciudad:</td>
													<td id="d_consignadoCiudad" >AREQUIPA </td>
													
												</tr>
												<tr>
													<td class="text-left"><i class="fa fa-phone"></i> Teléfono:</td>
													<td id="d_consignadoTel" class="text-left">5250754</td>
												</tr>
												<tr>
													<td class="text-left"><i class="fa fa-envelope"></i> Email</td>
													<td id="d_consignadoEmail" class="text-left">informes@aguilacontrol.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<footer>
							<div class="pull-right">
								<a href="#" id="imprimeTicket" class="btn btn-success"><i class="fa fa-print"></i> Imprimir Ticket </a>
								<a href="#" id="entregarEnvio" class="btn btn-danger"><i class="fa fa-check-square-o"></i> Entregar </a>
							</div>
						</footer>
						

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
		</article>
	</div>

	<!-- end row -->

	<!-- end row -->

</section>
<!-- end widget grid -->
<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 */
	
	// PAGE RELATED SCRIPTS
	
	// pagefunction	
	var pagefunction = function() {
		console.log("cleared");
		loading(false);


		var $checkoutForm = $('#formBusca').validate({
			rules : {
				buscaRemito : {
					required : false
				},
				buscaAgencia : {
					required : false
				},
				buscaFecha : {
					required : false
				},
				buscaDocumento : {
					required : false,
					digits : true
				}
			},
	
			// Messages for form validation
			messages : {
				buscaDocumento : {
					digits : 'Sólo números'
				}

			},
	
			// Do not change code below
			errorPlacement : function(error, element) {
				error.insertAfter(element.parent());
			}
		});
		
	};

	var pagedestroy = function(){
		
		/*
		Example below:

		$("#calednar").fullCalendar( 'destroy' );
		if (debugState){
			root.console.log("✔ Calendar destroyed");
		} 

		For common instances, such as Jarviswidgets, Google maps, and Datatables, are automatically destroyed through the app.js loadURL mechanic

		*/
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

	$(document).ready(function() {
		try {
		    cargaAgencias();
		    cargaUltimasLLegadas();

		    $("#wid-resultados").hide();
		    $("#wid-despacho").hide();

		}
		catch(err) {
		    console.log(err.message);
		}

		$("#imprimeTicket").click(function(e){
			e.preventDefault();
			var tkt = $("#d_CodigoEnvio").html();
			window.open("webservice/_imprimeTicket.php?ticket="+tkt,'_blank');
		});

		$("#entregarEnvio").click(function(e) {
			var tkt = $("#d_CodigoEnvio").html();

			var d_codEst = $("#d_codEst").html();

			console.log(d_codEst);

			if (d_codEst.toLowerCase().indexOf("entregado") != -1){
				$.smallBox({
					title : 	"Ups",
					content : 	"El envío ya ha sido entregado anteriormente.",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});
			}else{
				$.SmartMessageBox({
					title : "Realizar Entrega",
					content : "Esta acción no se puede deshacer. ¿Está seguro de realizar la entrega del envio "+ tkt +"?",
					buttons : '[No][Si]'
				}, function(ButtonPressed) {
					if (ButtonPressed === "Si") {
						entregarEnvio(tkt,usrDni);
					}
				});
			}

			
			e.preventDefault();
		})

		$("#formBusca").submit(function(e){
			var busqueda 	= {
	    		codigoEnvio: 		$("#buscaRemito").val(),
	    		fechaIngreso: 		$("#buscaFecha").datepicker('getDate') / 1000,
	    		codigoDestinatario: $("#buscaDocumento").val(),
	    		agenciaOrigen: 		$("#buscaAgencia").val()
	    	};

	    	if (busqueda.codigoEnvio != "" 
	    		|| busqueda.fechaIngreso != "" 
	    		|| busqueda.codigoDestinatario != ""
	    		|| busqueda.agenciaOrigen != ""){
	    		
	    		buscaTicket(JSON.stringify(busqueda));

	    	} else {

	    		$.smallBox({
					title : 	"Ups!",
					content : 	"Debe especificar algún criterio de búsqueda...",
					color : 	"#B53636",
					timeout : 	4000,
					icon : 		"fa fa-bell swing animated",
				});	
	    	}
	    	
	    	return false;
	    })
	});

	function cargaAgencias(){
		lg("cargaAgencias");
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
	            var options 	= "<option value='' selected></option>";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";

	            $.each(resp,function(index,value){
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";
            	});

            	$("#buscaAgencia").select2("destroy");
            	$("#buscaAgencia").append(options).trigger('refresh', true);
            	$("#buscaAgencia").select2({
            		placeholder: "Agencia Origen"
            	});
	        }
	    });
	}

	function cargaUltimasLLegadas(){
		lg("cargaUltimasLLegadas");
		$.ajax({
	        url: "webservice/_cargaUltimasLLegadas.php",
	        data: {
	        	agencia: usrAgn
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
	            var sel 		= "";

	            htmlTable 	+= "<thead>";
	            htmlTable 	+= "	<tr>";
	            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs'></i> Fecha Envío</th>";
	            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-barcode txt-color-blue hidden-md hidden-sm hidden-xs'></i> Cod. Remito</th>";
	            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-building txt-color-blue hidden-md hidden-sm hidden-xs'></i> Desde</th>";
	            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-archive txt-color-red hidden-md hidden-sm hidden-xs'></i> F. Pago</th>";
	            htmlTable 	+= "		<th class='text-center'><i class='fa fa-fw fa-archive txt-color-red hidden-md hidden-sm hidden-xs'></i> T. Servicio</th>";
	            htmlTable 	+= "	</tr>";
	            htmlTable 	+= "</thead>";
	            htmlTable 	+= "<tbody>";
				
	            $.each(resp,function(index,value){
	            	var ticket 	= {
	            		codigoEnvio: 			resp[index].codigoEnvio,
	            		fechaIngreso: 			resp[index].fechaIngreso,
	            		codigoEstado: 			resp[index].codigoEstado,
	            		codigoDestinatario: 	resp[index].codigoDestinatario
	            	};

	            	var bt 	= 	JSON.stringify(ticket);

	            	var onclick = "onclick='cargaTicket("+bt+")'";
	            	//var onclick = "onclick='cargaTicket(\""+resp[index].codigoEnvio+"\")'";
	            	htmlTable += "	<tr>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].fecha + "</td>";
	            	htmlTable += "		<td class='text-center'><a href='javascript:void(0);' "+onclick+">" + resp[index].codigoEnvio + "</a></td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].agenciaOrigen + "</td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].formPago + "</td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].recogeEn + "</td>";
	            	htmlTable += "	</tr>";

            	});
            	htmlTable 	+= "</tbody>";

            	$("#ultimasLlegadas").empty();
            	$("#ultimasLlegadas").append(htmlTable).trigger('refresh', true);
            	
	        }
	    });
	}

	function buscaTicket(busqueda){
		lg("buscaTicket");
		var busq 	= JSON.parse(busqueda);
		// console.log(busq);
		$.ajax({
	        url: "webservice/_buscaTicket.php",
	        data: {
	        	codigoEnvio: 			busq.codigoEnvio,
	        	fechaIngreso: 			busq.fechaIngreso,
	        	codigoDestinatario: 	busq.codigoDestinatario,
	        	agenciaOrigen: 			busq.agenciaOrigen
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
	        	$("#wid-resultados").show();
	            var htmlTable 	= "";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";

	            htmlTable 	+= "<thead>";
	            htmlTable 	+= "	<tr>";
	            htmlTable 	+= "		<th class='text-center'>Fecha</th>";
	            htmlTable 	+= "		<th class='text-center'>Codigo</th>";
	            htmlTable 	+= "		<th class='text-center'>Ruta</th>";
	            htmlTable 	+= "		<th class='text-center'><abbr title='DNI/RUC del Destinatario'>Cod. Cons</abbr></th>";
	            htmlTable 	+= "		<th class='text-center'><abbr title='Tipo de Servicio'>T.Serv</abbr></th>";
	            htmlTable 	+= "	</tr>";
	            htmlTable 	+= "</thead>";
	            htmlTable 	+= "<tbody>";
	           
	            $.each(resp,function(index,value){
	            	// sel = (index == 0) ? "selected" : "";
	            	//htmlTable +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";
	            	var ticket 	= {
	            		codigoEnvio: 			resp[index].codigoEnvio,
	            		fechaIngreso: 			resp[index].fechaIngreso,
	            		codigoEstado: 			resp[index].codigoEstado,
	            		codigoDestinatario: 	resp[index].codigoDestinatario
	            	};

	            	var bt 	= 	JSON.stringify(ticket);

	            	var onclick = "onclick='cargaTicket("+bt+")'";
	            	var status 	= resp[index].codigoEstado;
	            	var tserv 	= resp[index].formPago;
	            	var rc 		= "";
	            	if (status == "NVO"){
						rc 		= "danger";
	            	} else if (status == "TRAN"){
	            		rc 		= "warning";
	            	} else if (status == "DEST"){
	            		rc 		= "success";
	            	} else if (status == "DEL"){
	            		rc 		= "primary";
	            	} else if (status == "DESP"){
	            		rc 		= "default";
	            	}

	            	var ts 		= "";
	            	var tsv 	= "";
	            	if (tserv == "CONT"){
	            		ts 		= "default";
	            		tsv 	= "PAGADO"
	            	} else if (tserv = "PPG"){
	            		ts 		= "danger";
	            		tsv 	= "COLLECT";
	            	}

	            	htmlTable += "	<tr>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].fecha + "</td>";
	            	htmlTable += "		<td class='text-center'><a href='javascript:void(0);' "+onclick+">" + resp[index].codigoEnvio + "</a></td>";
	            	htmlTable += "		<td class='text-center'><span class='label label-"+rc+"'>" + resp[index].agenciaOrigen + " <i class='fa fa-arrow-right'></i> " + resp[index].agenciaDestino+ "</span></td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].codigoDestinatario + "</td>";
	            	htmlTable += "		<td class='text-center'><span class='label label-"+ts+"'>" + tsv + "</span></td>";
	            	htmlTable += "	</tr>";

            	});
            	htmlTable 	+= "</tbody>";
            	htmlTable 	+= 	"<tfoot>";
				htmlTable 	+= 	"	<tr class='leyenda'>";
	            htmlTable 	+= 	"		<td colspan='1'><abbr title='Leyenda para la columna de Ruta'>Ruta:</abbr></td>";
	            htmlTable 	+= 	"		<td colspan='4'>";
	            htmlTable 	+= 	"			<span class='label label-danger'>En Origen</span>";
				htmlTable 	+= 	"			<span class='label label-warning'>En Tránsito</span>";
				htmlTable 	+= 	"			<span class='label label-success'>En Destino</span>";
				htmlTable 	+= 	"			<span class='label label-primary'>Reparto</span>";
				htmlTable 	+= 	"			<span class='label label-default'>Entregado</span>";
	            htmlTable 	+= 	"		</td>";
	            htmlTable 	+= 	"	</tr>";
				htmlTable 	+= 	"</tfoot>";

            	$("#resultadosBuscar").empty();
            	$("#resultadosBuscar").append(htmlTable).trigger('create', true);
            	
	        }
	    });
	}

	function cargaTicket(tkd){
		lg("cargaTicket");
		console.log(tkd);
		
		$.ajax({
			url: "webservice/_cargaTicket.php",
			data: tkd,
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
		       	$("#wid-despacho").show();
				var htmlTable 	= "";
				var resp 		= $.parseJSON(datos);
				var sel 		= "";

				/** RESPONSE JSON
				'codigoEnvio', 'fecha', 'fechaIngreso', 'codigoEstado',
		        'codigoRemitente', 'codigoDestinatario', 'codigoUsuario',
		        'codigoUsuarioDesp', 'tipoServicio', 'recogeEn',
		        'agenciaOrigen', 'agenciaDestino', 'docAdjunto',
		        'formPago', 'numBultos', 'pesoTotal', 'contenido',
		        'valorCarga', 'horaEntrega', 'cargoPorEnvio','cargoPorDelivery',
		        'precioSugerido', 'cargaTotalPagar', 'giroMonto',
		        'giroComision', 'giroTotal', 'origen', 'destino',
				'remite', 'remiteDir', 'remiteCiudad', 'remiteTel',
				'remiteEmail', 'consignado', 'consignadoDir',
				'consignadoCiudad', 'consignadoTel', 'consignadoEmail',
				**/

				$("#d_codigoEstado").empty();
				
				$.each(resp,function(index,value){
					var d_CodigoEnvio 	= resp[index].codigoEnvio;
					var d_origenDestino = resp[index].origen + " <i class='fa fa-arrow-right'></i> " + resp[index].destino;

					var d_barcode_src 	= "webservice/barcode.php?codetype=Code128&size=50&text="+d_CodigoEnvio;

					$("#d_CodigoEnvio").html(d_CodigoEnvio);
					$("#d_origenDestino").html(d_origenDestino);
					$("#d_barcode").attr('src',d_barcode_src);
					$("#d_barcode").trigger("refresh", true);

					var d_codigoEstado 	= resp[index].codigoEstado;
					var lbl 	= "";
					var status 	= "";

					if (d_codigoEstado == "NVO"){
						lbl 		= "danger";
						status 		= "Origen";
	            	} else if (d_codigoEstado == "TRAN"){
	            		lbl 		= "warning";
	            		status 		= "En Ruta";
	            	} else if (d_codigoEstado == "DEST"){
	            		lbl 		= "success";
	            		status 		= "Destino";
	            	} else if (d_codigoEstado == "DEL"){
	            		lbl 		= "primary";
	            		status 		= "Reparto";
	            	} else if (d_codigoEstado == "DESP"){
	            		lbl 		= "default";
	            		status 		= "Entregado";
	            	}

	            	var lblStatus 	= "<span id='d_codEst' class='label label-"+lbl+" font-sm'>"+status+"</span>";
	            	$("#d_codigoEstado").html(lblStatus);

	            	var tipEnv 		= resp[index].tipoServicio;
	            	$("#d_tipoServicio").html(tipEnv);
					$("#d_numBultos").html(resp[index].numBultos);

	            	var d_recogeEn 	= resp[index].recogeEn;

	            	if (d_recogeEn == "AGN"){
						lbl 		= "success";
						status 		= "AGENCIA";
	            	} else if (d_recogeEn == "DEL"){
	            		lbl 		= "primary";
	            		status 		= "DOMICILIO";
	            	}

	            	lblStatus 		= "<span class='label label-"+lbl+" font-sm'>"+status+"</span>";
					$("#d_recogeEn").html(lblStatus);

					var d_formPago 	= resp[index].formPago;
					if (d_formPago == "CONT"){
						lbl 		= "default";
						status 		= "PAGADO";
	            	} else if (d_formPago == "PPG"){
	            		lbl 		= "danger";
	            		status 		= "COLLECT";
	            	}

	            	lblStatus 		= "<span class='label label-"+lbl+" font-sm'>"+status+"</span>";
					$("#d_formPago").html(lblStatus);

					$("#d_pesoTotal").html(resp[index].pesoTotal + "Kg");
					$("#d_horaEntrega").html(resp[index].horaEntrega);
					$("#d_contenido").html(resp[index].contenido);
					var val 	= parseFloat(resp[index].valorCarga);
					$("#d_valorCarga").html("S/. " + val.toFixed(2));

					var tot 	= parseFloat(resp[index].cargaTotalPagar);
					$("#d_cargaTotalPagar").html("S/. " + tot.toFixed(2));

					var mon 	= parseFloat(resp[index].giroMonto);
					$("#d_giroMonto").html("S/. " + mon.toFixed(2));

					$("#d_remite").html(resp[index].remite);
					$("#d_codigoRemitente").html(resp[index].codigoRemitente);
					$("#d_remiteDir").html(resp[index].remiteDir);
					$("#d_remiteCiudad").html(resp[index].remiteCiudad);
					$("#d_remiteTel").html(resp[index].remiteTel);
					$("#d_remiteEmail").html(resp[index].remiteEmail);

					$("#d_consignado").html(resp[index].consignado);
					$("#d_codigoDestinatario").html(resp[index].codigoDestinatario);
					$("#d_consignadoDir").html(resp[index].consignadoDir);
					$("#d_consignadoCiudad").html(resp[index].consignadoCiudad);
					$("#d_consignadoTel").html(resp[index].consignadoTel);
					$("#d_consignadoEmail").html(resp[index].consignadoEmail);



					if (tipEnv == "GIR"){
						$(".isPQT").hide();
						$(".isMoney").show();
					}else {
						$(".isPQT").show();
						$(".isMoney").hide();
					}

				});

		    }
		});
	}

	function entregarEnvio(codigoEnvio,despachador){
		lg("entregarEnvio("+codigoEnvio+","+despachador+")");
		$.ajax({
	        url: "webservice/_entregarEnvio.php",
	        timeout: 10000,
	        beforeSend: function(xhr){
	        	loading(true);
	        },
	        data: {
	        	codigoEnvio: 	codigoEnvio,
	        	despachador: 	despachador
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

	            if(statusCode == "OK"){

	            	// var onclick = "onclick='imprimeTicket(\""+resp[0].codigoEnvio+"\")'";

	            	setTimeout(function(){
	            		$.smallBox({
							title : "Envío Entregado",
							content : "<i class='fa fa-clock-o'></i> <i>Se ha realizado la entrega!</i>",
							color : "#659265",
							iconSmall : "fa fa-check fa-2x fadeInRight animated",
							timeout : 4000
						});
						//$('#formularioEnvio').trigger("reset");
						$('#formBusca').submit();
						$("#wid-despacho").hide();
	            	},1000);
	            	
	            }else if (statusCode == "ERROR"){
	            	$.smallBox({
						title : 	"No se pudo registrar la entrega",
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


</script>
