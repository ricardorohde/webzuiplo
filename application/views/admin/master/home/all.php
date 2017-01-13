<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kelola Rumah Kontrakan
        <small>Semua</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Kelola Rumah Kontrakan</a></li>
        <li>Master</li>
        <li class="active">All</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#list" data-toggle="tab">Daftar Rumah</a></li>
          <li><a href="#detail" data-toggle="tab">Detail Rumah</a></li>
          <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="list">
            <!-- <table id="example1" class="table table-bordered table-striped">
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


              <?php form_close() ?> -->
          </div>
          <div class="tab-pane" id="detail">
            <?php
              foreach($list->result() as $row):?>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="box box-solid">
              <div class="box-header with-border">
                <center><h1 class="box-title nama_rumah"><?php echo $row->nama_rumah ?></h1></center>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <?php
                         $image = array(
                            'src' => 'uploads/'.($row->img1),
                            'alt' =>'First Slide'
                          );
                          echo img($image); ?>"
                      <div class="carousel-caption">
                        <?php echo $row->nama_rumah ?>
                      </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Second slide">

                      <div class="carousel-caption">
                        Second Slide
                      </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Third slide">

                      <div class="carousel-caption">
                        Third Slide
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                  </a>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="tab-pane" id="timeline">
            <ul class="timeline timeline-inverse">
              <!-- timeline time label -->
              <li class="time-label">
                    <span class="bg-red">
                      10 Feb. 2014
                    </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                  <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                  <div class="timeline-body">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    quora plaxo ideeli hulu weebly balihoo...
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-xs">Read more</a>
                    <a class="btn btn-danger btn-xs">Delete</a>
                  </div>
                </div>
              </li>
              <!-- END timeline item -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-user bg-aqua"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                  <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                  </h3>
                </div>
              </li>
              <!-- END timeline item -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-comments bg-yellow"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                  <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                  <div class="timeline-body">
                    Take me to your leader!
                    Switzerland is small and neutral!
                    We are more like Germany, ambitious and misunderstood!
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                  </div>
                </div>
              </li>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <li class="time-label">
                    <span class="bg-green">
                      3 Jan. 2014
                    </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-camera bg-purple"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                  <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                  <div class="timeline-body">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                  </div>
                </div>
              </li>
              <!-- END timeline item -->
              <li>
                <i class="fa fa-clock-o bg-gray"></i>
              </li>
            </ul>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
      </div>
    </section>

      </div>
<style media="screen">
  .img{
    width: 700px;
    height: 400px;
  }
  .nama_rumah{
    color:#00a65a;

  }
</style>
