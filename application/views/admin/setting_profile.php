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
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/user/user2-160x160.jpg')?>" alt="User profile picture">

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered">
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

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
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
            <form class="form-horizontal">
              <div class="form-group">
                <h3 class="profile-username text-center">Profil</h3>
                  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/user/user2-160x160.jpg')?>" alt="User profile picture"><br>

                <label for="inputName" class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-10">
                  <input type="email" name="first_name" class="form-control" id="inputName" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-10">
                  <input type="text" name="last_name" class="form-control" id="inputName" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>


              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Last Login</label>

                <div class="col-sm-10">
                  <input type="text" name="last_login" class="form-control" id="inputSkills" placeholder="Last Login">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <input type="text" name="status" class="form-control" id="inputSkills" placeholder="Status">
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
