<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">User profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-success">
          <div class="box-body box-profile">
            <?php
                  if ($users['foto_profil'] != null)
                  {
                    echo "haha";
                  }else {
                    $image = array(
                       'src' => 'assets/images/user/avatar2.png',
                       'class' =>'profile-user-img img-responsive img-circle',
                       'alt' => 'User profile picture'
                     );

                     echo img($image);
                  }
               ?>

            <h3 class="profile-username text-center"><?php echo $users['first_name'];?>&nbsp;<?php echo $users['last_name'];?></h3>

            <p class="text-muted text-center">Pemilik Rumah</p>
            <p class="text-muted text-center"><?php echo $users['tipe_status'];?></p>
            <!-- <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->

      </div>
      <!-- /.col -->
      <div class="col-md-9">


        <div class="box box-success">
          <div class="box-body box-profile">
            <form method="POST" class="form-horizontal" action="<?php echo base_url("Admin/pemilik_update");?>">
              <div class="form-group">
                <h3 class="profile-username text-center">Profil</h3>
                <?php
                      if ($users['foto_profil'] != null)
                      {
                        echo "haha";
                      }else {
                        $image = array(
                           'src' => 'assets/images/user/avatar2.png',
                           'class' =>'profile-user-img img-responsive img-circle',
                           'alt' => 'User profile picture'
                         );

                         echo img($image);
                      }
                   ?><br><br>
                <label for="inputName" class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-10">
                  <input type="text" name="first_name" class="form-control" id="inputName" value="<?php echo $users['first_name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-10">
                  <input type="text" name="last_name" class="form-control" id="inputName" placeholder="Last Name" value="<?php echo $users['last_name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $users['email'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Foto Profil</label>

                <div class="col-sm-10">
                  <input type="file" name="foto_profil" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->

      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
