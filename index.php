<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PremioSolar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	

	<script src="js/app.js"></script>
	<script src="js/particles.min.js"></script>
  </head>
  <body>

  <?php
  if(isset($_GET['success'])) {

	  echo "your submission has been successfully";
  }
 
 ?>

	

    <div class="container pt-5 pb-4">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.php"><img src="images/mainlogo.png" alt=""></a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3  pt-4">
							<form action="#" class="searchform order-lg-last">
			          <div class="form-group d-flex">
			            <input type="text" class="form-control pl-3" placeholder="Search">
			            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
			          </div>
			        </form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="https://facebook.com/premiosolar" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="https://twitter.com/premiosolar" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="https://instagram.com/premiosolar" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item "><a href="howitwork.php" class="nav-link">HOW IT WORK</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
	        	<li class="nav-item"><a href="community.php" class="nav-link">RESIDENTIAL QOUTATIONS</a></li>
                <li class="nav-item"><a href="comercial.php" class="nav-link">COMMERCIAL</a></li>
	        	<!-- <li class="nav-item"><a href="gallery.php" class="nav-link">REVIEWS</a></li> -->
	        	<!-- <li class="nav-item"><a href="blog.php" class="nav-link">SUPPORT</a></li> -->
			  
			    <!-- <li class="nav-item"><a href="about.php" class="nav-link">NEWS</a></li> -->
			    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
	
	
	
	<div id="particles-js">  </div>
	<script src="js/particles.min.js"></script>
	<script src="js/app.js"></script>



