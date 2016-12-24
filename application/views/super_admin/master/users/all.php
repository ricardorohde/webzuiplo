<div class="content-wrapper">
  <section class="content-header">
    <h1>
      All Users
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <!-- no, email, nama depan, nama belakang, role, last login, status -->
          <div class="box-body">



          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <center>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <th>Last Login</th>
                <th><center>Status</th>
                <th class=" no-link last"><span class="nobr"><center> Action</center></span></th>
              </center>
            </tr>

            </thead>
            <tbody>
              <?php
              foreach ($users as $key) {
            ?>
                <tr class="even pointer">

                  <td><?php echo $key['email'];?></td>
                  <td><?php echo $key['first_name'];?></td>
                  <td><?php echo $key['last_name'];?></td>
                  <td><?php echo $key['role'];?></td>
                  <td><?php echo $key['last_login'];?></td>
                  <td><?php echo $key['status'];?></td>
                  <td>
                    <center>
                      <a href="<?php echo base_url('Super_admin/delete_master_termscondition/'.$key['id']);
                                      ?>" onClick="return doconfirm();">
                        <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips btn-success">Approved
                          <i class="fa fa-send"></i>
                        </button>
                      </a>
                      <a href="<?php echo base_url('Super_admin/delete_master_termscondition/'.$key['id']);
                                      ?>" onClick="return doconfirm();">
                        <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips btn-danger">Pending
                          <i class="fa fa-warning"></i>
                        </button>
                      </a>
                  </center>
                  </td>
                    <?php

              }
                    ?>
                </tr>

            </tbody>

          </table>


            <?php form_close() ?>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


      </div>
      <!-- /.col -->
    <!-- /.row -->
  </section>
</div>


  <!-- /.content -->
