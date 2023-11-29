<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include ('layouts/head.php'); ?>
</head>
<body>
<!-- Pre loader -->
<div id="pre-loader">
	<?php include ('layouts/preloader.php'); ?>
</div>
<!-- end pre-loader -->

<!-- Header -->
<?php include ('layouts/header.php'); ?>
<!-- end header-->

<div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<!--<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>--><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3>Contact</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->			
	</section><!--page-banner-FIN-->


	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-box">
						<div class="section-tagline">
							Nous contacter
						</div><!-- section-tagline -->
						<h1 class="section-title">Nous sommes toujours là pour vous aider</h1>
							<p>Pour nous joindre ,veuillez remplir ce formulaire ou nous contacter par e-mail à contact@jaxaayparcelles.sn </p>
					</div><!-- contact-box -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-8">
					<form  action="assets/inc/sendemail.php" class="contact-form  contact-form-validated" method="post" >
						<div class="row row-gutter-10">
							<div class="col-12 col-lg-6">
								<input type="text" id="name"  class="input-text" placeholder="Ton prénom" name="name" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="email" id="email" class="input-text" placeholder="Email" name="email" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="phone" class="input-text" placeholder="Numéro de téléphone" name="phone" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="subject" class="input-text" placeholder="Object" name="subject" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-12">
								<textarea name="message" placeholder="Écrire un message" class="input-text" aria-required="true"></textarea>
							</div><!-- col-12 col-lg-12 -->
							<div class="col-12 col-lg-12">
								<button class="btn btn-primary">Envoyer le Message</button>
							</div><!-- col-12 col-lg-12 -->
						</div><!-- row -->
					</form><!-- contact-form -->
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
	<div class="contact-gmap-section">
		<div class="container">
			<div class="responsive-map">
			
					<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d246930.99942844393!2d-17.531657908803233!3d14.752297578720231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.7342962!2d-17.4507375!4m5!1s0xec1a15c8874951b%3A0xdc8ed7f100f06b5d!2smairie%20jaxaay-parcelle!3m2!1d14.7704486!2d-17.2795305!5e0!3m2!1sen!2ssn!4v1701184715553!5m2!1sen!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- responsive-map -->
		</div><!-- container -->
	</div><!-- contact-gmap-section -->
	<!--<div class="cta-four-section">
		<div class="container">
			<div class="cta-four-inner">
				<div class="row row-gutter-y-20 ">
				--><!--<div class="col-12 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-help"></i>
							<div class="cta-four-content-box">
								<span>Have Question?</span>
								<p>Free +92 (8800) 6802</p>
							</div>--><!-- cta-four-content-box -->
						<!--</div>--><!-- cta-four-content -->
					<!--</div>--><!-- col-12 col-lg-6 col-xl-3 -->
					<!--<div class="col-12 col-md-6 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-envelope-3"></i>
							<div class="cta-four-content-box">
								<span>Write Email</span>
								<p>needhelp@company.com</p>
							</div>--><!-- cta-four-content-box -->
						<!--</div>--><!-- cta-four-content -->
					<!--</div>--><!-- col-12 col-md-6 col-lg-6 col-xl-3 -->
					<!--<div class="col-12 col-lg-6 col-xl-4">
						<div class="cta-four-content">
							<i class="flaticon-location-pin"></i>
							<div class="cta-four-content-box">
								<span>Visit Office</span>
								<p>30 Broklyn Golden Street. USA</p>
							</div>--><!-- cta-four-content-box -->
						<!--</div>--><!-- cta-four-content -->
					<!--</div>--><!-- col-12 col-lg-6 col-xl-4 -->
					<!--<div class="col-12 col-lg-6 col-xl-2">
						<div class="cta-four-content">
							<div class="cta-four-widget-socials">
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#"><i class="fa-brands fa-instagram"></i></a>
							</div>--><!-- cta-four-widget-socials -->
						<!--</div>--><!-- cta-four-content -->
					 <!-- </div>col-12 col-lg-6 col-xl-2 -->
				<!-- </div>row -->
			<!-- </div>cta-four-inner -->
		<!-- </div>container -->
	<!-- </div>cta-four-section -->
<!-- </div>page-wrapper	 -->

<!--footerpc-->
<section class="footer">
	<?php include ('layouts/footer.php'); ?>
	</section>
		<!--footermobile-->
		<!-- NAVIGATION MOBILE -->
<div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div><!-- mobile-nav-overlay -->
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a><!-- mobile-nav-close -->
		<div class="logo-box">
			<a href="index.html"><img src="assets/image/logo.png" width="80" height="60" alt="26"></a>
		</div><!-- logo-box -->
		<div class="mobile-nav-container"></div><!-- mobile-nav-container -->
		<ul class="mobile-nav-contact list-unstyled">
			<li>
				<i class="fa-solid fa-phone"></i>
				<a href="tel:+22133823">33 823</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-envelope"></i>
				<a href="mailto:contact@jaxaayparcelles.sn">contact@jaxaayparcelles.sn</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-map-marker-alt"></i>
				Jaxaay-Parcelles <br> Keur Massar, Sénégal
			</li><!-- li -->
		</ul><!-- mobile-nav-contact -->
		<ul class="mobile-nav-social list-unstyled">
			<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
		</ul><!-- mobile-nav-social -->
	</div><!-- mobile-nav-content -->
</div>
<!-- end nav mobile -->
<!-- POPUP de rechercher -->
<div class="search-popup">
	<div class="search-popup-overlay search-toggler"></div><!-- search-popup-overlay -->
	<div class="search-popup-content">
		<form action="#">
			<label for="search" class="sr-only">search here</label><!-- sr-only -->
			<input type="text" id="search" placeholder="Search Here...">
			<button type="submit" aria-label="search submit" class="search-btn">
				<span><i class="flaticon-search-interface-symbol"></i></span>
			</button><!-- search-btn -->
		</form><!-- form -->
	</div><!-- search-popup-content -->
</div>
<!-- search-popup -->
<!-- Pour aller en haut de page... -->
<a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>

<!-- plugins js -->
<?php include ('layouts/plugins.php'); ?>
</body>
</html>