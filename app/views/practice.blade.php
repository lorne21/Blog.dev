<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <title>Rhymes with Corn</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/css/linea-icon.css" />
  <link rel="stylesheet" href="/css/fancy-buttons.css" />
  
  <!--=== Google Fonts ===-->
  <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <!--=== Other CSS files ===-->
  <link rel="stylesheet" href="/css/animate.css" />
  <link rel="stylesheet" href="/css/jquery.vegas.css" />
  <link rel="stylesheet" href="/css/baraja.css" />
  <link rel="stylesheet" href="/css/jquery.bxslider.css" />
  
  <!--=== Main Stylesheets ===-->
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/responsive.css" />
  
  <!--=== Color Scheme ===-->
  <link rel="stylesheet" id="scheme-source" href="/css/schemes/orange.css" />
  
  <style>
    .features .section-title h3 {
        color: #666;
    }
  </style>
  <!--=== Internet explorer fix ===-->
  <!-- [if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif] -->
  
  
</head>
<body>
  <!--=== Preloader section starts ===-->
  <section id="preloader">
    <div class="loading-circle fa-spin"></div>
  </section>
  <!--=== Preloader section Ends ===-->
  
  <!--=== Header section Starts ===-->
  <div id="header" class="header-section">
    <!-- sticky-bar Starts-->
    <div class="sticky-bar-wrap">
      <div class="sticky-section">
        <div id="topbar-hold" class="nav-hold container">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!--=== Site Name ===-->
              <a class="site-name navbar-brand" href="#"><span>R</span>hymes with Corn</a>
            </div>
            
            <!-- Main Navigation menu Starts -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="#header">Home</a></li>
                <li><a href="#step-1">About</a></li>
                <li><a href="#section-screenshots">Projects</a></li>
                {{-- <li><a href="#section-feature">Blog</a></li> --}}
                {{-- <li><a href="#section-contact">Contact Me</a></li> --}}
              </ul>
            </div>
            <!-- Main Navigation menu ends-->
          </nav>
        </div>
      </div>
    </div>
    <!-- sticky-bar Ends-->
    <!--=== Header section Ends ===-->
    
    <!--=== Home Section Starts ===-->
    <div id="section-home" class="home-section-wrap center">
      <div class="section-overlay"></div>
      <div class="container home">
        <div class="row">
          <h1 class="well-come">Lorne Barfield</h1>
          
          <div class="col-md-8 col-md-offset-2">
            <p class="intro-message">Full Stack Web Developer</p>
            <p class="intro-message">San Antonio, Texas</p>
          </div>
        </div>
      </div>
    </div>
    <!--=== Home Section Ends ===-->
  </div>
  
  
  
  
  <!--=== Step-1 section Starts ===-->
  <section id="step-1" class="section-step step-wrap">
    <div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
      <div class="row">
        <!-- Step Description Starts -->
        <div class="col-md-8 step-desc">
          <div class="col-md-2 center">
            <div class="step-no" style="visibility: hidden;">
              <span class="no-inner">1</span>
            </div>
          </div>
          
          <div class="col-md-10 step-details">
              <h3 class="step-title color-scheme">About Me</h3>
              <p class="step-description">I'm a full-stack web developer currently residing in the great city of San Antonio. I am a Codeup Programming Bootcamp graduate and you can see some of my projects below. I've also worked as a paralegal, opera singer, basketball coach, and bartender.  In my free time, I sing blues and folk with a local group, play basketball, and teach blues and swing dancing.</p>
              
              <ul class="sub-steps"> <!-- Sub steps here -->
                <li>
                  <span class="icon fa fa-pencil-square-o color-scheme"> Languages:</span>
                  <span class="sub-text">Angular JS, jQuery, MySQL, SASS, Laravel, PHP, JavaScript</span>
                </li>
              </ul>
          </div> <!-- End step-details -->
        </div>
        <!-- Step Description Ends -->
        <div class="col-md-4 step-img">
          <img src="img/lorne/lorne1.jpg" alt="" /> <!-- Step Photo Here -->
        </div>
      </div>
    </div>
  </section>
  <!--=== Step-1 section Ends ===-->
  
  
  <!--=== ScreenShots section Starts ===-->
  <section id="section-screenshots" class="screenshots-wrap">
    <div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="1000">
      <div class="row porfolio-container">
        <div class="col-md-10 col-md-offset-1 center section-title">
          <h3>My Projects</h3>
        </div>
        @foreach($projects as $project)
        <!-- Single screenshot starts -->
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="screenshot">
            <div class="photo-box">
              <img src="{{ $project->img }}" alt="" />
              <div class="photo-overlay">
                <h4>{{ $project->title}}</h4>
              </div>
              <span class="photo-zoom">
                <a href="{{ action('ProjectsController@show', $project->id) }}" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
              </span>
            </div>
            
          </div>
        </div>
        <!-- Single screenshot ends -->
        @endforeach
        
        
      </div>
      
      <div id="portfolio-loader" class="center">
        <div class="loading-circle fa-spin"></div>
      </div> <!--=== Portfolio loader ===-->
      
      <div id="portfolio-load"></div><!--=== ajax content will be loaded here ===-->
      
      <div class="col-md-12 center back-button">
        <a class="backToProject fancy-button button-line bell btn-col" href="#">
          Back
          <span class="icon">
            <i class="fa fa-arrow-left"></i>
          </span>
        </a>
      </div><!--=== Single portfolio back button ===-->
    </div>
  </section>
  <!--=== ScreenShots section Ends ===-->
  
