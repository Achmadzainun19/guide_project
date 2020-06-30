<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Banyuwangi Tour & Vocation - Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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
         <!--    <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>

              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div> -->
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
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin Dashboard</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Admin</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li class="active"><a class="nav-link" href="blank.html"><i i class="fas fa-fire"></i> <span>Home</span></a></li>
                 <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i> <span>Data Wisata</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url('ntfs/tambah_wisata') ?>">Tambah Wisata</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('ntfs/data_wisata') ?>">Data Wisata</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
             <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-sticky-note"></i> <span>Data Artikel</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="<?php echo base_url('ntfs/tambah_artikel') ?>">Tambah Artikel</a></li>
               <li><a class="nav-link" href="<?php echo base_url('ntfs/data_artikel') ?>">Data Artikel</a></li>
             </ul>
           </li>
           <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Setting Website</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('ntfs/data_slide') ?>">Data Slide</a></li>
          </ul>
        </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i> <span>Data Paket Wisata</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-transparent.html">Data Paket Wisata</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?php echo base_url('ntfs/data_guide') ?>"><i i class="fas fa-users"></i> <span>Data Guide</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('ntfs/data_bukti_pembayaran') ?>"><i i class="fas fa-hand-holding-usd"></i> <span>Verifikasi Pembayaran</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i> <span>Laporan Pemesanan Paket</span></a>
                <ul class="dropdown-menu">
                  <!-- <li><a class="nav-link" href="layout-default.html">Tambah Paket Wisata</a></li> -->
                  <li><a class="nav-link" href="layout-transparent.html">Data Paket Wisata</a></li>
                </ul>
              </li>
            </ul>

            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div> -->
        </aside>
      </div>
