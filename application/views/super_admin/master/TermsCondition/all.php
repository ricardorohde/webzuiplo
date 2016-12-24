<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">
                  <form method="POST" action="<?php echo base_url("Super_admin/save_master_termscondition");?>">
                    <textarea name="isi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                  </form>
            </div>
            </div>
          <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</center> </th>
              <th><center>ISI</center></th>
              <th class=" no-link last"><span class="nobr"> Action</span></th>
            </tr>

            </thead>
            <tbody>
              <?php
              foreach ($master_termscondition as $key) {
                  ?>
                <tr class="even pointer">

                      <td><?php echo $key['id'];
                  ?></td>
                      <td><?php echo $key['isi'];
                  ?></td>

<td><a href="<?php echo base_url('Super_admin/delete_master_termscondition/'.$key['id']);
                  ?>" onClick="return doconfirm();">
                    <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips btn-danger"><i class="fa fa-trash-o"></i>
                                  </button></a>

                    <a href="<?php echo base_url('Super_admin/edit_master_termscondition/'.$key['id']);
                  ?>"><button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-primary"><i class="fa fa-edit"></i>
                                  </button></a></td>

                    <?php

              }
                    ?>
                </tr>

            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>

      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
