<?php
require_once('admin/dbs/db.php');
include("nav.php");
include('admin/newscheck.php');
?>
<head>
  <title>RAR BEAUTY</title>
  <link rel = "icon" href =  "https://static.wixstatic.com/media/f671b2_c0ed02775373475085b3438445eee373~mv2.png/v1/crop/x_0,y_50,w_373,h_419/fill/w_357,h_401,al_c,q_85,usm_0.66_1.00_0.01/icon_edited_edited.webp"
  type = "image">
  <style>
  * {
    box-sizing: border-box;
  }

  /* Style the body */
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }
  /* Header/logo Title */
  .header {
        padding: 200px;
  	  	text-align: center;
  	  	background: #475e47;
  			background-image:url('https://static.wixstatic.com/media/11062b_fe22dfddf8234ecbb2962671d5387655~mv2.jpg/v1/fill/w_980,h_1128,al_c,q_85,usm_0.66_1.00_0.01/11062b_fe22dfddf8234ecbb2962671d5387655~mv2.webp') ;
  			background-size:100%;
  			background-repeat: no-repeat;
        background-position:  0cm -12cm;


  }

  /* Increase the font size of the heading */
  .header h1 {
    font-size: 40px;
  }

  /* Style the top navigation bar */
  .navbar {
    overflow: hidden;
  background-color: #123132  ;}

  /* Style the navigation bar links */
  .navbar a {
  	font-family: monotype corsiva;
    float: left;
    display: block;
    color: white;
  	font-size: large;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }

  /* Right-aligned link */
  .navbar a.right {
    float: right;
  }
  .navbar a.right:hover {
  background-color: #bbb4b7a1;
  }
  /* Change color on hover */

  .navbar a:hover {
    color: #bbb4b7a1 ;
  }
  .med{
  background-color: #bbb4b7a1;
  background-image:url('https://static.wixstatic.com/media/ac38c9a926cb4a69a6bb0340639d2b90.jpg/v1/fill/w_900,h_629,al_c,q_85,usm_0.66_1.00_0.01/blonde%20hair.webp') ;
  background-size:  327px  310px;
  background-repeat: no-repeat;
  background-position: 325px 8px;

  }


  /* Main column */
  .main {
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
  }

  @import "compass/css3";

  $body-bg: #c1bdba;
  $form-bg: #13232f;
  $white: #ffffff;

  $main: #1ab188;
  $main-light: lighten($main,5%);
  $main-dark: darken($main,5%);

  $gray-light: #a0b3b0;
  $gray: #ddd;

  $thin: 300;
  $normal: 400;
  $bold: 600;
  $br: 4px;

  *, *:before, *:after {
    box-sizing: border-box;
  }

  html {
  	overflow-y: scroll;
  }

  body {
    background:$body-bg;
    font-family: 'Titillium Web', sans-serif;
  }

  a {
    text-decoration:none;
    color:$main;
    transition:.5s ease;
    &:hover {
      color:$main-dark;
    }
  }

  .form {
    background:rgba($form-bg,.9);
    padding: 40px;
    max-width:600px;
    margin:40px auto;
    border-radius:$br;
    box-shadow:0 4px 10px 4px rgba($form-bg,.3);
  }

  .tab-group {
    list-style:none;
    padding:0;
    margin:0 0 40px 0;
    &:after {
      content: "";
      display: table;
      clear: both;
    }
    li a {
      display:block;
      text-decoration:none;
      padding:15px;
      background:rgba($gray-light,.25);
      color:$gray-light;
      font-size:20px;
      float:left;
      width:50%;
      text-align:center;
      cursor:pointer;
      transition:.5s ease;
      &:hover {
        background:$main-dark;
        color:$white;
      }
    }
    .active a {
      background:$main;
      color:$white;
    }
  }

  .tab-content > div:last-child {
    display:none;
  }


  h1 {
    text-align:center;
    color:$white;
    font-weight:$thin;
    margin:0 0 40px;
  }

  label {
    position:absolute;
    transform:translateY(6px);
    left:13px;
    color:rgba($white,.5);
    transition:all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size:22px;
    .req {
    	margin:2px;
    	color:$main;
    }
  }

  label.active {
    transform:translateY(50px);
    left:2px;
    font-size:14px;
    .req {
      opacity:0;
    }
  }

  label.highlight {
  	color:$white;
  }

  input, textarea {
    font-size:22px;
    display:block;
    width:100%;
    height:100%;
    padding:5px 10px;
    background:none;
    background-image:none;
    border:1px solid $gray-light;
    color:$white;
    border-radius:0;
    transition:border-color .25s ease, box-shadow .25s ease;
    &:focus {
  		outline:0;
  		border-color:$main;
    }
  }

  textarea {
    border:2px solid $gray-light;
    resize: vertical;
  }

  .field-wrap {
    position:relative;
  	font-family:  "Lucida Console", Courier, monospace;
   color: gray;
    margin-bottom:40px;
  }

  .top-row {
    &:after {
      content: "";
      display: table;
      clear: both;
    }

    > div {
      float:left;
      width:48%;
      margin-right:4%;
      &:last-child {
        margin:0;
      }
    }
  }

  .button {

    border:0;
    outline:none;
    border-radius:0;
    padding:15px 0;
    font-size:2rem;
    font-weight:$bold;
    text-transform:uppercase;
    letter-spacing:.1em;
    background:$main;
    color:$white;
    transition:all.5s ease;
    -webkit-appearance: none;
    &:hover, &:focus {
      background:$main-dark;
    }
  }

  .button-block {
  	position: relative;
    top: center;
  	left: center;
    width:70%;
  }
  #log{
  	position: relative;
    left: 80px;
  }
  .forgot {
    margin-top:-20px;
    text-align:right;
  }
  /* Footer */
  .footer {
    padding: 70px;
    text-align: center;
  	color: white;
  	font-family:  "Lucida Console", Courier, monospace;
    background: #123132;
  }
  .footer a{
    color: gray;
  }
  #ho{
  	color: gold;

  }

  #lft{
  	position:relative;
    left: 1010px;
  	bottom: 595px;
  }
  #uup{
  	position:relative;
  	right: auto;
  	bottom: 600px;

  }
  .ccenter{


  	color:#123132;
  	font-size: xxx-large;
  	font-family: impact ;
  	text-align:center;
  	position:relative;
  	right: auto;
  	bottom:600px;
  }
  </style>

