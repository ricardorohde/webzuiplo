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
            <div class="box-body">
              <?php
                echo form_open_multipart('main/save_rumah_kontrakan');?>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label>E-mail</label>
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label>Nama Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="" placeholder="(ex : Grand Permai)" name="nama_rumah" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <br>
                    <label>Alamat<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <textarea name="alamat" class="form-control" rows="4" placeholder="(ex : Jl. Nusa 1 Rt:05 Rw:03, Kramat Jati - Jakarta Timur" required/></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label>Nama Pemilik Rumah Kontrakan<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="text" name="nama_pemilik_rumah" class="form-control" id="" placeholder="(ex : Susanti)" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label>Nomor Kontak Pemilik<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="text" name="nomor_kontak_pemilik" class="form-control" id="" placeholder="(ex : xxxx-xxxx-xxxx)" required/>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName3">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName4">
                  </div>
                </div>

                <div class="col-md-12 jar"></div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn bg-green btn-lg col-md-12" >
                        <i class="fa fa-fw fa-send"></i> Kirim Data
                    </button>
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
                    <input type="text" class="form-control" id="" name="lat" disabled/>
                  </div>
                  <div class="col-sm-2">
                    <label>Longitude &nbsp; &nbsp; &nbsp;: </label>
                  </div>
                  <div class="col-sm-4">
                    <input type="text"  class="form-control" id="" name="lng" disabled/>
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
                    <input type="text" class="form-control" id=""  name="postal_code" disabled/>
                  </div>
                  <div class="col-sm-2">
                    <label>Kota &nbsp; &nbsp; &nbsp;: </label>
                  </div>
                  <div class="col-sm-4">
                    <input type="text"  class="form-control" id=""  name="country" disabled/>
                  </div>
                </div>
                <form>
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
      </form>
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
    <div class="col-md-12">
      <div class="col-md-6">
        <br>
        <label>Harga Sewa<label class="required">*</label></label>
      </div>
      <div class="col-md-6">
        <br>
        <label>Jenjang Waktu Sewa<label class="required">*</label></label>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-sm-6">
        <div class="input-group ">
          <span class="input-group-addon">Rp.</span>
            <input type="text" name="harga_sewa" class="form-control" id="" placeholder="(ex : 500000)" required/>
          <span class="input-group-addon">.00</span>
        </div>
        <br>
      </div>
      <div class="col-sm-6">
          <select class="form-control" name="jenjang_waktu">
            <option <?php echo ($this->input->post("jenjang_waktu")=="Per Bulan")?"selected":"";?> value="Per Bulan">Per Bulan</option>
            <option <?php echo ($this->input->post("jenjang_waktu")=="Per Tahun")?"selected":"";?> value="Per Tahun">Per Tahun</option>
          </select>
      </div>
    </div>

    <br>
  </div>


  <div class="form-group">
    <div class="col-md-12">
      <div class="col-md-4">
        <label>Luas Rumah<label class="required">*</label></label>
      </div>
      <div class="col-md-4">
        <label>Jumlah Kamar Tidur<label class="required">*</label></label>
      </div>
      <div class="col-md-4">
        <label>Jumlah Kamar Mandi<label class="required">*</label></label>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-sm-4">
        <div class="input-group">
          <input type="text" name="luas_rumah" class="form-control" id="" placeholder="(ex : 120)" required/>
          <span class="input-group-addon">m<sup>2</sup></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <input type="number" name="jum_kamar_tidur" class="form-control" id="" placeholder="(ex : 2)" required/>
          <span class="input-group-addon">Kamar</span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <input type="number" name="jum_kamar_mandi" class="form-control" id="" placeholder="(ex : 1)" required/>
          <span class="input-group-addon">Kamar</span>
        </div>
      </div>
    </div>

  </div>
  <div class="form-group">
    <div class="col-md-12">
      <div class="col-md-12">
        <br>
        <label>Keterangan Lain</label>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-12">
        <textarea class="form-control" name="ket_biaya" rows="4" cols="43" placeholder="(ex : Biaya tidak termasuk Listrik dan Air)                   *Maks 250 karakter"></textarea>
      </div>
    </div>

  </div>
  <div class="form-group">
    <div class="col-md-12">
      <div class="col-md-12">
        <br>
        <label>Deskripsi Rumah<label class="required">*</label></label>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-12">
        <textarea class="form-control" name="deskripsi_rumah" rows="4" cols="43" placeholder="(ex : Biaya tidak termasuk Listrik dan Air)                   *Maks 250 karakter" required/></textarea>
      </div>
    </div>

  </div>
  <div class="col-md-12">

  </div>


</div>

</div>
<div class="box-footer">

</div>
<?php form_close(); ?>
</div>
</div>


      <style media="screen">
        .jar
        {
          height: 20px;
        }

        .required
        {
          color:red;
          font-style: normal;
        }


        .map_canvas
        {
          height: 400px;
        }

      </style>
    </section>
  </div>