<!-- hero section here -->
    <!-- <div class="hero-wrap js-fullheight" style="background-image: url('images/solarbg2.jpg'); background-attachment: fixed;background-position: 0% 50%;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome to GO <SPAN>SOLAR </SPAN>POWER</h2>
			  <h1>ASK ABOUT<BR>
			  SOLAR & STORAGE<br>
			WITH TESLA POWER WALL </h1>
            <p class="mb-4">Let us work on your SOLOR POWER</p>
            <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
	</div> -->

	<section id="hero" style="position: relative;">
		<img src="assets/img/mainlogominishadow.png" class="img-fluid" alt="" id="mainlogo" >
		<div class="hero-container">
		  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	
			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
	
			<div class="carousel-inner" role="listbox">



				 <!-- Slide -1 -->
				 <div class="carousel-item active" style="background-image: url('images/family.jpg'); background-position: bottom;">
					<div class="carousel-container">
					  <div class="carousel-content container">
						  <!-- <span class="fas fa-sun slider_icon animated fadeInRight"></span> -->
						<h2 class="animated fadeInDown">Welcome to Premio<span style="color: rgb(79, 230, 33);">solar</span></h2>
						<p class="animated fadeInUp">Say hello to the solar solutions and forget about your electricity bills forever! Yes, you’ve heard it right. Save your money as we offer you the best quotation today so start saving now!
						</p>
						<!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto" style="z-index: 3;">Read More</a> -->
					  </div>
					</div>
				  </div>
				  <!-- slide -1 ends -->

				 <!-- Slide 0 -->
				 <div class="carousel-item " style="background-image: url('images/z1.jpg');">
					<div class="carousel-container">
					  <div class="carousel-content container">
						  <!-- <span class="fas fa-door-open slider_icon animated fadeInRight"></span> -->
						<h2 class="animated fadeInDown">Get Free Solar qoutations <br> at your <span style="color: rgb(79, 230, 33);">Door Step</span></h2>
						<p class="animated fadeInUp">Your home will be worth more with solar with a limited to $0 electric bill.</p>
						<!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto" style="z-index: 3;">Read More</a> -->
					  </div>
					</div>
				  </div>
				  <!-- slide 0 ends -->
	
			  <!-- Slide 1 -->
			  <div class="carousel-item" style="background-image: url('images/bg_1.jpg');">
				<div class="carousel-container">
				  <div class="carousel-content container">
					  <!-- <span class="fas fa-home slider_icon animated fadeInRight"></span> -->
					<h2 class="animated fadeInDown">Increase property value
						<span style="color: rgb(79, 230, 33);"></span></h2>
					<p class="animated fadeInUp">Purchasers are willing to pay a premium for homes with solar energy systems. Power your home with solar and start saving money every month on your electric bill.</p>
					<!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto" style="z-index: 3;">Read More</a> -->
				  </div>
				</div>
			  </div>
			  <!-- slide 1 ends -->
	
			  
	
			  <!-- Slide 3 -->
			  <div class="carousel-item" style="background-image: url('images/z4.jpg');">
				<div class="carousel-container">
				  <div class="carousel-content container">
					<!-- <span class="fas fa-money-bill slider_icon animated fadeInRight"></span> -->
					<h2 class="animated fadeInDown">	
						$0-down solar PPAs 
 <span style="color: rgb(79, 230, 33);"></span></h2>
					<p class="animated fadeInUp">As we believe that Solar should be affordable for everyone, so we’re proud to present a variety of payment choices to fit in your budget, including $0 down financing. 
					</p>
					<!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
				  </div>
				</div>
			  </div>

			  <!-- Slide 4 -->
			  <div class="carousel-item" style="background-image: url('images/z2.jpg'); background-position:bottom;">
				<div class="carousel-container">
				  <div class="carousel-content container">
					<!-- <span class="fas fa-piggy-bank slider_icon animated fadeInRight"></span> -->
					<h2 class="animated fadeInDown">	
							
						Solar power for Commercial</h2>
					<p class="animated fadeInUp">Transform your business to Solar Power with Commercial Solar Panels and get customized solar solutions for business now.
					</p>
					<!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
				  </div>
				</div>
			  </div>
	
			</div>
	
			<a  style = " z-index: 10;"class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a style = " z-index: 10;" class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
			  <span class="carousel-control-next-icon  fa fa-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
	
		  </div>
		</div>
	  </section>

	<!-- hero section end here -->

    <section class="ftco-section ftco-no-pt">
    	<div class="container-fluid">
    		<div class="row">
    		<!----	<div class="col-lg-3 py-5 order-md-last">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Services</span>
	            <h2 class="mb-4">SOLOR POWER Services</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p>
	          </div>
    			</div>--->
    			<div class="col-lg-11 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    					<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
									<span class="fas fa-house-damage"></span></a>
		    					</div>
		    					<div class="text">
		    						<h3>Free solar qoutations with Premio</h3>
		    						<p>Your home will be worth more with solar with a limited to $0 electric bill.</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center">
								<span class="fas fa-dot-circle"></span></a>
		    				</div>
		    			</div>
		    			
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="fas fa-external-link-alt"></span>
		    					</div>
		    					<div class="text">
		    						<h3>	
										Zero Dollar financing option</h3>
		    						<p>Finance your solar system for as low as 1.99% rate</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></a>
		    				</div>
						</div>
						<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="fas fa-dollar"></span>
		    					</div>
		    					<div class="text">
		    						<h3>	
									
										Reduce Electricity by installing Solar</h3>
		    						<p>
										Major savings over 25 years
										Over $60,000 on average in long term savings</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></a>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	   



	
<!-- cards section start  -->
<section class="ftco-section bg-light"><div class="container"> 
		 <div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section text-center ftco-animate">
			<h1><span class="text_green">Go with  Premio<span style="color: #b5b502;">Solar</span> </span></h1>
		  <!-- <h1 sty> Premiosolar</h1> -->
		</div>
	  </div>
	  <div class="row d-flex">
		
		<div class="col-md-6 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.php" class="block-20" >
			  <img src="images/logo2.png"  class="d-block mx-auto" style="height: 150px; ">
			</a>
			<div class="text p-4 float-right d-block">
			
				<h3 class="heading mb-0"><a href="#">Making Solar Affordable</a></h3>
			  <p>
				 The cost of solar has dropped dramatically in recent years, falling more than 70% in just the last decade. 
			  <p><a href="#" class="btn btn-primary">Read more</a></p>
			</div>
		  </div>
		</div>
		<div class="col-md-6 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.php" class="block-20" >
			  <img src="images/logo3.png" class="d-block mx-auto" style="height: 150px; ">
			</a>
			<div class="text p-4 float-right d-block">
			
				<h3 class="heading mb-0"><a href="#">Increase Home Value</a></h3>
			  <p>
				  Solar panels can add an average $15,000 value to your home. According to the US Department of Energy.</p>
			  <p><a href="#" class="btn btn-primary">Read more</a></p>
			</div>
		  </div>
		</div>
		<div class="col-md-6 d-flex ftco-animate">
		  <div class="blog-entry justify-content-end">
		  <a href="blog-single.php" class="block-20" >
			  <img src="images/logo4.png"  class="d-block mx-auto" style="height: 150px; ">
		  </a>
		  <div class="text p-4 float-right d-block">
		  
			  <h3 class="heading mb-0"><a href="#">Big Tax Credit Savings</a></h3>
			<p>
				
