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
                                  <div class="row">
                                      <h2 class="center">FAQ</h2>

                                      <p class="block-slogan center">
                                          Sed dapibus, ante non pulvinar dictum, dui elit fermentum est, ac auctor sem arcu eget<br>
                                          tortor. Praesent odio lectus, dapibus sed sapien in, ullamcorper congue elit. Cras porttitor rhoncus sem ac sollicitudin.
                                      </p>

                                      <div class="panel-group" id="accordion">
                                        <?php
                                        foreach ($master_faqhelp as $key) {
                                            ?>

                                          <div class="panel panel-default">
                                              <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                          <?php echo $key['judul']; ?>
                                                      </a>
                                                  </h4>
                                              </div><!-- /.panel-heading -->

                                              <div id="collapseTwo" class="panel-collapse collapse">
                                                  <div class="panel-body">
                                                      <?php echo $key['isi']; ?>
                                                  </div><!-- /.panel-body -->
                                              </div><!-- /.panel-collapse -->
                                          </div><!-- /.panel -->

                                          <?php
                                            }
                                          ?>

                                      </div><!-- /.panel-group -->
                                  </div><!-- /.row -->
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
