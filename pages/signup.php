<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Join - Code Lab</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

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

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

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
<!-- error banner -->
<div class="banners">
    <div class="error">
      <div class="banner-icon"><i data-eva="alert-circle-outline" data-eva-fill="#ffffff" data-eva-height="48" data-eva-width="48"></i></div>
      <div class="banner-message">Oops! Something went wrong!</div>
      <div class="banner-close" onclick="hideBanners()"><i data-eva="close-outline" data-eva-fill="#ffffff"></i></div>
    </div>
</div>

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
                        <li><a class="nav-link" href="../index.html">Home</a></li>
                        <li><a class="nav-link" href="about.html">About</a></li>
                        <li><a class="nav-link" href="courses.html">Courses</a></li>
                        <li><a class="nav-link active" href="join.html">Join us</a></li>
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

	<!-- section -->

	<section class="inner_banner">
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			     <div class="full">
				     <h3>Join us</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>

	<!-- end section -->

	<!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;" id="log">
        <div class="container">
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                        <img src="../images/join_us.jpg" alt="#">
                    </div>
                 </div>
				 <div class="col-lg-4 col-md-4 col-sm-12">
				    <div class="contact_form log" id="login">
                        <form method="post" id="signupForm" name="form" class="form" action="cpsignup.php">
                            <fieldset>
                                 <div class="headline text_align_center">
                                     <span>Sign up with</span>
                                 </div>
                                 <div class="social__media__container">
                                     <a href="#" target="_blank" class="social facebook">
                                         <i class="fab fa-facebook-f"></i>
                                     </a>
                                     <a href="#" class="social google">
                                         <i class="fab fa-google-plus-g"></i>
                                     </a>
                                     <a href="#"  target="_blank" class="social twitter">
                                         <i class="fab fa-twitter"></i>
                                     </a>
                                 </div>
                                 <div class="line-breaker">
                                     <span class="line"></span>
                                     <span>or</span>
                                     <span class="line"></span>
                                   </div>
                                 <div class="full field form-group">
                                     <input type="text" class="form-contrl <?= $obr; ?> " placeholder="&nbsp;" name="username" id="username" value="<?= $username; ?>" />
                                     <label for="username" class="label">Username</label>
                                     <em><?= $obst; ?></em>
                                 </div>
                                <div class="full field form-group">
                                   <input type="text" class="form-contrl <?= $obr; ?> " placeholder="&nbsp;" name="email" id="email" value="<?= $email; ?>" />
                                   <label for="email" class="label">Your email</label>
                                   <em><?= $obrt; ?></em>
                                </div>
                                <!-- password -->
                                <div class="full field form-group">
                                   <input type="password" class="form-contrl" placeholder="&nbsp;" name="password" id="password" />
                                   <label for="password" class="label">Password</label>
                                </div>
                                <div class="full field form-group">
                                 <input type="password" class="form-contrl" placeholder="&nbsp;" name="cpassword" id="cpassword" />
                                 <label for="cpassword" class="label">Confirm password</label>
                              </div>

                                <div class="full field">
                                   <div class="center"><button type="submit" name="signup" id="signup">Sign up</button></div>
                                </div>
                                <div class="full signup">
                                 <div class="center">Already member ? &nbsp;<a href="login.html"> Login here</a></div>
                              </div>
                            </fieldset>
                         </form>
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
							    <form action="index.html">
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
    <input type="hidden" id="usernerr" value="<?= $obs; ?>">
    <input type="hidden" id="emaerr" value="<?= $obs; ?>">

   <!-- ALL JS FILES -->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/jquery-1.11.1.js"></script>
   <script src="../js/jquery.validate.js"></script>
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
   <script src="../js/basics.js"></script>
   <script src="../js/formvali.js"></script>
   <script src="../js/counter.js"></script>
</body>
</html>