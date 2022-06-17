@extends('layouts.default')

@section('content')

<head>
  <style>
  /*

  ==================================================================
     TOC:
     a. General Styles
     b. Header Styles
     c. About Section
     d. CS202 Lesson Section
     e. Laravel Topic Section
     f. Life Qoutes Section
     g. Footer
  /* ------------------------------------------------------------------ */
  /* a. General Styles
  /* ------------------------------------------------------------------ */

  body { background: #0f0f0f; }

  /* ------------------------------------------------------------------ */
  /* b. Header/About me Styles
  /* ------------------------------------------------------------------ */

  header

  html, body {
    width: 100%;
    height:100%;
  }

  body {
      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      animation: gradient 5s ease infinite;
  }

  @keyframes gradient {
      0% {
          background-position: 0% 50%;
      }
      50% {
          background-position: 100% 50%;
      }
      100% {
          background-position: 0% 50%;
      }
  }
  {
     position: relative;
     height: 800px;
     min-height: 500px;
     width: 100%;
     background: #EE82EE;
     background-size: cover !important;
  	-webkit-background-size: cover !important;
     text-align: center;
     overflow: hidden;
  }

  header:before {
     content: '';
     display: inline-block;
     vertical-align: middle;
     height: 100%;
  }
  header .banner {
     display: inline-block;
     vertical-align: middle;
     margin: 0 auto;
     width: 85%;
     padding-bottom: 20px;
     text-align: center;
  }

  header .banner-text { width: 80%; }
  header .banner-text h1 {

     font: 55px/1.0em 'opensans-bold', sans-serif;
     color: #000;
        text-align: center;
     letter-spacing: -2px;
     margin: 0 auto 18px auto;
     text-shadow: 0px 1px 3px rgba(0, 0, 0, .8);
  }
  header .banner-text h3 {
     font: 22px/1.9em 'librebaskerville-regular', serif;
     color: #FFFFFF;
        text-align: center;
     margin: 0 auto;
     width: 80%;
     text-shadow: 0px 1px 2px rgba(0, 0, 0, .5);
  }
  header .banner-text h3 span,
  header .banner-text h3 a {
     color: #000;
  }
  header .banner-text hr {
     width: 60%;
     margin: 18px auto 24px auto;
     border-color: #2F2D2E;
     border-color: rgba(150, 150, 150, .1);
  }

  /* header social links */
  header .social {
     margin: 24px 0;
     padding: 0;
     font-size: 30px;
     text-shadow: 0px 1px 2px rgba(0, 0, 0, .8);
  }
  header .social li {
     display: inline-block;
     margin: 0 15px;
     padding: 0;
  }
  header .social li a { color: #fff; }
  header .social li a:hover { color: #11ABB0; }

  /* scrolldown link */
  header .scrolldown a {
     position: absolute;
     bottom: 30px;
     left: 50%;
     margin-left: -29px;
     color: #fff;
     display: block;
     height: 42px;
     width: 42px;
     font-size: 42px;
     line-height: 42px;
     color: #fff;
     border-radius: 100%;

     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
  }
  header .scrolldown a:hover { color: #11ABB0; }

  /* primary navigation
  --------------------------------------------------------------------- */
  #nav-wrap ul, #nav-wrap li, #nav-wrap a {
  	 margin: 0;
  	 padding: 0;
  	 border: none;
  	 outline: none;
  }

  /* nav-wrap */
  #nav-wrap {
     font: 16px 'opensans-bold', sans-serif;
     width: 100%;
     text-transform: uppercase;
     letter-spacing: 2.5px;
     margin: 0 auto;
     z-index: 100;
     position: fixed;
     left: 0;
     top: 0;
  }
  .opaque { background-color: #333; }

  /* hide toggle button */
  #nav-wrap > a.mobile-btn { display: none; }

  ul#nav {
     min-height: 48px;
     width: auto;

     /* center align the menu */
     text-align: center;
  }
  ul#nav li {
     position: relative;
     list-style: none;
     height: 48px;
     display: inline-block;
  }

  /* Links */
  ul#nav li a {

  /* 8px padding top + 8px padding bottom + 32px line-height = 48px */

     display: inline-block;
     padding: 8px 13px;
     line-height: 32px;
  	text-decoration: none;
     text-align: left;
     color: #fff;

  	-webkit-transition: color .2s ease-in-out;
  	-moz-transition: color .2s ease-in-out;
  	-o-transition: color .2s ease-in-out;
  	-ms-transition: color .2s ease-in-out;
  	transition: color .2s ease-in-out;
  }

  ul#nav li a:active { background-color: transparent !important; }
  ul#nav li.current a { color: #F06000; }


  /* ------------------------------------------------------------------ */
  /* c. CS202 lESSON Section
  /* ------------------------------------------------------------------ */

  #about

  {

     background: #ffffb5 ;
     padding-top: 70px;
     padding-bottom: 66px;


  }

  #about a, #about a:visited  { color: #fff; }
  #about a:hover, #about a:focus { color: #11ABB0; }

  #about h2 {
     font: 22px/30px 'opensans-bold', sans-serif;
     color: #90857B;
     margin-bottom: 12px;
    margin: 18px auto 24px auto;
    text-align: center;
  }
  #about p {
     line-height: 30px;
      width: 90%;
     color: #7A7A7A;
     text-align: justify;
     margin-left: 90px

  }
  #about .contact-details { width: 45%; }

  #about .main-col { padding-right: 15%; }

  /* ------------------------------------------------------------------ */
  /* d. lARAVEL Topic Section
  /* ------------------------------------------------------------------ */

  #resume

  body {
      margin: 0;
      height: 100vh;
      font-weight: 100;
      background: radial-gradient(#a23982,#1f1013);
      -webkit-overflow-Y: hidden;
      -moz-overflow-Y: hidden;
      -o-overflow-Y: hidden;
      overflow-y: hidden;
      -webkit-animation: fadeIn 1 1s ease-out;
      -moz-animation: fadeIn 1 1s ease-out;
      -o-animation: fadeIn 1 1s ease-out;
      animation: fadeIn 1 1s ease-out;
  }
  .light {
      position: absolute;
      width: 0px;
      opacity: .75;
      background-color: white;
      box-shadow: #e9f1f1 0px 0px 20px 2px;
      opacity: 0;
      top: 100vh;
      bottom: 0px;
      left: 0px;
      right: 0px;
      margin: auto;
  }

  .x1{
    -webkit-animation: floatUp 4s infinite linear;
    -moz-animation: floatUp 4s infinite linear;
    -o-animation: floatUp 4s infinite linear;
    animation: floatUp 4s infinite linear;
     -webkit-transform: scale(1.0);
     -moz-transform: scale(1.0);
     -o-transform: scale(1.0);
    transform: scale(1.0);
  }

  .x2{
    -webkit-animation: floatUp 7s infinite linear;
    -moz-animation: floatUp 7s infinite linear;
    -o-animation: floatUp 7s infinite linear;
    animation: floatUp 7s infinite linear;
    -webkit-transform: scale(1.6);
    -moz-transform: scale(1.6);
    -o-transform: scale(1.6);
    transform: scale(1.6);
    left: 15%;
  }

  .x3{
    -webkit-animation: floatUp 2.5s infinite linear;
    -moz-animation: floatUp 2.5s infinite linear;
    -o-animation: floatUp 2.5s infinite linear;
    animation: floatUp 2.5s infinite linear;
    -webkit-transform: scale(.5);
    -moz-transform: scale(.5);
    -o-transform: scale(.5);
    transform: scale(.5);
    left: -15%;
  }

  .x4{
    -webkit-animation: floatUp 4.5s infinite linear;
    -moz-animation: floatUp 4.5s infinite linear;
    -o-animation: floatUp 4.5s infinite linear;
    animation: floatUp 4.5s infinite linear;
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
    left: -34%;
  }

  .x5{
    -webkit-animation: floatUp 8s infinite linear;
    -moz-animation: floatUp 8s infinite linear;
    -o-animation: floatUp 8s infinite linear;
    animation: floatUp 8s infinite linear;
    -webkit-transform: scale(2.2);
    -moz-transform: scale(2.2);
    -o-transform: scale(2.2);
    transform: scale(2.2);
    left: -57%;
  }

  .x6{
    -webkit-animation: floatUp 3s infinite linear;
    -moz-animation: floatUp 3s infinite linear;
    -o-animation: floatUp 3s infinite linear;
    animation: floatUp 3s infinite linear;
    -webkit-transform: scale(.8);
    -moz-transform: scale(.8);
    -o-transform: scale(.8);
    transform: scale(.8);
    left: -81%;
  }

  .x7{
    -webkit-animation: floatUp 5.3s infinite linear;
    -moz-animation: floatUp 5.3s infinite linear;
    -o-animation: floatUp 5.3s infinite linear;
    animation: floatUp 5.3s infinite linear;
    -webkit-transform: scale(3.2);
    -moz-transform: scale(3.2);
    -o-transform: scale(3.2);
    transform: scale(3.2);
    left: 37%;
  }

  .x8{
    -webkit-animation: floatUp 4.7s infinite linear;
    -moz-animation: floatUp 4.7s infinite linear;
    -o-animation: floatUp 4.7s infinite linear;
    animation: floatUp 4.7s infinite linear;
    -webkit-transform: scale(1.7);
    -moz-transform: scale(1.7);
    -o-transform: scale(1.7);
    transform: scale(1.7);
    left: 62%;
  }

  .x9{
    -webkit-animation: floatUp 4.1s infinite linear;
    -moz-animation: floatUp 4.1s infinite linear;
    -o-animation: floatUp 4.1s infinite linear;
    animation: floatUp 4.1s infinite linear;
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
    left: 85%;
  }

  @-webkit-keyframes floatUp{
    0%{top: 100vh; opacity: 0;}
    25%{opacity: 1;}
    50%{top: 0vh; opacity: .8;}
    75%{opacity: 1;}
    100%{top: -100vh; opacity: 0;}
  }
  @-moz-keyframes floatUp{
    0%{top: 100vh; opacity: 0;}
    25%{opacity: 1;}
    50%{top: 0vh; opacity: .8;}
    75%{opacity: 1;}
    100%{top: -100vh; opacity: 0;}
  }
  @-o-keyframes floatUp{
    0%{top: 100vh; opacity: 0;}
    25%{opacity: 1;}
    50%{top: 0vh; opacity: .8;}
    75%{opacity: 1;}
    100%{top: -100vh; opacity: 0;}
  }
  @keyframes floatUp{
    0%{top: 100vh; opacity: 0;}
    25%{opacity: 1;}
    50%{top: 0vh; opacity: .8;}
    75%{opacity: 1;}
    100%{top: -100vh; opacity: 0;}
  }

  .header{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'Roboto', sans-serif;
    font-weight: 200;
    color: white;
    font-size: 2em;
  }

  #head1, #head2,#head3, #head4, #head5{
    opacity: 0;
  }

  #head1{
    -webkit-animation: fadeOut 1 5s ease-in;
    -moz-animation: fadeOut 1 5s ease-in;
    -o-animation: fadeOut 1 5s ease-in;
    animation: fadeOut 1 5s ease-in;
  }

  #head2{
    -webkit-animation: fadeOut 1 5s ease-in;
    -moz-animation: fadeOut 1 5s ease-in;
    -o-animation: fadeOut 1 5s ease-in;
    animation: fadeOut 1 5s ease-in;
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    animation-delay: 6s;
  }

  #head3{
    -webkit-animation: fadeOut 1 5s ease-in;
    -moz-animation: fadeOut 1 5s ease-in;
    -o-animation: fadeOut 1 5s ease-in;
    animation: fadeOut 1 5s ease-in;
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    animation-delay: 12s;
  }

  #head4{
    -webkit-animation: fadeOut 1 5s ease-in;
    -moz-animation: fadeOut 1 5s ease-in;
    -o-animation: fadeOut 1 5s ease-in;
    animation: fadeOut 1 5s ease-in;
    -webkit-animation-delay: 17s;
    -moz-animation-delay: 17s;
    -o-animation-delay: 17s;
    animation-delay: 17s;
  }

  #head5{
    -webkit-animation: finalFade 1 5s ease-in;
    -moz-animation: finalFade 1 5s ease-in;
    -o-animation: finalFade 1 5s ease-in;
    animation: finalFade 1 5s ease-in;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-delay: 22s;
    -moz-animation-delay: 22s;
    -o-animation-delay: 22s;
    animation-delay: 22s;
  }

  @-webkit-keyframes fadeIn{
    from{opacity: 0;}
    to{opacity: 1;}
  }

  @-moz-keyframes fadeIn{
    from{opacity: 0;}
    to{opacity: 1;}
  }

  @-o-keyframes fadeIn{
    from{opacity: 0;}
    to{opacity: 1;}
  }

  @keyframes fadeIn{
    from{opacity: 0;}
    to{opacity: 1;}
  }

  @-webkit-keyframes fadeOut{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 0;}
  }

  @-moz-keyframes fadeOut{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 0;}
  }

  @-o-keyframes fadeOut{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 0;}
  }

  @keyframes fadeOut{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 0;}
  }

  @-webkit-keyframes finalFade{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 1;}
  }

  @-moz-keyframes finalFade{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 1;}
  }

  @-o-keyframes finalFade{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 1;}
  }

  @keyframes finalFade{
    0%{opacity: 0;}
    30%{opacity: 1;}
    80%{opacity: .9;}
    100%{opacity: 1;}
  }

  #footer{
    font-family: 'Roboto', sans-serif;
    font-size: 1.2em;
    color: white;
    position: fixed;
    -webkit-transform: translate(95vw,90vh);
    -moz-transform: translate(95vw,90vh);
    transform: translate(95vw,90vh);
    transform: translate(95vw,90vh);
  }


   {
     background: #fff ;
     padding-top: 90px;
     padding-bottom: 72px;
     overflow: hidden;
  }



  #resume a, #resume a:visited  { color: #11ABB0; }
  #resume a:hover, #resume a:focus { color: #313131; }

  #resume h1 {
     font: 38px/24px 'opensans-bold', sans-serif;
     text-transform: uppercase;
     letter-spacing: 1px;
     text-align: center;
  }
  #resume h1 span {
     border-bottom: 3px solid #11ABB0;
     padding-bottom: 6px;
     text-align: center;
  }
  #resume h3 {
     font: 23px/28px 'opensans-bold', sans-serif;
     text-align: center;
  }

  #resume .header-col { padding-top: 9px; }
  #resume .main-col { padding-right: 10%; }

  .education, .work {
     margin-bottom: 48px;
     padding-bottom: 24px;
     border-bottom: 1px solid #E8E8E8;
  }
  #resume .info {
     font: 16px/24px 'librebaskerville-italic', serif;
     color: #ffffb5;
     margin-bottom: 18px;
     margin-top: 9px;
     text-align: center;
     margin-left: 90px;
  }
  #resume .info span {
     margin-right: 5px;
     margin-left: 5px;
  }

  }
  /* ------------------------------------------------------------------ */
  /* e. Future me
  /* ------------------------------------------------------------------ */

  #portfolio {
     background: #ebeeee;
     padding-top: 100px;
     padding-bottom: 70px;
  }
  #portfolio h1 {
     font: 24px/34px 'opensans-semibold', sans-serif;
     text-transform: uppercase;
     letter-spacing: 1px;
     text-align: center;
     margin-bottom: 48px;
     color: #000000;
  }
  #portfolio p {
     font: 14px/34px 'opensans-semibold', sans-serif;
     text-transform: uppercase;
     letter-spacing: 1px;
     text-align: justify;
     margin-bottom: 48px;
     color: #000000;
     width: 80%;
     margin-left: 100px;
   }


  /* f. Life Qoutes
  /* ------------------------------------------------------------------ */

  #call-to-action {
     background: #212121;
     padding-top: 66px;
     padding-bottom: 48px;
  }
  #call-to-action h1 {
     font: 18px/24px 'opensans-bold', sans-serif;
     text-transform: uppercase;
     letter-spacing: 3px;
     color: #fff;

  }


  #call-to-action .action {
     margin-top: 12px;
  }
  #call-to-action h2 {
     font: 28px/36px 'opensans-bold', sans-serif;
     color: #EBEEEE;
     margin-bottom: 6px;
     margin-left: 10%;
  }
  #call-to-action h2 a {
     color: inherit;
  }
  #call-to-action p {
     color: #636363;
     font-size: 17px;
     margin-left:20%;
  }
  /*#
  call-to-action .button {
  	color:#fff;
     background: #0D0D0D;
  }



  footer .social-links li:first-child { margin-left: 0; }

  /* Go To Top Button */
  #go-top {
  	position: absolute;
  	top: -24px;
     left: 50%;
     margin-left: -30px;
  }
  #go-top a {
  	text-decoration: none;
  	border: 0 none;
  	display: block;
  	width: 60px;
  	height: 60px;
  	background-color: #525252;

  	-webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
     -o-transition: all 0.2s ease-in-out;
     -ms-transition: all 0.2s ease-in-out;
     transition: all 0.2s ease-in-out;

     color: #fff;
     font-size: 21px;
     line-height: 60px;
   	border-radius: 100%;
  }
  #go-top a:hover { background-color: #0F9095; }
  </style>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Final Activity</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">About Me</a></li>
            <li><a class="smoothscroll" href="#about">CS202 LESSON</a></li>
	         <li><a class="smoothscroll" href="#resume">Laravel Topic</a></li>
            <li><a class="smoothscroll" href="#portfolio">Future Me</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
           <br><br><br><br>
            <h1 class="responsive-headline">I'm Alma Z. Leyco.</h1>

            <h3>I'm 21 years old, <span>a 3rd year College </span>student, and taking<span> Bachelor of Science in Computer Science</span> in <span>Pamantasan ng Lunsod ng Pasig.</span> I'm living at Brgy. Sta.Lucia Pasig City.
            I'm a hardworking, flexible and caring person.i like reading, playing volleyall, listening to music, and  hanging out with friends.<br> Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about my favorite lesson in CS202</a>.</h3>
            <hr />

            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="nine columns main-col">


            <h2>CS202 Lesson:Concurrency Control</h2>
          <p>
              Concurrency control concept comes under the Transaction in database management system (DBMS).
              It is a procedure in DBMS which helps us for the management of two simultaneous processes to
              execute without conflicts between each other, these conflicts occur in multi user systems.

