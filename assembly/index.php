<?php
	$root_adjust="../";
	$page_title="Assembly Instructions | Buck Hunter Blinds";
	$page_description="A step-by-step guided video on how to assemble a Buck Hunter Blind with only 5 minutes and 8 screws.";
	$page_title_id="assembly-instructions";
	$page_keywords="Buck Hunter Blinds, deer hunting blind, hunting blind assembly, hunting blind instructions";
	$page_logo="assets/imgs/buckhunterblinds-logo-black.svg";
?>

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



	</head>

	<body id="<?php echo $page_title_id?>" class="fadeIn">

		<!-- Nav -->
		<nav class="navbar">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo $root_adjust ?>"><img src="<?php echo $root_adjust?><?php echo $page_logo?>" alt="<?php echo $alt_tag?>" class=""/></a>
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
				<li class="features-nav-link"><a href="<?php echo $root_adjust ?>#features">Features</a></li>
				<li class="specs-nav-link"><a href="<?php echo $root_adjust ?>#specs">Specs</a></li>
				<li class="testimonials-nav-link"><a href="<?php echo $root_adjust ?>#testimonials">Testimonials</a></li>
				<li class="contact-nav-link"><a href="<?php echo $root_adjust ?>#contact">Contact</a></li>
				<li class="buy-nav-link"><a href="<?php echo $root_adjust ?>#buy-now">Buy Now</a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		<!--END Nav-->

		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="<?php echo $root_adjust ?>#features" onclick="closeNav()">Features</a>
			<a href="<?php echo $root_adjust ?>#specs" onclick="closeNav()">Specs</a>
			<a href="<?php echo $root_adjust ?>#testimonials" onclick="closeNav()">Testimonials</a>
			<a href="<?php echo $root_adjust ?>#contact" onclick="closeNav()">Contact</a>
			<a href="<?php echo $root_adjust ?>#buy-now" class="buynow-link" onclick="closeNav()">Buy Now</a>
		</div>


<!-- CONTENT -->
<div class="hero" id="hero">
	<div class="container hero-content text-center">
		<div class="col-md-8 col-md-offset-2">
			<h1>Assembly Instructions</h1>
			<h2>Build Less. Hunt More.</h2>

			<p>All you need is 8 screws and 5 minutes. Watch our step-by-step assembly video:</p>
			<iframe width="100%" height="415" src="https://www.youtube.com/embed/MCWMBQpD5Tw" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div><!-- /CONTENT -->

<div id="lost">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h3>Lost Your Assembly Instructions Sheet?</h3>
			<p>Download it now:</p>
			<div class="download-sheet-click">
				<img src="<?php echo $root_adjust ?>assets/imgs/assembly-instruction-sheet.jpg" alt="" class="img-responsive">
				<a class="btn btn-default" href="<?php echo $root_adjust ?>downloads/Assembly-Instruction-Sheet.pdf" target="_blank">Download Now <i class="fa fa-download" aria-hidden="true"></i></a>
			</div>

		</div>
	</div>
</div>

<div id="callout">
	<div class="container">
		<div class="col-md-12 text-center">
			<p>Still having trouble? Give us a call at <strong>800-432-3423</strong></p>
		</div>
	</div>
</div>



	<?php
		include __DIR__."./../includes/footer.php";
	?>
