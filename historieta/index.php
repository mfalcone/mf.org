<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MaxiFalcone.org | Historieta</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Perspective Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- pop-up-script -->
<script src="../js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.img-top a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body class="galeria-portfolio alegria">
<!-- header -->
	<div class="header-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="../">MaxiFalcone.org</a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bubble-bottom"><a href="../">Inicio</a></li>
						<li class="hvr-bubble-bottom"><a href="../#quiensoy" class="scroll">Quien soy</a></li>
						<li class="hvr-bubble-bottom"><a href="../#portfolio">Portfolio</a></li>
						<li class="hvr-bubble-bottom"><a href="../prensa">Prensa</a></li>
						<li class="hvr-bubble-bottom"><a href="../#contact" class="scroll">Contacto</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->	
				
			</nav>
		</div>
	</div>
<!-- header -->
<!-- header-bottom -->
	<div class="header-bottom">
		
	</div>
<!-- //header-bottom -->
<!-- banner -->
	<div class="banner cabecera">
		
							<div class="inner-banner" style="width:100%;background-image:url(../images/cabecera_ilustracion.jpg)">
									
							</div>
			<div class="grilla"></div>
	</div>
<!-- //banner -->
<h1>Ilustración</h1>
<!-- portfolio -->
	<div id="portfolio" class="portfolio">
		<div class="container">
			
			<p class="vel">Trabajos de ilustración realizados de para diferentes aplicaciones: portadas de díscos, gráfica publicitaria o ilustración literaria</p>
			<div class="sap_tabs">			
				<div id="horizontalTab">
					<div class="resp-tabs-container">
														
							<div class="main">
								<?php 
									$myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );
									$unixtime = strtotime($myDate) ;
									
									$params = array(
											'api_key'		 => '7611b0065f0893dc4ecb96fe41439c55',
											'method'		 => 'flickr.photos.search',
											'format'		 => 'rest',
											'user_id'		 => '49067600@N03',
											'tags'			 => 'historieta_maxi_falcone',
											'extras'    	 => 'url_o,url_l,tags',
											'total'			 => '9'
										);

										$encoded_params = array();

										foreach ($params as $k => $v){

											$encoded_params[] = urlencode($k).'='.urlencode($v);
										}
									$url = "https://api.flickr.com/services/rest/?".implode('&', $encoded_params);
									$content = file_get_contents($url);

									$x = new SimpleXmlElement($content);
									foreach($x->photos->photo as $entry) { 
											$title = $entry["title"];
											?>
										
											<div class="view effect">
												<div class="img-top">
													<a href="<?php echo $entry['url_l'] ;?>" rel="<?php echo $title ?>" class="b-link-stripe b-animate-go  thickbox">
														<img src="<?php echo $entry['url_l'] ;?>" class="img-responsive" alt="" />
														<div class="mask"></div>
														<div class="content">
															<span class="info" title="Full Image"> </span>
														</div>
													</a>
												</div>
								</div>

								<?}
								?>		
							</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>
<!-- //portfolio -->
<?php
	$dir = "../images/"; 
	include('../footer.php');
	?>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
