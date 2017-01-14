<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">

<div class="block-content no-padding">
    <div class="block-content-inner">
        <div class="map-wrapper">
            <div id="map" data-style="1">
            </div>
    <script>
      var infowindow;
      var circle;
      var image_here = '<?php echo base_url('assets/images/zuiplo/user-pin.png');?>';
        function initMap()
          {
            var map = new google.maps.Map(document.getElementById('map'),
              {
                zoom: 10,
                center: {lat: -6.204831, lng: 106.840848}
              });
            var geocoder = new google.maps.Geocoder();
              document.getElementById('submit').addEventListener('click', function()
                {
                  geocodeAddress(geocoder, map);
                });
              }

        function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
              geocoder.geocode({'address': address}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                  resultsMap.setCenter(results[0].geometry.location);
                  var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    icon: image_here,
                    zoom:90,
                    animation: google.maps.Animation.DROP
                });
                  var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent('<div><strong>Youre Location</strong><br>'+ address  + '<br>' + '</div>');
                        infowindow.open(resultsMap, this);
                });
                  var lat = results[0].geometry.location.lat();
                  var lng = results[0].geometry.location.lng();
                    circle = new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0,
                    map: resultsMap,
                    center: results[0].geometry.location,
                    radius: 3000
                  });
                    <?php foreach ($view->result() as $key => $row) {  ?>
                      // var saldo_perbulan = '<?php echo $row->saldo_perbulan ?>';
                      // var informasi_lanjutan = '<?php echo $row->informasi_lanjutan ?>';
                      // var penghasilanBulanan = $("#salary").val();
                      var latview = '<?php echo $row->lat ?>';
                      var longview = '<?php echo $row->lang ?>';
                      var image = '<?php echo base_url('assets/images/zuiplo/find-pin.png');?>';
                      var latLng = new google.maps.LatLng(latview,longview);
                      var marker = new google.maps.Marker({
                        position: latLng,
                        icon: image,
                        map: resultsMap
                      });
                      var infowindow = new google.maps.InfoWindow();
                        google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent('<div><strong>Price / Month</strong><br><p><br><strong>Rp. </strong>'+ '<br>' + '</div>');
                          // infowindow.setContent('<div><strong>Price / Month</strong><br><p><br><strong>Rp. </strong>'+ saldo_perbulan  + '<br>' + '</div>');
                        infowindow.open(resultsMap, this);
                    });
                      var distanceInMetres = google.maps.geometry.spherical.computeDistanceBetween(circle.center, latLng);
                        // console.log("saldo_perbulan :"+saldo_perbulan);
                        // console.log("penghasilanBulanan :"+penghasilanBulanan);
                          if(distanceInMetres > circle.radius){
                            marker.setMap(null);
                          }
                          // if(saldo_perbulan >= (penghasilanBulanan * 30) / 100){
                          //   marker.setMap(null);
                          // }
                          <?php } ?>
                        } else {
                            alert('Geocode was not successful for the following reason: ' + status);
                          }
                            document.getElementById('lat').value = lat;
                            document.getElementById('lng').value=lng;
                          });
                        }
                var marker = null;
                  function initialize() {
                      var mapOptions = {
                        center: new google.maps.LatLng(-6.175486, 106.825407),
                        zoom: 15
                      };
                      var map = new google.maps.Map(document.getElementById("map-canvas"),
                      mapOptions);
                      google.maps.event.addListener(map, 'click', function(event)
                      {
                        if (marker != undefined){
                          marker.setMap(null);
                          marker=null;
                        }
                        if (marker == null) {
                          marker = new google.maps.Marker({
                          position: event.latLng,
                          map: map,
                          title: 'Your base',
                          draggable: true,
                          animation: google.maps.Animation.DROP
                          });
                  updateFieldsAndCenter(map, marker);
                  google.maps.event.addListener(marker, 'dragend', function() {
                    updateFieldsAndCenter(map, marker);
                     map.setZoom(18);
                  });
                }

              });
            }
            function callback(results, status)
            {
              if (status === google.maps.GeocoderStatus.OK) {
                  if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                        console.log('a');
                    }
                  }
                }
            }
            function createMarker(place) {
              var placeLoc = place.geometry.location;
              var marker = new google.maps.Marker({
                map: resultsMap,
                position: place.geometry.location
              });
                google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(place.name);
                infowindow.open(resultsMap, this);
              });
              }
              function updateMapAndCenter(map, marker) {
                window.setTimeout(function() {
                map.panTo(marker.getPosition());
              }, 3000);
            }
              function updateFieldsAndCenter(map, marker) {
              window.setTimeout(function() {
                map.panTo(marker.getPosition());
                }, 3000);
                document.getElementById("_lat").value = marker.getPosition().lat();
                document.getElementById("_lng").value = marker.getPosition().lng();
            }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&callback=initMap"></script>
        </div><!-- /.map-wrapper -->
    </div><!-- /.block-content-inner -->
</div><!-- /.block-content -->
            <div class="container">
                <!-- SLOGAN -->
