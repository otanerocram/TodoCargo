<!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Todo Cargo
			<span>>  
				Control de Unidades
			</span>
		</h1>
	</div>

	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
	</div>
	
</div>
<!-- end row -->

<!--
	The ID "widget-grid" will start to initialize all widgets below 
	You do not need to use widgets if you dont want to. Simply remove 
	the <section></section> and you can use wells or panels instead 
	-->

<!-- widget grid -->
<section id="widget-grid" class="">

	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="true">
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Mapa de Unidades</h2>
				</header>

				<!-- widget div-->
				<div>
					<div class="jarviswidget-editbox">
					</div>

					<!-- widget content -->
					<div class="widget-body no-padding">
						<div id="map_canvas" class="google_maps" data-gmap-lat="-14.035249" data-gmap-lng="-74.302276" data-gmap-zoom="7"  data-gmap-src="xml/gmap/pins.xml">
							&nbsp;
						</div>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>


</section>
<!-- end widget grid -->

<script type="text/javascript">

	pageSetUp();

	function ajustaAlto(){
	    mapHeight = $(window).height();
	    $(".google_maps").css("height", mapHeight - 295);
	    lg("alto: "+ mapHeight);
	}
	
	var pagefunction = function() {

		/*
		 * Google Maps Initialize
		 */
		
	    $this = $("#map_canvas");
	    $zoom_level = ($this.data("gmap-zoom") || 5);
	    $data_lat = ($this.data("gmap-lat") || 29.895883);
	    $data_lng = ($this.data("gmap-lng") || -80.650635);
	    $xml_src = ($this.data("gmap-src") || "xml/gmap/pins.xml");
	
	
	    function demoLoadAttribute() {
	
	        var centerLatLng = new google.maps.LatLng($data_lat, $data_lng),
	        mapOptions = {
	            zoom: $zoom_level,
	            center: centerLatLng,
	            mapTypeControlOptions: {
	                mapTypeIds: [google.maps.MapTypeId.TERRAIN, google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID
	                ]
	            }
	        },
	
	        bounds 		= new google.maps.LatLngBounds(),
	        infowindow 	= new google.maps.InfoWindow(),
	        map 		= new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	        map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
					
	    }
	
	    demoLoadAttribute();
			
	};
	

	var pagedestroy = function() {

		$(window).unbind('gMapsLoaded');
		
		lg("✔ Google maps unbind");

	}


	//$(window).unbind('gMapsLoaded');
	$(window).bind('gMapsLoaded', pagefunction);
	
	window.loadGoogleMaps();

	$(window).resize(ajustaAlto);

	$(document).ready(function() {
		ajustaAlto();
	});

</script>
