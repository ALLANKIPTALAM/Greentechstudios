<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>GreenTech Studios</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
  <![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/testimonial/style.css" />
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->

</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="{{ URL('/')}}" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img src="images/logo.png" /></i></b></a> </div>
      <!--/.navbar-header-->
      @if (Route::has('login'))
                <div id="main-nav" class="collapse navbar-collapse">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        
                    @else
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active" id="firstLink"><a href="{{ URL('/')}}" class="scroll-link">Home</a></li>
                        <li><a href="#services" class="scroll-link">Services</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                        <li><a href="#work" class="scroll-link">Projects</a></li>
                        <li><a href="#plans" class="scroll-link">Features</a></li>
                        <li><a href="#team" class="scroll-link">Team</a></li>
                        <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                        @endif
                    @endauth
                    </ul>
                </div>
            @endif


      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->

@yield('content')


<footer>
<div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>Nairobi - Kenya</li>
                        <li>Phone: +254 702 801 566 | +254 780 801 566 </li>
                        <li>Email: <a href="mailto:sabilarchitecture@gmail.com" title="Email Us">sabilarchitecture@gmail.com</a></li>
                        <li>Skype: <a href="skype:my.test?call" title="Skype us">my-company</a></li>
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
              <div class="col">
                    <h4>Mailing list</h4>
                    <p>Enter your email and subscribe to our mailing list.</p>
                    <form class="form-inline" role="form" action="{{ URL::to('index/subscribe')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <input class="form-control" type="email" name="email_address" id="email_address" value="" placeholder="Your email address..." >
                                
                            <span class="input-group-btn">
                              <button class="btn btn-warning" type="submit" name="subscribe" value="Subscribe">Go!</button>
                            </span>
                        </div>
                        @if ($errors->has('email_address'))
                                    <span class="help-block">
                                        <span style="color: red;">{{ $errors->first('email_address') }}</span>
                                    </span>
                                @endif
                    </form>
                    
                </div>
            </div>
            
            <div class="col-md-3">
              <div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="https://www.facebook.com/Nehemiah Koech"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.twitter.com/Sabila_koech"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>

             <div class="col-md-3">
              <div class="col">
                    <h4>Latest News</h4>
                    <!-- <blockquote class="twitter-tweet" ><p lang="en" dir="ltr">Surround yourself with people that push you to do and be better. No drama or negativity. Just higher goals and higher motivation. Good times and positive energy. No jealousy or hate. Simply bringing out the absolute best in each other.</p>&mdash; ᴋɪᴘᴛᴀʟᴀᴍ ᴀʟʟᴀɴ ™ 🇰🇪 (@AllanKiptalam) <a href="https://twitter.com/AllanKiptalam/status/988802696319680514?ref_src=twsrc%5Etfw">April 24, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->

                      <marquee bgcolor="white"><i class="fa fa-twitter"></i>Latest news...</marquee>
                    
                    <br><br>
                    <a href="#" class="btn">Get More!</a>
                    </p>
                </div>
            </div>
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">

      <div class="col-sm-12 text-center"> 
        <a href="{{ route('privacy_terms') }}"> Privacy and Terms of use</a>
         </div>
        <div class="col-sm-12 text-center"> 
        Copyright 2018 | All Rights Reserved -- Website by -  <a href="https://www.twitter.com/AllanKiptalam"> Kiptalam Allan</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="./js/modernizr-latest.js"></script> 
<script src="./js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="./js/bootstrap.min.js" type="text/javascript"></script> 
<script src="./js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="./js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="./js/jquery.nav.js" type="text/javascript"></script> 
<script src="./js/jquery.fittext.js"></script> 
<script src="./js/waypoints.js"></script> 
<script src="./js/custom.js" type="text/javascript"></script> 
<script src="./js/owl-carousel/owl.carousel.js"></script>
<!--Testimonials--> 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script> -->

</body>
</html>
