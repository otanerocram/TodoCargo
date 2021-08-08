<?php 
	session_start();

	if (!isset($_SESSION["globalUsuarioDni"])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en-us">	
	<head>
		<meta charset="utf-8">
		<title>TodoCargo</title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update. -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/todocargo.css">

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- Favicons ================================================== -->
		<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="icon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>

	<body class="">

		<!-- #HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="img/logo.png" alt="TodoCargo"> </span>
				<!-- END LOGO PLACEHOLDER -->

			</div>
			
			<!-- #TOGGLE LAYOUT BUTTONS -->
			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> 
						<a href="exit.php" title="Salir" data-action="userLogout" data-logout-msg="Te desconectarás del sistema de Carga. ¿Seguro que deseas salir?"><i class="fa fa-sign-out"></i></a>
					</span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->
				
				<!-- #SEARCH -->
				<!-- input: search field -->
				<form action="system/busca_ticket.html" class="header-search pull-right">
					<input id="search-fld" type="text" name="param" placeholder="Rastrear Envío">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->

				<!-- #Voice Command: Start Speech -->
				<!-- NOTE: Voice command button will only show in browsers that support it. Currently it is hidden under mobile browsers. 
						   You can take off the "hidden-sm" and "hidden-xs" class to display inside mobile browser-->
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div> 
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Comandos de Voz <br><small>Diga en voz alta y clara su orden</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Falló el comando de Voz
									<br><small class="txt-color-red">Debe <strong>"Permitir"</strong> Uso de Micrófono</small>
									<br><small class="txt-color-red">Debe tener <strong>Conexión a Internet</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">Ver Comandos</a> 
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Cerrar Menu</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" /> 
						<span>
							<?php echo $_SESSION["globalUsuarioNombre"]; ?>
						</span>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<ul>
					<li class="">
						<a href="system/panel.php" title="Dashboard">
							<i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Panel de Control</span>
						</a>
					</li>
					<li>
						<a href="system/clientes.php"><i class="fa fa-lg fa-fw fa-suitcase"></i> <span class="menu-item-parent">Clientes</span></a>
						<!-- <ul>
							<li><a href="">Mostrar Clientes</a></li>
							<li><a href="system/clientes_nuevo.php">Agregar Cliente</a></li>
						</ul> -->
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Encomiendas</span></a>
						<ul>
							<li><a href="system/encomiendas_nuevo.php">Nuevo Envío</a></li>
							<li><a href="system/encomiendas_despachar.php">Despachar</a></li>
							<li><a href="system/encomiendas_entregadas.php">Entregadas</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-gavel"></i> <span class="menu-item-parent">Facturación</span></a>
						<ul>
							<li><a href="system/facturacion_facturas.php">Facturas</a></li>
							<li><a href="system/facturacion_boletas.php">Boletas</a></li>
							<!-- <li><a href="system/facturacion_guias.php">Guías de Remisión</a></li> -->
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-file-text"></i> <span class="menu-item-parent">Manifiesto</span></a>
						<ul>
							<li><a href="system/manifiesto_nuevo.php">Nuevo Manifiesto</a></li>
							<li><a href="system/manifiesto_mostrar.php">Mostrar todos</a></li>
						</ul>
					</li>
					
					<?php 

						$role = $_SESSION['globalUsuarioRol'];

						if ($role === "ADM"){
							echo '
								<li>
									<a href="#"><i class="fa fa-lg fa-fw fa-list-ol"></i> <span class="menu-item-parent">Reportes</span></a>
									<ul>
										<li><a href="system/reportes_envios.php">Envíos Realizados</a></li>
										<li><a href="system/reportes_financiero.php">Financiero</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-lg fa-fw fa-cogs"></i> <span class="menu-item-parent">Sistema</span></a>
									<ul>
										<li>
											<a href="system/sistema_general.php"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">General</span></a>
										</li>
										<li>
											<a href="system/sistema_usuarios.php"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Usuarios</span></a>
										</li>
										<li>
											<a href="system/sistema_oficinas.php"><i class="fa fa-lg fa-fw fa-building"></i> <span class="menu-item-parent">Oficinas</span></a>
										</li>
										<li>
											<a href="system/sistema_vehiculos.php"><i class="fa fa-lg fa-fw fa-truck"></i> <span class="menu-item-parent">Vehículos</span></a>
										</li>
										<li>
											<a href="system/sistema_conductores.php"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Conductores</span></a>
										</li>
									</ul>
								</li>';

						}

					?>
					
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i></span>

		</aside>
		<!-- END NAVIGATION -->
		
		<!-- #MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Reiniciar la configuracion de las preferencias y volver al modo estandar?"><i class="fa fa-refresh"></i></span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<!-- This is auto generated -->
				</ol>
				<!-- end breadcrumb -->

			</div>
			<!-- END RIBBON -->

			<!-- #MAIN CONTENT -->
			<div id="content">

			</div>
			
			<!-- END #MAIN CONTENT -->

		</div>
		<!-- END #MAIN PANEL -->

		<!-- #PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">TodoCargo 1.0 <span class="hidden-xs"> - AguilaControl</span> © 2015-2016</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Usuario Conectado: <!-- <i class="fa fa-clock-o"></i>  --><strong><?php echo $_SESSION["globalUsuarioEmail"]." - ".$_SESSION["globalUsuarioAgencia"]; ?></strong> </i>
					</div>
					<!-- end div-->
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- END FOOTER -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


		<!-- #PLUGINS -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices: you can disable this in app.js -->
		<script src="js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- Demo purpose only -->
		<script src="js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="js/speech/voicecommand.min.js"></script>

		<!-- SmartChat UI : plugin -->
		<script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
		<script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">

			var usrDni 		= "";
			var usrNombre	= "";
			var usrTel 		= "";
			var usrAgn		= "";
			var usrEmail 	= "";
			var usrRol		= "";
			var codigoEmpresa	= "todocargo";

			$(document).ready(function() {
				usrDni 		= "<?php echo $_SESSION['globalUsuarioDni']; ?>";
				usrNombre 	= "<?php echo $_SESSION['globalUsuarioNombre']; ?>";
				usrTel 		= "<?php echo $_SESSION['globalUsuarioTelefono']; ?>";
				usrAgn 		= "<?php echo $_SESSION['globalUsuarioAgencia']; ?>";
				usrEmail 	= "<?php echo $_SESSION['globalUsuarioEmail']; ?>";
				usrRol 		= "<?php echo $_SESSION['globalUsuarioRol']; ?>";
			});
			
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	</body>

</html>