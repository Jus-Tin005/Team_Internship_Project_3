<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GoodVide News Media - Categories</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 5 css & js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- Font Awesome 6.2.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- icon -->
        <link rel="icon" href="./../img/logo/favicon" type="icon/png">
        <!-- Custom css  -->
        <link href="./../css/categories.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

     <!-- Start Back To Top -->
        <div class="fixed-bottom">
                        <a href="#" class="btn-backtotops"><i class="fa-solid fa-chevron-up"></i></a>
        </div>

<!-- End Back To Top -->

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
        <main>
                <div class = "main-container">
                    <h2>News Categories</h2>
                    <p>Enjoy your moment in our site by diving into any news...</p>
                    <div class = "filter-container">

                        <div class = "category-head">
                            <ul>
                                        <div class = "category-title active" id = "all">
                                                <li>All</li>
                                                <span><i class = "fas fa-border-all"></i></span>
                                        </div>
                                        <div class = "category-title" id = "culture">
                                                <li>Culture</li>
                                                <span><i class = "fas fa-theater-masks"></i></span>
                                        </div>
                                        <div class = "category-title" id = "politics">
                                                <li>Politics</li>
                                                <span><i class = "fas fa-landmark"></i></span>
                                        </div>
                                        <div class = "category-title" id = "finance">
                                                <li>Finance</li>
                                                <span><i class = "fas fa-chart-area"></i></span>
                                        </div>
                                        <div class = "category-title" id = "business">
                                                <li>Business</li>
                                                <span><i class = "fas fa-coins"></i></span>
                                        </div>
                                        <div class = "category-title" id = "sports">
                                                <li>Sports</li>
                                                <span><i class = "fas fa-running"></i></span>
                                        </div>
                            </ul>
                        </div>



                        <div class = "posts-collect">
                                <div class = "posts-main-container">

                                            <!-- single post -->
                                            <div class = "all business">
                                                    <div class = "post-img">
                                                        <img src = "./../img/news/news13.jpg" alt = "post">
                                                        <span class = "category-name">business</span>
                                                    </div>

                                                    <div class = "post-content">
                                                        <div class = "post-content-top">
                                                            <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                            <span>
                                                                <i class = "fas fa-comment"></i>110
                                                            </span>
                                                        </div>
                                                        <h2>Toyota CEO Akio Toyoda talks about why he isn’t all-in on EVs — and what made him do a ‘happy dance’</h2>
                                                        <p>Just how the 66-year-old racer, car enthusiast and company scion will be remembered regarding his approach to all-electric vehicles compared to gas-powered performance cars, like the Supra, or hybrids,...</p>
                                                    </div>
                                                    <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all business">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news14.jpg" alt = "post">
                                                    <span class = "category-name">business</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>455
                                                        </span>
                                                    </div>
                                                    <h2>Sorry, hard seltzer — beer companies are into canned cocktails now</h2>
                                                    <p>Hard seltzer has lost its fizz. Now canned cocktails are all the buzz. Also known as ready-to-drink, or RTD, cocktails, the canned drinks were the fastest-growing spirits category last year, with $1.6 billion in revenue. That’s a 42% percent increase from the year before, according to...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all business">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news15.jpg" alt = "post">
                                                    <span class = "category-name">Business</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>Septembber 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>1k
                                                        </span>
                                                    </div>
                                                    <h2>This Ferrari is the brand's first four-door vehicle</h2>
                                                    <p>Ferrari has unveiled its first four-door vehicle. Although it certainly looks like a crossover SUV, Ferrari says the Purosangue is a car that's made for speed...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->


                                            <!-- single post -->
                                            <div class = "all culture">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news16.jpg" alt = "post">
                                                    <span class = "category-name">culture</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 02, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>200
                                                        </span>
                                                    </div>
                                                    <h2>The Pa'O Agriculture</h2>
                                                    <p>The Pa'O people are the second largest ethnic group in Shan State. They also reside in Kayin State, Kayah State, Mon State, and Bago Division. Many of the modern day Pa'O have fled to Mae Hong Son Province, in northern Thailand, due to ongoing military conflicts in Myanmar. They are believed to be of Tibeto-Burman lineage, and share the language and culture of the Karen people...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all culture">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news17.jpg" alt = "post">
                                                    <span class = "category-name">culture</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>450
                                                        </span>
                                                    </div>
                                                    <h2>Karen Culture and Social Support Foundation</h2>
                                                    <p>The Karen PeopleThe Karen people are an ethnic group living in South-East Asia. The Karen people are culturally and linguistically diverse. While most Karen people are Skaw Karen, there are other Karen cultural and language groups such as Pwo Karen and Bwe Karen...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all culture">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news18.jpg" alt = "post">
                                                    <span class = "category-name">culture</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>50
                                                        </span>
                                                    </div>
                                                    <h2>Maira Kalman Finds Truth in the Mess</h2>
                                                    <p>The artist’s new book and exhibit, “Women Holding Things,” explore all that women carry...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all culture">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news19.jpg" alt = "post">
                                                    <span class = "category-name">culture</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>45
                                                        </span>
                                                    </div>
                                                    <h2>Donald Dreams of Declassifying Documents</h2>
                                                    <p>The virtual-reality documentary takes viewers inside a secret detention center in Xinjiang, part of China’s mass internment of predominantly Muslim minorities...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all finance">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news20.jpg" alt = "post">
                                                    <span class = "category-name">finance</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>50
                                                        </span>
                                                    </div>
                                                    <h2>Credit Suisse is reportedly seeking to assure investors as financial concerns rise</h2>
                                                    <p>Credit Suisse executives are in talks with the bank’s major investors to reassure them amid rising concerns over the Swiss lender’s financial health, the Financial Times reported, citing people involved in the discussions...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all finance">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news21.jpg" alt = "post">
                                                    <span class = "category-name">finance</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>34
                                                        </span>
                                                    </div>
                                                    <h2>Fed Vice Chair Brainard warns against retreating from inflation fight prematurely</h2>
                                                    <p>
                                                            Federal Reserve Vice Chair Lael Brainard on Friday stressed the need to tackle inflation and the importance of not shrinking from the task until it is finished.
                                                            “Monetary policy will need to be restrictive for some time to have confidence that inflation is moving back to target,” the central bank official said in remarks prepared for a speech in New York. “For these reasons, we are committed to avoiding pulling back prematurely.” ...
                                                    </p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all finance">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news22.jpg" alt = "post">
                                                    <span class = "category-name">finance</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>205
                                                        </span>
                                                    </div>
                                                    <h2>New coin designs for King Charles III released by the UK’s Royal Mint</h2>
                                                    <p>LONDON — The first coin featuring King Charles III was unveiled Friday and is set to be in public usage before the end of the year...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all politics">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news23.jpg" alt = "post">
                                                    <span class = "category-name">politics</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>211
                                                        </span>
                                                    </div>
                                                    <h2>Republicans abandon Obamacare repeal</h2>
                                                    <p>On Capitol Hill and the 2022 campaign trail, the party's appetite for undoing former President Obama's signature law has faded, lawmakers and candidates say...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all politics">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news24.jpg" alt = "post">
                                                    <span class = "category-name">politics</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>304
                                                        </span>
                                                    </div>
                                                    <h2>National Archives says some records from Trump White House are still missing</h2>
                                                    <p>"We do know that we do not have custody of everything we should," acting Archivist Debra Steidel Wall said in a letter to House Oversight Committee Chair Carolyn Maloney, D-N.Y...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all politics">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news25.jpg" alt = "post">
                                                    <span class = "category-name">politics</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>342
                                                        </span>
                                                    </div>
                                                    <h2>College costs keep snowballing despite Biden’s efforts to ease student debt burden</h2>
                                                    <p>
                                                        Some student loan advisers anticipate that rates for federal and private loans will shoot up even more next year as a result of rising interest rates...
                                                    </p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all politics">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news26.jpg" alt = "post">
                                                    <span class = "category-name">politics</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>30
                                                        </span>
                                                    </div>
                                                    <h2>CIA honors Underground Railroad and Civil War hero Harriet Tubman as a model spy with a new statue</h2>
                                                    <p>The move is part of an effort by the CIA to bolster diversity at an agency where minorities have long been underrepresented...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all sports">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news27.jpg" alt = "post">
                                                    <span class = "category-name">sports</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>10k
                                                        </span>
                                                    </div>
                                                    <h2>Erling Haaland, Phil Foden Hat-tricks Help Manchester City Thrash Manchester United</h2>
                                                    <p>Erling Haaland and Phil Foden scored hat-tricks as Manchester City thrashed Manchester United 6-3 to move to within a point of Premier League leaders Arsenal on Sunday...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->

                                            <!-- single post -->
                                            <div class = "all sports">
                                                <div class = "post-img">
                                                    <img src = "./../img/news/news28.jpg" alt = "post">
                                                    <span class = "category-name">sports</span>
                                                </div>

                                                <div class = "post-content">
                                                    <div class = "post-content-top">
                                                        <span><i class = "fas fa-calendar"></i>September 03, 2022</span>
                                                        <span>
                                                            <i class = "fas fa-comment"></i>300
                                                        </span>
                                                    </div>
                                                    <h2>Novak Djokovic Into Fourth Final Of Season In Tel Aviv</h2>
                                                    <p>Novak Djokovic Into Fourth Final Of Season In Tel AvivNovak Djokovic defeated Roman Safiullin 6-1, 7-6 (7/3) in the Tel Aviv semi-finals. He will look to win his third title of the season, and 89th of his career, when he plays the final on Sunday...</p>
                                                </div>
                                                <button type = "button" class = "read-btn">Read All</button>
                                            </div>
                                            <!-- single post -->
                                </div>
                        </div>

                    </div>
                </div>
        </main>
    <!-- START MAIN SECTION -->



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
        <!--Custom js -->
        <script src = "./../js/categories.js"></script>
    </body>
</html>