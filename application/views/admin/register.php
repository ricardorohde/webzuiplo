<!-- <div class="col-lg-4 col-lg-offset-4">
    <h2>Hello There</h2>
    <h5>Please enter the required information below.</h5>
<?php
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/register', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
    </div>
    <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div> -->
<div id="main-wrapper">
      <div id="main">
          <div id="main-inner">
              <div class="container">
                  <div class="block-content block-content-small-padding">
                      <div class="block-content-inner">
                          <div class="row">
                              <div class="col-sm-4 col-sm-offset-4">
                                  <h2 class="center">Register</h2>
                                  <div class="box">
                                    <?php
                                        $fattr = array('class' => 'form-signin');
                                        echo form_open('/main/register', $fattr); ?>
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
                                              <?php echo form_error('firstname');?>
                                          </div><!-- /.form-group -->

                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
                                              <?php echo form_error('lastname');?>
                                          </div><!-- /.form-group -->

                                          <div class="form-group">
                                              <label>Email</label>
                                              <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
                                              <?php echo form_error('email');?>
                                          </div><!-- /.form-group -->


                                          <div class="form-group">
                                              <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-primary btn-inversed btn-block')); ?>
                                          </div><!-- /.form-group -->
                                        <?php echo form_close(); ?>
                                  </div><!-- /.box -->
                              </div>
                          </div><!-- /.row -->
                      </div><!-- /.block-content-inner -->
                  </div><!-- /.block-content -->
              </div><!-- /.container -->
          </div><!-- /#main-inner -->
      </div><!-- /#main -->
  </div><!-- /#main-wrapper -->
