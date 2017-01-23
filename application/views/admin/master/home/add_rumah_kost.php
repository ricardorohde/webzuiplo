
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kelola Rumah Kontrakan
        <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Kelola Rumah Kontrakan</a></li>
        <li>Master</li>
        <li class="active">Add</li>
      </ol>
    </section>
    <section class="content">
      <?php if(isset($pesan)){
        echo "<div class='alert alert-success alert-dismissible'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;";
        echo "</button>";
        echo "  <h4><i class='icon fa fa-check'></i> Sukses!</h4>";
        echo "<h5>$pesan</h5>";
        echo "</div>";
        }?>
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Rumah</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-body">
                    <?php
                      echo form_open_multipart('main/upload');?>
                    <div class="col-md-4">

                      <div class="form-group">
                        <div class="col-md-12">
                          <br>
                          <label>E-mail</label>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="" name="email_pemilik" value="<?php echo $users['email'];?>">
                        </div>
                      </div>
                      <input type="text" name="id_pemilik" value="<?php echo $users['id'];?>" class="form-control">
                      <div class="form-group">
                        <div class="col-md-12">
                          <br>
                          <label>Nama Rumah<label class="required">*</label></label>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="" placeholder="(ex : Permai Sari)" name="nama_rumah" required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <br>
                          <label>Alamat<label class="required">*</label></label>
                        </div>
                        <div class="col-sm-12">
                          <textarea name="alamat" class="form-control" rows="4" placeholder="(ex : Jl. Nusa 1 Rt:05 Rw:03, Kramat Jati - Jakarta Timur"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <br>
                          <label>Nama Pemilik Kost<label class="required">*</label></label>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" name="nama_pemilik_rumah" class="form-control" id="" placeholder="(ex : Susanti)">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <br>
                          <label>Nomor Kontak Pemilik<label class="required">*</label></label>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" name="nmr_kontak_pemilik" class="form-control" id="" placeholder="(ex : xxxx-xxxx-xxxx)">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <br>
                          <label>Nama Pengelola Kos</label>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" name="nama_pengelola" class="form-control" id="" placeholder="(ex : Rahman Lubis)">
                        </div>
                      </div>
                      <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label>Nomor Kontak Pengelola</label>
                              </div>
                              <div class="col-sm-12">
                                <input type="text" name="nmr_pengelola" class="form-control" id="" placeholder="(ex : xxxx-xxxx-xxxx)">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label>Harga Sewa<label class="required">*</label></label>
                                <div class="input-group ">
                                  <span class="input-group-addon">Rp.</span>
                                    <input type="text" name="harga_sewa" class="form-control" id="" placeholder="300000" required/>
                                  <span class="input-group-addon">.00</span>
                                </div>
                              </div>

                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label>Jenjang Waktu Sewa<label class="required">*</label></label>
                                <select class="form-control" name="jenjang_waktu">
                                  <option <?php echo ($this->input->post("jenjang_waktu")=="Per Bulan")?"selected":"";?> value="Per Bulan">Per Bulan</option>
                                  <option <?php echo ($this->input->post("jenjang_waktu")=="Per Tahun")?"selected":"";?> value="Per Tahun">Per Tahun</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <br>
                                <label>Keterangan Biaya Lain</label>
                              </div>
                              <div class="col-sm-12">
                                <textarea class="form-control" name="ket_biaya" rows="4" cols="43" placeholder="(ex : Biaya tidak termasuk Listrik dan Air)                   *Maks 250 karakter"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName2">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName3">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName4">
                              </div>
                            </div>


                          </div>
                          <div class="col-md-8">
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label>Koordinat<label class="required">*</label></label>

                              </div>
                              <br><br><p>
                              <div class="col-sm-2">
                                <label>Latitude &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                              </div>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="" name="lat" >
                              </div>
                              <div class="col-sm-2">
                                <label>Longitude &nbsp; &nbsp; &nbsp;: </label>
                              </div>
                              <div class="col-sm-4">
                                <input type="text"  class="form-control" id="" name="lng">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                              </div>
                              <div class="col-sm-2">
                                <label>Kode Pos &nbsp; &nbsp; &nbsp;: </label>
                              </div>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id=""  name="postal_code" >
                              </div>
                              <div class="col-sm-2">
                                <label>Kota &nbsp; &nbsp; &nbsp;: </label>
                              </div>
                              <div class="col-sm-4">
                                <input type="text"  class="form-control" id=""  name="country" >
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label>Lokasi<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-11">
                                <input id="geocomplete" type="text" class="form-control col-md-10" placeholder="Type in an address" value="Empire State Bldg" >

                              </div>
                              <div class="col-sm-1">
                              <a class="btn btn-social-icon btn-dropbox col-sm-1" id="find" value="find"><i class="fa fa-search"></i></a>
                              </div>
                            </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">

                                      <div class="map_canvas"></div>

                                        <fieldset>
                                          <input name="name" type="hidden" value="" disabled="">
                                          <input name="point_of_interest" type="hidden" value="">
                                          <input name="location" type="hidden" value="">
                                          <input name="location_type" type="hidden" value="">
                                          <input name="formatted_address" type="hidden" value="">
                                          <input name="bounds" type="hidden" value="">
                                          <input name="viewport" type="hidden" value="">
                                          <input name="route" type="hidden" value="">
                                          <input name="street_number" type="hidden" value="">
                                          <input name="locality" type="hidden" value="">
                                          <input name="sublocality" type="hidden" value="">
                                          <input name="country_short" type="hidden" value="">
                                          <input name="administrative_area_level_1" type="hidden" value="">
                                          <input name="place_id" type="hidden" value="">
                                          <input name="id" type="hidden" value="">
                                          <input name="reference" type="hidden" value="">
                                          <input name="url" type="hidden" value="">
                                          <input name="website" type="hidden" value="">
                                        </fieldset>
                                      <!-- </form> -->
                                      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&sensor=false&amp;libraries=places"></script>
                                      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

                                      <script src="<?php echo base_url('assets/js/maps/jquery.geocomplete.js');?>"></script>
                                      <script src="<?php echo base_url('assets/js/maps/jquery.geocomplete.min.js');?>"></script>
                                      <script>

                                        $(function(){
                                          $("#geocomplete").geocomplete({
                                            map: ".map_canvas",
                                            details: "form",
                                            types: ["geocode", "establishment"],
                                          });

                                          $("#find").click(function(){
                                            $("#geocomplete").trigger("geocode");
                                          });
                                        });
                                      </script>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-4">
                                      <br>
                                      <label>Luas Kamar<label class="required">*</label></label>
                                    </div>
                                    <div class="col-md-4">
                                      <br>
                                      <label>Jenis Penghuni<label class="required">*</label></label>
                                    </div>
                                    <div class="col-md-4">
                                      <br>
                                      <label>Status Kamar<label class="required">*</label></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="input-group">
                                        <input type="text" name="luas_kamar" class="form-control" id="" placeholder="120" required/>
                                        <span class="input-group-addon">m<sup>2</sup></span>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">

                                      <select class="form-control" name="jenis_penghuni" id="jenis_penghuni">
                                        <option <?php echo ($this->input->post("jenis_penghuni")=="Wanita")?"selected":"";?> value="Wanita">Wanita</option>
                                        <option <?php echo ($this->input->post("jenis_penghuni")=="Pria")?"selected":"";?> value="Pria">Pria</option>
                                        <option <?php echo ($this->input->post("jenis_penghuni")=="Pasutri")?"selected":"";?> value="Pasutri">Pasutri</option>
                                        <option <?php echo ($this->input->post("jenis_penghuni")=="Campuran")?"selected":"";?> value="Campuran">Campuran</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-4">
                                      <select class="form-control" name="status_kamar" id="status_kamar">
                                        <option <?php echo ($this->input->post("status_kamar")=="Kosong")?"selected":"";?> value="Kosong">Kosong</option>
                                        <option <?php echo ($this->input->post("status_kamar")=="Penuh")?"selected":"";?> value="Penuh">Penuh</option>
                                        <option <?php echo ($this->input->post("status_kamar")=="Tersedia")?"selected":"";?> valu="Tersedia">Tersedia</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <br>
                                      <label>Fasilitas Kamar<label class="required">*</label></label>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kasur" value="Ada"> &nbsp;Kasur
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_almari" value="Ada">&nbsp; Almari Pakaian
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_meja_belajar" value="Ada"> Meja Belajar
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kursi_belajar" value="Ada"> Kursi Belajar
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12"></div>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kipas_angin" value="Ada"> Kipas Angin
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_ac" value="Ada"> AC
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_koneksi_internet" value="Ada"> Koneksi Internet
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_dispenser" value="Ada"> Dispenser
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12"></div>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kulkas" value="Ada"> Kulkas
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_wastafel_kmr" value="Ada"> Wastafel
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_meja_rias" value="Ada"> Meja Rias
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_tv" value="Ada"> TV
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <br>
                                      <label>Fasilitas Kamar lain</label>
                                    </div>
                                    <div class="col-sm-12">
                                      <textarea name="fasilitas_kamar_lain" class="form-control" rows="4" placeholder="(ex : Adanya Bantal dan Guling)  *Maks 250 karakter"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <br>
                                      <label>Fasilitas Kamar Mandi<label class="required">*</label></label>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kmr_mandi_dalam" value="Ada"> Kamar Mandi Dalam
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kmr_mandi_luar" value="Ada"> Kamar Mandi Luar
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kloset_duduk" value="Ada"> Kloset Duduk
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_kloset_jongkok" value="Ada"> Kloset Jongkok
                                      </div>
                                    </div>
                                    <div class="col-md-12"></div>
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_shower" value="Ada"> Shower
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_bak_mandi" value="Ada"> Bak Mandi
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_air_panas" value="Ada"> Air Panas
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_bath_up" value="Ada"> Bath Up
                                      </div>
                                    </div>
                                    <div class="col-md-12"></div>
                                    <div class="col-md-12">
                                      <div class="col-md-6">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_wastafel_kmr_mandi" value="Ada"> Wastafel
                                      </div>
                                      <div class="col-md-6">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_ember_mandi" value="Ada">  Ember Mandi
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <br>
                                      <label>Deskripsi Rumah<label class="required">*</label></label>
                                    </div>
                                    <div class="col-sm-12">
                                      <textarea name="deskripsi_rumah" class="form-control" rows="4" placeholder="(ex : Adanya Gayung)  *Maks 250 karakter" required/></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <br>
                                      <label>Fasilitas Rumah Kos lainnya</label>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_ruang_tamu" value="Ada">  Ruang Tamu
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_ruang_makan" value="Ada"> Ruang Makan
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_dapur" value="Ada"> Dapur
                                      </div>
                                      <div class="col-md-3">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_ruang_santai" value="Ada"> Ruang Santai
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-4">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_mesin_cuci" value="Ada"> Mesin Cuci
                                      </div>
                                      <div class="col-md-4">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_security" value="Ada"> Security
                                      </div>
                                      <div class="col-md-4">
                                        <input type="checkbox" class="flat-red"  name="fasilitas_akses_full" value="Ada"> Akses 24 Jam
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                    <?php form_close(); ?>
                </div>
              </div>
            </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-green btn-lg col-md-12" >
                <i class="fa fa-fw fa-send"></i> Kirim Data
            </button>
          </div>
        </div>
      </div>
<style media="screen">
  .jar{height: 20px;}
  .required{color:red;font-style: normal;}
  .map_canvas{height: 400px;}
</style>
  <script src="<?php echo base_url('assets/adminlte/plugins/iCheck/icheck.min.js')?>"></script>
  <script>
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
   checkboxClass: 'icheckbox_flat-green',
   radioClass: 'iradio_flat-green'
 });
  </script>
