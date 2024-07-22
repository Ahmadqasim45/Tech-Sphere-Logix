<?php 
ob_start(); // Start output buffering
session_start(); // Start session  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tech Sphere Logix</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link
		href="https://fonts.googleapis.com/css2?family=Arizonia&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.html">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/TSL Png.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
		integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- font awesome cdn -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- lotifiles -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

	<body>
	<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><img id="tsl-logo" class="img-fluid" src="images/short2.png"
					alt=""></a>
			<button style="box-shadow: none;" id="btn-bar" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
				<i id="icon-nav" class="fa-solid fa-bars-staggered"></i>
			</button>
			<div class="offcanvas offcanvas-end d-inline d-md-none text-light" id="demo">
				<button type="button" class="btn-close btn-light" data-bs-dismiss="offcanvas"></button>
				<div class="navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link"><i class="fa-solid fa-house me-2"></i>Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link"><i class="fa-solid fa-circle-info me-2"></i>About</a></li>
						<li class="nav-item"><a href="services.php" class="nav-link"><i class="fa-solid fa-gears me-2"></i>Services</a></li>
						<li class="nav-item"><a href="projects.php" class="nav-link"><i class="fa-solid fa-hand-holding-hand me-2"></i>Our Projects</a></li>
						<li class="nav-item"><a href="portfolio.php" class="nav-link"><i class="fa-solid fa-briefcase me-2"></i>Portfolio</a></li>
	
						<li class="nav-item"><a href="contact.php" class="nav-link"><i class="fa-solid fa-address-book me-2"></i>Contact</a></li>
	
					</ul>
				</div>
				
			  </div>
			<div class="collapse navbar-collapse d-none d-md-inline " id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link"><i class="fa-solid fa-house me-2"></i>Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link"><i class="fa-solid fa-circle-info me-2"></i>About</a></li>
					<li class="nav-item"><a href="services.php" class="nav-link"><i class="fa-solid fa-gears me-2"></i>Services</a></li>
					<li class="nav-item"><a href="projects.php" class="nav-link"><i class="fa-solid fa-hand-holding-hand me-2"></i>Our Projects</a></li>
					<li class="nav-item"><a href="portfolio.php" class="nav-link"><i class="fa-solid fa-briefcase me-2"></i>Portfolio</a></li>

					<li class="nav-item"><a href="contact.php" class="nav-link"><i class="fa-solid fa-address-book me-2"></i>Contact</a></li>

				</ul>
			</div>
		</div>
	</nav>

		<section class="hero-wrap hero-wrap-2" id="hero-container-other" >
			<div class="overlay"></div>
			<div class="container">
			<div class="row no-gutters slider-text align-items-end" id="heading-hero">
			<div class="col-md-9 ftco-animate pb-5">
			<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a>
				<span class="mr-2"><a href="services.php">Services <i class="fa fa-chevron-right"></i></a></span> <span>Web Development <i class="fa fa-chevron-right"></i></span></p>
			<h1 class="mb-0 bread">Web Services</h1>
			</div>
			</div>
			</div>
			</section>
				
				
	
		<!-- particles section -->
					
					

					<!--  services section-->

						<section class="ftco-section bg-light">
						<div class="container">
							<span class="portfolio-category text-center" >Web Development</span>
					<h2 class="mb-3 heading-title text-center" id="services-h">Web Services</h2>
						<div class="row d-flex" style="margin-top: 20px;">
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/Content-Management-System.jpg');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">CMS Management</h3>
						<p>We offer top-notch CMS management services to streamline your content updates, enhance user experience, and boost your digital presence.</p>
						
						</div>
						</div>
						</div>
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/Web-development-designing-Anvar-Freelancer-1.png');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">Web Designing And Development</h3>
						<p>Transform your online presence with our exceptional web design and development services, creating visually stunning, user-friendly.</p>
						
						</div>
						</div>
						</div>
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/E-Commerce-Development-Bloom-IT.jpg');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">E-Commerce Development</h3>
						<p>Empower your business with our eCommerce development, creating secure, scalable, and sales-driven online stores for success.</p>
						
						</div>
						</div>
						</div>
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/opensource.jpg');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">Open Source Development</h3>
						<p>Transform your business with our open source development services, offering customizable, scalable, and cost-effective solutions for success.</p>
						
						</div>
						</div>
						</div>
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/payment.jpg');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">Payment Gateway</h3>
						<p>Secure and seamless payment gateway services, ensuring smooth transactions and boosting your business with reliable, easy integration.</p>
						
						</div>
						</div>
						</div>
						<div class="col-lg-4 ftco-animate">
						<div class="blog-entry">
						<div href="blog-single.html" class="block-20" style="background-image: url('images/custom-software-development.jpg');">
						</div>
						<div class="text d-block text-center">
						
						<h3 class="heading">Custom Development</h3>
						<p>Custom development services tailored to your needs, providing innovative solutions for your unique business requirements.p>
						
						</div>
						</div>
						</div>
						<!--  -->
						<div class="col-lg-4 ftco-animate">
							<div class="blog-entry">
							<div  class="block-20" style="background-image: url('images/frontend.jpeg');">
							</div>
							<div class="text d-block text-center">
							
							<h3 class="heading">Frontend  Development</h3>
							<p>Transforming concepts into engaging user interfaces with modern frameworks and responsive design for seamless digital experiences on any device.<p>
							
							</div>
							</div>
							</div>
						<!--  -->
								<!--  -->
						<div class="col-lg-4 ftco-animate">
							<div class="blog-entry">
							<div href="blog-single.html" class="block-20" style="background-image: url('images/What-is-back-end-development-2.jpg');">
							</div>
							<div class="text d-block text-center">
							
							<h3 class="heading">Backend Development</h3>
							<p>Building powerful server-side solutions for seamless data management, performance optimization, and scalable application architectures</p>
							
							</div>
							</div>
							</div>
						<!--  -->
								<!--  -->
						<div class="col-lg-4 ftco-animate">
							<div class="blog-entry">
							<div href="blog-single.html" class="block-20" style="background-image: url('images/API-Integration-Blog-header.png');">
							</div>
							<div class="text d-block text-center">
							
							<h3 class="heading">System Integration And APIs</h3>
							<p>Seamlessly integrating systems and APIs to enhance operational efficiency, data flow, and business automation with robust reliability</p>
							
							</div>
							</div>
							</div>
						<!--  -->
						</div>
						
						</div>
						</div>
						</section>


						
					
					  <!-- end services -->
					  <section>
						<div class="container-fluid" style="background-color: #09161c;margin-bottom:100px;padding-bottom:30px;">
						   <div class="row">
							   <div class="col-md-12" data-aos="fade-left">
								       <!-- Contact Form -->
