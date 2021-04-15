<?php 
include $_SERVER['DOCUMENT_ROOT']."/admin/includes/baglan.php";

function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CORONA Cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/sonnn.css">
    <link rel="stylesheet" href="css/calıss.css">
    <link rel="stylesheet" href="css/calısss.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!-- <div class="top-menu"> -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center logo-wrap">
                        <div id="fh5co-logo"><a href="index.php">CORONA Cafe<span>.</span></a></div>
                    </div>
                    <ul>
                        <li class="<?php active('index.php');?>" ><a href="index.php">Ana Sayfa</a></li>
                        <li class="has-dropdown <?php active('anayemek.php'); active('icecek.php');active('kahvalti.php'); active('tatli.php');?>" >
                            <a href="#">Menüler</a>
                            <ul class="dropdown">
                                <li><a href="anayemek.php">Ana Yemekler</a></li>
                                <li><a href="icecek.php">İçecekler</a></li>
                                <li><a href="kahvalti.php">Kahvaltılar</a></li>
                                <li><a href="tatli.php">Tatlılar</a></li>
                            </ul>
                        </li>
                        <li class="<?php active('reservation.php');?>"><a  href="reservation.php">Rezervasyon</a></li>
                        <li class="<?php active('hakkimizda.php');?>"><a  href="hakkimizda.php">Hakkımızda</a></li>
                        <li class="<?php active('iletisim.php');?>"><a  href="iletisim.php">İletİŞİm</a></li>
                    </ul>
                </div>
            </div>
            <!-- </div> -->
        </nav>

       