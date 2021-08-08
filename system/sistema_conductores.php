<!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Sistema
			<span>
				<i class='fa fa-arrow-right'></i>
				Conductores
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
			<div class="jarviswidget jarviswidget-color-darken" id="wid-vehiculos" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-fullscreenbutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-list"></i> </span>
					<h2>Conductores </h2>
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
						<div class="responsive">
							<table class="table-condensed" id="jqgrid"></table>
							<div id="pjqgrid"></div>	
						</div>
						
					</div>
				</div>
			</div>
		</article>		
	</div>
</section>
<!-- end widget grid -->
<script type="text/javascript">

	pageSetUp();
	
	// pagefunction	
	var pagefunction = function() {
		console.log("cleared");
		loadScript("js/plugin/jqgrid/jquery.jqGrid.min.js", run_jqgrid_function);

		function run_jqgrid_function() {

			jQuery("#jqgrid").jqGrid({
				url: 'webservice/_adminConductores.php',
				datatype : "json",
				height : 'auto',
				colNames : [
					// '<div align="center">Acciones</div>', 
					'<div align="center">DNI</div>', 
					'<div align="center">Nombre</div>', 
					'<div align="center">Dirección</div>',
					'<div align="center">Licencia</div>', 
					'<div align="center">Clase</div>',
					'<div align="center">Vence</div>', 
					'<div align="center">Teléfono</div>',
					'<div align="center">Móvil</div>',
					'<div align="center">Email</div>'],
				colModel : [
					// { name : 'act', 			align : "center",	index : 'act', 			editable : false,	sortable: false, 	width: "80px"  }, 
					{ name : 'dni', 			align : "center",	index : 'dni', 			editable : true, 	sortable: true, 	width: "110px" }, 
					{ name : 'nombre', 			align : "center",	index : 'nombre', 		editable : true, 	sortable: true }, 
					{ name : 'direccion', 		align : "center",	index : 'direccion',	editable : true, 	sortable: true }, 
					{ name : 'licencia',		align : "center",	index : 'licencia',		editable : true, 	sortable: true, 	width: "120px" }, 
					{ name : 'categoria', 		align : "center",	index : 'categoria',  	editable : true, 	sortable: true, 	width: "80px" },
					{ name : 'vigencia', 		align : "center",	index : 'vigencia', 	editable : true, 	sortable: true, 	width: "120px" }, 
					{ name : 'telefono', 		align : "center",	index : 'telefono', 	editable : true, 	sortable: true, 	width: "120px" }, 
					{ name : 'movil', 			align : "center",	index : 'movil', 		editable : true, 	sortable: true, 	width: "120px" }, 
					{ name : 'email',			align : "center",	index : 'email', 		editable : true, 	sortable: true }
					],
				rowNum : 20,
				rowList : [20, 40, 60],
				pager : '#pjqgrid',
				sortname : 'dni',
				toolbarfilter: true,
				viewrecords : true,
				sortorder : "asc",
				gridComplete: function(){
					var ids = jQuery("#jqgrid").jqGrid('getDataIDs');
					for(var i=0;i < ids.length;i++){
						var cl = ids[i];
						be = "<button class='btn btn-xs btn-default' data-original-title='Edit Row' onclick=\"jQuery('#jqgrid').editRow('"+cl+"');\"><i class='fa fa-pencil'></i></button>"; 
						se = "<button class='btn btn-xs btn-default' data-original-title='Save Row' onclick=\"jQuery('#jqgrid').saveRow('"+cl+"');\"><i class='fa fa-save'></i></button>";
						ca = "<button class='btn btn-xs btn-default' data-original-title='Cancel' onclick=\"jQuery('#jqgrid').restoreRow('"+cl+"');\"><i class='fa fa-times'></i></button>";  
						//ce = "<button class='btn btn-xs btn-default' onclick=\"jQuery('#jqgrid').restoreRow('"+cl+"');\"><i class='fa fa-times'></i></button>"; 
						//jQuery("#jqgrid").jqGrid('setRowData',ids[i],{act:be+se+ce});
						jQuery("#jqgrid").jqGrid('setRowData',ids[i],{act:be+se+ca});
					}	
				},
				editurl : "webservice/_insertaConductores.php",
				caption : "Lista de Conductores",
				multiselect : false,
				autowidth : true,

			});
			jQuery("#jqgrid").jqGrid('navGrid', "#pjqgrid", {
				edit : true,
				add : true,
				del : true
			});
			jQuery("#jqgrid").jqGrid('inlineNav', "#pjqgrid");
			/* Add tooltips */
			$('.navtable .ui-pg-button').tooltip({
				container : 'body'
			});

			jQuery("#m1").click(function() {
				var s;
				s = jQuery("#jqgrid").jqGrid('getGridParam', 'selarrrow');
				alert(s);
			});
			jQuery("#m1s").click(function() {
				jQuery("#jqgrid").jqGrid('setSelection', "13");
			});
			
			// remove classes
			$(".ui-jqgrid").removeClass("ui-widget ui-widget-content");
		    // $(".ui-jqgrid-view").children().removeClass("ui-widget-header ui-state-default");
		    $(".ui-jqgrid-labels, .ui-search-toolbar").children().removeClass("ui-state-default ui-th-column ui-th-ltr");
		    $(".ui-jqgrid-pager").removeClass("ui-state-default");
		    $(".ui-jqgrid").removeClass("ui-widget-content");
		    
		    // add classes
		    $(".ui-jqgrid-htable").addClass("table table-striped table-hover");
		    $(".ui-jqgrid-btable").addClass("table table-bordered table-striped");		
		    $(".ui-pg-div").removeClass().addClass("btn btn-sm btn-primary");
		    $(".ui-icon.ui-icon-plus").removeClass().addClass("fa fa-plus");
		    $(".ui-icon.ui-icon-pencil").removeClass().addClass("fa fa-pencil");
		    $(".ui-icon.ui-icon-trash").removeClass().addClass("fa fa-trash-o");
		    $(".ui-icon.ui-icon-search").removeClass().addClass("fa fa-search");
		    $(".ui-icon.ui-icon-refresh").removeClass().addClass("fa fa-refresh");
		    $(".ui-icon.ui-icon-disk").removeClass().addClass("fa fa-save").parent(".btn-primary").removeClass("btn-primary").addClass("btn-success");
		    $(".ui-icon.ui-icon-cancel").removeClass().addClass("fa fa-times").parent(".btn-primary").removeClass("btn-primary").addClass("btn-danger");
			$( ".ui-icon.ui-icon-seek-prev" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
			$(".ui-icon.ui-icon-seek-prev").removeClass().addClass("fa fa-backward");
			$( ".ui-icon.ui-icon-seek-first" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		  	$(".ui-icon.ui-icon-seek-first").removeClass().addClass("fa fa-fast-backward");
		  	$( ".ui-icon.ui-icon-seek-next" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		  	$(".ui-icon.ui-icon-seek-next").removeClass().addClass("fa fa-forward");
		  	$( ".ui-icon.ui-icon-seek-end" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		  	$(".ui-icon.ui-icon-seek-end").removeClass().addClass("fa fa-fast-forward");
		  	
		  	// update buttons
		    
		    $(window).on('resize.jqGrid', function () {
				jQuery("#jqgrid").jqGrid( 'setGridWidth', $("#content").width() );
			})
		}
	};

	loadScript("js/plugin/jqgrid/grid.locale-es.min.js", pagefunction);


</script>
