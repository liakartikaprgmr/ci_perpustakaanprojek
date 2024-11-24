
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Perpustakaan | <?= $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
      <img src="<?= base_url('images/logo.png') ?>" alt="" class="img-fluid me-3" style="max-width: 50px; height: auto;">
        <span class="brand-text font-weight-light">PERPUSTKAAN SMAN 2 SUBANG</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Katalog</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Profil</a>
        </li>
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Layanan</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="#" class="dropdown-item">Some action </a></li>
                <li><a href="#" class="dropdown-item">Some other action</a></li>
                <li class="dropdown-divider"></li>
            </ul>
        </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item">
        <a href="<?= base_url('Login') ?>" class="nav-link">
            <i class="fas fa-user"></i> Login
        </a>
    </li>
    <li class="nav-item">
        <a href="your_login_page_url" class="nav-link">
            <i class="fas fa-user-plus"></i> Register
        </a>
    </li>
    </ul>
</div>
      </div>

      <!-- Right navbar links -->
     
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content  -->
  <?php 
        if ($page){
            echo view($page);
        }
        ?>

  

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      v1
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Perpustakaan SMK NEGERI 2 Subang</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/demo.js"></script>
</body>
</html>
