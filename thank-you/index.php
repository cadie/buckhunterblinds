<?php
	$root_adjust="../";
	$page_title="High-Caliber Hunting Blinds";
	$page_description="Buck Hunter Blinds are the hunter’s choice blinds, constructed with military-grade aluminum and extreme insulation, yet are lightweight and portable for quick assembly. Made in the USA.";
	$page_title_id="thank-you";
	$page_keywords="Deer blinds, hunting blinds, deer hunting blinds, deer ground blinds, buck hunter blinds";
  $alt_tag="buck-hunter-blinds";
	$page_logo="assets/imgs/buckhunterblinds-logo.svg";
	include __DIR__."../../includes/header.php";
?>

<!-- hero -->
<div class="hero" id="hero">
	<div class="container hero-content text-right">
		<div class="col-md-7 pull-right nopad">
			<h1>Thank You!</h1>
			<h2>We will be in contact with you soon to discuss your needs.</h2>
			<a class="btn btn-default" href="../" role="button">Back Home</a>
		</div>
	</div>
</div><!-- /hero -->




	</div><!-- /content -->


	<?php
		include __DIR__."../../includes/footer.php";
	?>

	<script>
		$(document).ready(function () {
	    /*Set height of sections to window height*/
	    $("div.hero").each(function () {
	        var $this = $(this);
	        $this.css({'min-height': ($(window).height()) + 'px'});

	        /*Recalculate on window resize*/
	        $(window).resize(function () {
	            $this.css({'min-height': ($(window).height()) + 'px'});
	        });
	    });
		});
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
