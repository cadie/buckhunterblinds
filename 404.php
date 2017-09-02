<?php
	$root_adjust="./";
	$page_title="404 - Error";
	$page_description="";
	$page_title_id="fourohfour";
	$page_keywords="";
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


<!-- hero -->
<div class="hero" id="hero">
	<div class="container hero-content text-center">
		<div class="col-md-6 col-md-offset-3">
			<img class="img-responsive" src="assets/imgs/404-bhb.png" alt="404 - Page Not Found">
			<p>The page you're looking for cannot be found.</p>
			<a class="btn btn-default" href="index.php">Back Home</a>
		</div>
	</div>
</div><!-- /hero -->



	<?php
		include __DIR__."/includes/footer.php";
	?>

	<script>

		// Change Text on Hover - Exterior Size
		$(document).ready(function(e) {
				$('#hover-exterior').hover(function(){
				$main_text=$(this).text();
				$(this).text("5ft x 5ft x 7ft 3in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end exterior size hover
		// Change Text on Hover - interior size
		$(document).ready(function(e) {
				$('#hover-interior').hover(function(){
				$main_text=$(this).text();
				$(this).text("4ft 4in x 4ft 4in x 6ft 2in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end interior size hover
		// Change Text on Hover - footprint
		$(document).ready(function(e) {
				$('#hover-footprint').hover(function(){
				$main_text=$(this).text();
				$(this).text("5ft 2in x 5ft 2in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end footprint hover
		// Change Text on Hover - side windows
		$(document).ready(function(e) {
				$('#hover-sidewindows').hover(function(){
				$main_text=$(this).text();
				$(this).text("1ft 2in x 3ft 7in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end side windows hover
		// Change Text on Hover - door windows
		$(document).ready(function(e) {
				$('#hover-doorwindows').hover(function(){
				$main_text=$(this).text();
				$(this).text("1ft 2in x 1ft 2in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end door windows hover
		// Change Text on Hover - door
		$(document).ready(function(e) {
				$('#hover-door').hover(function(){
				$main_text=$(this).text();
				$(this).text("2ft x 5ft 5in");
			},function(){
				$(this).text($main_text);
				});
		});
		//end door hover
		$(document).ready(function(){
		  autoPlayYouTubeModal();
		});
		//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal(){
  var trigger = $("body").find('[data-toggle="modal"]');
  trigger.click(function() {
    var theModal = $(this).data( "target" ),
    videoSRC = $(this).attr( "data-theVideo" ),
    videoSRCauto = videoSRC+"?autoplay=1" ;
    $(theModal+' iframe').attr('src', videoSRCauto);
    $(theModal+' button.close').click(function () {
        $(theModal+' iframe').attr('src', videoSRC);
    });
  });
}
</script>
<script type="text/javascript">
	$('.i-accordion').on('show.bs.collapse', function(n){
	$(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-chevron-down fa-chevron-up');
	});
	$('.i-accordion').on('hide.bs.collapse', function(n){
	$(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-chevron-up fa-chevron-down');
	});

	/* P */
	$('.accordion-2a, .accordion-2b, .accordion-3').on('show.bs.collapse', function(n){
	$(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-minus fa-plus');
	});
	$('.accordion-2a, .accordion-2b, .accordion-3').on('hide.bs.collapse', function(n){
	$(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-plus fa-minus');
});
</script>
<script>
	$(document).ready(function(){
	$("#wallPanels").hover(function(){
				$('#boxOne').css("display", "block");
				$('#boxTwo').css("display", "none");
				$('#boxThree').css("display", "none");
				$('#boxFour').css("display", "none");
				$('#boxFive').css("display", "none");
				$('#boxSix').css("display", "none");
				$('#boxSeven').css("display", "none");
				$('#boxEight').css("display", "none");
		});
		$("#sealedPerimeter").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "block");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "none");
		});
		$("#temperedGlassWindows").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "block");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "none");
		});
		$("#rainProofRoof").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "block");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "none");
		});
		$("#multifunctionCarpeting").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "block");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "none");
		});
		$("#protectedExterior").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "block");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "none");
		});
		$("#concealedInterior").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "block");
			$('#boxEight').css("display", "none");
		});
		$("#keyedLockingDoor").hover(function(){
			$('#boxOne').css("display", "none");
			$('#boxTwo').css("display", "none");
			$('#boxThree').css("display", "none");
			$('#boxFour').css("display", "none");
			$('#boxFive').css("display", "none");
			$('#boxSix').css("display", "none");
			$('#boxSeven').css("display", "none");
			$('#boxEight').css("display", "block");
		});
	});


</script>
