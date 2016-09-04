
<section class="content">
        <div class="col-md-12 conj"></div>
        <div clas="col-md-12 find-first">
        <div class="col-md-2"></div>
        </div class="col-md-3"></div>
        <div class="col-md-3 find-logo">
          <img src="<?php echo base_url('assets/image/zuiplo.png');?>" width="150px;" height="75px;" class="logo-head-find">
        </div>

        <div class="col-md-6 search-loc">
          <div class="col-md-12 title-find-location">Fill in the short form below to find the right location for you<span class="form-required" title="This field is required.">*</span></div>
              <div class="input-group margin-bottom-sm">
                <div class="col-md-4 class-find">
                  <input class="form-control find-loc" type="text" placeholder="Salary" id="salary">
                </div>
                  <div class="col-md-4 class-find">
                   <input  id="address" class="form-control find-loc" type="text" placeholder="Here">
                 </div>

                 <div class="col-md-4 class-find">
                   <span class="input-group-btn">
                     <a class="btn btn-success btn-lg-find" id="submit" >
                       Find Location &nbsp;
                       <i class="fa fa-search" aria-hidden="true"></i>

                     </a>
                   </span>
                 </div>

               </div>

        </div>
				</div>

        <div id="map"></div>

        <script>
        var infowindow;

        var circle;
        var image_here = '<?php echo base_url('assets/image/zuiplo/user-pin.png');?>';
          function initMap()
           {
              var map = new google.maps.Map(document.getElementById('map'),
               {
                zoom: 10,
                center: {lat: -6.204831, lng: 106.840848}
                });
                //infowindow
                //end infowindow
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



                var lat = results[0].geometry.location.lat();// mendapatkan latitude
                var lng = results[0].geometry.location.lng();// mendapatkan longitude
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
                    var saldo_perbulan = '<?php echo $row->saldo_perbulan ?>';
                     var penghasilanBulanan = $("#salary").val();

                    var latview = '<?php echo $row->lat ?>';
                    var longview = '<?php echo $row->lang ?>';

                      var image = '<?php echo base_url('assets/image/zuiplo/find-pin.png');?>';
                    var latLng = new google.maps.LatLng(latview,longview);
                    var marker = new google.maps.Marker({
                      position: latLng,
                        icon: image,
                      map: resultsMap
                    });
                    var infowindow = new google.maps.InfoWindow();

                    google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent('<div><strong>Price / Month</strong><br><p><br><strong>Rp. </strong>'+ saldo_perbulan  + '<br>' + '</div>');
                    infowindow.open(resultsMap, this);
                  });
                    var distanceInMetres = google.maps.geometry.spherical.computeDistanceBetween(circle.center, latLng);
                    // alert(distanceInMetres);
                    console.log("saldo_perbulan :"+saldo_perbulan);
                    console.log("penghasilanBulanan :"+penghasilanBulanan);
                    if(distanceInMetres > circle.radius){
                      marker.setMap(null);
                    }
                    if(saldo_perbulan >= (penghasilanBulanan * 30) / 100){
                      marker.setMap(null);

                    }


                  //  createMarker2(latview, longview,messview);
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
                // Allowing to move the marker
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

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&callback=initMap"></script>
        <div id="content">

        <div class="container col-md-12" >
              <div class="col-md-12">
                <div id="main" class="col-md-12">
                    <div class="row">
                        <div class="span12">

                            <div class="properties-rows jar">
            <div class="filter">
                <form action="?" method="get" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputSortBy">
                            Price IDR.
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputSortBy">
                                <option id="price">Sure</option>
                                <option id="published">Below</option>
                                <option id="published">Above</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputOrder">
                            Near
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputOrder">
                                <option id="asc">All</option>
                                <option id="desc">Near</option>
                                <option id="desc">Far</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
                </form>
            </div><!-- /.filter -->
            </div><!-- /.properties-rows -->
                           <div class="properties-rows">
                <div class="row">

                    <div class="property span12">
                        <div class="row">
                          <div class="span1"></div>
                            <div class="image span3">
                                <div class="content">
                                    <a href="" data-toggle="modal" data-target="#myModal"></a>
                                    <img src="<?php echo base_url('assets/find/img/property-small-1.png');?>" alt="">
                                </div><!-- /.content -->
                            </div><!-- /.image -->

                            <div class="body span7">
                                <div class="title-price row">
                                    <div class="title span4">
                                        <h2><a href="" data-toggle="modal" data-target="#myModal">27523 Pacific Coast</a></h2>
                                    </div><!-- /.title -->

                                    <div class="price">
                                        1 250 000€
                                    </div><!-- /.price -->
                                </div><!-- /.title -->

                                <div class="location">Palo Alto CA</div><!-- /.location -->
                                <p>Etiam at ante id enim dictum posuere id vel est. Praesent at massa quis risus cursus tristique vel non orci. Phasellus ut nisi non odio</p>
                                <div class="area">
                                    <span class="key">Area:</span><!-- /.key -->
                                    <span class="value">120</span><!-- /.value -->
                                </div><!-- /.area -->
                                <div class="bedrooms">
                                  <div class="content">

        <i class="fa fa-bed" aria-hidden="true"></i>4</div></div><!-- /.bedrooms -->
                                <div class="bathrooms"><div class="content">3</div></div><!-- /.bathrooms -->
                            </div><!-- /.body -->
                        </div><!-- /.property -->
                    </div><!-- /.row -->

                </div><!-- /.row -->
            </div><!-- /.properties-rows -->
            <div class="pagination pagination-centered">
                  <ul>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li ><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">next</a></li>
                      <li><a href="#">last</a></li>
                  </ul>
              </div><!-- /.pagination -->
              <style>
                .carousel-inner > .item > img,
                .carousel-inner > .item > a > img {
                    width: 70%;
                    margin: auto;
                }
                </style>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </head>
            <body>

            <div class="container">
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">
                          <h1 class="page-header">27523 Pacific Coast</h1>
                      </h4>
                    </div>

                    <div class="modal-body">
                      <p>
                        <div id="content"><div id="main">
                            <div class="row">
                                <div class="span9">


                                    <div class="carousel property">
                                        <div class="preview">
                                          <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                        </div><!-- /.preview -->

                                        <div class="content">

                                            <a class="carousel-prev" href="#">Previous</a>
                                            <a class="carousel-next" href="#">Next</a>
                                            <ul>
                                                <li class="active">
                                                <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                                </li>
                                                <li>
                                                  <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                                </li>
                                                <li>
                                              <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                                </li>
                                                <li>
                                                  <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                                </li>
                                                <li>
                                                  <img src="<?php echo base_url('assets/find/img/property.large.3.jpg');?>" alt="">
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.carousel -->

                                    <div class="property-detail">
                                        <div class="pull-left overview">
                                            <div class="row">
                                                <div class="span3">
                                                    <h2>Overview</h2>

                                                    <table>
                                                        <tr>
                                                            <th>Price:</th>
                                                            <td>€2 300 000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contract type:</th>
                                                            <td>Rent</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Type:</th>
                                                            <td>Condo</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Location:</th>
                                                            <td>Palo Alto CA</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Bathrooms:</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Bedrooms:</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Area:</th>
                                                            <td>750m<sup>2</sup></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- /.span2 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed
                                            ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor
                                            venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada
                                            massa. Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur
                                            lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent
                                            per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.</strong> Morbi eu sapien ac
                                            diam facilisis vehicula nec sit amet odio. Vivamus quis dui ac nulla molestie blandit eu in
                                            nunc. In justo erat, lacinia in vulputate non, tristique eu mi. Aliquam tristique dapibus
                                            tempor. Vivamus malesuada tempor urna, in convallis massa lacinia sed. Phasellus gravida auctor
                                            vestibulum. Suspendisse potenti. In tincidunt felis bibendum nunc tempus sagittis. Praesent elit
                                            dolor, ultricies interdum porta sit amet, iaculis in neque. Nullam urna ante, tempus vel iaculis
                                            nec, rutrum sit amet nulla. Morbi vestibulum ante in turpis ultricies in tincidunt sapien
                                            iaculis. Aenean feugiat rhoncus arcu, at luctus libero blandit tempus. Vivamus rutrum tellus
                                            quis leo placerat eu adipiscing purus vehicula.</p>

                                        </div>


                                        </div>
                    </div>


                </div>

              </div>
            </div>

              <div class="modal-footer">

                  <a href="" data-toggle="modal" data-target="#myModal_booking"><button type="button" class="btn btn-success booking"> <i class="fa fa-check"></i> &nbsp;BOOKING</button></a>
                  <button type="button" class="btn btn-danger booking" data-dismiss="modal"><i class="fa fa-close"></i> &nbsp;CANCEL</button>
              </div>

              <!-- end Modal       -->
              <!-- form untuk modal bercabang -->
              <div class="modal fade" id="myModal_booking" role="dialog">
                 <div class="modal-dialog">

                   <!-- Modal content-->
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Booking Request</h4>
                     </div>
                     <div class="modal-body">
                      <div class="col-md-12">
                          <div class="col-md-12 control-group">
                              <label class="control-label" for="inputPropertySurname">
                                  First Name
                                  <span class="form-required" title="This field is required.">*</span>
                              </label>
                              <div class="controls">
                                  <input type="text" id="inputPropertySurname" class="text-input">
                              </div>
                          </div>
                      <div class="col-md-12 control-group">
                            <label class="control-label" for="inputPropertySurname">
                                Last Name
                                <span class="form-required" title="This field is required.">*</span>
                            </label>
                            <div class="controls">
                                <input type="text" class="text-input" id="inputPropertySurname">
                            </div>
                        </div>
                          <div class="col-md-12 control-group">
                            <label class="control-label" for="inputPropertySurname">
                                E-mail
                                <span class="form-required" title="This field is required.">*</span>
                            </label>
                            <div class="controls">
                                <input type="text" class="text-input" id="inputPropertySurname">
                            </div>
                        </div>
                          <div class="col-md-12 control-group">
                            <label class="control-label" for="inputPropertySurname">
                                No Telp
                                <span class="form-required" title="This field is required.">*</span>
                            </label>
                            <div class="controls">
                                <input type="text" class="text-input" id="inputPropertySurname">
                            </div>
                        </div>
                          <div class="col-md-12 control-group">
                            <label class="control-label" for="inputPropertySurname">
                                ID Stopover
                            </label>
                            <div class="controls">
                                <input type="text" class="text-input" disabled="disabled" id="inputPropertySurname">
                            </div>
                        </div>
                          <div class="col-md-12 control-group">
                            <label class="control-label" for="inputPropertySurname">
                                E-mail Owner
                            </label>
                            <div class="controls">
                                <input type="text" class="text-input" disabled="disabled" id="inputPropertySurname">
                            </div>
                        </div><p><br><p><br>
                          <div class="col-md-12"></div>
                          <div class="col-md-12">
                            <button type="button" class="btn btn-success request col-md-12">Send Request &nbsp;<i class="fa fa-send"></i></button>
                          </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
                </div>
              <!-- end form -->

<style>
#map{
  height: 647px;

}
.text-input{
  width: 510px;
}
</style>
