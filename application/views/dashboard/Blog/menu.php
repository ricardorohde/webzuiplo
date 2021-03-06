<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">
            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="sidebar">
                                    <div class="sidebar-inner">
                                        <div class="widget">
                                            <div class="widget-content">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li><a href="<?php echo base_url('Welcome/Blog');?>">Semua Rumah</a></li>
                                                    <li><a href="<?php echo base_url('Welcome/Blog_kontrakan');?>">Rumah Kontrakan</a></li>
                                                    <li><a href="<?php echo base_url('Welcome/Blog_kos');?>">Rumah Kos</a></li>
                                                    <li><a href="<?php echo base_url('Welcome/Blog_termsandcondition');?>">Syarat &amp; Ketentuan</a></li>
                                                    <li><a href="<?php echo base_url('Welcome/Blog_faqandhelp');?>">FAQ</a></li>
                                                </ul>
                                            </div>
                                          </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-9">
                                <h2>Semua Rumah</h2>

                                <div class="posts">
                                  <?php
                                    foreach($blog_kontrakan->result() as $row):?>
                                    <div class="post clearfix" id="rumah_kontrakan">
                                        <div class="row">
                                            <div class="post-date col-sm-1">
                                                <span><i class="fa fa-calendar"></i> Mar</span>
                                                <strong>26</strong>
                                            </div><!-- /.post-date -->

                                            <div class="post-picture col-sm-3">
                                                <div class="post-picture-inner">
                                                    <a href="<?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>" class="post-picture-target">
                                                      <div class="property-box-label"><?php echo $row->jenis_rumah ?></div>
                                                      <?php
                                                         $image = array(
                                                            'src' => 'uploads/'.($row->img1),
                                                            'class' =>'img-responsive'
                                                          );
                                                          echo img($image); ?>
                                                    </a><!-- /.post-picture-target -->
                                                </div><!-- /.post-picture-inner -->
                                            </div><!-- /.post-picture -->

                                            <div class="post-content col-sm-8">
                                                <h3 class="post-title"><a href="<?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>"><?php echo $row->nama_rumah ?></a></h3>
                                                <p><?php echo $row->deskripsi_rumah ?></p>
                                                <a href="<?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>" class="btn btn-primary">Lihat Selengkapnya</a>
                                            </div><!-- /.post-content-->
                                        </div><!-- /.row -->


                                    </div><!-- /.post -->
                                    <?php endforeach; ?>
                                    <?php
                                      foreach($blog_kos->result() as $row):?>
                                      <div class="post clearfix">


                                          <div class="row">
                                              <div class="post-date col-sm-1">
                                                  <span><i class="fa fa-calendar"></i> Mar</span>
                                                  <strong>26</strong>
                                              </div><!-- /.post-date -->

                                              <div class="post-picture col-sm-3">
                                                  <div class="post-picture-inner">
                                                      <a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>" class="post-picture-target">
                                                        <div class="property-box-label property-box-label-primary"><?php echo $row->jenis_rumah ?></div>
                                                        <?php
                                                           $image = array(
                                                              'src' => 'uploads/'.($row->img1),
                                                              'class' =>'img-responsive'
                                                            );
                                                            echo img($image); ?>
                                                      </a><!-- /.post-picture-target -->
                                                  </div><!-- /.post-picture-inner -->
                                              </div><!-- /.post-picture -->

                                              <div class="post-content col-sm-8">
                                                  <h3 class="post-title"><a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>"><?php echo $row->nama_rumah ?></a></h3>
                                                  <p><?php echo $row->deskripsi_rumah ?></p>
                                                  <a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>" class="btn btn-primary">Lihat Selengkapnya</a>
                                              </div><!-- /.post-content-->
                                          </div><!-- /.row -->


                                      </div><!-- /.post -->
                                      <?php endforeach; ?>
                                </div><!-- /.posts -->

                                <div class="center">
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
            </div><!-- /.container -->
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->
