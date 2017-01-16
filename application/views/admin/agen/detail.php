<div id="main-wrapper">
       <div id="main">
           <div id="main-inner">
               <div class="container">
                   <div class="block-content block-content-small-padding">
                       <div class="block-content-inner">
                           <div class="row">
                               <div class="col-sm-9">
                                   <h2>Detail Pemilik</h2>

                                   <div class="agent-detail">
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <div class="agent-detail-picture">
                                                 <?php
                                                     if ($users['foto_profil'] != null)
                                                     {
                                                       echo "haha";
                                                     }else {
                                                       $image = array(
                                                          'src' => 'assets/images/user/avatar2.png',
                                                          'class' =>'img-responsive'
                                                        );

                                                        echo img($image);
                                                     }
                                                  ?>

                                               </div>
                                           </div>

                                           <div class="col-sm-8">
                                             <div class="post-title">
                                               <h2 class="post-title">
                                                 <a class="post-title">
                                                   <?php echo $users['first_name'];?> &nbsp; <?php echo $users['last_name'];?>
                                                 </a>
                                               </h2>
                                             </div>

                                               <p>

                                                   Donec faucibus metus sed eros euismod, eu viverra augue viverra. Sed auctor vel ligula nec molestie. Aenean a gravida metus, non sagittis nisl. Nunc quis sem sit amet leo tincidunt laoreet. Praesent a tempor nisl, id suscipit elit. Cras dolor turpis, posuere ut mollis id, rutrum eget augue. Aenean ut ligula quis neque ullamcorper tristique ut a ante. Vivamus enim erat, sollicitudin non facilisis accumsan, dictum nec libero.
                                               </p>
                                           </div>
                                       </div><!-- /.row -->
                                   </div><!-- /.agent-detail -->

                                   <h2>Daftar Rumah</h2>
                                   <?php
                                       if ($master_rumah_kontrakan['id'] != null)
                                       {
                                         echo "<div class='row'>";
                                          echo "<div class='property-item property-featured col-sm-6 col-md-4'>";
                                            echo "<div class='property-box'>";
                                              echo "<div class='property-box-inner'>";
                                              echo "<h3 class='property-box-title'>";
                                              echo "<a href=''>";
                                              echo $master_rumah_kontrakan['nama_rumah'];
                                              echo "</a>";
                                              echo "</h3>";
                                              echo "<div class='property-box-label property-box-label-primary'>";
                                              echo $master_rumah_kontrakan['jenis_rumah'];
                                              echo "</div>";

                                              echo "<h4 class='property-box-subtitle'>" ;
                                              echo "<a href=''>";
                                              echo $master_rumah_kontrakan['alamat'];
                                              echo "</h4>";
                                            echo "<div class='property-box-picture'>";
                                         echo "<div class='property-box-price'>";
                                         echo $master_rumah_kontrakan['harga_sewa'];
                                         echo "</div>";
                                          echo "<div class='property-box-picture-inner'>";
                                          echo "<a href='' class='property-box-picture-target img-detail'>";

                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kontrakan['img1'])
                                              );
                                              echo img($image);
                                          echo "</a>";
                                          echo "</div>";

                                          echo "<div class='property-box-meta'>";
                                            echo "<div class='property-box-meta-item col-sm-4'>";
                                              echo "<strong>";
                                                echo $master_rumah_kontrakan['jum_kamar_mandi'];
                                              echo "</strong>";
                                              echo "<span>Kamar Mandi</span>";
                                            echo "</div>";

                                            echo "<div class='property-box-meta-item col-sm-4'>";
                                              echo "<strong>";
                                                echo $master_rumah_kontrakan['jum_kamar_tidur'];
                                              echo "</strong>";
                                              echo "<span>Kamar Tidur</span>";
                                            echo "</div>";

                                            echo "<div class='property-box-meta-item col-sm-4'>";
                                              echo "<strong>";
                                                echo $master_rumah_kontrakan['luas_rumah'];
                                                echo "&nbsp;m<sup>2</sup>";
                                              echo "</strong>";
                                              echo "<span>Kamar Tidur</span>";
                                            echo "</div>";

                                          echo "</div>";
                                         echo "</div>";
                                         echo "string";
                                         echo "</div>";
                                         echo "</div>";
                                         echo "</div>";

                                       }
                                       else {
                                          echo "<center>";
                                            echo "<div class='col-sm-11'>";
                                              echo "<div class='box-center'>";
                                              echo "<br>";
                                                echo "<h3>Tidak Ada Data Rumah</h3>";
                                              echo "</div>";
                                            echo "</div>";
                                          echo "</center>";

                                       }
                                    ?>
                                    <?php
                                        if ($master_rumah_kos['id'] != null)
                                        {
                                          echo "<div class='row'>";
                                           echo "<div class='property-item property-featured col-sm-6 col-md-4'>";
                                             echo "<div class='property-box'>";
                                               echo "<div class='property-box-inner'>";
                                               echo "<h3 class='property-box-title'>";
                                               echo "<a href=''>";
                                               echo $master_rumah_kos['nama_rumah'];
                                               echo "</a>";
                                               echo "</h3>";
                                               echo "<div class='property-box-label'>";
                                               echo $master_rumah_kos['jenis_rumah'];
                                               echo "</div>";

                                               echo "<h4 class='property-box-subtitle'>" ;
                                               echo "<a href=''>";
                                               echo $master_rumah_kos['alamat'];
                                               echo "</h4>";
                                             echo "<div class='property-box-picture'>";
                                          echo "<div class='property-box-price'>";
                                          echo $master_rumah_kos['harga_sewa'];
                                          echo "</div>";
                                           echo "<div class='property-box-picture-inner'>";
                                           echo "<a href='' class='property-box-picture-target img-detail'>";

                                              $image = array(
                                                 'src' => 'uploads/'.($master_rumah_kos['img1'])
                                               );
                                               echo img($image);
                                           echo "</a>";
                                           echo "</div>";

                                           echo "<div class='property-box-meta'>";
                                             echo "<div class='property-box-meta-item col-sm-4'>";
                                               echo "<strong>";
                                                 echo $master_rumah_kos['fasilitas_kasur'];
                                               echo "</strong>";
                                               echo "<span>Tempat Tidur</span>";
                                             echo "</div>";

                                             echo "<div class='property-box-meta-item col-sm-4'>";
                                               echo "<strong>";
                                                 echo $master_rumah_kos['jenis_penghuni'];
                                               echo "</strong>";
                                               echo "<span>Penghuni</span>";
                                             echo "</div>";

                                             echo "<div class='property-box-meta-item col-sm-4'>";
                                               echo "<strong>";
                                                 echo $master_rumah_kos['luas_kamar'];
                                                 echo "&nbsp;m<sup>2</sup>";
                                               echo "</strong>";
                                               echo "<span>Kamar Tidur</span>";
                                             echo "</div>";

                                           echo "</div>";
                                          echo "</div>";
                                          echo "string";
                                          echo "</div>";
                                          echo "</div>";
                                          echo "</div>";

                                        }
                                        else {
                                           echo "<center>";
                                             echo "<div class='col-sm-11'>";
                                               echo "<div class='box-center'>";
                                               echo "<br>";
                                                 echo "<h3>Tidak Ada Data Rumah </h3>";
                                               echo "</div>";
                                             echo "</div>";
                                           echo "</center>";

                                        }
                                     ?>
                                   <div class="row">

                                   </div><!-- /.row -->
                                   <br><p><br><p>
                                   <h2>Contact Agent Directly</h2>

                                   <form method="post" action="http://preview.byaviators.com/template/realocation/agent-detail.html?" class="box">
                                       <div class="row">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <label>Name</label>
                                                   <input type="text" class="form-control">
                                               </div><!-- /.form-group -->
                                           </div>

                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <label>Subject</label>
                                                   <input type="text" class="form-control">
                                               </div><!-- /.form-group -->
                                           </div>
                                       </div><!-- /.row -->

                                       <div class="form-group">
                                           <label>Message</label>
                                           <textarea rows="8" class="form-control"></textarea>
                                       </div><!-- /.form-group -->

                                       <div class="form-group">
                                           <input type="submit" value="Contact Agent" class="btn btn-primary btn-inversed">
                                       </div><!-- /.form-group -->
                                   </form>
                               </div>

                           </div><!-- /.row -->
                       </div><!-- /.block-content-inner -->
                   </div><!-- /.block-content -->
               </div><!-- /.container -->
           </div><!-- /#main-inner -->
       </div><!-- /#main -->
   </div><!-- /#main-wrapper -->
<style media="screen">
  .img-detail{
    height: 250px;
  }
  .box-center{
    background-color: #e6e6e6;
    height: 50px;
  }
</style>
