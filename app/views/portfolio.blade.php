<!DOCTYPE html>
<html>

<head>
    <title>Portfolio</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/89f2f44ba07ea3fff7e561c2142813b278c2d6c6/devicon.min.css">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>

    <style>
        html {
          height: 100%;
          max-width: 100%;
          overflow: hidden;
        }

        body {
          margin: 0;
          padding: 0;
          height: 100%;
          -webkit-transform-style: preserve-3d;
                  transform-style: preserve-3d;
        }

        .page-wrap {
          margin: 0;
          padding: 0;
          -webkit-perspective: 1px;
                  perspective: 1px;
          height: 100%;
          overflow-y: scroll;
          overflow-x: hidden;
          font-family: 'avenir next', avenir,
                       helvetica, 'helvetica neue',
                       arial, sans-serif;
          color: black;
          background-color: black;
        }

        h1 {
          font-size: 250%
        }

        p {
          font-size: 140%;
          line-height: 150%;
        }

        .slide {
          position: relative;
          padding: 25vh 15px 25vh 2px;
          min-height: 100%;
          max-width: 100vw;
          box-sizing: border-box;
          -webkit-transform-style: inherit;
                  transform-style: inherit;
        }

        .headshot {
          width: 220px;
          padding: .5em;
          margin-bottom: -3em;
          border-radius: 50%;
          background: rgba(255, 255, 255, .4);
          box-shadow: .5em .5em .5em rgba(0, 0, 0, .4);
        }

        .slide:before {
          content: "";
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
        }

        .content {
          width: 80vw;
          max-width: 45em;
          padding: 1.5em 2em;
          margin: 0 auto;
          background: rgba(255, 255, 255, .75);
          box-shadow: .5em .5em .5em rgba(0, 0, 0, .4);
        }

        .slide,
        .slide:before {
          background: 50% 50% / cover;
        }

        .header {
          text-align: center;
          font-size: 175%;
          color: #fff;
          text-shadow: 0 2px 2px #000;
        }

        #slide1 {
          background: -webkit-linear-gradient(rgba(0, 116, 217, .75), rgba(222, 68, 21, .85)), url(/img/lorne/lorne2.jpg) center/cover;
          background: linear-gradient(rgba(0, 116, 217, .75), rgba(222, 68, 21, .85)), url(/img/lorne/lorne2.jpg) center/cover;
          -webkit-transform: translateZ(-1px) scale(2);
                  transform: translateZ(-1px) scale(2);
          z-index: -1;
        }

        #slide2 {
          background-color: black;
          background-image: 
            -webkit-radial-gradient(white, rgba(255, 255, 255, .2) 2px, transparent 40px), -webkit-radial-gradient(white, rgba(255, 255, 255, .15) 1px, transparent 30px), -webkit-radial-gradient(white, rgba(255, 255, 255, .1) 2px, transparent 40px), -webkit-radial-gradient(rgba(255, 255, 255, .4), rgba(255, 255, 255, .1) 2px, transparent 30px);
          background-image: 
            radial-gradient(white, rgba(255, 255, 255, .2) 2px, transparent 40px), 
            radial-gradient(white, rgba(255, 255, 255, .15) 1px, transparent 30px), 
            radial-gradient(white, rgba(255, 255, 255, .1) 2px, transparent 40px), 
            radial-gradient(rgba(255, 255, 255, .4), rgba(255, 255, 255, .1) 2px, transparent 30px);
          background-size: 
            550px 550px, 
            350px 350px, 
            250px 250px, 
            150px 150px;
          background-position: 
            0 0, 
            40px 60px, 
            130px 270px, 
            70px 100px;
        }

        #slide3 {
          background: url(/img/lorne/lorne4.jpg) center/cover;
        }

        #slide4 {
          background: url(/img/lorne/lorne3.jpg) center/cover;
        }

        .signature {
          text-align: center;
          margin-top: 3.5em;
        }

        .signature p {
          color: #666;
          font-size: .8em;
          font-weight: bold;
          text-transform: uppercase;
          font-style: italic;
          letter-spacing: .2em;
          margin: 0;
          padding: 0;
        }

        .signature img {
          width: 320px;
          max-width: 50vw;
        }

        #footer {
          height: 150px;
        }

        #footer div {
          width: 100vw;
        }

        #footer img {
          max-width: 95vw;
          max-height: 125px;
        }

        .center {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
          -webkit-justify-content: center;
              -ms-flex-pack: center;
                  justify-content: center;
          -webkit-box-align: center;
          -webkit-align-items: center;
              -ms-flex-align: center;
                  align-items: center;
        }
        /* App images */

        .app-block {
          -webkit-flex-flow: row wrap;
              -ms-flex-flow: row wrap;
                  flex-flow: row wrap;
        }

        .app {
          width: 300px;
          max-width: 85vw;
          margin: 1em;
          box-shadow: .3em .3em .3em rgba(0, 0, 0, .4);
        }
        /* Icon Styles*/

        i {
          display: inline;
        }

        .fa {
          font-size: calc(1em + 4vw);
          padding: .15em .2em;
          border-radius: 50%;
          background: rgba(255, 255, 255, .4);
          margin: 0 .25em;
          box-shadow: .1em .1em .1em rgba(0, 0, 0, .4);
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .clickable {
          -webkit-transform: translateZ(0);
                  transform: translateZ(0);
        }

        a {
          color: rgb(222, 68, 21);
          text-decoration: none;
        }

        a:hover {
          color: rgb(0, 116, 217);
        }

        .fa-twitter {
          color: #4099FF;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .fa-twitter:hover {
          color: white;
          background: #4099FF;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .fa-github {
          color: #333;
        }

        .fa-github:hover {
          color: white;
          background: #333;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .fa-dribbble {
          color: #ea4c89;
        }

        .fa-dribbble:hover {
          color: white;
          background: #ea4c89;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .fa-codepen {
          color: black;
        }

        .fa-codepen:hover {
          color: white;
          background: black;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .fa-stack-overflow {
          color: #fe7a15;
        }

        .fa-stack-overflow:hover {
          color: white;
          background: #fe7a15;
          -webkit-transition: all .5s ease;
                  transition: all .5s ease;
        }

        .screen-reader-text {
          position: absolute;
          top: -9999px;
          left: -9999px;
        }

        .colored{
            font-size: 950%;
        }

    </style>

</head>

<body>

    <div class="page-wrap">
      <div id="slide1" class="slide">
        <div class="center">
          <img class="headshot" src="/img/lorne/lorne1.jpg">
        </div>
        <div class="content">
          <h1>Lorne Barfield</h1>
          <p class="clickable">I'm a full-stack web developer currently residing in the great city of San Antonio. I've been learning and studying through <a href="//codeup.com"
            target="_blank">Codeup</a> to help build up my programming skills, and you can see some of my projects below. I have also worked as a paralegal, basketball coach, and bartender.  In my free time, I sing opera as well as with a local group, play basketball, and teach blues and swing dancing. View my <a href="/img/resume.pdf">resume</a> here. 
          </p>
          <h2>Social profiles</h2>
          <div class="icon-block center clickable">
            <a href="//twitter.com/lorne621" target="_blank">
              <i class="fa fa-twitter">
                <span class="screen-reader-text">Twitter</span>
              </i>
            </a>
            <a href="//github.com/lorne21" target="_blank">
              <i class="fa fa-github">
                <span class="screen-reader-text">Github</span>
              </i>
            </a>
          </div>
        </div>
      </div>
      <div id="slide2" class="slide">
        <div class="content">
          <h1>Early Front-End Projects</h1>
          <p>These are a few of the projects that I developed early on in my programming training.</p>
          <p class="app-block center clickable">
            <a href="{{ action('HomeController@getSimon') }}">
              <img class="app" src="/img/simon.png" alt="Simple Simon" title="Simple Simon">
            </a>
            <a href="{{ action('HomeController@getMole') }}">
              <img class="app" src="/img/whackamole.png" alt="mole" title="mole">
            </a>
          </p>
        </div>
      </div>
      <div id="slide3" class="slide">
        <div class="content">
          <h1>Intermediate Projects</h1>
          <p>These projects involve a lot of php and laravel with a heavy bootstrap theme</p>
          <p class="app-block center clickable">
            <a href="http://codepen.io/denmch/pen/domPQN" target="_blank">
              <img class="app" src="https://lh3.googleusercontent.com/RfmTasMXC55JA_k55DhLfxTFFT3KziCyjw1DVdJ1hCiD=w600-h472-no" alt="Camper News app" title="Camper News app">
            </a>
            <a href="{{ action('PostsController@index') }}">
              <img class="app" src="/img/blog.png" alt="blog" title="blog">
            </a>
          </p>
        </div>
      </div>
      <div id="slide4" class="slide">
        <div class="content">
          <h1>Technologies</h1>
          <p>These are a few of the languages and technologies that I know with various levels of proficiency!</p>
          <div class="app-block center">
            <i class="devicon-angularjs-plain-wordmark colored"></i>
            <i class="devicon-bootstrap-plain-wordmark colored"></i>
            <i class="devicon-css3-plain-wordmark colored"></i>
            <i class="devicon-git-plain-wordmark colored"></i>
            <i class="devicon-html5-plain-wordmark colored"></i>
            <i class="devicon-javascript-plain colored"></i>
            <i class="devicon-jquery-plain-wordmark colored"></i>
            <i class="devicon-laravel-plain-wordmark colored"></i>
            {{-- <i class="devicon-mysql-plain-wordmark colored"></i> --}}
            {{-- <i class="devicon-nodejs-plain colored"></i> --}}
            <i class="devicon-php-plain colored"></i>
            {{-- <i class="devicon-python-plain-wordmark colored"></i> --}}
            <i class="devicon-sass-original colored"></i>
          </div>
        </div>
      </div>
    </div>
    
</body>

</html>