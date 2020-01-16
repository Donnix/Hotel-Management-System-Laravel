<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Ryzen.com</title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <div class="pull-left">
                <h2>Welcome </h2>
            </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('adminlte/logo/hotel.png')}}"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ryzen Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="/kamars" class="nav-link">
           
            <i class='fas fa-bed' style='font-size:24px'></i>
              <p>
                Data Kamar
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/karyawans" class="nav-link">
            <i class='fas fa-user-tie' style='font-size:24px'></i>
              <p>
                Data Karyawan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jabatans" class="nav-link">
            <i class='fas fa-award' style='font-size:24px'></i>
              <p>
                Data Jabatan
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/guests" class="nav-link">
            <i class='fas fa-address-book' style='font-size:24px'></i>
              <p>
                Data Tamu
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/transactions" class="nav-link">
            <i class='fas fa-money-bill-wave'style='font-size:24px'></i>
              <p>
                Data Transaksi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/laporans" class="nav-link">
            <i class='fas fa-copy 'style='font-size:24px'></i>
              <p>
                Data Laporan
                
              </p>
            </a>
          </li>
          
        

            <li class="nav-item">
            <a href="/logins" onClick="return confirm('Apakah Yakin ingin  Logout ?')" class="nav-link">
            <i class='fas fa-door-open' style='font-size:24px'></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
         
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @yield('content')
      <!-- Default box -->
      
         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
</body>
</html>
