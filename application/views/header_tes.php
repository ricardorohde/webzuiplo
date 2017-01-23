  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skin/_all-skins.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/datepicker/datepicker3.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/iCheck/all.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/timepicker/bootstrap-timepicker.min.css');?>">
<link rel="stylesheet" href="<?ph pecho base_url('assets/css/plugins/select2/select2.min.css');?>">


  <script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.sparkline.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/dashboard2.js');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/select2/select2.full.min.js');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/input-mask/jquery.inputmask.extensions.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('assets/js/daterangepicker.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js"');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/colorpicker/bootstrap-colorpicker.min.js');?>"></script>
<script src="<?php echo base_url('plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('assets/css/plugins/iCheck/icheck.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/fastclick/fastclick.js');?>"></script>
<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
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
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script>
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
