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
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="list">
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-home"></i>

                <h3 class="box-title">Rumah Kontrakan</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>

                </div>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <center>
                      <th>Nama Rumah</th>
                      <th>Alamat</th>
                      <th>Harga Sewa</th>
                      <th>Jenjang Waktu</th>

                      <th class=" no-link last"><span class="nobr"><center> Aksi</center></span></th>
                    </center>
                  </tr>
                </thead>
                <tbody>
                  <td><?php echo $master_rumah_kontrakan['nama_rumah']; ?></td>
                  <td><?php echo $master_rumah_kontrakan['alamat']; ?></td>
                  <td><?php echo $master_rumah_kontrakan['harga_sewa']; ?></td>
                  <td><?php echo $master_rumah_kontrakan['jenjang_waktu']; ?></td>
                  <td>
                    <!-- <a href="<?php echo base_url('Main/cuti_delete/'.$key['id']);?>" onClick="return doconfirm();"> -->
                    <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips btn-danger"><i class="fa fa-trash-o"></i>
                    </button></a>
                    <script>
                    function doconfirm()
                      {
                        job=confirm("Are you sure to delete this data?");
                          if(job!=true)
                            {
                              return false;
                            }
                      }
                    </script>
                  </center>
                  <a href="<?php echo base_url('Main/edit_list_rumah/'.$master_rumah_kontrakan['id']);?>">
                    <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-primary"><i class="fa fa-edit"></i>
                    </button>
                  </a>
                  </td>
                </tbody>
              </table>
              </div>
              <!-- /.box-body-->
            </div>
            <!-- /.box -->
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-institution"></i>

                <h3 class="box-title">Rumah Kos</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>

                </div>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <center>
                      <th>Nama Rumah</th>
                      <th>Alamat</th>
                      <th>Harga Sewa</th>
                      <th>Jenjang Waktu</th>
                      <th>Jenis Penghuni</th>
                      <th>Status Kamar</th>
                      <th class=" no-link last"><span class="nobr"><center> Aksi</center></span></th>
                    </center>
                  </tr>
                </thead>
                <tbody>

                    <td><?php echo $master_rumah_kos['nama_rumah']; ?></td>
                    <td><?php echo $master_rumah_kos['alamat']; ?></td>
                    <td><?php echo $master_rumah_kos['harga_sewa']; ?></td>
                    <td><?php echo $master_rumah_kos['jenjang_waktu']; ?></td>
                    <td><?php echo $master_rumah_kos['jenis_penghuni']; ?></td>
                    <td><?php echo $master_rumah_kos['status_kamar']; ?></td>
                </tbody>

              </table>
              </div>
              <!-- /.box-body-->
            </div>
          </div>
          <div class="tab-pane" id="detail">
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-home"></i>

                <h3 class="box-title">Rumah Kontrakan</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>

                </div>
              </div>
              <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active"><center>
                      <?php
                         $image = array(
                            'src' => 'uploads/'.($master_rumah_kontrakan['img1']),
                            'alt' =>'First Slide',
                            'class'=>'img-carousel'
                          );
                          echo img($image); ?></center>
                      <div class="carousel-caption">
                        <!-- <?php echo $row->nama_rumah ?> -->
                      </div>
                    </div>
                    <div class="item"><center>
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Second slide" class="img-carousel"></center>

                      <div class="carousel-caption">
                        Second Slide
                      </div>
                    </div>
                    <div class="item"><center>
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Third slide" class="img-carousel"></center>

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
                <div class="col-md-12">
                   <div class="box-header with-border">
                     <h3 class="box-title">Data Rumah</h3>
                   </div>
                   <form class="form-horizontal">
                     <div class="box-body">
                       <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Nama Rumah</label>

                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputEmail3" disabled="" value="<?php echo $master_rumah_kontrakan['nama_rumah'];?>">
                         </div>
                       </div>
                       <div class="form-group">
                           <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kontrakan['alamat'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kode Pos</label>
                         <div class="col-sm-4">
                           <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kontrakan['kode_pos'];?>" disabled="">
                         </div>
                         <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>
                       <div class="col-sm-4">
                         <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kontrakan['alamat'];?>" disabled="">
                       </div>
                       </div>
                       <div class="form-group">
                           <label class="col-sm-2 control-label">Deskripsi Rumah</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['deskripsi_rumah'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Harga Sewa</label>
                         <div class="col-sm-4">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['harga_sewa'];?>" disabled="">
                         </div>
                         <label class="col-sm-2 control-label">Jenjang Waktu</label>
                       <div class="col-sm-4">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['jenjang_waktu'];?>" disabled="">
                       </div>
                       </div>
                       <div class="form-group">
                           <label class="col-sm-2 control-label">Keterangan Biaya</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['ket_biaya'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Luas Rumah</label>
                         <div class="col-sm-2">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['luas_rumah'];?>" disabled="">
                         </div>
                         <label class="col-sm-2 control-label">Jumlah Kamar Tidur</label>
                       <div class="col-sm-2">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['jum_kamar_tidur'];?>" disabled="">
                       </div>
                       <label class="col-sm-2 control-label">Jumlah Kamar Mandi</label>
                       <div class="col-sm-2">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kontrakan['jum_kamar_mandi'];?>" disabled="">
                       </div>
                       </div>

                     </div>
                   </form>
                </div>
              <!-- /.box-body-->
            </div>
            </div>
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-home"></i>

                <h3 class="box-title">Rumah Kos</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>

                </div>
              </div>
              <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active"><center>
                      <?php
                         $image = array(
                            'src' => 'uploads/'.($master_rumah_kos['img1']),
                            'alt' =>'First Slide',
                            'class'=>'img-carousel'
                          );
                          echo img($image); ?></center>
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item"><center>
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Second slide" class="img-carousel"></center>

                      <div class="carousel-caption">
                        Second Slide
                      </div>
                    </div>
                    <div class="item"><center>
                        <img src="<?php echo base_url('assets/images/background/bg.png');?>" alt="Third slide" class="img-carousel"></center>

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
                <div class="col-md-12">
                   <div class="box-header with-border">
                     <h3 class="box-title">Data Rumah</h3>
                   </div>
                   <form class="form-horizontal">
                     <div class="box-body">
                       <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Nama Rumah</label>

                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputEmail3" disabled="" value="<?php echo $master_rumah_kos['nama_rumah'];?>">
                         </div>
                       </div>
                       <div class="form-group">
                           <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kos['alamat'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kode Pos</label>
                         <div class="col-sm-4">
                           <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kos['kode_pos'];?>" disabled="">
                         </div>
                         <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>
                       <div class="col-sm-4">
                         <input type="text" class="form-control" id="inputPassword3" value="<?php echo $master_rumah_kos['alamat'];?>" disabled="">
                       </div>
                       </div>
                       <div class="form-group">
                           <label class="col-sm-2 control-label">Deskripsi Rumah</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kos['deskripsi_rumah'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Harga Sewa</label>
                         <div class="col-sm-4">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kos['harga_sewa'];?>" disabled="">
                         </div>
                         <label class="col-sm-2 control-label">Jenjang Waktu</label>
                       <div class="col-sm-4">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kos['jenjang_waktu'];?>" disabled="">
                       </div>
                       </div>
                       <div class="form-group">
                           <label class="col-sm-2 control-label">Keterangan Biaya</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kos['ket_biaya'];?>" disabled="">
                         </div>
                       </div>
                       <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Luas Rumah</label>
                         <div class="col-sm-2">
                           <input type="text" class="form-control" value="<?php echo $master_rumah_kos['luas_kamar'];?>" disabled="">
                         </div>
                         <label class="col-sm-2 control-label">Status Kamar</label>
                       <div class="col-sm-2">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kos['status_kamar'];?>" disabled="">
                       </div>
                       <label class="col-sm-2 control-label">Jenis Penghuni</label>
                       <div class="col-sm-2">
                         <input type="text" class="form-control" value="<?php echo $master_rumah_kos['jenis_penghuni'];?>" disabled="">
                       </div>
                       </div>

                     </div>
                   </form>
                </div>
              <!-- /.box-body-->
            </div>
            </div>
          </div>

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
  .dt-img{
    width: 140px;
    height: 90px;
  }
  .img-carousel{
    width: 650px;
    height: 350px;
  }
</style>
