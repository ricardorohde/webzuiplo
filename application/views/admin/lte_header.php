<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ZUIPLO | Admin</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/iCheck/flat/blue.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/timepicker/bootstrap-timepicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/iCheck/flat/_all.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/morris/morris.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/datepicker/datepicker3.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/select2/select2.min.css')?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/iCheck/icheck.min.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/select2/select2.full.min.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.date.extensions.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.extensions.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/colorpicker/bootstrap-colorpicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/css/plugins/timepicker/bootstrap-timepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/morris.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/sparkline/jquery.sparkline.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-jvectormap-1.2.2.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-jvectormap-world-mill-en.js')?>"></script>
  <script src="<?php echo base_url('assets/js/knob/jquery.knob.js')?>"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?php echo base_url('assets/js/daterangepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap3-wysihtml5.all.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/slimScroll/jquery.slimscroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/fastclick/fastclick.js')?>"></script>
  <script src="<?php echo base_url('assets/js/app.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
  <script src="<?php echo base_url('assets/js/demo.js')?>"></script>
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
              <span class="hidden-xs"><?php echo $first_name; ?>&nbsp; <?php echo $last_name; ?></span>
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
          <p><?php echo $first_name; ?>&nbsp; <?php echo $last_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

      <li class="treeview">
        <a href="<?php echo base_url('Main');?>">
          <i class="fa fa-dashboard"></i>
          <span>Beranda</span>
        </a>

      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-money"></i>
          <span>Manage Finance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Report Finance</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Cek Bill</a></li>
          <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Send Invoice</a></li>
        </ul>
      </li> -->
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
              <li><a href="<?php echo base_url('main/list_rumah');?>"><i class="fa fa-circle-o"></i> All</a>
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
  <script>
    $(function () {
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
      $(".select2").select2();

      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      $("[data-mask]").inputmask();

      $('#reservation').daterangepicker();
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      $('#daterange-btn').daterangepicker(
          {
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
          },
          function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
      );

      $('#datepicker').datepicker({
        autoclose: true
      });
      $(".my-colorpicker1").colorpicker();
      $(".my-colorpicker2").colorpicker();
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
  </script>
<style media="screen">
  .key{
    width: 10px;
    height: 10px;
  }
</style>
