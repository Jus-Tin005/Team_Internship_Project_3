<?php
// session_start();
// include("./db/insert.php");


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The GoodVide - Contact</title>
    <!-- Bootstrap 5 css & js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom css -->
    <link rel="stylesheet" href="./../css/contact.css" />
    <!-- icon -->
  <link rel="icon" href="./../img/logo/favicon" type="icon/png">

  </head>
  <body>

        <!-- START HEADER SECTION -->
        <header>
                    <!-- Start navbar  -->
        <nav class="navbar navbar-expand-sm bg-light navbar-primary  fixed-top">
                    <a class="navbar-brand " href="./../index.php"><img src="./../img/logo/logo.png"></a>

                  <div class="container">
                            <a href="index.php" class="navbar-brand fw-bold"></a>
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNav">
                                  <span class="navbar-toggler-icon"></span>
                            </button>

                       <div id="myNav" class="navbar-collapse collapse">
				<ul class="navbar-nav">
						<li class="nav-item" >
							<div class="nav-icons">
								<span><i class="fa-solid fa-house"></i></span>
								<span><a class="nav-link  mr-sm-5" href="./../index.php">Home</a></span>
							</div>
						</li>

						<li class="nav-item dropdown">
						<div  class="nav-icons">
								<span><img src="./../img/logo/category.png" width="18" height="18" alt="ategory-icon"></span>
								<span>
										<a class="nav-link dropdown-toggle mr-sm-5" href="./categories.php" id="navbardrop" data-bs-toggle="dropdown">Categories</a>
										<div class="dropdown-menu">
											<a class="dropdown-item text-primary" href="./education.php">Education</a>
											<a class="dropdown-item text-primary" href="./technology.php">Technology</a>
											<a class="dropdown-item text-primary" href="./health.php">Health</a>
											<a class="dropdown-item text-primary" href="./sport.php">Sport</a>
										</div>
								</span>
						</div>
						</li>

						<li class="nav-item">
						<div class="nav-icons">
								<span><i class="fa-solid fa-address-book"></i></span>
								<span>
									<a class="nav-link  mr-sm-5" href="./contact.php">Contact Us</a>
								</span>
						</div>
						</li>
					</ul>
		       </div>


			<!-- Search box Area -->
			<div class="wrapper">
					<div class="search-input">
						<a href="" target="_blank" hidden></a>
							<input type="text" placeholder="Type to search...">
							<div class="autocom-box">
								<!-- here list are inserted from javascript -->
							</div>
							<div class="icon"><i class="fas fa-search"></i></div>
					</div>
        		</div>

                </div>
        </nav>
        <!-- End navbar  -->
        </header>
        <!-- END HEADER SECTION -->

        <!-- START MAIN SECTION -->
        <div class="main-container">
                  <span class="big-circle"></span>
                  <img src="./../img/logo/shape2.png" class="square" alt="shape-2" />

                  <div class="form">
                          <div class="contact-info">
                                  <h3 class="title">Let's get in touch</h3>
                                  <p class="text">We are happy to get in touch with us whenever you want us !</p>

                                  <div class="info">
                                          <div class="information">
                                                <img src="./../img/logo/location.jpg" class="icon" alt="location" />
                                                <p>23 Street,Ba Han Township, Yangon, Myanmar</p>
                                          </div>
                                          <div class="information">
                                                <img src="./../img/logo/email.png" class="icon" alt="" />
                                                <p>ThegoodVide@gmail.com</p>
                                          </div>
                                          <div class="information">
                                                <img src="./../img/logo/phone.jpg" class="icon" alt="" />
                                                <p>+95-7550-330-35</p>
                                          </div>
                                  </div>

                                  <div class="social-media">
                                          <p>Follow us :</p>
                                          <div class="social-icons">
                                                  <a href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                  </a>
                                                    <a href="#">
                                                              <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                              <i class="fab fa-instagram"></i>
                                                    </a>
                                                    <a href="#">
                                                              <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                          </div>
                                  </div>
                          </div>

                          <div class="contact-form">
                                <span class="circle one"></span>
                                <span class="circle two"></span>

                                <form action="./db/insert.php" method="POST" autocomplete="off">
                                        <h3 class="title">Contact us</h3>
                                        <div class="input-container">
                                                <input type="text" name="name" class="input"  required/>
                                                <label for="username">Username</label>
                                                <span>Username</span>
                                        </div>
                                        <div class="input-container">
                                              <input type="email" name="email" class="input"  required/>
                                              <label for="email">Email</label>
                                              <span>Email</span>
                                        </div>
                                        <div class="input-container">
                                              <input type="tel" name="phone" class="input"  required/>
                                              <label for="phone">Phone</label>
                                              <span>Phone</span>
                                        </div>
                                        <div class="input-container textarea">
                                              <textarea name="message" class="input" required></textarea>
                                              <label for="messages">Messages</label>
                                              <span>Messages</span>
                                        </div>
                                        <input type="submit" name="submit" value="Send" class="btn" />
                                </form>
                          </div>
                  </div>
          </div>

        <!-- END MAIN SECTION -->



        <!-- START FOOTER SECTION -->
    <footer>
	<div class = "footer-container">
		<div class = "footer-left">
			<h2>Goodvide News</h2>
			<p>We keep moving on  updated news for our visitors coming to our site all the time & need more supportors including <span class="text-warning">YOU</span> to be updated more than now.</p>
		</div>

		<div class = "footer-right">
			<h2>Newsletters</h2>
			<p>You can send any news to our site,and you are welcome warmly by supporting us.</p>

			<div>
				<input type = "text" placeholder = "Email Address">
				<i class = "fas fa-envelope"></i>
			</div>
		</div>
	</div>

	<p>Copyright &copy; <span id="getYear"></span> All rights reserved | The GoodVide</p>
    </footer>
 <!-- END FOOTER SECTION -->




        <!-- Bootstrap css & js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!-- jQuery 3.6.1 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- jQuery ui -->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
        <!-- jQuery lightbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Custom js -->
       <script src="./../js/contact.js"></script>
  </body>
</html>
