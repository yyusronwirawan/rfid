<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>






  <!-- DATA TABLES -->
  <!-- DataTables -->
<link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets_admin/css/style.css">
  <link rel="stylesheet" href="/assets_admin/css/components.css">
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

        </form>
        <ul class="navbar-nav navbar-right">
   


        </ul>
      </nav>

      <!-- SIDE BAR -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">RFID Absensi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SBY</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Master Karyawan</li>
                <li><a class="nav-link" href="{{url('/karyawan')}}"><i class="fa fa-users" aria-hidden="true"></i>  <span>Data Karyawan</span></a></li>

               <li class="menu-header">Rekap Absensi</li>
              <li><a class="nav-link" href="{{url('/absensi')}}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  <span>Data Absensi</span></a></li>

               <li class="menu-header">RFID</li>
              <li><a class="nav-link" href="{{url('/scan')}}"><i class="fa fa-barcode" aria-hidden="true"></i><span>Presensi</span></a></li>

             
            </ul>
        </aside>
      </div>

