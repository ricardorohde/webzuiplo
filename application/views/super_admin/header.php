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
<body class="sidebar-mini skin-blue-light">
  <div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>Z</b>A</span>
      <span class="logo-lg"><b>ZUIPLO</b>dev</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/images/user/avatar.png')?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">

                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">

                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/user/avatar5.png')?>" class="user-image" alt="User Image">
              <!-- <span class="hidden-xs"><?php echo $email; ?></span> -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/user/avatar5.png')?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $first_name; ?>&nbsp; <?php echo $last_name; ?> - Web Developer
                  <small><?php echo $last_login; ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('Super_admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="<?php echo base_url('assets/images/user/avatar5.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $first_name; ?>&nbsp; <?php echo $last_name; ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('Super_admin');?>">
            <i class="fa fa-dashboard"></i>
            <span>Activity</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Manage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
                  <a ><i class="fa fa-circle-o"></i> Admin
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Super_admin/all_users');?>"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Edit</a></li>
                  </ul>
            </li>
            <li>
                  <a ><i class="fa fa-circle-o"></i> Super Admin
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="<?php echo base_url('Super_admin/register');?>"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Edit</a></li>
                  </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Manage Terms &amp; Condition</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Super_admin/termscondition');?>"><i class="fa fa-circle-o"></i> Master Terms &amp; Condition</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Manage FAQ &amp; Help</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Super_admin/faqandhelp');?>"><i class="fa fa-circle-o"></i> Master FAQ &amp; Help</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
