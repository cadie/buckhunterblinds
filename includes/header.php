<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEARCH ENGINES / METADATA -->
      <title><?php echo $page_title ?> | Buck Hunter Blinds</title>
			<link rel="shortcut icon" href="<?php echo $root_adjust?>assets/imgs/favicon.png" type="image/x-icon">
      <link rel="icon" type="image/x-icon" href="<?php echo $root_adjust?>assets/imgs/favicon.png" />
      <meta name="description" content="<?php echo $page_description ?>">
      <meta name="keywords" content="<?php echo $page_keywords ?>">
      <meta name="author" content="Dream Factory">

			<!-- Schema.org markup for Google+ -->
			<meta itemprop="name" content="<?php echo $page_title ?> | Buck Hunter Blinds">
			<meta itemprop="description" content="<?php echo $page_description ?>">
			<meta itemprop="image" content="http://buckhunterblinds.com/assets/imgs/buckhunterblinds-blind-buy-now.png">

			<!-- Twitter Card data -->
			<meta name="twitter:card" content="http://buckhunterblinds.com/assets/imgs/buckhunterblinds-blind-buy-now.png">
			<meta name="twitter:site" content="@BuckHunterBlind">
			<meta name="twitter:title" content="<?php echo $page_title ?> | Buck Hunter Blinds">
			<meta name="twitter:description" content="<?php echo $page_description ?>">
			<meta name="twitter:creator" content="@BuckHunterBlind">
			<!-- Twitter summary card with large image must be at least 280x150px -->
			<meta name="twitter:image:src" content="http://buckhunterblinds.com/assets/imgs/buckhunterblinds-blind-buy-now.png">

			<!-- Open Graph data -->
			<meta property="og:title" content="<?php echo $page_title ?> | Buck Hunter Blind" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="http://buckhunterblinds.com/" />
			<meta property="og:image" content="http://buckhunterblinds.com/assets/imgs/buckhunterblinds-blind-buy-now.png" />
			<meta property="og:description" content="<?php echo $page_description ?>" />
			<meta property="og:video" content="https://www.youtube.com/watch?v=-1N9O3WB0yo" />
			<meta property="og:site_name" content="Buck Hunter Blinds" />

    <!-- STYLING -->
      <!-- Normalize CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Archivo+Narrow:400,400i,700" rel="stylesheet">
      <!-- User styles here -->
			<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
			<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>
      <link rel="stylesheet" href="<?php echo $root_adjust?>assets/css/styles.css">

		<!-- MICRODATA SCHEMA -->
			<script type="application/ld+json">
			{
			  "@context": "http://schema.org/",
			  "@type": "Product",
			  "brand": {
			    "@type": "Brand",
			    "name": "American Douglas Metals"
			  },
			  "name": "Buck Hunter Blinds",
			  "image": "http://buckhunterblinds.com/assets/imgs/buckhunterblinds-blind-buy-now.png",
			  "description": "Buck Hunter Blinds are the hunter’s choice blinds, constructed with military-grade aluminum and extreme insulation, yet are lightweight and portable for quick assembly. Made in the USA.",
			  "offers": {
			    "@type": "Offer",
			    "priceCurrency": "USD",
			    "price": "2995.00",
			    "itemCondition": "new"
			  }
			}
			</script>


			<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F71853758545974" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F71853758545974" title="oEmbed Form">

	</head>

	<body id="<?php echo $page_title_id?>" class="fadeIn">

		<!-- Nav -->
		<nav class="navbar">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo $root_adjust?>"><img src="<?php echo $root_adjust?><?php echo $page_logo?>" alt="<?php echo $alt_tag?>" class=""/></a>
				<button type="button" class="navbar-toggle collapsed" aria-expanded="false" onclick="openNav()">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
			</div>



			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden-sm hidden-xs"><a class="made-in-usa"><img src="<?php echo $root_adjust ?>assets/imgs/flag-usa.png"> &nbsp;Proudly Made in the USA</a></li>
				<li class="features-nav-link"><a href="#features">Features</a></li>
				<li class="specs-nav-link"><a href="#specs">Specs</a></li>
				<li class="testimonials-nav-link"><a href="#testimonials">Testimonials</a></li>
				<li class="contact-nav-link"><a href="#contact">Contact</a></li>
				<li class="buy-nav-link"><a href="#buy-now">Buy Now</a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		<!--END Nav-->


		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#features" onclick="closeNav()">Features</a>
			<a href="#specs" onclick="closeNav()">Specs</a>
			<a href="#testimonials" onclick="closeNav()">Testimonials</a>
			<a href="#contact" onclick="closeNav()">Contact</a>
			<a href="#buy-now" class="buynow-link" onclick="closeNav()">Buy Now</a>
		</div>
