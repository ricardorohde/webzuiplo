<section class="content">
        <div class="col-md-12 conj"></div>
				<div class="col md-12 full">
					<div class="col-md-12 space">
						<div class="col-md-6">
							<div class="col-md-1"></div>
								<img src="<?php echo base_url('assets/image/zuiplo.png');?>" width="285px;" height="100px;" class="logo-zuiplo-lg">
								<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="text-content">
										<h2 class="text-title">
											You sign up by choosing the type of <b>Free<b>.
										</h2>
										<h3 class="content-text-content">
                      In this type, you only have a few advantages when marketing your home stopover, some advantages in other types (Gold, Premium) does not exist in this type.<br><br> Click the <b>Register Now</b> for more action, or <b>Log In</b> if you have an account.
										</h3>
                    <!-- You sign up by choosing the type of gold.
                    In this type, you have more advantages when marketing your home stopover than the two other types (free and Premium). Type gold is the best type of other types.
                    Click the Register Now for more action! -->
										<!-- <div class="col-md-1"></div> -->

															<a class="cover-btn-lg free-button-reg">Register Now </a>
                              <a href="Main/login" class="cover-btn-lg free-button-reg">Log In</a>

									</div>

								</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<!-- <img src="<?php echo base_url('assets/image/zuiplo/house-animation.gif');?>" width="500px;" height="100px;" class="image-gif"> -->
						</div>


					</div>

				</div>

        <h3 style="margin-left:140px;">  New user Register Here...
        <?php  echo form_open(base_url().'user/registration'); ?>

        <table width="" border="0" align="left" style="margin-left:30px; font-size:13px;  font-family:Verdana, Geneva, sans-serif; margin-bottom:20px;">


          <tr>
            <td align="right">First Name</td>
            <td>:</td>
            <td><?php echo form_input('firstname', ''); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('firstname', '<span class="error">', '</span>'); ?></td>
          </tr>
          <tr>
            <td align="right">Last Name</td>
            <td>:</td>
           <td><?php echo form_input('lastname', ''); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('lastname', '<span class="error">', '</span>'); ?></td>
          </tr>

            <td align="right">Age</td>
            <td>:</td>
           <td><?php echo form_input('age', ''); ?></td>
          </tr>

          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('age', '<span class="error">', '</span>'); ?></td>
          </tr>
           <tr>
            <td align="right">Gender</td>
            <td>:</td>
           <td align="center">Male<?php echo form_radio('gender', 'male'); ?>
           Female<?php echo form_radio('gender', 'female'); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"></td>
          </tr>
          <tr>
            <td align="right">Email Address</td>
            <td>:</td>
            <td><?php echo form_input('emailad', ''); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('emailad', '<span class="error">', '</span>'); ?></td>
          <tr>
            <td align="right">Username</td>
            <td>:</td>
            <td><?php echo form_input('username', ''); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('username', '<span class="error">', '</span>'); ?></td>
          <tr>
          <tr>
            <td align="right">Password</td>
            <td>:</td>
            <td><?php echo form_password('password', ''); ?></td>
          </tr>
          <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('password', '<span class="error">', '</span>'); ?></td>
          <tr>
          <tr>
            <td align="right">Password Confirmation</td>
            <td>:</td>
            <td><?php echo form_password('cpassword', ''); ?></td>
          </tr>
           <tr>
          <td colspan="4"  height="13" align="right"><?php echo form_error('cpassword', '<span class="error">', '</span>'); ?></td>
          <tr>
          <tr>

        <td colspan="3" align="right"><input style="width:90px;" type="submit" value="Register" name="mysubmit "class="classname"/></td>

          </tr><br />
        </table>

        <?php echo form_close();  ?>

        <style>
        .error{
        color:#FF0000;
        }
        </style>

        <div class="s1 col-md-12 footer-reg">
        	&copy;2016 Zuiplo. Created by JICOS
        </div>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/owner.css');?>" type="text/css">
