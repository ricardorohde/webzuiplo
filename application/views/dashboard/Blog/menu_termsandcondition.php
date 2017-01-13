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
                                            <h3 class="widget-title">Useful Links</h3>

                                            <div class="widget-content">
                                                <ul class="nav nav-pills nav-stacked">
                                                  <li><a href="<?php echo base_url('Welcome/Blog');?>">Semua Rumah</a></li>
                                                  <li><a href="<?php echo base_url('Welcome/Blog_kontrakan');?>">Rumah Kontrakan</a></li>
                                                  <li><a href="<?php echo base_url('Welcome/Blog_kos');?>">Rumah Kos</a></li>
                                                  <li><a href="<?php echo base_url('Welcome/Blog_termsandcondition');?>">Terms &amp; Condition</a></li>
                                                  <li><a href="#">FAQ and Help</a></li>
                                                </ul>
                                            </div>
                                          </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-9">

                                <div class="posts">

                                  <?php
                                  foreach ($master_termscondition as $key) {
                                      ?>
                                      <?php echo $key['isi'];
                                  ?>
                                    </div><!-- /.block-content-inner -->
                                    <?php
                                      }
                                    ?>

                                </div><!-- /.posts -->


                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
            </div><!-- /.container -->
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->
