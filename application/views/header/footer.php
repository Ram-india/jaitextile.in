 
				
 <!-- Footer --> 
 <footer class="page-section bg-dark footer pb-9 pt-20">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				
				<div class="footer-content">
					<a href="#" >
			<img src="<?php echo base_url();?>assets/images/logo-dark.png"  alt="Company logo" class="company-logo-footer" />	</a> 
					 
				</div>	
			</div>	
			<div class="col-sm-4">	
			<h3>ADDRESS</h3>
				<div class="footer-content">
					<div class="separator-2"></div>
					<ul class="list-icons" >
					<li><a>3/3, Perumal Malai Road,<br>	
					Rayapalayam Pudur,<br>	
					Chithode-638102,<br>	
					Erode(District),<br>
					Tamil Nadu (State).<br>
					India.</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">	
				<h3>CONTACT</h3>
				<div class="footer-content">
					<ul>	
						<li>
						<a href="tel:0424-2534256"><i class="fa fa-phone pr-10 text-default"></i> 0424-2534256, 255256</a>
						</li>
						<li>
						<a href="mailto:dyeing@jaitextile.in"><i class="fa fa-envelope-o pr-10"></i>dyeing@jaitextile.in</a>
						</li>
						<li>
						<a href="mailto:fabric@jaitextile.in"><i class="fa fa-envelope-o pr-10"></i>fabric@jaitextile.in</a>
						</li>
					</ul>
				</div>	
			</div>	
		</div> 
 <!-- Footer Logo --> 
 
 <!-- End Footer Logo -->  
 <!-- Social Links -->
 <div class="footer-text">
 <!-- Copyright -->  

 <!-- End Copyright --> 
 <div class="footer-made">
 </div>   
 </div> 
 <!-- End Footer Text -->
 </div>    <!-- Top Link --> 
 <div class="local-scroll">
 <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a> 
 </div> <!-- End Top Link -->
 </footer>
 <!-- End Foter --> 
 </div>   <!-- End Page Wrap --> 
 
 
 <!-- JS -->

 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.4.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.localScroll.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.viewport.mini.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.fitvids.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/masonry.pkgd.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/morphext.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.lazyload.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/all.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/contact-form.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.min.js"></script> <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
 <script type="text/javascript">


function weaving() {
  document.getElementById("weavingtab").style.backgroundImage = "url('https://jaitextiles.bloodfinders.in/3/assets/images/jai/jai-weaving-tab.jpg')";
 
}
function yarnDyeingTab() {
   document.getElementById("weavingtab").style.backgroundImage = "url('https://jaitextiles.bloodfinders.in/3/assets/images/jai/jai-textile-yarn-deying-and-weaving.jpg')";
 
}
 
 
 $(document).ready(function() {
 
  var owl = $("#yarnDyeing");
 
  owl.owlCarousel({
      items : 4, //10 items above 1200px browser width
      itemsDesktop : [600,5], //5 items between 1200px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
 
   var owl = $("#weaving");
 
  owl.owlCarousel({
      items : 4, //10 items above 1200px browser width
      itemsDesktop : [600,5], //5 items between 1200px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1200); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
 
});


function openModal() {
  document.getElementById("yarnDyeing").style.display = "block";
}

function closeModal() {
  document.getElementById("yarnDyeing").style.display = "none";
}

function openModal() {
  document.getElementById("weaving").style.display = "block";
}

function closeModal() {
  document.getElementById("weaving").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

 </script>
 
 </body>
 </html>