<div class="form-container-custom">
    <h1 class="form-heading-custom">CONNECT <span class="form-heading-span-custom">WITH US</span></h1>
    <p class="form-description-custom">Get a Free Quote Now!</p>
    <?php if (isset($_SESSION['message'])): ?>
        <p class="message-custom"><?php echo $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']); ?> <!-- Clear session message after displaying -->
    <?php endif; ?>
    <form class="contact-form-custom" action="form_handler.php" method="post">
	<input type="hidden" name="current_page" value="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>">

        <input type="text" name="name" class="form-input-custom" placeholder="Enter Your Name" required>
        <input type="email" name="email" class="form-input-custom" placeholder="Enter Your Email" required>
        <input type="text" name="phone" class="form-input-custom" placeholder="Enter Phone Number" required>
        <input type="text" name="city" class="form-input-custom" placeholder="City" required>
        <input type="text" name="business" class="form-input-custom" placeholder="Enter Your Business Name" required>
        <select name="interest" class="form-select-custom" required>
            <option value="">I'm interested in?</option>
            <option value="web development">Web Development</option>
            <option value="app development">App Development</option>
            <option value="software development">Software Development</option>
            <option value="graphics designing">Graphics Designing</option>
            <option value="digital marketing">Digital Marketing</option>
            <option value="ui ux design">UI/UX Design</option>
            <option value="wordpress">WordPress</option>
            <option value="shopify">Shopify</option>
            <option value="webflow">WebFlow</option>
        </select>
        <textarea name="message" id="msg" placeholder="Hello Tech Sphere Logix"></textarea>
        <button type="submit" name="submit" class="form-button-custom">SUBMIT</button>
    </form>
