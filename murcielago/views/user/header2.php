<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Banyuwangi Tour & Vocation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropify/dist/css/dropify.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.css">
  <link id="css-preset" href="<?php echo base_url() ?>assets/dist/css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/pace/pace.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vegas/vegas.min.css">
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

  <style type="text/css">
      .navbar-nav li a:hover,
.navbar-nav li a:focus {
  outline:none;
  outline-offset: 0;
  text-decoration:none;
  background: transparent;
}
.navbar-right li a {
  color: #fff;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
  padding-top: 30px;
  padding-bottom: 30px;
}

.navbar-right li.active a {
  background-color: rgba(0,0,0,.2);
}

.navbar-brand h1 {
  margin-top: 5px;
}
a {
  text-decoration: none;
  outline: none;
  text-decoration: none;
  -webkit-transition: 300ms;
  -moz-transition: 300ms;
  -o-transition: 300ms;
  transition: 300ms;
}


  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow layout-top-nav">
<div class="wrapper">

<div class="main-nav" style="height: 50px;">
      <div style="background-color: rgba(0,0,0,.2);">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
            <a href="<?php echo base_url('auth/login') ?>" class="btn btn-danger btn-flat btn-sm pull-right" style="border-radius: 5px; font-family: 'Open Sans', sans-serif;"><b>LOGIN</b></a>
          </div>
        </div>
      </div>
      </div><!--/#main-nav-->
  <div class="main-nav" style="font-family: 'Open Sans', sans-serif;">
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
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  <!-- Full Width Column -->
