<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The GoodVide - Sports</title>
    <!-- Bootstrap 5 css & js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome 6.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  Owl-Carousel -->
    <link rel="stylesheet" href="./../css/libs/owl.carousel.min.css">
    <link rel="stylesheet" href="./../css/libs/owl.theme.default.min.css">
    <!--  AOS Library  -->
    <link rel="stylesheet" href="./../css/libs/aos.css">
    <!-- icon -->
    <link rel="icon" href="./../img/logo/favicon" type="icon/png">
       <!-- Custom css  -->
    <link rel="stylesheet" href="./../css/sport.css" type="text/css">

</head>

<body>


 <!-- Start Back To Top -->
 <div class="fixed-bottom">
                <a href="#" class="btn-backtotops"><i class="fa-solid fa-chevron-up"></i></a>
 </div>

<!-- End Back To Top -->


    <!--START HEADERSECTION -->
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
    <!--END HEADERSECTION -->






    <main>

        <!-- START SITE SECTION -->
        <section class="site-title">
                <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                        <h3>Sport News</h3>
                        <h1>Amazing Player This Weekend</h1>
                        <button class="btn">Explore</button>
                </div>
        </section>
        <!-- END SITE SECTION -->


        <!-- START BLOG CAROUSEL SECTION -->
        <section>
                <div class="blog">
                        <div class="container">
                                    <div class="owl-carousel owl-theme blog-post">
                                                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                                                        <img src="./../img/news/sport2.jpg" alt="post-1">
                                                        <div class="blog-title">
                                                                <h3>How Harvey Elliott's 'obsession' with football shaped him for success</h3>
                                                                <button class="btn btn-blog">Sport</button>
                                                                <span>2 minutes</span>
                                                        </div>
                                                </div>
                                                <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                                                            <img src="./../img/news/sport3.jpg" alt="post-2">
                                                            <div class="blog-title">
                                                                    <h3>Men's T20 World Cup: Ben Stokes, Jos Buttler & Alex Hales among England's conundrums</h3>
                                                                    <button class="btn btn-blog">Sport</button>
                                                                    <span>1 minutes</span>
                                                            </div>
                                                </div>
                                                <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                                                            <img src="./../img/news/sport4.jpg" alt="post-1">
                                                            <div class="blog-title">
                                                                        <h3>Man City 6-3 Man Utd: Pep Guardiola's side too good for Erik ten Hag's men</h3>
                                                                        <button class="btn btn-blog">Sport</button>
                                                                        <span>3 minutes</span>
                                                            </div>
                                                </div>
                                                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                                                            <img src="./../img/news/sport5.jpg" alt="post-1">
                                                            <div class="blog-title">
                                                                        <h3>Brazil election: How the famous yellow football shirt has become politicised</h3>
                                                                        <button class="btn btn-blog">Sport</button>
                                                                        <span>2 minutes</span>
                                                            </div>
                                                </div>
                                    </div>

                                    <div class="owl-navigation">
                                                <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                                                <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </div>
                        </div>
                </div>
        </section>
        <!-- END BLOG CAROUSEL SECTION -->


        <!-- START SITE CONTENT SECTION -->
            <section class="container">
                    <div class="site-content">
                                <div class="posts">
                                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                                                <div class="post-image">
                                                    <div>
                                                            <img src="./../img/news/sport6.jpg" class="img" alt="blog-1">
                                                    </div>
                                                    <div class="post-info flex-row">
                                                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp; JT</span>
                                                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022</span>
                                                            <span>2 Commets</span>
                                                    </div>
                                                </div>
                                                <div class="post-title">
                                                        <a href="#">6-31 July - Football - Women's Euro 2022, England</a>
                                                        <p>
                                                                Hosts England will look to go one better than the men's team by becoming European champions for the first time, while the Netherlands seek to defend their title. Northern Ireland have qualified for the first time.
                                                        </p>
                                                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                                                </div>
                                        </div>

                                        <hr>

                                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="post-image">
                                                <div>
                                                    <img src="./../img/news/sport7.jpg" class="img" alt="blog1">
                                                </div>
                                                <div class="post-info flex-row">
                                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp; JT</span>
                                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022</span>
                                                    <span>7 Commets</span>
                                                </div>
                                            </div>
                                            <div class="post-title">
                                                <a href="#">28 July-8 August - Commonwealth Games, Birmingham</a>
                                                <p>
                                                        The schedule features more medal events for women than men for the first time in Commonwealth Games history, as well as a fully integrated Para-sport programme. Alongside the traditional Commonwealth sports, a women's Twenty20 cricket tournament will be held.
                                                </p>
                                                <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="post-image">
                                                <div>
                                                    <img src="./../img/news/sport8.jpg" class="img" alt="blog1">
                                                </div>
                                                <div class="post-info flex-row">
                                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp; JT</span>
                                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 4, 2022</span>
                                                    <span>5 Commets</span>
                                                </div>
                                            </div>
                                            <div class="post-title">
                                                <a href="#">11-21 August - Olympic sports - European Championships, Munich</a>
                                                <p>
                                                        Britain's Olympic stars will compete for medals in athletics, beach volleyball, canoe sprint, cycling, gymnastics, rowing, sport climbing, table tennis and triathlon.
                                                </p>
                                                <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="post-image">
                                                <div>
                                                    <img src="./../img/news/sport9.jpg" class="img" alt="blog1">
                                                </div>
                                                <div class="post-info flex-row">
                                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp; JT</span>
                                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 4, 2022</span>
                                                    <span>12 Commets</span>
                                                </div>
                                            </div>
                                            <div class="post-title">
                                                <a href="#">17 Oct-14 Nov - Cricket - Men's T20 World Cup, Australia</a>
                                                <p>
                                                        Australia powered to an eight-wicket victory over New Zealand to win the Men's T20 World Cup for the first time in November. England will look to do better after losing to the Black Caps in the semi-finals.
                                                </p>
                                                <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>

                                        <div class="pagination flex-row">
                                                    <a href="#"><i class="fas fa-chevron-left"></i></a>
                                                    <a href="#" class="pages">1</a>
                                                    <a href="#" class="pages">2</a>
                                                    <a href="#" class="pages">3</a>
                                                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                                        </div>

                                </div>
                                <aside class="sidebar">

                                            <div class="category">
                                                    <h2>Category</h2>
                                                    <ul class="category-list">
                                                        <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                                            <a href="#">World Cup</a>
                                                            <span>(05)</span>
                                                        </li>
                                                        <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                                            <a href="#">Football</a>
                                                            <span>(02)</span>
                                                        </li>
                                                        <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                                            <a href="#">formular 1</a>
                                                            <span>(07)</span>
                                                        </li>
                                                        <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                                            <a href="#">Tenis</a>
                                                            <span>(01)</span>
                                                        </li>
                                                        <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                                            <a href="#">Rugby U</a>
                                                            <span>(08)</span>
                                                        </li>
                                                    </ul>
                                            </div>

                                            <div class="popular-post">
                                                    <h2>Popular Post</h2>
                                                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                                                    <div class="post-image">
                                                        <div>
                                                            <img src="./../img/news/sport10.jpg" class="img" alt="blog1">
                                                        </div>
                                                        <div class="post-info flex-row">
                                                            <span>
                                                                    <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022
                                                            </span>
                                                            <span>2 Commets</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-title">
                                                        <a href="#">Tim Paine: Former Australia captain set to play first high-level match for 18 months</a>
                                                    </div>
                                            </div>

                                            <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                                                        <div class="post-image">
                                                            <div>
                                                                <img src="./../img/news/sport11.jpg" class="img" alt="blog1">
                                                            </div>
                                                            <div class="post-info flex-row">
                                                                <span>
                                                                    <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4,2022
                                                                </span>
                                                                <span>2 Commets</span>
                                                            </div>
                                                        </div>
                                                        <div class="post-title">
                                                            <a href="#">Liverpool have to go 'back to the basics' to improve form - Jurgen Klopp</a>
                                                        </div>
                                            </div>

                                            <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                                                        <div class="post-image">
                                                            <div>
                                                                <img src="./../img/news/sport12.jpg" class="img" alt="blog1">
                                                            </div>
                                                            <div class="post-info flex-row">
                                                                <span>
                                                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022
                                                                </span>
                                                                <span>2 Commets</span>
                                                            </div>
                                                        </div>
                                                        <div class="post-title">
                                                            <a href="#">Wales to face reigning champions South Africa and England twice in summer World Cup warm-ups</a>
                                                        </div>
                                            </div>

                                            <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                                                        <div class="post-image">
                                                            <div>
                                                                <img src="./../img/news/sport13.jpg" class="img" alt="blog1">
                                                            </div>
                                                            <div class="post-info flex-row">
                                                                <span>
                                                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022
                                                                </span>
                                                                <span>5 Commets</span>
                                                            </div>
                                                        </div>
                                                        <div class="post-title">
                                                            <a href="#">Djibouti and Sudan disqualified from U17 Nations Cup for age cheating</a>
                                                        </div>
                                            </div>

                                            <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                                                        <div class="post-image">
                                                            <div>
                                                                <img src="./../img/news/sport14.jpg" class="img" alt="blog1">
                                                            </div>
                                                            <div class="post-info flex-row">
                                                                <span>
                                                                    <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; September 4, 2022
                                                                </span>
                                                                <span>10 Commets</span>
                                                            </div>
                                                        </div>
                                                        <div class="post-title">
                                                            <a href="#">Erling Haaland is already breaking Premier League records - tweets of the week</a>
                                                        </div>
                                            </div>

                                            <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                                                    <h2>Newsletter</h2>
                                                    <div class="form-element">
                                                        <input type="text" class="input-element" placeholder="Email">
                                                        <button class="btn form-btn">Subscribe</button>
                                                    </div>
                                            </div>

                                            <div class="popular-tags">
                                                    <h2>Popular Tags</h2>
                                                    <div class="tags flex-row">
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="100">Golf</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="200">Winter Sports</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="300">World Cup</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="400">Cycling</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="500">Athletics</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="600">Horse Racing</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="700">Gymnastics</span>
                                                        <span class="tag" data-aos="flip-up" data-aos-delay="800">Swimming</span>
                                                    </div>
                                            </div>

                                </aside>
                    </div>
            </section>
          <!-- END SITE CONTENT SECTION -->

    </main>



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
        <!-- --------- Owl-Carousel js ------------------->
        <script src="./../js/libs/owl.carousel.min.js"></script>
        <!-- ------------ AOS js Library  ------------------------- -->
        <script src="./../js/libs/aos.js"></script>
        <!--Custom js -->
        <script src="./../js/sport.js"></script>
</body>

</html>