</div>
<!-- End Contact Form -->
						   
						   </div>
					   </div>
				   </div>
				   </div>
						   </div>
						</div>
					   </section>
		 <footer class="ftco-footer">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12 col-md">
						<div class="ftco-footer-widget mb-4">
						<a href="index.html">	
							<img src="images/short2.png" width="60" alt="">
						</a>
							<p class="mt-3">Your Trusted Partner For Comprehensive IT Solutions</p>
							<ul class="ftco-footer-social list-unstyled mt-0">
								<li class="ftco-animate"><a href=""><span class="fa fa-linkedin"></span></a></li>
								<li class="ftco-animate"><a href=""><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href=""><span class="fa fa-instagram"></span></a></li>
							</ul>
	
						</div>
					</div>
					<div class="col-sm-12 col-md">
						<div class="ftco-footer-widget mb-4 ml-md-4">
							<h2 class="ftco-heading-2">Services</h2>
							<ul class="list-unstyled">
								<li><a href="web1-services.html"><span class="fa fa-chevron-right mr-2"></span>Web Development</a></li>
								<li><a href="app-services.html"><span class="fa fa-chevron-right mr-2"></span>App Development</a></li>
								<li><a href="graphic-services.html"><span class="fa fa-chevron-right mr-2"></span>Graphic Designing</a></li>
								<li><a href="software-services.html"><span class="fa fa-chevron-right mr-2"></span>Software Development</a></li>
								<li><a href="marketing-services.html"><span class="fa fa-chevron-right mr-2"></span>Digital Marketing</a></li>
								<li><a href="UXUI.html"><span class="fa fa-chevron-right mr-2"></span>UI/UX</a></li>
								<li><a href="wordpress-services.html"><span class="fa fa-chevron-right mr-2"></span>Wordpress</a></li>
								<li><a href="shopify-services.html"><span class="fa fa-chevron-right mr-2"></span>Shopify</a></li>
								<li><a href="webflow-services.html"><span class="fa fa-chevron-right mr-2"></span>Webflow</a></li>
							
	
								
								
								
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Company</h2>
							<ul class="list-unstyled">
								<li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
	
								<li><a href="contact.html"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
								<li><a href="services.html"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
								<li><a href="projects.html"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
								<li><a href="portfolio.html"><span class="fa fa-chevron-right mr-2"></span>Portfolio</a></li>
	
								
								
	
								<!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li> -->
							</ul>
						</div>
					</div>
					
					<div class="col-sm-12 col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><i class="fa fa-map icon"></i><span class="text">51 Mor Pull Sanny Rahim Yar Khan</span></li>
									<li><a href="https://api.whatsapp.com/send/?phone=%2B923089850893&fbclid=IwZXh0bgNhZW0CMTAAAR0O0Yi8HhvaXKJy8NHF9QyeglR0j90MRt-SnIM95c9jQh2FsEfY7qdg6oA_aem_ijwB8Za-WWX4IZ7GHl7ACA "><i class="fa fas fa-phone-square icon"></i><span class="text">+92 308 9850 893</span></a></li>
									<li><a href="mailto:info@techspherelogix.com"><i class="fa fab fa-facebook-messenger icon"></i><span
												class="text"><span class="__cf_email__"
													data-cfemail="640d0a020b241d0b1116000b09050d0a4a070b09">info@techspherelogix.com</span></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-0 py-5 " style="border-top:2px solid #dee2e606;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p class="mb-0" style="color: rgba(255,255,255,.5);">
								Copyright &copy;
								<script data-cfasync="false"
									src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>
								<script>document.write(new Date().getFullYear());</script> All rights reserved | <a
									href="#" target="_blank" rel="nofollow noopener">Tech Sphere Logix</a>
								<!-- <script>
									document.write(new Date().getFullYear());
								</script> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
				
		</svg></div>

		<script src="js/particles.js"></script>
		<script src="js/app.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
		integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
		data-cf-beacon='{"rayId":"7e37d9051f5029f5","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>

</body>
</html>