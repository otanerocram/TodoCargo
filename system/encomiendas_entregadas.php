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
				Entregadas
			</span>
		</h1>
	</div>
	<!-- end col -->

</div>
<!-- end row -->

<section id="widget-grid" class="animated bounceInLeft">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
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
						<form action="#" method="get" id="formBuscaEntregas" class="smart-form" novalidate="novalidate">
							<fieldset>
								<div class="row">
									<section class="col col-12">
										<select class="select2" id="buscaAgencia" name="buscaAgencia" style="width: 95%;padding-bottom:8px;margin-left:6px;">
											<!-- cargaAgencias(); -->
										</select>
										<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
											<input type="text" id="buscaFecha" name="buscaFecha" placeholder="Fecha" class="datepicker" data-dateformat='dd/mm/yy'>
											<b class="tooltip tooltip-top-left">Fecha aproximada del envío</b>
										</label>
										<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
											<input type="text" id="buscaRemito" name="buscaRemito" placeholder="Código Envio">
											<b class="tooltip tooltip-top-left">Introduzca el código de Remito</b>
										</label>
										<select class="select2" id="buscaFormPago" name="buscaFormPago" style="width: 90%;padding-bottom:8px;margin-left:6px;">
											<option value="" selected>Pagados & Collect</option>
											<option value="PPG">Sólo Collect</option>
											<option value="CONT">Sólo Pagados</option>
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
		</article>

		<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<!-- Resultados de Búsqueda -->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-resultados" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-cube"></i> </span>
					<h2>Envíos entregados</h2>
				</header>

				<div>
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
					</div>
					<div class="widget-body no-padding">
						<div class="table-responsive">
							<table id="ultimasEntregas" class="table table-striped table-hover" width="100%">
								<!-- -->
								<tr>
									<td>
										Now
									</td>
									<td>
										Loading...
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- FIN: Resultados de Búsqueda -->
		</article>
		<!-- WIDGET END -->
		
	</div>
	<!-- end row -->

</section>
<!-- end widget grid -->

