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
        <?php
          $fattr = array('class' => 'form-signin');
          echo form_open(site_url().'Super_admin/complete/token/'.$token, $fattr); ?>
        <div class="col-md-3">

        </div>
        <div class="box-body col-md-6"><br>
          <h5>Hello <span><?php echo $firstName; ?></span>. Your username is <span><?php echo $email;?></span></h5>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
            <?php echo form_error('password') ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password Confirmation</label>
            <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
            <?php echo form_error('passconf') ?>
          </div>
          <div class="form-group">
            <?php echo form_hidden('admin_id', $admin_id);?>
            <?php echo form_submit(array('value'=>'Complete', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
          </div>
        </div>
        <div class="box-footer">

        </div>
        <?php echo form_close(); ?>
      </div>
  </section>
</div>

    <!-- <h2>Almost There!</h2>
    <h5>Hello <span><?php echo $firstName; ?></span>. Your username is <span><?php echo $email;?></span></h5>
    <small>Please enter a password to begin using the site.</small> -->
