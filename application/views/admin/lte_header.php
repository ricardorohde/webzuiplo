<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ZUIPLO | Admin</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/iCheck/flat/blue.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/iCheck/flat/_all.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/morris/morris.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/datepicker/datepicker3.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/select2/select2.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/font-awesome/css/font-awesome.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/font-awesome/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <script src="<?php echo base_url('assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
  <!-- <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script> -->
  <script src="<?php echo base_url('assets/adminlte/bootstrap/js/bootstrap.min.js')?>"></script>

  <script src="<?php echo base_url('assets/adminlte/plugins/select2/select2.full.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/knob/jquery.knob.js')?>"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/daterangepicker/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/plugins/fastclick/fastclick.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/dist/js/app.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/dist/js/pages/dashboard.js')?>"></script>
  <script src="<?php echo base_url('assets/adminlte/dist/js/demo.js')?>"></script>

</head>
<body class="sidebar-mini skin-green-light">
<div class="wrapper">

  <header class="main-header">

    <a href="index2.html" class="logo">
        <span class="logo-mini"><b>Z</b><img src="<?php echo base_url('assets/images/zuiplo/key.png');?>" class="key">
        </span>
        <span class="logo-lg"><b>ZUIPLO</b>&nbsp;<img src="<?php echo base_url('assets/images/zuiplo/key.png');?>">
        </span>
    </a>

    <nav class="navbar navbar-static-top">

      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url('admin/mess');?>" >
              <i class="fa fa-envelope-o"></i>
              <span class="label label-danger">4</span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/user/avatar2.png')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $email; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/user/avatar2.png')?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $first_name; ?>&nbsp; <?php echo $last_name; ?> - Pemilik Rumah
                  <small><?php echo $last_login; ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                <a href="<?php echo base_url('Admin');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('Main/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/user/avatar2.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $first_name; ?> &nbsp; <?php echo $last_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

      <li class="treeview">
        <a href="<?php echo base_url('Main');?>">
          <i class="fa fa-dashboard"></i>
          <span>Beranda</span>
        </a>

      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Kelola Rumah Kontrakan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

        <ul class="treeview-menu">
          <li><a><i class="fa fa-circle-o"></i> Master</a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('main/list_rumah/'.$id);?>"><i class="fa fa-circle-o"></i> All</a>
              <li><a href="<?php echo base_url('main/add_rumah');?>"><i class="fa fa-circle-o"></i> Add</a>
              <li><a href="<?php echo base_url('main/master_home');?>"><i class="fa fa-circle-o"></i> Edit</a>
            </ul>
          </li>
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Master User</a></li>
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Send Email</a></li>
        </ul>
      </li> -->


      <li class="treeview">
        <a href="#">
          <i class="fa fa-cog"></i>
          <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('Admin');?>"><i class="fa fa-circle-o"></i> Edit Profile</a></li>
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Zuiplo Help</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-user"></i>
          <span>Upgrade Akun</span>
        </a>
      </li>
      </ul>
    </section>
  </aside>

<style media="screen">
  .key{
    width: 10px;
    height: 10px;
  }
</style>