</head>

<body>
  <div class="header">
  	<h1 class="font_2" style=" font-family: monotype corsiva ; font-size: xx-large; text-align:center;font-size:80px;color:white"> ! Wink, Smile &amp; Shine </h1>
    <span style="font-family:raleway,sans-serif; color: gray">ــــ&nbsp;BEAUTY &nbsp;GATE ــــ</span>
  </div>
  <div class="med">
  	<img alt="photo_2020-11-10_05-17-24.jpg" style="	position:relative;
    	right: 74.5%; bottom: 296px;
     width: 326px; height: 600px; object-fit: cover;"
  	 src="https://static.wixstatic.com/media/f671b2_82738554e98b4639aafb2a8d56b853e7~mv2.jpg/v1/fill/w_489,h_900,al_c,q_85,usm_0.66_1.00_0.01/f671b2_82738554e98b4639aafb2a8d56b853e7~mv2.webp">

  <video id="comp-jhufuj8t_video"  crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" autoplay="" width="340" height="600"
   src="https://video.wixstatic.com/video/f671b2_7760e1da750f482a8db15d1098fc60b7/480p/mp4/file.mp4" style="position:relative; right: -5%; bottom: 296px; width: 340px; height: 600px; left: -6px; top: 0px; opacity: 1;"></video>

  <img alt="photo_2020-11-10_05-46-49.jpg" style="position:relative; right: -64px; bottom: 135px; width: 327px; height: 269px; object-fit: cover;"
  src="https://static.wixstatic.com/media/f671b2_06ab473c3b134c048af76548b01813f4~mv2.jpg/v1/fill/w_491,h_404,al_b,lg_1,q_80/f671b2_06ab473c3b134c048af76548b01813f4~mv2.webp"><div class="row">

  <img id="lft" alt="photo_2020-11-10_05-46-499.jpg" style="position:relative; right:23px; bottom: 888px; width: 252px; height: 590px; object-fit: cover;"
  	src="https://static.wixstatic.com/media/f671b2_0663d99d9b544219bb372dc1cffdb533~mv2.jpg/v1/crop/x_0,y_1,w_587,h_763/fill/w_587,h_763,al_c,q_85/Screenshot%202020-11-10%20045041.webp">

    <div class="row">
  		<div style="height: 600px; opacity: 1;  width:100% ;position:relative; left: 4px; top: -230px;" >
  			<p class="ccenter">! STYLE IS A CHOICE </p>
  			<p class="ccenter" >. MAKE YOURS </p> <br>
  	<video id="uup" class="_3owv4" role="presentation" crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" autoplay="" width="1270" height="600"
  	src="https://video.wixstatic.com/video/f671b2_ccc7741faa084d9d8c2ab65e8f397416/720p/mp4/file.mp4" style="width: 1159px; height: 550px;  width:100% ;"></video>

  		</div>
