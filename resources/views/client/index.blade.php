<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Restaurant One Page HTML5 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<!-- Js -->
    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="{{ asset('image/edu1.jpg') }}" alt="" >
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#" style="padding: 3px;">
                                    JOEL ACADEMY
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#about-us">about us</a></li>
                                <li><a href="#blog">courses</a></li>
                                <li><a href="#contact-us">contacts</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Recent <span>Videos</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="{{ asset('image/edu4.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('image/edu4.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('image/edu4.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/edu4.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('image/edu4.jpg') }}" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="images/cooker-img.png" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >JOEL <span>ACADEMY</span> </br> Where Learning Becomes <span>Easy</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </br>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Our <span>Latest</span> Courses <span></span></h1>
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                    <img src="{{ asset('image/maths.jpg') }}" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="{{ asset('image/physics.png') }}" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>
                                </div>
                                <div class="blog-img-2">
                                    <img src="{{ asset('image/physics.png') }}" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>

                                </div>
                                <div class="blog-img-2">
                                    <img src="{{ asset('image/chemistry.jpg') }}" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="{{ asset('image/computer.jpg') }}" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="{{ asset('image/geography.jpg') }}" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <a href="link" class="tut-button w3-btn w3-button">practice</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color:blue; ">videos</a><br>
                                    <a href="link" class="tut-button w3-btn w3-button"  style="background-color: red;">handout</a>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">our <span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                        <form>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="text" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                        </form>
                        <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telefone</h4>
                                  <p>(000) 123 456 78- (000) 123 4567 89</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>2046 Blue Spruce Lane Laurel Canada</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>rest@gmail.com - rest@mail.ru</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>TESTIMONiES <span></span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">Nov 9-2014</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                                <li>
                                    <h4><a href="#">Sep 8-2014</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('image/edu7.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src=""{{ asset('image/edu7.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src=""{{ asset('image/edu7.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src=""{{ asset('image/edu7.jpg') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a href="http://www.themefisher.com">Themefisher</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>