Concurrency can simply be said to be executing multiple transactions at a time.
It is required to increase time efficiency. If many transactions try to access the same data,
 then inconsistency arises. Concurrency control required to maintain consistency data.

            </p>

            <div class="row">

               <div class="columns contact-details">
<br><br>
                  <h2><b>Advantages</b></h2>
                  <p class="address">
                 <span>  The advantages of concurrency control are: −</span><br>

 <span><em>-Waiting time will be decreased. </span></em><br>

 <span><em>-Response time will decrease. </span></em><br>

 <span><em>-Resource utilization will increase. </span></em><br>

 <span><em>-System performance & Efficiency is increased. </span></em><br>

					   </p>

               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- CS202 lESSON Section End-->


   <!-- Laravel Topic Section
   ================================================== -->
   <section id="resume">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
       <div class='light x1'></div>
       <div class='light x2'></div>
       <div class='light x3'></div>
       <div class='light x4'></div>
       <div class='light x5'></div>
       <div class='light x6'></div>
       <div class='light x7'></div>
       <div class='light x8'></div>
       <div class='light x9'></div>

      <!-- Laravel
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
           <br><br>
            <h1><span><b>Laravel</span></b></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">
                 <br><br><br>

                  <h3>Laravel is an open-source web MVC framework for PHP</h3>
                  <p class="info">Laravel is a robust framework that provides easy development of PHP web applications with features like a modular packaging system with a dedicated dependency manager,
                     access to relational databases, and other utilities for application deployment and maintenance.</p>
                     <br><br>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Why Laravel?</h3>
                  <p class="info">Circa 2000, most PHP codes was procedural and could be found in the form of “scripts” that would have a tangled mess of spaghetti code. Even the simplest pages had no separation of concerns, and thus it was fairly easy for an application to quickly grow into a maintenance nightmare. The world needed something better…Enter PHP version 5 and a variety of PHP frameworks attempting to bring some much-needed resolution and better solutions to various web application concerns.<br>
                    Since then we’ve seen many frameworks released that would pave the way for the popular frameworks existing and being employed today.
                     Today, the top three would (in our opinion) be Zend Framework, Symfony and of course Laravel.Although each of these frameworks was founded on similar principles and are geared toward solving (basically)
                     the same common problems, their key differences lie is their implementations.And in most opinion, Laravel framework is the best.
                  </em></p>
                  <br><br>  <br><br>

               </div>

            </div> <!-- item end -->


      </div> <!-- item end -->

   </div> <!-- main-col end -->