<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">
	
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

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
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){ 
	 *  loadScript(".../plugin.js", run_after_loaded);	
	 * }
	 * 
	 * OR you can load chain scripts by doing
	 * 
	 * loadScript(".../plugin.js", function(){
	 * 	 loadScript("../plugin.js", function(){
	 * 	   ...
	 *   })
	 * });
	 */
	
	// pagefunction
	
	var pagefunction = function() {
		// clears the variable if left blank
	};
	
	// end pagefunction

	// destroy generated instances 
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

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

	$(document).ready(function() {
		
		$("#formBuscaEntregas").submit(function(e){
			var busqueda 	= {
	    		codigoEnvio: 		$("#buscaRemito").val(),
	    		fechaIngreso: 		$("#buscaFecha").datepicker('getDate') / 1000,
	    		agenciaOrigen: 		$("#buscaAgencia").val(),
	    		agenciaDestino: 	"",	// usrAgn
	    		formPago: 			$("#buscaFormPago").val()
	    	};

	    	if (busqueda.codigoEnvio != "" 
	    		|| busqueda.fechaIngreso != "" 
	    		|| busqueda.agenciaOrigen != ""
	    		|| busqueda.formPago != ""){
	    		
	    		cargaUltimasEntregas(JSON.stringify(busqueda));

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
	    });

	    try {
		    cargaAgencias();

		    var busqueda 	= {
	    		codigoEnvio: 		$("#buscaRemito").val(),
	    		fechaIngreso: 		$("#buscaFecha").datepicker('getDate') / 1000,
	    		agenciaOrigen: 		$("#buscaAgencia").val(),
	    		agenciaDestino: 	"",	// usrAgn
	    		formPago: 			$("#buscaFormPago").val()
	    	};

		    cargaUltimasEntregas(JSON.stringify(busqueda));

		}
		catch(err) {
		    console.log(err.message);
		}
		
	});

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
	            var options 	= "<option value='' selected>Todas</option>";
	            var resp 		= $.parseJSON(datos);
	            var sel 		= "";
	            $.each(resp,function(index,value){
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].nombre+"</option>";
            	});

            	$("#buscaAgencia").select2("destroy");
            	$("#buscaAgencia").append(options).trigger('create', true);
            	$("#buscaAgencia").select2({
            		placeholder: "Agencia Origen",
            	});
	        }
	    });
	}

	function cargaUltimasEntregas(searchArray){
		lg("cargaUltimasEntregas");
		
		var busq = JSON.parse(searchArray)
		

		// lg("bus" + busq.agenciaOrigen);


		$.ajax({
	        url: "webservice/_cargaUltimasEntregas.php",
	        data: {
	        	codigoEnvio: 			busq.codigoEnvio,
	        	fechaIngreso: 			busq.fechaIngreso,
	        	agenciaOrigen: 			busq.agenciaOrigen,
	        	agenciaDestino: 		busq.agenciaDestino,
	        	formPago: 				busq.formPago
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

	            /*
				'codigoEnvio', 'fecha', 'fechaIngreso', 'tipoServicio',
				'recogeEn', 'agenciaOrigen', 'agenciaDestino', 'formPago',
				'numBultos', 'pesoTotal', 'horaEntrega', 'cargaTotalPagar', 'giroMonto'
	            */

	            var tst 	= "<a href='javascript:void(0);' rel='popover-hover' data-placement='top' data-content='Código del Usuario que entregó el envío'>Despachador</a>";

	            htmlTable 	+= "<thead>";
	            htmlTable 	+= "	<tr>";
	            htmlTable 	+= "		<th class='text-center'>Ticket</th>";
	            htmlTable 	+= "		<th class='text-center'>F. Envío</th>";
	            htmlTable 	+= "		<th class='text-center'>F. Entrega</th>";
	            htmlTable 	+= "		<th class='text-center'>"+tst+"</th>";
	            htmlTable 	+= "		<th class='text-center'>Ruta</th>";
	            htmlTable 	+= "		<th class='text-center'>Pago</th>";
	            htmlTable 	+= "		<th class='text-center'>Detalle</th>";
	            htmlTable 	+= "		<th class='text-center'>Total</th>";
	            htmlTable 	+= "	</tr>";
	            htmlTable 	+= "</thead>";
	            htmlTable 	+= "<tbody>";
				
	            $.each(resp,function(index,value){
	            	
	            	var recogeEn 		= resp[index].recogeEn;
	            	var tipoServicio 	= resp[index].tipoServicio;
	            	var formPago 		= resp[index].formPago;

	            	htmlTable += "	<tr>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].codigoEnvio + "</td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].fecha + "</td>";
	            	htmlTable += "		<td class='text-center'>" + resp[index].fechaEntrega + "</td>";
	            	
	            	htmlTable += "		<td class='text-center'>" + resp[index].codigoUsuarioDesp + "</td>";
	            	

	            	if (recogeEn == 'AGN'){
	            		htmlTable += "		<td  class='text-center'>" + resp[index].agenciaOrigen + " <i class='fa fa-arrow-right'></i> " + resp[index].agenciaDestino + "</td>";
	            		// htmlTable += "		<td class='text-center'>Agencia</td>";	
	            	} else if (recogeEn == 'DEL') {
	            		htmlTable += "		<td class='text-center'>" + resp[index].agenciaOrigen + " <i class='fa fa-arrow-right'></i> " + resp[index].agenciaDestino + "</td>";//" RPTO " + resp[index].horaEntrega+ "
	            	} else {
	            		htmlTable += "		<td class='text-center'>" + resp[index].recogeEn + "</td>";
	            	}

	            	if (formPago == 'PPG'){
	            		htmlTable += "		<td class='text-center'>Collect</td>";
	            	}else if(formPago == 'CONT'){
						htmlTable += "		<td class='text-center'>Pagado</td>";
	            	}else{
	            		htmlTable += "		<td class='text-center'>" + resp[index].formPago + "</td>";
	            	}

	            	if (tipoServicio == 'PQT') {
	            		htmlTable += "		<td class='text-center'>" + resp[index].numBultos + " " +resp[index].tipoServicio + " " + resp[index].pesoTotal + "Kg</td>";
	            		htmlTable += "		<td class='text-center'>S/. " + parseFloat(resp[index].cargaTotalPagar).toFixed(2); + "</td>";
	            	} else if (tipoServicio == 'GIR') {
	            		htmlTable += "		<td class='text-center'>GIRO</td>";
	            		htmlTable += "		<td class='text-center'>S/. " + parseFloat(resp[index].giroMonto).toFixed(2) + "</td>";
	            	} else{
	            		htmlTable += "		<td class='text-center'>" + resp[index].tipoServicio + "</td>";
	            		htmlTable += "		<td class='text-center'>" + parseFloat(resp[index].cargaTotalPagar).toFixed(2); + "</td>";
	            	};
					
					htmlTable += "	</tr>";

            	});
            	htmlTable 	+= "</tbody>";

            	$("#ultimasEntregas").empty();
            	$("#ultimasEntregas").append(htmlTable).trigger('create', true);

            	pageSetUp();
            	
	        }
	    });
	}

	// end destroy
	
	// run pagefunction
	pagefunction();




	
</script>
