<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Banyuwangi Tour & Vocation</title>
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>assets/dist/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url() ?>assets/dist/css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vegas/vegas.min.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
    <style type="text/css">
    .main-timeline{
    font-family: 'Source Sans Pro', sans-serif;
    position: relative;
    padding: 20px 0;
}
.main-timeline .timeline{
    width: 80%;
    margin: 0 auto 70px;
    position: relative;
}
.main-timeline .timeline:after{
    content: '';
    background: linear-gradient(-65deg,#F28D00 40%,#fff 41%,#fff 60%, #F28D00 61%);
    height: 173px;
    width: 173px;
    border-radius: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: 88px;
    top: 50%;
    z-index: 0;
}
.main-timeline .timeline-content{
    color: #fff;
    background-color: #F28D00;
    padding: 15px 15px 15px 280px;
    border-radius: 40px;
    display: block;
}
.main-timeline .timeline-content:hover{
    color: #fff;
    text-decoration: none;
}
.main-timeline .timeline-icon{
    color: #fff;
    background-color: #FDCD00;
    font-size: 60px;
    text-align: center;
    line-height: 130px;
    height: 150px;
    width: 150px;
    border: 10px solid #fff;
    border-radius: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: 100px;
    top: 50%;
    z-index: 1;
}
.main-timeline .title{
    font-size: 25px;
    font-weight: 600;
    margin: 0 0 5px 0;
    color:#fff;
    font-family: 'Open Sans', sans-serif
}
.main-timeline .description{
    font-size: 15px;
    letter-spacing: 1px;
    font-family: 'Open Sans', sans-serif
    margin: 0;
}
.main-timeline .timeline:nth-child(even):after{
    left: auto;
    right: 88px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 100px;
}
.main-timeline .timeline:nth-child(even) .timeline-content{ padding: 15px 280px 15px 30px; }
.main-timeline .timeline:nth-child(3n+2):after{
    background: linear-gradient(-65deg,#0D70B4 40%,#fff 41%,#fff 60%, #0D70B4 61%);
}
.main-timeline .timeline:nth-child(3n+2) .timeline-content{ background-color: #0D70B4; }
.main-timeline .timeline:nth-child(3n+2) .timeline-icon{ background-color: #2EA6E4; }
.main-timeline .timeline:nth-child(3n+3):after{
    background: linear-gradient(-65deg,#A2175B 40%,#fff 41%,#fff 60%, #A2175B 61%);
}
.main-timeline .timeline:nth-child(3n+3) .timeline-content{ background-color: #A2175B; }
.main-timeline .timeline:nth-child(3n+3) .timeline-icon{ background-color: #E71873; }
@media only screen and (max-width:1200px){
    .main-timeline .timeline{ width: 100%; }
}
@media only screen and (max-width:767px){
    .main-timeline .timeline{
        padding-top: 109px;
        margin: 0 0 30px;
    }
    .main-timeline .timeline:after,
    .main-timeline .timeline:nth-child(even):after{
        height: 110px;
        width: 110px;
        left: 50%;
        top: 0;
        transform: translateX(-50%) translateY(0);
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        text-align: center;
        padding: 15px;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        font-size: 35px;
        height: 90px;
        width: 90px;
        line-height: 70px;
        right: auto;
        left: 50%;
        top: 10px;
        transform: translateX(-50%) translateY(0);
    }
    .main-timeline .title{ font-size: 20px; }
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>
</head><!--/head-->

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  <!--.preloader-->
  <!-- <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div> -->
  <!--/.preloader-->

  <header>
    <div class="main-nav" style="height: 50px;">
      <div>
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" onclick="openNav()">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <!-- <img class="img-responsive" src="<?php echo base_url() ?>assets/img/logo new.png" alt="logo"> -->
            </a>
          </div>
          <div class="collapse navbar-collapse" style="padding: 1.5vh">

            <?php
            if($this->ion_auth->logged_in()){
            ?>
            <a href="<?php echo base_url('auth/login') ?>" class="btn btn-info btn-flat btn-sm pull-right" style="border-radius: 5px;margin-right: 5px;"><b>TRANSAKSI <span class="badge">7</span></b></a>
           <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-danger btn-flat btn-sm pull-right" style="border-radius: 5px;"><b>LOGOUT</b></a>
          <?php }else{ ?>
           <a href="<?php echo base_url('auth/login') ?>" class="btn btn-danger btn-flat btn-sm pull-right" style="border-radius: 5px;margin-right: 5px;"><b>LOGIN</b></a>
          <?php } ?>


          </div>
        </div>
      </div>
      </div><!--/#main-nav-->
    <div id="con" style="height:600px;">
      <div class="container">
        <div id="text" style="margin-top:150px;">
          <img src="<?php echo base_url() ?>assets/img/Untitled-3.png" style="width: 500px">
        <!-- <h2 style="color:#fff;font-weight: 400;font-size: 45px;text-shadow:2px 2px 10px -3px #b1b1b1;">Banyuwangi Tour & Vocation</h2> -->
        <!-- <h1 style="color:#fff;font-weight: 600;font-size:65px;text-shadow:2px 2px 10px -3px #b1b1b1;">STIKOM PGRI BANYUWANGI</h1> -->
        <!-- <h3 style="color:#fff;font-weight: 500;font-size: 25px;text-shadow:2px 2px 10px -3px #b1b1b1;">Tahun Akademik <?php //echo date('Y') ?>/<?php //echo date('Y') + 1 ?></h3> -->
        </div>
      </div>
    </div>

     <div class="main-nav" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img class="img-responsive" src="<?php echo base_url() ?>assets/img/Untitled-2.png" alt="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Paket Wisata</a></li>
            <li class="scroll"><a href="#services">Daftar Wisata</a></li>
            <li class="scroll"><a href="#services">Guide</a></li>
            <li class="scroll"><a href="#services">Blog</a></li>
            <!-- <li class="scroll"><a href="#services">About Us</a></li> -->
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>