Take advantage of The Federal (ITC).  Get back 26% of your system’s cost when you have a tax liability.</p>
			<p><a href="#" class="btn btn-primary">Read more</a></p>
		  </div>
		</div>
	  </div>
	
	  <div class="col-md-6 d-flex ftco-animate">
		  <div class="blog-entry justify-content-end">
		  <a href="blog-single.php" class="block-20 ">
			  <img src="images/logo5.png"  class="d-block mx-auto" style="height: 150px; ">
		  </a>
		  <div class="text p-4 float-right d-block">
		  
			  <h3 class="heading mb-0"><a href="#">Reduce, Produce, Repeat</a></h3>
			<p>
 Real time monitoring access to gauge your system. Check your energy and efficiency on both Android and iOS. </p>
			<p><a href="#" class="btn btn-primary">Read more</a></p>
		  </div>
		</div>
	  </div>
	  </div>
	</div>
  </section>
<!-- cards section ends -->




   

  






		
<!-- missconceoptions section -->
<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
	<div class="container">
		<div class="row d-flex">
		
			<div class="col-md-6 pl-md-5" >
				<div class="row justify-content-start py-5">
			  <div class="col-md-12 heading-section ftco-animate">
				  <span class="subheading">Welcome to PremioSolar</span>
				<h2 class="mb-4">Top 5 Misconceptions with Switching to Solar Power</h2>
				<p></p>
				<div class="services-wrap">
					<a href="#" class="services-list">Solar will work if the Power goes out
						<div class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></div>
					</a>
					<a href="#" class="services-list">Batteries are not available
						<div class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></div>
					</a>
					<a href="#" class="services-list">Solar has a lousy payback
						<div class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></div>
					</a>
					<a href="#" class="services-list">I will wait for the price to go down
						<div class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></div>
					</a>
					<a href="#" class="services-list">What happens if the technology changes greatly in 5 years
						<div class="btn-custom d-flex align-items-center justify-content-center"><span class="fas fa-dot-circle"></span></div>
					</a>
				</div>
			  </div>
			</div>
		</div>

			<div class="col-md-6 d-flex ">
				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end " style="background-image:url(images/solarcrow.jpg);box-shadow: 0px 0px 10px yellow;">
					
					
					</a>
				</div>
			</div>
	</div>
	</div>
</section>

<!-- missconceoptions section ends -->



<!-- happy starts -->
<!-- <section class="ftco-section" style="margin-top: 100px;">
	<div class="container">
		<div class="row justify-content-center mb-5">
	  <div class="col-md-10 text-center heading-section ftco-animate">
		  <span class="subheading"> </span>
		<h2 class="mb-4">Our Happy<HR> Customers</h2>
	  </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel-seasonal owl-carousel ftco-owl">
		  <div class="item">
			  <div class="wrap">
						<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/person_1.jpg);background-size: contain;">
						</div>
						
						
					</div>
		  </div>
		 
		  <div class="item">
			<div class="wrap">
					  <div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/person_2.jpg); background-size: contain;">
					  </div>
					 
				  </div>
		</div>


		<div class="item">
			<div class="wrap">
					  <div class="  seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/person_3.jpg); background-size: contain;">
					  </div>
					 
				  </div>
		</div>
		
		</div>
		</div>
	</div>
	</div>
</section> -->

<!-- happy ends -->

