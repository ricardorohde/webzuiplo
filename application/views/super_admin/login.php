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
      <script src="<?php echo base_url('assets/adminlte/plugins/iCheck/icheck.min.js')?>"></script>
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
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });
      </script>
    </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a><b>ZUIPLO</b></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php $fattr = array('class' => 'form-signin');
             echo form_open(site_url().'Super_admin/login/', $fattr); ?>
          <div class="form-group has-feedback">
            <?php echo form_input(array(
                'name'=>'email',
                'id'=> 'email',
                'placeholder'=>'Email',
                'class'=>'form-control',
                'value'=> set_value('email'))); ?>
            <?php echo form_error('email') ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_password(array(
                'name'=>'password',
                'id'=> 'password',
                'placeholder'=>'Password',
                'class'=>'form-control',
                'value'=> set_value('password'))); ?>
            <?php echo form_error('password') ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <?php echo form_submit(array('value'=>'Sign In!', 'class'=>'btn btn-primary btn-block btn-flat')); ?>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </body>
</html>
