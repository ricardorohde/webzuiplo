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
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName5">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah</label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName6">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label for="exampleInputFile">Gambar Rumah</label>
                  </div>
                  <div class="col-sm-12">
                    <input type="file" id="exampleInputFile" name="imgName7">
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
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="" placeholder="Latitude" name="lat">
                  </div>
                  <div class="col-sm-6">
                    <input type="text"  class="form-control" id="" placeholder="Longitude" name="long">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <br>
                    <label>Lokasi<label class="required">*</label></label>
                  </div>
                  <div class="col-sm-12">
                    <input id="pac-input" type="text" class="form-control"
                        placeholder="Cari Lokasi">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">

                    <div id="map">

                    </div>
                    <script>

                      function initMap() {
                        var map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -6.210975, lng: 106.848744},
                          zoom: 13
                        });
                        var input = /** @type {!HTMLInputElement} */(
                            document.getElementById('pac-input'));

                        var types = document.getElementById('type-selector');
                        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                        var autocomplete = new google.maps.places.Autocomplete(input);
                        autocomplete.bindTo('bounds', map);

                        var infowindow = new google.maps.InfoWindow();
                        var marker = new google.maps.Marker({
                          map: map,
                          anchorPoint: new google.maps.Point(0, -29)


                            }
                        });

                        autocomplete.addListener('place_changed', function() {
                          infowindow.close();
                          marker.setVisible(false);
                          var place = autocomplete.getPlace();
                          if (!place.geometry) {
                            window.alert("No details available for input: '" + place.name + "'");
                            return;
                          }
                          if (place.geometry.viewport) {
                            map.fitBounds(place.geometry.viewport);
                          } else {
                            map.setCenter(place.geometry.location);
                            map.setZoom(17);
                          }
                          marker.setIcon(({
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(35, 35)
                          }));
                          marker.setPosition(place.geometry.location);
                          marker.setVisible(true);

                          var address = '';
                          if (place.address_components) {
                            address = [
                              (place.address_components[0] && place.address_components[0].short_name || ''),
                              (place.address_components[1] && place.address_components[1].short_name || ''),
                              (place.address_components[2] && place.address_components[2].short_name || '')
                            ].join(' ');
                          }

                          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                          infowindow.open(map, marker);
                        });


                        function setupClickListener(id, types) {
                          var radioButton = document.getElementById(id);
                          radioButton.addEventListener('click', function() {
                            autocomplete.setTypes(types);
                          });
                        }

                        setupClickListener('changetype-all', []);
                        setupClickListener('changetype-address', ['address']);
                        setupClickListener('changetype-establishment', ['establishment']);
                        setupClickListener('changetype-geocode', ['geocode']);
                      }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&libraries=places&callback=initMap"
                        async defer></script>
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
  #map{
    height: 400px;
    background-color: #2c3e50;
  }
  .jar{
    height: 20px;
  }

  .required{
    color:red;
    font-style: normal;
  }
</style>
