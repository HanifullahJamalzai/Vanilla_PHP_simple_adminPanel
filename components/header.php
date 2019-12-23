<?php 
include '../config/main.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ACC Admin Panel</title>
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/databales/datables/datatables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

  <div id="wrapper">
          <!-- Left Side Bar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>views/index.php">
          
          <div class="sidebar-brand-text mx-3">
            <img src="<?php echo base_url(); ?>assets/photos/logo1.png" width=230px;>
          </div>
        </a>

        <div class="sidebar-divider my-4">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>views/index.php">
              <i class="fas fa-fw fa-home"></i>
              <span>Dashboard</span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>views/c_requests.php">
              <i class="fas fa-fw fa-user"></i>
              <span>Contacts Requests</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>views/o_requests.php">
              <i class="fas fa-fw fa-envelope"></i>
              <span>Offer Requests</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>views/profile.php">
              <i class="fas fa-fw fa-book"></i>
              <span>My Profile</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>views/register.php">
              <i class="fas fa-fw fa-table"></i>
              <span>Register New</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>views/logout.php">
              <span class="btn btn-danger">Direct Logout</span>
            </a>
          </li>
      </div>

    </ul>




    <div id="content-wrapper">
      <!-- Name and Profile Photo Right-top -->
      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['full_name'] ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>uploads/<?php echo $_SESSION['profile_photo']; ?>">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item text-danger" href="logout.php">
                  Logout
                </a>
              </div>
            </li>
          </ul>

        </nav>
