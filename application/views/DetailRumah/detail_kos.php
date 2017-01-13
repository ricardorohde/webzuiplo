<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">
            <div id="map-property"></div><!-- /.map-property -->

            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <div class="row">
                            <div class="col-sm-9">

                                <h2 class="property-detail-title"><?php echo $master_rumah_kos['jenis_rumah'];?>&nbsp;<?php echo $master_rumah_kos['nama_rumah'];?></h2>
                                <h3 class="property-detail-subtitle"><?php echo $master_rumah_kos['alamat'];?> <strong>Rp. <?php echo $master_rumah_kos['harga_sewa'];?> ,-</strong></h3>

                                <div class="property-detail-overview">
                                    <div class="property-detail-overview-inner clearfix">



                                        <div class="property-detail-overview-item col-sm-6 col-md-3">
                                          <strong>Harga:</strong>
                                          <span>Rp. <?php echo $master_rumah_kos['harga_sewa'];?> ,-</span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Waktu:</strong>
                                          <span><?php echo $master_rumah_kos['jenjang_waktu'];?> </span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Luas Rumah:</strong>
                                          <span><?php echo $master_rumah_kos['luas_kamar'];?> m<sup>2</sup></span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                          <strong>Kasur:</strong>
                                          <span><?php echo $master_rumah_kos['fasilitas_kasur'];?></span>

                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-3">
                                          <strong>Status Kamar:</strong>
                                          <span><?php echo $master_rumah_kos['status_kamar'];?></span>
                                        </div><!-- /.property-detail-overview-item -->
                                    </div><!-- /.property-detail-overview-inner -->
                                </div><!-- /.property-detail-overview -->

                                <div class="flexslider">
                                    <ul class="slides">

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/12.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kos['img1']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/6.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kos['img2']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/5.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kos['img3']),
                                                'class' =>'img-detail'
                                              );
                                              echo img($image); ?>
                                        </li>

                                        <li data-thumb="<?php echo base_url('assets/img/tmp/properties/large/12.jpg');?>">
                                          <?php
                                             $image = array(
                                                'src' => 'uploads/'.($master_rumah_kos['img4']),
                                                'class' =>'img-detail'
                                              );

                                              echo img($image); ?>
                                        </li>
                                    </ul><!-- /.slides -->
                                </div><!-- /.flexslider -->

                                <hr>

                                <h2>Deskripsi Rumah</h2>

                                <p>
                                    <?php echo $master_rumah_kos['deskripsi_rumah'];?>
                                </p>

                                <hr>

                                <h2>Fasilitas</h2>

                                <div class="row">
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kasur'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kasur</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kursi Kasur</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_almari'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Almari</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Almari</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_meja_belajar'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Meja Belajar</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Meja Belajar</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kursi_belajar'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kursi Belajar</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kursi Belajar</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kipas_angin'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kipas Angin</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kipas Angin</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_ac'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Air Conditioner</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Air Conditioner</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_koneksi_internet'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Koneksi Internet</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Koneksi Internet</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_dispenser'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Dispenser</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Dispenser</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kulkas'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kulkas</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kulkas</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_wastafel_kmr'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Wastafel Kamar</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Wastafel Kamar</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_wastafel_kmr_mandi'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Wastafel Kamar Mandi</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Wastafel Kamar Mandi</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_meja_rias'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Meja Rias</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Meja Rias</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_tv'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> TV</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> TV</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kmr_mandi_dalam'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kamar Mandi Dalam</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kamar Mandi Dalam</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kmr_mandi_luar'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kamar Mandi Luar</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kamar Mandi Luar</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kloset_duduk'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kloset Duduk</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kloset Duduk</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_kloset_jongkok'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Kloset Jongkok</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Kloset Jongkok</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_shower'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Shower</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Shower</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_bak_mandi'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Bak Mandi</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Bak Mandi</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_air_panas'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Air Panas</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Air Panas</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_bath_up'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Bath Up</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Bath Up</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_ember_mandi'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Ember</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Ember</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_ruang_tamu'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Ruang Tamu</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Ruang Tamu</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_ruang_makan'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Ruang Makan</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Ruang Makan</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_dapur'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Dapur</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Dapur</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_ruang_santai'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Ruang Santai</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Ruang Santai</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_mesin_cuci'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Mesin Cuci</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Mesin Cuci</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_security'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Security</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Security</li>";
                                      }
                                         ?>
                                    </ul>
                                    <ul class="property-detail-amenities">
                                      <?php
                                      if ($master_rumah_kos['fasilitas_akses_full'] != null)
                                      {
                                          echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-check ok'></i> Akses 24 Jam</li>";
                                      }else {
                                        echo "<li class='col-xs-6 col-sm-4'><i class='fa fa-ban no'></i> Akses 24 Jam</li>";
                                      }
                                         ?>
                                    </ul>


                                </div><!-- /.row -->
                            </div>

                            <div class="col-sm-3">
                                <div class="sidebar">
                                    <div class="sidebar-inner">
                                        <div class="widget">
    <!-- <h3 class="widget-title">Social Networks</h3>

    <ul class="social social-boxed">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul> -->
</div><!-- /.widget -->
          <div class="widget">
    <h5 class="widget-title">Tinggalkan Pesan</h5>

    <div class="widget-content">
        <?php echo form_open('Detail/save_master_pesan_pencari');?>
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
                            <img src="<?php echo base_url('assets/img/tmp/agents/medium/3.jpg');?>" alt="">
                        </a><!-- /.agent-small-picture-target -->
                    </div><!-- /.agent-small-picture-inner -->
                </div><!-- /.agent-small-picture -->
            </div><!-- /.row -->
        </div><!-- /.agent-small-top -->

        <div class="agent-small-bottom">
            <ul class="list-unstyled">
                <li><i class="fa fa-phone"></i> +0-123-322-123</li>
                <li><i class="fa fa-envelope-o"></i> <a href="#">hi@company.com</a></li>
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