<div class="block-content background-primary background-map block-content-small-padding fullwidth">
    <div class="block-content-inner">
        <h2 class="no-margin center caps">Cara Cepat Mencari atau Mempromosikan Rumah Kost Milik Anda </h2>
    </div><!-- /.block-content-iner -->
</div><!-- /.block-content-->                <!-- ISOTOPE GRID -->
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Rumah Kost Teratas</h2>

<ul class="properties-filter">
    <li class="selected"><a href="#" data-filter="*"><span>Semua</span></a></li>
    <li><a href="#" data-filter=".property-featured"><span>Rumah Kontrakan</span></a></li>
    <li><a href="#" data-filter=".property-rent"><span>Rumah Kos</span></a></li>
</ul>
<?php if(isset($data)){
  echo "<div class='alert alert-success alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;";
  echo "</button>";
  echo "  <h4><i class='icon fa fa-check'></i> Sukses!</h4>";
  echo "<h5>$data</h5>";
  echo "</div>";
  }?>
<!-- /.property-filter -->

<div class="properties-items">
  <div class="row">
    <?php
      foreach($get_rumah_kontrakan->result() as $row):?>
      <div class="property-item property-featured col-sm-6 col-md-3">

            <div class="property-box">
              <div class="property-box-inner">
                  <h3 class="property-box-title"><a href="<?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>"><?php echo $row->nama_rumah ?></a></h3>
                  <h5 class="property-box-subtitle"><a href="<?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>"><?php echo $row->alamat ?></a></h5>

                  <!-- <div class="property-box-label"><?php echo $row->jenis_rumah ?></div> -->
                  <!-- /.property-box-label -->

                  <div class="property-box-picture">
                      <div class="property-box-price"><?php echo $row->harga_sewa ?></div>
                      <!-- /.property-box-price -->
                      <div class="property-box-picture-inner">

                          <a href=" <?php echo base_url('Detail/detail_rumah_kontrakan/'.$row->id);?>" class="property-box-picture-target">
                            <?php
                               $image = array(
                                  'src' => 'uploads/'.($row->img1),
                                  'class' =>'img-responsive'
                                );
                                echo img($image); ?>
                          </a><!-- /.property-box-picture-target -->
                      </div>
                      <!-- /.property-picture-inner -->
                  </div>
                  <!-- /.property-picture -->

                  <div class="property-box-meta">
                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->jum_kamar_mandi ?></strong>
                          <span>Kamar Mandi</span>
                      </div>
                      <!-- /.col-sm-3 -->

                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->jum_kamar_tidur ?></strong>
                          <span>Kamar Tidur</span>
                      </div>
                      <!-- /.col-sm-3 -->

                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->luas_rumah ?>m<sup>2</sup></strong>
                          <span>Area</span>
                      </div>
                  </div>
                  <!-- /.property-box-meta -->
              </div>
              <!-- /.property-box-inner -->
          </div>

      </div>
      <?php endforeach; ?>
  </div>
  <div class="row">
    <?php
    foreach($get_rumah_kos->result() as $row):?>
      <div class="property-item property-rent col-sm-6 col-md-3">

            <div class="property-box">
              <div class="property-box-inner">
                  <h3 class="property-box-title"><a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>"><?php echo $row->nama_rumah ?></a></h3>
                  <h4 class="property-box-subtitle"><a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>"><?php echo $row->alamat ?></a></h4>

                  <div class="property-box-label property-box-label-primary"><?php echo $row->jenis_rumah ?></div>
                  <!-- /.property-box-label -->

                  <div class="property-box-picture">
                      <div class="property-box-price"><?php echo $row->harga_sewa ?></div>
                      <!-- /.property-box-price -->
                      <div class="property-box-picture-inner">
                          <a href="<?php echo base_url('Detail/detail_rumah_kos/'.$row->id);?>" class="property-box-picture-target">
                            <?php
                               $image = array(
                                  'src' => 'uploads/'.($row->img1),
                                  'class' =>'img-responsive'
                                );
                                echo img($image); ?>
                          </a><!-- /.property-box-picture-target -->
                      </div>
                      <!-- /.property-picture-inner -->
                  </div>
                  <!-- /.property-picture -->

                  <div class="property-box-meta">
                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->fasilitas_kasur ?></strong>
                          <span>Tempat Tidur</span>
                      </div>
                      <!-- /.col-sm-3 -->

                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->jenis_penghuni ?></strong>
                          <span>Penghuni</span>
                      </div>
                      <!-- /.col-sm-3 -->

                      <div class="property-box-meta-item col-xs-4 col-sm-4">
                          <strong><?php echo $row->luas_kamar ?>m<sup>2</sup></strong>
                          <span>Area</span>
                      </div>
                  </div>
                  <!-- /.property-box-meta -->
              </div>
              <!-- /.property-box-inner -->
          </div>


      </div>
<?php endforeach; ?>
  </div>
</div><!-- /.block-content -->
<!-- CAROUSEL -->
</div>
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->
</div>
</div>

<style media="screen">
  .img-responsive{
    height: 245px;
  }
</style>