{{--   <!--=== Features section Starts ===-->
  <section id="section-feature" class="feature-wrap">
    <div class="container features center">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 center section-title" id='blog'>
          <h3>My Blog</h3>
        </div>
        <div class="col-lg-12">
            <!--Features container Starts -->
            <ul id="card-ul" class="features-hold baraja-container">
            
              <!-- Single Feature Starts -->
              <li class="single-feature" title="Card style">
                <img src="images/5.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">Card style</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut.
                </p>
                
                  <a href="#" class="fancy-button button-line btn-col small vertical">
                    Details
                    <span class="icon">
                      <i class="fa fa-leaf"></i>
                    </span>
                  </a>
                
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="50+ SVG Icon included">
                <img src="images/2.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">50+ SVG Icon included</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="MailChimp Ready">
                <img src="images/3.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">MailChimp Ready</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="4 home style">
                <img src="images/4.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">4 home style</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="Parallax Backgrounds">
                <img src="images/5.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">Parallax Backgrounds</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="Ajax contact form">
                <img src="images/6.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">Ajax contact form</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="unlimited Google fonts">
                <img src="images/7.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">unlimited Google fonts</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->
              
              <!-- Single Feature Starts -->
              <li class="single-feature" title="Feature heading">
                <img src="images/8.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
                <h4 class="feature-title color-scheme">Feature heading</h4>
                <p class="feature-text">
                  Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
                </p>
                <a href="#" class="fancy-button button-line btn-col small zoom">
                  Details
                  <span class="icon">
                    <i class="fa fa-leaf"></i>
                  </span>
                </a>
              </li>
              <!-- Single Feature Ends -->


            </ul>
            <!--Features container Ends -->
            
            <!-- Features Controls Starts -->
            <div class="features-control relative">
              <button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-prev" title="Previous" >
                <span class="icon">
                  <i class="fa fa-arrow-left"></i>
                </span>
              </button>
              <button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-expand" title="Expand" >
                <span class="icon">
                  <i class="fa fa-expand"></i>
                </span>
              </button>
              <button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-all" title="All">
                <span class="icon">
                  All
                </span>
              </button>
              <button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-close" title="Collapse" >
                <span class="icon">
                  <i class="fa fa-compress"></i>
                </span>
              </button>
              <button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-next" title="Next" >
                <span class="icon">
                  <i class="fa fa-arrow-right"></i>
                </span>
              </button>
            </div>
            <!-- Features Controls Ends -->
        </div>
      </div>
    </div>
  </section> --}}
  <!--=== Features section Ends ===-->
  

  <!--=== Contact section Starts ===-->
  {{-- <section id="section-contact" class="contact-wrap">
  <div class="section-overlay"></div>
    <div class="container contact center animated" data-animation="flipInY" data-animation-delay="1000">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-10 col-md-offset-1 center section-title">
            <h3>Leave a message</h3>
          </div>
          
          <div class="confirmation">
            <p><span class="fa fa-check"></span></p>
          </div>
          
          <form class="contact-form support-form">
            
            <div class="col-lg-12">
              <input id="name" class="input-field form-item field-name" type="text" required="required" name="contact-name" placeholder="Name" />

              <input id="email" class="input-field form-item field-email" type="email" required="required" name="contact-email" placeholder="Email" />

              <input id="subject" class="input-field form-item field-subject" type="text" required="required" name="contact-subject" placeholder="Subject" />
              <textarea id="message" class="textarea-field form-item field-message" rows="10" name="contact-message" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="fancy-button button-line button-white large zoom subform">
              Send message
              <span class="icon">
                <i class="fa fa-paper-plane-o"></i>
              </span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section> --}}
  <!--=== Contact section Ends ===-->
  
  <!--=== Footer section Starts ===-->
  <div id="section-footer" class="footer-wrap">
    <div class="container footer center">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="footer-title"><!-- Footer Title -->
            <a class="site-name" href="#"><span>R</span>hymes with corn</a>
          </h4>
          
          <!-- Social Links -->
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              <li><a href="#"><i class="fa fa-github-square"></i></a></li>
            </ul>
          </div>
          
          <p class="copyright">All rights reserved &copy; 2015</p>
        </div>
      </div>
    </div>
  </div>
  <!--=== Footer section Ends ===-->
  
<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="/js/modernizr.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="/js/jquery.baraja.js"></script>
<script type="text/javascript" src="/js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="/js/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/jquery.nav.js"></script>
<script type="text/javascript" src="/js/jquery.appear.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="/js/custom.js"></script>

</body>
</html>