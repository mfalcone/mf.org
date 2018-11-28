<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MaxiFalcone.org | Humor gráfico - Ilustración - Historieta</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Perspective Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<meta property="og:url"                content="http://maxifalcone.org" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="MaxiFalcone.org" />
<meta property="fb:app_id" 			   content="458367747657221" />
<meta property="og:description"        content="Humor gráfico - Ilustración - Historieta" />
<meta property="og:image"              content="http://maxifalcone.org/images/vcard.jpg" />

<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!--FlexSlider-->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			slideshowSpeed:7000,
			animation:'slide',
			controlNav:true,
			directionNav:true,
			pauseOnHover:true,
			direction:'horizontal',
			animationSpeed:2000,
			prevText:"&lt; PREV",
			nextText:"NEXT &gt;",
			easing:"linear",
			slideshow:true,
			itemWidth:10000,
			minItems:1,
			itemMargin:0,
			 after: function(slider){
			 		$("ul.slides li:eq("+slider.currentSlide+") .content").delay(500).fadeIn(1000)
			 },
			 before:function(slider){
			 	if(slider.currentSlide > 0){
			 		anterior = slider.currentSlide-1;
			 	}else{
			 		anterior = slider.currentSlide+2;
			 	}
			 	$("ul.slides li:eq("+anterior+") .content").hide();
			 },
			slideshowSpeed: 5000,
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });

		  $("ul.slides li:eq(0) .content").delay(500).fadeIn(1000)
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			//$('.img-top a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {

		
		$(".scroll").click(function(event){		
			event.preventDefault();
			var href = $.attr(this, 'href');
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000,function(){
				 window.location.hash = href;
			});
		});
	});

	$(window).load(function(){
		var ancloc = window.location.hash;
		if(ancloc){
			$('html,body').animate({scrollTop:$(ancloc).offset().top},1000);
		}
	})
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
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
						<li class="act"><a href="/">Inicio</a></li>
						<li class="hvr-bubble-bottom"><a href="#quiensoy" class="scroll">Quien soy</a></li>
						<li class="hvr-bubble-bottom"><a href="#portfolio" class="scroll">Portfolio</a></li>
						<li class="hvr-bubble-bottom"><a href="prensa">Prensa</a></li>
						<li class="hvr-bubble-bottom"><a href="#contact" class="scroll">Contacto</a></li>
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
	<div class="banner">
		
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="inner-banner" id="humor-grafico-slide" style="">
									<div class="content">
										Humor Gráfico
									</div>
							</div>
						</li>
						<li>
							<div class="inner-banner" id="historieta-slide">
									<div class="content">
										Historieta
									</div>
							</div>
						</li>
						<li>
							<div class="inner-banner" id="ilustracion-slide">
									<div class="content">
										Ilustración
									</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<div class="grilla"></div>
	</div>
<!-- //banner -->
<!-- features -->
	<div id="quiensoy" class="features">
		<div class="container">
			<h3>Quien Soy</h3>
			<p class="vel"></p>
			<div class="services-grids">
				<div class="col-md-12 services-grid-left">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a feat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Me gusta dibujar</h4>
						<p>Y el humor, la ilustración y la historieta son la excusa para poder hacerlo.</p>
						<p>Mi nombre es Maximiliano Falcone, soy de Rosario, Santa Fe, Argentina.</p>
						<p>Llevo varios años publicando dibujos en periódicos, revistas, y webs de mi ciudad y del resto del país. En esta web se podrá encontrar algo del trabajo que hice en los últimos tiempos.</p>
						<p>Trabajo en lápiz, tinta, papel, digital y Café.</p>
						<p>Ojalá te gusten mis trabajos tanto como a mi me gustó hacerlos.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //features -->
<!-- portfolio -->
	<div id="portfolio" class="portfolio">
		<div class="container">
			<h3>Galería de trabajos</h3>
			<p class="vel">Muestra de chistes, historietas e ilustración.</p>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-contents">								
							<div class="main">
								<div class="view effect">
									<div class="img-top">
										<a href="adalberto" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_adalberto.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Adalberto LetradeMolde</h4>
											</div>
										</a>
									</div>
								</div>
								<div class="view effect">
									<div class="img-top">
										<a href="alegria" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_alegria.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Alegría</h4>
											</div>
										</a>
									</div>
								</div>
								<div class="view effect">
									<div class="img-top">
										<a href="esquizomedia" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_esquizomedia.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Esquizomedia</h4>
											</div>
										</a>
									</div>
								</div>	
								<div class="view effect">
									<div class="img-top">
										<a href="alguien-lo-tenia-que-decir" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_alguien.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Alguien lo tenía que decir...</h4>
											</div>
										</a>
									</div>
								</div>
								<div class="view effect">
									<div class="img-top">
										<a href="chistes-varios" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_sueltos.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Chistes varios</h4>
											</div>
										</a>
									</div>
								</div>
								<div class="view effect">
									<div class="img-top">
										<a href="ilustracion" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="images/init_ilustracion.jpg" class="img-responsive" alt="" />
											<div class="mask"></div>
											<div class="content">
												<span class="info" title="Full Image"> </span>
												<h4>Ilustración</h4>
											</div>
										</a>
									</div>
								</div>				
								<div class="clearfix"> </div>
							</div>																					 	        					 
						</div>
						
								
					</div>
				</div>
				</div>
		</div>
				
	</div>
<!-- //portfolio -->


<?php 
	$dir = "images/";
	include('footer.php');
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
								
			//$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