<!-- what they say section  -->
<!-- <section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
	  <div class="col-md-10 text-center heading-section ftco-animate">
		  <span class="subheading"> </span>
		<h2 class="mb-4">What They Say<HR></h2>
	  </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel-seasonal owl-carousel ftco-owl">
		  <div class="item">
			  <div class="wrap">
						<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/img.jpeg);">
						</div>
						<div class="text text-center px-4">
							<h3><a href="#">Pete B. – Google  5 Star Review</a></h3>
							<p>“VERY HAPPY WITH  Premio Solar POWER,WISH I HAD DONE IT AT LOT SOONER.”</p>
						</div>
					</div>
		  </div>
		  <div class="item">
			  <div class="wrap">
						<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/2.jpg
						);">
						</div>
						<div class="text text-center px-4 ">
							<h3><a href="#">Joel R. – Google  5 Star Review</a></h3>
							<p>“These guys know what they are doing! Got my system in 2017. Last time I paid a full power bill was March of that year and last time I paid more than basic connection was October 2017. ”</p>
						</div>
					</div>
		  </div>
		  <div class="item">
			  <div class="wrap">
						<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/5.jpg);">
						</div>
						<div class="text text-center px-4">
							<h3><a href="#">Randall R. – Google 5 Star Review</a></h3>
							<p>“Thank you Randall for the great feedback. We value and appreciate your business. !”</p>
						</div>
					</div>
		  </div>
		
		</div>
		</div>
	</div>
	</div>
</section> -->
<!-- what they say ends -->


<section class="ftco-intro bg-primary py-5 mt-4">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-6">
				<h2>Contact with us</h2>
				<p>Do you have any comments or questions about the products then contact us.</p>
			</div>
			<div class="col-md-5 text-md-right">
				<span class="contact-number">702 8794443</span>
			</div>
		</div>
	</div>
</section>

		



		

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container">
        <div class="row d-flex justify-content-center">
        	<div class="col-lg-8 py-4">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            <form action="#" class="subscribe-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Enter email address">
		                <input type="submit" value="Subscribe" class="submit px-3">
		              </div>
		            </form>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section>
	
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-md-6 col-lg">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="logo"><a href="#">PREMIO<span>SOLAR</span></a></h2>
				<p>Premio solar helps you to get freedom and control over electricity. Your home is powered by rooftop solar panels during the day and by energy stored in the battery at night with a residential solar system.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				  <li class="ftco-animate"><a href="https://twitter.com/premiosolar"><span class="icon-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="https://facebook.com/premiosolar"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="https://instagram.com/premiosolar"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Important links</h2>
				<ul class="list-unstyled">
				  <li><a href="index.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
				  <li><a href="howitwork.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>How It Works</a></li>
				  <li><a href="about.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About Us</a></li>
				  <li><a href="community.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Residential Solar</a></li>
				  <li><a href="comercial.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Comercial Solar</a></li>
				  
				  <li><a href="contact.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact Us</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Contact information</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">N 7th Ave, Phoenix, AZ 85007, United States</span></li>
					  <li><a href="#"><span class="icon icon-phone"></span><span class="text">702 8794443</span></a></li>
					  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@premiosolar.com</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
			<div class="col-md-6 col-lg">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Business Hours</h2>
				<div class="opening-hours">
					<h4>Opening Days:</h4>
					<p class="pl-3">
						<span>Monday – Friday : 9am to 20 pm</span>
						<span>Saturday : 9am to 17 pm</span>
					</p>
					<h4>Vacations:</h4>
					<p class="pl-3">
						<span>All Sunday Days</span>
						<span>All Official Holidays</span>
					</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p>
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
			  </p>
			</div>
		  </div>
		</div>
	  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
	




<!-- modal stuff here  -->

<!-- php here  -->
<?php
if(isset($_SESSION['client_submitted'])){
	echo "<script type='text/javascript'> var submitted = true;</script>";
}



