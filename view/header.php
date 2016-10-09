<?php 
  include_once '../model/db.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <script src="http://code.jquery.com/jquery-1.5.js"></script>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script src = "../js/home_controller.js" type="text/javascript"></script>
  <script src="../js/jquery-ui.js" ></script>
  <script src="../js/all_vehicle.js" ></script>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="home.php" class="logo">
      <span class="logo-mini"><b>V</b></span>
      <span class="logo-lg"><b>Vefetch</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/default.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["adminDetails"]['name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/default.png" class="img-circle" alt="User Image">
                <p>
                  Welcome <?php echo $_SESSION["adminDetails"]['name']; ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li><a href="home.php"><i class="fa fa-circle-o text-red "></i> <span>Dashboard</span></a></li>
          <li><a href="add_vehicle.php"><i class="fa fa-circle-o text-yellow"></i> <span>Add Details</span></a></li>
          <li><a href="add_catagory.php"><i class="fa fa-circle-o text-aqua"></i> <span>Add category</span></a></li>
          <li><a href="all_vehicles.php"><i class="fa fa-circle-o text-aqua"></i> <span>All Vehicles</span></a></li>
          <li><a href="update_vehicles.php"><i class="fa fa-circle-o text-aqua"></i> <span>Update Vehicle Details</span></a></li>
        </ul>
      </section>
  </aside>
  <!-- Content -->
  <div class="content-wrapper">
    <section class="content">