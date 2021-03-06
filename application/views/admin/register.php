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
                                                <label>Tipe Pendaftaran</label>
                                                <div class="select-wrapper">
                                                    <select id="select-country" class="form-control" name="tipe_status">
                                                        <option <?php echo ($this->input->post("tipe_status")=="Free")?"selected":"";?> value="1">Free</option>
                                                        <option <?php echo ($this->input->post("tipe_status")=="Premium")?"selected":"";?> value="2">Premium</option>
                                                        <option <?php echo ($this->input->post("tipe_status")=="Gold")?"selected":"";?> value="3">Gold</option>
                                                    </select>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
                                              <?php echo form_error('firstname');?>
                                          </div>
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
                                              <?php echo form_error('lastname');?>
                                          </div>
                                          <div class="form-group">
                                              <label>Email</label>
                                              <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
                                              <?php echo form_error('email');?>
                                          </div>
                                          <div class="form-group">
                                              <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-primary btn-inversed btn-block')); ?>
                                          </div>
                                        <?php echo form_close(); ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
