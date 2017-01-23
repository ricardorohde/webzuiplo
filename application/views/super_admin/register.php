<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <div class="col-md-3"></div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">
            Register
          </h3>
        </div>
        <?php $fattr = array('class' => 'form-signin');
        echo form_open('/Super_admin/register', $fattr); ?>
        <div class="col-md-3">

        </div>
        <div class="box-body col-md-6"><br>
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
            <?php echo form_error('firstname');?>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
            <?php echo form_error('lastname');?>
          </div>
          <div class="form-group">
            <label>Email address</label>
            <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
            <?php echo form_error('email');?>
          </div><br>
          <div class="form-group">
            <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
          </div>
        </div>
        <div class="box-footer">

        </div>
        <?php echo form_close(); ?>
      </div>
  </section>
</div>
