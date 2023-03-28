<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Home - Code Lab</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- icon css -->
    <link rel="stylesheet" href="../css/all.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="../css/custom.css" />

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
		<div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html"><img src="../images/logo.png" alt="image"></a>
                <div class="navbar-toggler" id="bar" onclick="myFunction()" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="../index.html">Home</a></li>
                        <li><a class="nav-link" href="about.html">About</a></li>
                        <li><a class="nav-link" href="courses.html">Courses</a></li>
                        <li><a class="nav-link" href="join.html">Join us</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="../images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(../images/banner-1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../images/banner-1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
				    <ul>
					   <li><a href="#"><span class="icon"><img src="../images/i1.png" alt="#" /></span><span>University Life</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i2.png" alt="#" /></span><span>Graduation</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i3.png" alt="#" /></span><span>Athletics</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i4.png" alt="#" /></span><span>Social</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i5.png" alt="#" /></span><span>Location</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i6.png" alt="#" /></span><span>Call us</span></a></li>
					   <li><a href="#"><span class="icon"><img src="../images/i7.png" alt="#" /></span><span>Email</span></a></li>
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Welcome To</span> Code Lab</h2>
                        </div>
						<div class="full">
						  <p><?php echo  $_SESSION['Id'],  $_SESSION['Email'], $_SESSION['Username']; ?></p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="about.html">About more</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="../images/img2.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Project</span></h2>
                        </div>
						<div class="full">
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">See More</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" src="../images/img7.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>News</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../images/img9.png" alt="#" />
										  <h4>Technology</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../images/img8.png" alt="#" />
										  <h4>Education</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../images/img9.png" alt="#" />
										  <h4>Technology</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../images/img8.png" alt="#" />
										  <h4>Education</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>
           </div>
        </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		   <div class="row">

		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="../images/footer_logo.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
					 </div>
				 </div>
			  </div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul>
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Maintenance</a></li>
							  <li><a href="#">> Language Packs</a></li>
							  <li><a href="#">> LearnPress</a></li>
							  <li><a href="#">> Release Status</a></li>
							</ul>
						 </div>
				 </div>

				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Quick join</h3>
							 <p>Submit your email address here, we will send you a sign up link.</p>
							 <div class="newsletter_form">
							    <form action="../index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Our contact</h3>
							 <ul class="full">
							   <li><span class="ic"><i class="fas fa-map-marker-alt"></i></span> <span>Ambohidratrimo 105<br>Madagascar</span></li>
							   <li><a href="mailto:code.lab@gmail.com"><span class="ic"><i class="fas fa-envelope"></i></span><span>code.lab@gmail.com</span></a></li>
							   <li><a href="tel:+261346434294"><span class="ic"><i class="fas fa-phone-alt"></i></span><span>+261 34 64 342 94</span></a></li>
							 </ul>
						 </div>
					</div>

		   </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2023 design by Code Lab</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
    <script src="../js/slider-index.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
	<script src="../js/counter.js"></script>
</body>
</html>