<div style=" height: 600px; opacity: 1;  width:100% ;position:relative; right: 8%; bottom: 800px;">

<a href="makeup.php "> <img  alt="Red%20Eye%20Shadow_edited.jpg" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/f671b2_bc0ba2170bed47cc88b7e9a6f72868c8~mv2.jpg/v1/fill/w_545,h_554,al_c,q_80,usm_0.66_1.00_0.01/Red%2520Eye%2520Shadow_edited.webp" style="width: 363px; height: 369px; object-fit: cover;"></a>
<video id="comp-khzuvq71_video" class="_3owv4" role="presentation" crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" autoplay="" width="369" height="369" src="https://video.wixstatic.com/video/f671b2_95a49faa26e04baf86d03bacf53d26c7/480p/mp4/file.mp4" style="position:relative; right: 0px; bottom: -180px; width: 363px; height: 369px; opacity: 1;"></video>
<a href="jewelry.php "> <img alt="AEnB2UoKuQfn9uA-S_R2tzW-k1Kluk2aPOFiiSuKO" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/f671b2_d67c361583a84191b2210353036c9cdd~mv2.jpg/v1/crop/x_509,y_0,w_1981,h_2014/fill/w_545,h_554,al_c,q_80,usm_0.66_1.00_0.01/Womans%252520Hands%252520with%252520Jewelry_e.webp"style="width: 363px; height: 369px; object-fit: cover;"></a>
<a href="hairstyle.php "> <img alt="AEnB2UoKuQfn9uA-S_R2tkzW-k1Kluk2aPOFiiSuKO" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/f671b2_c1e36112d7f34796b751c2d452ab48c1~mv2.jpg/v1/crop/x_514,y_0,w_1973,h_2000/fill/w_546,h_554,al_c,q_80,usm_0.66_1.00_0.01/Hair%2520Stylist_edited.webp"style="width: 363px; height: 369px; object-fit: cover;"></a>
<a href="skincare.php "> <img alt="AEnB2UoKuQfn9uA-S_R2tkzW-k1Kluk2aPlOFiiSuKO" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/f671b2_20338d3fad224311a7e724ec2f894d91~mv2.jpg/v1/crop/x_516,y_0,w_1967,h_2000/fill/w_545,h_554,al_c,q_80,usm_0.66_1.00_0.01/Ingredients_edited.webp"style="width: 363px; height: 369px; object-fit: cover;"></a>
<a href="dresses.php "> <img alt="AEnB2UoKuQfn9uA-S_R2tzW-k1Kuk2aPOFiiSuKO" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/f671b2_350d19d1ab84415d95c511944d4f63c9~mv2.jpg/v1/fill/w_545,h_554,al_c,q_80,usm_0.66_1.00_0.01/AEnB2UoKuQfn9uA-S_R2tzW-k1Kuk2aPOFiiSuKO.webp" style="width: 363px; height: 369px; object-fit: cover;"></a>

</div>

</body>
<?php

include("footer.php");


?>
