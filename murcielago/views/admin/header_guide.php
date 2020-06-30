<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Banyuwangi Tour & Vocation - Guide</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropify/dist/css/dropify.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>assetx/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>assetx/css/components.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/admin/') ?>assetx/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <?php
            $user_ion = $this->ion_auth->user()->row();
             ?>
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $user_ion->first_name ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Guide Dashboard</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Guide</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li class="<?php if($this->uri->segment('2') == ''){echo 'active';}else{} ?>"><a class="nav-link" href="blank.html"><i i class="fas fa-fire"></i> <span>Home</span></a></li>
              <li class="nav-item dropdown <?php
                if($this->uri->segment('2') == 'tambah_paket'){
                  echo 'active';
                }elseif($this->uri->segment('2') == 'data_paket'){
                  echo 'active';
                }
               ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i> <span>Data Paket Wisata</span></a>
                <ul class="dropdown-menu">
                  <li class="<?php if($this->uri->segment('2') == 'tambah_paket'){echo 'active';}else{} ?>"><a class="nav-link" href="<?php echo base_url('guide/tambah_paket') ?>">Tambah Paket Wisata</a></li>
                  <li class="<?php if($this->uri->segment('2') == 'data_paket'){echo 'active';}else{} ?>"><a class="nav-link" href="<?php echo base_url('guide/data_paket') ?>">Data Paket Wisata</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i> <span>Laporan Pemesanan Paket</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-default.html">Tambah Paket Wisata</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Data Paket Wisata</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?php echo base_url('guide/transaksi_tour_masuk') ?>"><i i class="fas fa-exchange-alt"></i> <span>Transaksi Masuk</span></a></li>
          
            </ul>

            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div> -->
        </aside>
      </div>
