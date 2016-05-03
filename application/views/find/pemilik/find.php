  </head>
  <body>
      <div id="map">

      </div>
      <div class="col-md-12">
        <div class="col-md-12">
          <div class="col-md-12 coba">
            <div class="col-md-12 skip"></div>

                    <div class="col-md-12 find-next">
                      <div class="col-md-12 ex">  </div>
                      <div class="col-md-12 xe">
                        <div class="col-md-6 skips"></div>
                        <div class="col-md-2 near">
                          <div class="btn-group">
                              <button type="button" class="btn btn-danger">Action</button>
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" >
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-4 qa"></div>
                        </div>
                </div>
                <div class="col-md-4 price">

                </div>
              </div>

          </div>
        </div>
      </div>

        <div id="floating-panel" class="col-md-12 float">
          <div class="col-md-1"></div>
            <!-- <div class="col-md-1"></div> -->
          <div class="col-md-6 logo-find">
            <div class="col-md-2">
              <img src="<?php echo base_url('assets/image/srikandev.png');?> ">
            </div>
          <div>
        </div>
      </div>
      <!-- <div class="form-search-wrapper col-sm-3">
        <form method="post" action="?" class="form-horizontal form-search">
          <div class="form-group has-feedback no-margin">
            <input type="text" class="form-control" placeholder="Find Here">
            <span class="form-control-feedback">
              <i class="fa fa-search"></i>
            </span>
          </div>
        </form>
      </div> -->
      <div id="floating-panel2" class="col-md-12 ">
          <div class="col-md-12 logo-find">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-4 test">
              <div class="input-group">
                 <input type="text" class="form-control control-find" placeholder="Find Here">
                 <span class="input-group-btn">
                   <button class="control-find find-button" type="button"><i class="fa fa-search find-button"></i></button>
                 </span>
               </div>
            </div>
          <div>
      </div>
    </div>
        <!-- <div class="col-md-12 tes">
          <div class="col-md-4"></div>
          <div class="col-md-4 test">
            <div class="input-group">
               <input type="text" class="form-control control-find" placeholder="Find Here">
               <span class="input-group-btn">
                 <button class="btn btn-default control-find" type="button"><i class="fa fa-search"></i></button>
               </span>
             </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>

    </div> -->


    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -6.204831, lng: 106.840848}
        });

        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
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
              position: results[0].geometry.location
            });
            var lat = results[0].geometry.location.lat();// mendapatkan latitude
            var lng = results[0].geometry.location.lng();// mendapatkan longitude
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
      google.maps.event.addListener(map, 'click', function(event) {
        if (marker != undefined){
          marker.setMap(null);
          marker=null;
        }
        if (marker == null) {
          marker = new google.maps.Marker({
            position: event.latLng,
            map: map,
            title: 'Your base',
            // Allowing to move the marker
            draggable: true,
            animation: google.maps.Animation.DROP
          });
          updateFieldsAndCenter(map, marker);
          google.maps.event.addListener(marker, 'dragend', function() {
            updateFieldsAndCenter(map, marker);
          });
        }
      });
    }
    //==triger map jika ada perubahan lat - long
    function updateMapAndCenter(map, marker) {
      // Center to marker position
      window.setTimeout(function() {
        map.panTo(marker.getPosition());
      }, 3000);
    }
    function updateFieldsAndCenter(map, marker) {
      // Center to marker position
      window.setTimeout(function() {
        map.panTo(marker.getPosition());
      }, 3000);
      // Change the value
      document.getElementById("_lat").value = marker.getPosition().lat();
      document.getElementById("_lng").value = marker.getPosition().lng();
    }
    var image = 'assets/images/property.png';
    var image2= 'assets/images/lokasi_sekitar.png';


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&callback=initMap">
    </script>
  </body>
</html>
