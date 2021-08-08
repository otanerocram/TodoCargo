<!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Manifiesto
			<span>>  
				Nuevo
			</span>
		</h1>
	</div>
	<!-- end col -->
	
</div>
<!-- end row -->


<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-manifiesto-nuevo" data-widget-editbutton="true" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false">
				
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>Crear nuevo Manifiesto </h2>
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
						<form action="" id="viajeForm" class="smart-form">
							<fieldset>
								<div class="row">
									<div class="col col-4">
										<label class="label">Fecha de Viaje</label>
										<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
											<input type="text" id="viajeFecha" name="viajeFecha" placeholder="Fecha" class="datepicker" data-dateformat='dd/mm/yy'>
											<b class="tooltip tooltip-top-left">Fecha de Inicio de Viaje</b>
										</label>
									</div>
									<div class="col col-4">
										<label class="label">Hora de Partida</label>
										<label class="input"> <i class="icon-prepend fa fa-clock-o"></i>
											<input class="form-control text-align-center" id="viajeHora" type="text" placeholder="Hora de Partida" value="22:00" data-autoclose="true">
											<b class="tooltip tooltip-bottom-right">Introduzca la Hora de partida del Bus</b>
										</label>
									</div>
									<div class="col col-4">
										<label class="label">Placa</label>
										<select class="select2" id="viajeUnidad" name="viajeUnidad" style="width: 95%;">
											<!-- ajax -->
										</select>
									</div>
								</div>

								<div class="row">
									<section class="col col-4">
										<label class="label">Desde</label>
										<select class="select2" id="viajeDesde" name="viajeDesde" style="width: 95%;">
											<!-- ajax -->
										</select>
									</section>

									<section class="col col-8">
										<label class="label">Piloto</label>
										<select class="select2" id="viajePiloto" name="viajePiloto" style="width: 95%;">
											<!-- ajax -->
										</select>
									</section>
								</div>
							
								<div class="row">
									<section class="col col-4">
										<label class="label">Hasta</label>
										<select class="select2" id="viajeHasta" name="viajeHasta" style="width: 95%;">
											<!-- ajax -->
										</select>
									</section>
									<section class="col col-8">
										<label class="label">Copiloto</label>
										<select class="select2" id="viajeCopiloto" name="viajeCopiloto" style="width: 95%;">
											<!-- ajax -->
										</select>
									</section>
								</div>
							</fieldset>
							<fieldset>
								<div class="row">
									<div class="col col-md-2">&nbsp;</div>
									<div class="text-center col col-md-6 col-xs-12">
										<label class="input"> <i class="icon-prepend fa fa-barcode"></i>
											<input type="text" id="codigoAgregar" placeholder="Codigo de Envío">
											<b class="tooltip tooltip-top-left">Código de barras del ticket</b>
										</label>
									</div>
									<div class="text-center col col-md-4 col-xs-12">
										<button class="btn btn-danger smart-btn" id="agregarRemito" type="button">
											Agregar Remito
										</button>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<div class="table-responsive">
									<table id="itemsTable" class="table table-hover">
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
										<tbody id="viajeItems">
											
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table table-hover">
										<tr>
											<td class="text-right">Sub Total S/.</td>
											<td class="text-right factura-totals" id="nfSubTotal">0.00</td>
										</tr>
										<tr>
											<td class="text-right">IGV 18% S/.</td>
											<td class="text-right factura-totals" id="nfImpuesto">0.00</td>
										</tr>
										<tr>
											<td class="text-right">TOTAL S/.</td>
											<td class="text-right factura-totals" id="nfTotal">0.00</td>
										</tr>
									</table>
								</div>
							</fieldset>

							<footer>
								<button type="submit" class="btn btn-primary">
									Crear Manifiesto
								</button>
							</footer>
						</form>

					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

		<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			renato
		</article>
		
	</div>

	<!-- end row -->

</section>
<!-- end widget grid -->

<div class="webloading"><!-- Place at bottom of page --></div>

<script type="text/javascript">
	
	pageSetUp();
	
	
	var pagefunction = function() {
		// clears the variable if left blank
		// lg("pagefunction");
	};

	var pagedestroy = function(){
		// lg("pagedestroy");
	}

	loadScript("js/plugin/clockpicker/clockpicker.min.js", runClockPicker);

	function runClockPicker(){
		$('#viajeHora').clockpicker({
			placement: 'bottom',
		    donetext: 'Done'
		});
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

            	$("#viajeDesde").select2("destroy");
            	$("#viajeHasta").select2("destroy");
            	$("#viajeDesde").append(options).trigger('refresh', true);
            	$("#viajeDesde").select2({
            		placeholder: "Origen"
            	});

            	$("#viajeDesde").val(usrAgn).trigger("change");
            	$("#viajeHasta").append(options).trigger('refresh', true);
            	$("#viajeHasta").select2({
            		placeholder: "Destino"
            	});
	        }
	    });
	}

	function cargaPlacas(){
		lg("cargaPlacas");
		$.ajax({
	        url: "webservice/_cargaPlacas.php",
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

	            $.each(resp,function(index,value){
	            	if (index == 0){
	            		sel= "selected";
	            	} 
	            	options +=	"<option value='"+resp[index].codigo+"' "+sel+">"+resp[index].codigo+" - "+resp[index].placa+"</option>";
            	});

	            $("#viajeUnidad").empty();
            	$("#viajeUnidad").select2("destroy");
            	$("#viajeUnidad").append(options).trigger('create', true);
            	$("#viajeUnidad").select2({
            		placeholder: "Origen"
            	});
            	
	        }
	    });
	}

	function cargaConductores(){
		lg("cargaConductores");
		$.ajax({
	        url: "webservice/_cargaConductores.php",
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

	            $.each(resp,function(index,value){
	            	if (index == 0){
	            		sel= "selected";
	            	} 
	            	options +=	"<option value='"+resp[index].dni+"' "+sel+">"+resp[index].nombre+"</option>";
            	});

	            $("#viajePiloto").empty();
            	$("#viajePiloto").select2("destroy");
            	$("#viajePiloto").append(options).trigger('create', true);
            	$("#viajePiloto").select2({
            		placeholder: "Origen"
            	});

            	$("#viajeCopiloto").empty();
            	$("#viajeCopiloto").select2("destroy");
            	$("#viajeCopiloto").append(options).trigger('create', true);
            	$("#viajeCopiloto").select2({
            		placeholder: "Origen"
            	});
            	
	        }
	    });
	}

	$(document).ready(function() {
		$("#viajeFecha").datepicker().datepicker("setDate", new Date());
		cargaAgencias();
		cargaPlacas();
		cargaConductores();

		$("#viajeForm").submit(function(){
			lg("Viaje Form");
			return false;
		});

		pagefunction();
	});
	
</script>
