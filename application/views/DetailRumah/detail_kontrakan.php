<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">
            <div id="map-property"></div><!-- /.map-property -->

            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <div class="row">
                            <div class="col-sm-9">

                                <h2 class="property-detail-title"><?php echo $master_rumah_kontrakan['jenis_rumah'];?>&nbsp;<?php echo $master_rumah_kontrakan['nama_rumah'];?></h2>
                                <h3 class="property-detail-subtitle"><?php echo $master_rumah_kontrakan['alamat'];?> <strong>Rp. <?php echo $master_rumah_kontrakan['harga_sewa'];?> ,-</strong></h3>

                                <div class="property-detail-overview">
                                    <div class="property-detail-overview-inner clearfix">
                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Nama Rmh:</strong>
                                            <span><?php echo $master_rumah_kontrakan['nama_rumah'];?></span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Harga:</strong>
                                          <span>Rp. <?php echo $master_rumah_kontrakan['harga_sewa'];?> ,-</span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Waktu:</strong>
                                          <span><?php echo $master_rumah_kontrakan['jenjang_waktu'];?> </span>

                                        </div><!-- /.property-detail-overview-item -->
                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Luas Rumah:</strong>
                                          <span><?php echo $master_rumah_kontrakan['luas_rumah'];?> m<sup>2</sup></span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Kamar Mandi:</strong>
                                          <span><?php echo $master_rumah_kontrakan['jum_kamar_mandi'];?></span>

                                        </div><!-- /.property-detail-overview-item -->

                                         <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Kamar Tidur:</strong>
                                          <span><?php echo $master_rumah_kontrakan['jum_kamar_tidur'];?></span>
                                        </div><!-- /.property-detail-overview-item -->
                                    </div><!-- /.property-detail-overview-inner -->
                                </div><!-- /.property-detail-overview -->

                                <div class="flexslider">
                                    <ul class="slides">

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/12.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kontrakan['img1']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/6.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kontrakan['img2']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/5.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kontrakan['img2']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/12.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kontrakan['img2']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>
                                    </ul><!-- /.slides -->
                                </div><!-- /.flexslider -->

                                <hr>

                                <h2>Deskripsi Rumah</h2>

                                <p>
                                    <?php echo $master_rumah_kontrakan['deskripsi_rumah'];?>
                                </p>

                                <hr>

                                <h2>Fasilitas</h2>

                                <div class="row">
                                    <ul class="property-detail-amenities">
                                        <li class="col-xs-6 col-sm-4"><i class="fa fa-check ok"></i> Kamar Tidur</li>
                                        <li class="col-xs-6 col-sm-4"><i class="fa fa-check ok"></i> Kamar Mandi</li>
                                        <!-- <li class="col-xs-6 col-sm-4"><i class="fa fa-ban no"></i> Balcony</li> -->

                                    </ul>
                                </div><!-- /.row -->
                            </div>

                            <div class="col-sm-3">
                                <div class="sidebar">
                                    <div class="sidebar-inner">
                                        <div class="widget">
</div><!-- /.widget -->
          <div class="widget">
    <h5 class="widget-title">Tinggalkan Pesan</h5>

    <div class="widget-content">
        <?php echo form_open('Detail/save_pesan_pencari_kontrakan');?>
          <input type="text" name="id_rumah_kontrakan" value="<?php echo $master_rumah_kontrakan['id'];?>" class="form-control">
            <input type="text" name="id_pemilik" value="<?php echo $master_rumah_kontrakan['id_pemilik'];?>" class="form-control">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="" class="form-control">
            </div><!-- /.form-group -->

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="" class="form-control">
            </div><!-- /.form-group -->

            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="no_telp" value="" class="form-control">
            </div><!-- /.form-group -->

            <div class="form-group">
                <label>Message</label>
                <textarea name="pesan" class="form-control"></textarea>
            </div><!-- /.form-group -->

            <div class="form-group">
                <input type="submit" value="Contact" class="btn btn-block btn-primary btn-inversed">
            </div><!-- /.form-group -->
        <?php form_close(); ?>
    </div><!-- /.widget-content -->
</div><!-- /.widget -->

 <div class="widget">
    <h3 class="widget-title">Kontak Pemilik</h3>

    <div class="agent-small">
        <div class="agent-small-top">
            <div class="clearfix">
                <div class="agent-small-picture col-sm-12">
                    <div class="agent-small-picture-inner">
                        <a href="#" class="agent-small-picture-inner ">
                          <?php
                              if ($master_rumah_kontrakan['foto_profil_pemilik'] != null)
                              {
                                echo "haha";
                              }else {
                                $image = array(
                                   'src' => 'assets/images/user/avatar2.png',
                                   'class' =>'profile-user-img img-responsive img-circle',
                                   'alt' => 'User profile picture'
                                 );

                                 echo img($image);
                              }
                           ?>
                        </a><!-- /.agent-small-picture-target -->
                    </div><!-- /.agent-small-picture-inner -->
                </div><!-- /.agent-small-picture -->
            </div><!-- /.row -->
        </div><!-- /.agent-small-top -->

        <div class="agent-small-bottom">
            <ul class="list-unstyled">
                <li><i class="fa fa-phone"></i>
                    <!-- <?php echo $master_rumah_kontrakan['id_pemilik'];?> -->
                   <?php echo $master_rumah_kontrakan['nomor_kontak_pemilik'];?>
                 </li>
                <li><i class="fa fa-envelope-o"></i> <a><?php echo $master_rumah_kontrakan['email_pemilik'];?></a></li>
            </ul>
        </div><!-- /.agent-small-bottom -->
    </div>
</div><!-- /.widget -->
  </div><!-- /.sidebar-inner -->
                                </div><!-- /.sidebar -->
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
    height: 500px;
  }
</style>
