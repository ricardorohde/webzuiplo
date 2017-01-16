<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">
            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <h2 class="center">Semua Pemilik Rumah Kontrakan/ Kos</h2>

                         <div class="agents-list">
                            <div class="row">
                              <?php
                              foreach($get_users->result() as $row):?>
                                <div class="col-sm-4">
                                    <div class="agent-small">
                                        <div class="agent-small-top">

                                            <div class="clearfix">
                                                <div class="agent-small-picture col-sm-12 col-md-4">
                                                    <div class="agent-small-picture-inner">

                                                        <a href="<?php echo base_url('Admin/detail_user/'.$row->id) ;?>" class="agent-small-picture-inner ">
                                                          <?php
                                                              if ($row->foto_profil != null)
                                                              {
                                                                echo "haha";
                                                              }else {
                                                                $image = array(
                                                                   'src' => 'assets/images/user/avatar2.png',
                                                                   'class' =>' img-responsive',
                                                                   'alt' => 'User profile picture'
                                                                 );

                                                                 echo img($image);
                                                              }
                                                           ?>
                                                        </a><!-- /.agent-small-picture-target -->
                                                    </div><!-- /.agent-small-picture-inner -->
                                                </div><!-- /.agent-small-picture -->

                                                <div class="agent-small-content col-sm-12 col-md-8">
                                                    <h3 class="agent-small-title"><a href="#"><?php echo $row->first_name ?>&nbsp;<?php echo $row->last_name ?></a></h3>
                                                    <h4 class="agent-small-subtitle">
                                                      <a href="<?php echo base_url('Admin/detail_user/'.$row->id) ;?>">
                                                        127 properties in catalogue
                                                      </a>
                                                    </h4>
                                                    <a href="<?php echo base_url('Admin/detail_user/'.$row->id) ;?>" class="btn btn-regular">Lihat Profil</a>
                                                </div><!-- /.agent-small-content -->
                                            </div><!-- /.row -->
                                        </div><!-- /.agent-small-top -->

                                        <div class="agent-small-bottom">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-phone"></i>  </li>
                                                <li><i class="fa fa-envelope-o"></i> <?php echo $row->email ?></li>
                                            </ul>
                                        </div><!-- /.agent-small-bottom -->
                                    </div><!-- /.agent-small -->
                                </div>
                              <?php endforeach; ?>
                            </div><!-- /.row -->

                        </div><!-- /.agents-list -->
                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
            </div><!-- /.container -->
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->
