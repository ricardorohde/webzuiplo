
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
                          <input type="text" class="form-control" id="" disabled>
                        </div>
                      </div>
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
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos<label class="required">*</label></label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName5">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos</label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName6">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <br>
                                <label for="exampleInputFile">Gambar Fasilitas Rumah Kos</label>
                              </div>
                              <div class="col-sm-12">
                                <input type="file" id="exampleInputFile" name="imgName7">
                              </div>
                            </div>
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
                                      <input type="text" class="form-control" id="" placeholder="Latitude" name="lat" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                      <input type="text"  class="form-control" id="" placeholder="Longitude" name="long" disabled>
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
                                    <div class="col-md-12">
                                      <table class="table table-bordered text-center">
                                        <tr>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_kasur" value="Ada"> Kasur
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_almari" value="Ada"> Almari Pakaian
                                          </td>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_meja_belajar" value="Ada"> Meja Belajar
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kursi_belajar" value="Ada"> Kursi Belajar
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kipas_angin" value="Ada"> Kipas Angin
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_ac" value="Ada"> AC
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_koneksi_internet" value="Ada"> Koneksi Internet
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_dispenser" value="Ada"> Dispenser
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_kulkas" value="Ada"> Kulkas
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_wastafel_kmr" value="Ada"> Wastafel
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_meja_rias" value="Ada"> Meja Rias
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_tv" value="Ada"> TV

                                          </td>
                                        </tr>
                                      </table>
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
                                      <table class="table table-bordered text-center">
                                        <tr>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kmr_mandi_dalam" value="Ada"> Kamar Mandi Dalam
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kmr_mandi_luar" value="Ada"> Kamar Mandi Luar
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kloset_duduk" value="Ada"> Kloset Duduk
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_kloset_jongkok" value="Ada"> Kloset Jongkok
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_shower" value="Ada"> Shower
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_bak_mandi" value="Ada"> Bak Mandi
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_air_panas" value="Ada"> Air Panas
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_bath_up" value="Ada"> Bath Up
                                          </td>
                                        </tr>
                                      </table>
                                      <table class="table table-bordered text-center">
                                        <tr>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_wastafel_kmr_mandi" value="Ada"> Wastafel
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_ember_mandi" value="Ada">  Ember Mandi

                                          </td>
                                        </tr>
                                      </table>
                                    </div>

                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <label>Deskrisi Rumah<label class="required">*</label></label>
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
                                      <table class="table table-bordered text-center">
                                        <tr>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_ruang_tamu" value="Ada">  Ruang Tamu

                                          </td>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_ruang_makan" value="Ada"> Ruang Makan
                                          </td>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_dapur" value="Ada"> Dapur
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_ruang_santai" value="Ada"> Ruang Santai
                                          </td>
                                        </tr>
                                      </table>
                                      <table class="table table-bordered text-center">
                                        <tr>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_mesin_cuci" value="Ada"> Mesin Cuci
                                          </td>
                                          <td>
                                              <input type="checkbox" class="flat-red"  name="fasilitas_security" value="Ada"> Security
                                          </td>
                                          <td>
                                            <input type="checkbox" class="flat-red"  name="fasilitas_akses_full" value="Ada"> Akses 24 Jam
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    <?php form_close(); ?>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <script>
      $(function () {
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

      });
      </script>
<style media="screen">
#map{
  height: 400px;
}
.fas:active{
  background-color: #2c3e50;
}
.required{
  color:red;
  font-style: normal;
}
</style>
