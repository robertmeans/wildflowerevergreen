<!doctype html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
                
  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483

  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Wildflower Cafe - Evergreen, Colorado</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Courgette|Lato' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="aos.css" />
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcS8gagJkuoY6gB3utE1iyZnWk4JG5Suw&callback=initMap"></script>
	<script src="js/google-map.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
	    function recaptchaCallback() {
	        $('#confirm').addClass('display');
	        $('#send').removeAttr('disabled');
	        $('#send').removeClass('display');
	    };
    </script>
    
</head>
<body>
<?php // include_once("_includes/analyticstracking.php") ?>

<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<nav>
	<ul>
		<li><a href="#menu" class="main-nav no-active-nav">Menu</a></li>
		<li><a href="#location" class="main-nav">Location</a></li>
	</ul>
	<div class="phone large-gone">
		<a class="phone-nav" tabIndex="-1" href="tel:(303)%20674-3323">(303) 674-3323</a>
	</div>
</nav>

<section id="intro">
	<div class="uc">
		<img src="_images/under-construction.png">
		<div class="uc-dark">
			<h2>Wildflower Cafe</h2>
			<p>Monday - Saturday 7:30 AM - 2:00 PM</p>
			<p>Sunday 8:00 AM - 2:00 PM</p>
			<p>Sushi Thursday 5:30 PM - 9:00 PM</p>
			<p>&nbsp;</p>
			<h3>New Website Coming Soon!</h3>
			<p>- check us out on social media -</p>
				<div class="social-links">
					<a class="reset" href="https://www.facebook.com/thewildflowercafe/" target="_blank"><img src="_images/facebook.png" alt="Follow us on Facebook"></a><a class="reset" href="https://www.instagram.com/thewildflowerevergreen/" target="_blank"><img src="_images/instagram.png" alt="Follow us on Instagram"></a>
				</div>
		</div>
	</div>
</section><!-- #intro -->

<article id="menu">
	<h2 data-aos="fade-in" data-aos-offset="425">Click for larger image</h2><br />
<div class="menu-wrap cf">

	<a class="reset" href="_images/menu-large-01.jpg" target="_blank"><img data-aos="fade-right" data-aos-offset="375" src="_images/menu-thumbnail-01.jpg" alt="Menu front"></a>

	<a class="reset" href="_images/menu-large-02.jpg" target="_blank"><img data-aos="fade-left" data-aos-offset="375" src="_images/menu-thumbnail-02.jpg" alt="menu back"></a>

</div><!-- .menu-wrap -->

</article><!-- #menu -->

<section id="location" class="cf">

	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>

	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://www.google.com/maps/place/28035+CO-74,+Evergreen,+CO+80439/@39.6333601,-105.3204867,17z/data=!3m1!4b1!4m5!3m4!1s0x876b9e0b5213097d:0xc6607881b3128d21!8m2!3d39.6333601!4d-105.318298" target="_blank">28035 Highway 74<span class="sm-gone">, </span><br class="lg-gone">Evergreen, CO 80439</a></p>
		<span class="sm-gone"><p><i class="fa fa-phone-square"></i><a class="loc" href="tel:(303)%20674-3323">(303) 674-3323</a></p></span>
	</div>

</section><!-- #location -->

<section id="contact" class="cf">
	
	<div id="contact-form">
		<div class="left-side">
			<h2>Contact</h2>
			<p>28035 Highway 74</p>
			<p>Evergreen, CO 80439</p>
			<p>&nbsp;</p>
			<p>Phone: (303) 674-3323</p>
		</div>
		<div class="right-side">
			<?php require('_includes/contact-form-processing.php'); ?>  
	    </div>
	</div>

</section><!-- #contact -->

<footer class="cf">

	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>	
	<div class="copyright cf">
		<p><?= ewd_copyright(2018); ?> Wildflower Cafe | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>	

</footer>

<script src="js/aos.js"></script>
<script> 
	AOS.init({
		duration: 1200,
		easing: 'ease-in-out-back'
	}); 
</script>

<script src="js/scripts.js?<?= time(); ?>"></script>
<script src="js/flexslider.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>