<?php session_start();
    include '../actions/database.php';
    global $db;
    $shw = $db -> prepare("SELECT * FROM Users WHERE Email = ?");
    $shw ->execute([$_SESSION['Email']]);
    $abt = $shw ->fetch();

    $Userlink = $db -> prepare("SELECT * FROM Users_link WHERE Userkey = ?");
    $Userlink ->execute([$_SESSION['Key']]);
    $result = $Userlink ->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Account - Code Lab</title>
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
    <link rel="stylesheet" href="../css/message-style.css" />
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
                <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="image"></a>
                <div class="navbar-toggler" id="bar" onclick="myFunction()" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="../index.php">Dashboard</a></li>
                        <li><a class="nav-link" href="about.php">About</a></li>
                        <li><a class="nav-link" href="courses.php">Courses</a></li>
						<li><a class="nav-link" href="#">Messages</a></li>
                        <li class="dropbtn"><a class="nav-link active">Settings</a>
                            <ul class="dropdown-content">
                                <li><a href="account.php">Account</a></li>
                                <li><a href="#">Themes</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
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

    <!-- End Banner -->
    <!-- end section -->
    <!-- section -->
    <form action="../actions/update.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="section margin-top_50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="full">
                                <div class="profile-pic center">
                                    <label class="-label" for="file">
                                        <i class=" fas fa-camera"></i>

                                    </label>
                                    <input id="file" type="file" name="file" onchange="loadFile(event)" />
                                    <img src="../user_images/<?= $abt['Avatar']; ?>" id="output" width="200" />
                                </div>

                            </div>
                            <div class="full center">
                                <span class="hvr-radial-out"><?= $abt['Username']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top_50 col-md-6">
                            <div class="full">

                                <p><span>Your email : </span><span><?= $abt['Email']; ?></span></p>

                                 <p><span>Your phone number : </span><span><input  class="pchange" type="phone" value="<?= $abt['Phone']; ?>" name="phone"></span></p>

                                <p><span>Your name : </span><span><input  class="pchange" type="text" value="<?= $abt['Name']; ?>" name="name"></span></p>

                                <p><span>Your First name : </span><span><input  class="pchange" type="text" value="<?= $abt['First_name']; ?>" name="fname"></span></p>

                                <p><span>Your Location : </span><span><input  class="pchange" type="text" value="<?= $abt['Adresse']; ?>" name="adresse"></span></p>


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
                                    <h2><span>Your social media link</span></h2>
                                </div>
                                <div class="full">

                                    <p><i class="fab fa-facebook-f"></i> Facebook : <span><input  class="pchange" type="text" value="<?= $result['Facebook']; ?>" name="facebook"></span></p>

                                    <p><i class="fab fa-twitter"></i> Twitter : <span><input  class="pchange" type="text" value="<?= $result['Twitter']; ?>" name="twitter"></span></p>

                                    <p><i class="fab fa-github"></i> Github : <span><input  class="pchange" type="text" value="<?= $result['Github']; ?>" name="github"></span> </p>

                                    <p><i class="fab fa-whatsapp"></i> WhatsApp : <span><input  class="pchange" type="text" value="<?= $result['WhatsApp']; ?>" name="whatsApp"></span></p>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="full">
                               <div class="heading_main text_align_left">
                                    <h2><span>Your description </span></h2>
                                </div>
                                <div class="full">
                                <textarea name="bio" id="bio" rows="4" cols="40"><?= $result['Bio']; ?></textarea>

                               </div>
                               <div class="full center">
                 <p><button class="change-btn" type="submit" name="update">Save all changes</button></p>
             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
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

        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="crp">
                            © Copyrights 2023 design by Code Lab
                        </p>
                    </div>
                </div>
            </div>
        </div>


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
        <script src="../js/message-script.js"></script>
        <script src="../js/counter.js"></script>
        <script>
            function showsu() {
                document.getElementById('dropdown-content').style.display = 'block';
            }
        </script>
    </body>
</html>