</div> <!-- End of Laravel Topics -->



   <!-- My Future Me Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">
           <br> <br>

            <h1><em>My Future Me.</em></h1>

            <p>          As I grow up six years from now,I will change but I know that I will always want something out of myself. My goal is to have my own business and working with my firends.
            I have some steps to achieve my goal and this steps in achieving my goal are simple, but require a lot of work. My first step is to maintain my grade throughout my college journey.
            So far I have done so but to keep it throughout the rest of college days will be challenging but will always strived and aimimg for better future. And in tat six years I already  overcome my inner fears, smashed my insecurities,and already let go my inner doubts
            and I  embraced my inner strength as well as flourished my ability to positively impact others.I am also traveling to the places that I want to visit like Korea,Japan,Italy and France with my family.And the most important
           my dreams have come true and still learning, and living life to the fullest and made the most of each day.</p>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">


          		</div>  <!-- item end -->

            </div> <!-- MY FUTURE mE -wrapper end -->

         </div> <!-- twelve columns end -->



	      </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

      </div> <!-- row End -->

   </section> <!-- My future me Section End-->


   <!-- Life Qoutes
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

         </div>

         <div class="seven columns">

            <h2><span class="lead">Life Qoute</span></h2>
            <p><span class="lead">"Your Pain has a Purpose"</span></p>

         </div>

         <div class="three columns action">



         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Qoutes Section
   ================================================== -->
   <!-- footer
   ================================================== -->
   <footer>





         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>

@stop
