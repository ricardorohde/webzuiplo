<div id="main-wrapper">
      <div id="main">
          <div id="main-inner">
              <div class="container">
                  <div class="block-content block-content-small-padding">
                    <?php
                    foreach ($master_termscondition as $key) {
                        ?>
                      <div class="block-content-inner">
                        <?php echo $key['isi'];
                    ?>
                      </div><!-- /.block-content-inner -->
                      <?php
                        }
                      ?>
                  </div><!-- /.block-content -->
              </div><!-- /.container -->
          </div><!-- /#main-inner -->
      </div><!-- /#main -->
  </div><!-- /#main-wrapper -->