?>
<!-- php ends -->

		<!-- modal js -->
		<script>
		

		if(typeof submitted == 'undefined'){

	
			$(window).load(function(){        
  			 $('#myModal').modal('show');
					// session setting going in here
					const submitted = true;
					// not working but still can help me in future
				}); 
	
		}

	</script>
	<!-- modal js ends -->


	<div id="myModal" class="modal fade" role="dialog" >
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content" style=" background-image: url('images/barley.jpg');background-attachment: fixed; box-shadow: 5px 5px 10px  rgb(248, 248, 19), -5px -5px 10px  rgb(245, 245, 4);  
		  background-attachment: fixed;">
			
			<div class="modal-body" >
						<!-- modal body -->
						<div class="row" id="row4" style="padding-top:0px;">

				
							
							  <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg_grey" style="padding-top: 75px;" >
								  <!-- close button -->
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								  </button>
								  <!-- close button ends -->
								<div class="pt-3" >
								<h3 class="text-center">Dont Miss a Chance! <span class="fas fa-scroll"></span> </h3>
								<h4 class="text-center">Get Free Solar Qoutation today</h4>
								</div>
								<div class="p-4">
								 <form action="./include/form_handler.php" method="POST" data-aos="fade-up" enctype="multipart/form-data">
				<div class="form-group">
				  <label class="text_yellow">Customer Name:</label>
				  <input type="text" name="z_name" class="form-control" placeholder="Enter your full name" required>
				</div>
				<div class="form-group">
				  <input type="email" name="z_email" class="form-control" placeholder="Enter email adress" required>
				</div>
				<div class="form-group">
				  <label class="text_yellow">Address:</label>
				  <input type="text" name="z_address" class="form-control" placeholder="Enter your Address" required>
				</div>
				 <div class="input-group mb-3">
					<div class="input-group-prepend">
				   <label class="input-group-text" for="inputGroupSelect01">State:</label>
				 </div>
				 <select class="custom-select" id="inputGroupSelect01" name="z_state">
				   <option>Choose...</option>
						<option value="1" required>Utah</option>
										<option value="2">Nevada</option>
										<option value="3">California</option>
										<option value="4" >New Jersey</option>
										<option value="5" >Arizona</option>
										<option value="6" >Texas</option>
										<option value="7" >North Carolina</option>
				 </select>
				</div>
				<div class="form-group">
				  <label class="text_yellow">Contact Number:</label>
				  <input type="text" name="z_num" class="form-control" placeholder="Contact number">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
				   <label class="input-group-text" for="inputGroupSelect01">Property Type:</label>
				 </div>
				 <select class="custom-select" id="inputGroupSelect01" name="z_property">
				   <option selected>Choose...</option>
					<option value="Residential">Residential</option>
					<option value="Commercial">Commercial</option>
				 </select>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
				   <label class="input-group-text" for="inputGroupSelect01">Shade:</label>
				 </div>
				 <select class="custom-select" id="inputGroupSelect01" name="z_shade">
				   <option selected>Choose...</option>
					<option value="Little shade">Little shade</option>
					<option value="No shade">No shade</option>
				 </select>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
				   <label class="input-group-text" for="inputGroupSelect01">Credit Score:</label>
				 </div>
				 <select class="custom-select" id="inputGroupSelect01" name="z_score">
				   <option selected>Choose...</option>
					<option value="Above 650 points">Above 650 points</option>
					</select>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
				   <label class="input-group-text" for="inputGroupSelect01">Electric Bill:</label>
				 </div>
				 <select class="custom-select" id="inputGroupSelect01" name="z_bill" required>
				   <option selected>Choose...</option>
					<option value="$100-$150">$100 - $150</option>
					<option value="$150-$200">$150 - $200</option>
					<option value="above $200">above $200</option>
				 </select>
				</div>
				<div class="form-group">
				   <label for="comment"><p class="text_yellow">Call back time:</p></label>
					 <textarea class="form-control" rows="1" id="comment" name="z_callback"></textarea>
				</div>
	  
				<!-- images collector starts  -->
<!-- 	  
				  <label class="text_yellow">Electric bill copy (optional):</label>
				<div class="input-group">
				  <input type="file" name="image">
				  </div> -->
				  <!-- img collector ends -->
				  <hr>
				<div class="form-check-inline">
					<label class="form-check-label">
					 <input type="checkbox" class="form-check-input" value="yes" required><p class="text_yellow">I confirm that I am the property owner.</p>
				  </label>
				</div>
				<div>
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>
	  
	  
				
			  </form>


								
								</div>
							  </div>
						  </div>
						  
						<!-- modal body ends -->





			</div>
			<!-- <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> -->
		  </div>
	  
		</div>
	  </div>


	  
	<!-- modal stuff ends here -->
  </body>
</html>