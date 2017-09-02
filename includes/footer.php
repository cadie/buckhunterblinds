<footer class="row">
  <div class="container">
    <p class="col-lg-12 text-center social-media">
      <a href="https://www.facebook.com/BuckHunterBlinds/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://www.youtube.com/channel/UC38KsIs4bZWcQbm3GwZWjsQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/buckhunterblinds/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://twitter.com/BuckHunterBlind" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://plus.google.com/b/104308847891676749217/104308847891676749217?pageId=104308847891676749217&hl=en" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/company-beta/16225532" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </p>
    <p class="col-lg-12 text-center">
      &copy; Buck Hunter Blinds <?php echo date("Y"); ?> | Check out our <a href="<?php echo $root_adjust ?>assembly/">Assembly Instructions</a>. | View our <a href="https://americandouglasmetals.com/refunds-returns/" target="_blank">Refunds &amp; Returns Policy</a>.<br> We value your <a href="https://americandouglasmetals.com/privacy-policy/" target="_blank">privacy</a>. | Website by <a href="http://www.dreamfactoryagency.com" target="_blank">Dream Factory</a>.
    </p>
  </div>
</footer>

<!-- jQuery -->
<script
src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<!-- Hide Form Honeypot Field -->
<script type="text/javascript">
  $(document).ready(function(){
      $(".req").hide();
  });
</script>
<!-- Smooth Scrolling -->
<script type="text/javascript">
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
$(document).ready(function(){
  $('.testimonials-slider').slick({
    autoplay: false,
    dots: true
  });
});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-227611-6', 'auto');
  ga('send', 'pageview');

</script>
<!-- Hotjar Tracking Code for http://buckhunterblinds.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:556282,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>
