<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aviators - byaviators.com">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo base_url('assets/find/img/faviconpng');?>" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/css/bootstrap.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/css/bootstrap-responsive.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/libraries/chosen/chosen.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/libraries/bootstrap-fileupload/bootstrap-fileupload.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/find/css/realia-blue.css');?>" type="text/css" id="color-variant-default">
    <link rel="stylesheet" href="#" type="text/css" id="color-variant">

      <link rel="stylesheet" href="<?php echo base_url('assets/find/font-awesome/css/font-awesome.css');?>" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url('assets/find/font-awesome/css/font-awesome.min.css');?>" type="text/css">
</head>
<body>
<div id="wrapper-outer" >
    <div id="wrapper">
        <div id="wrapper-inner">
            <!-- BREADCRUMB -->
            <div class="breadcrumb-wrapper">

            </div><!-- /.breadcrumb-wrapper -->

            <!-- HEADER -->
            <div id="header-wrapper">
                <div id="header">
                    <div id="header-inner">
                        <div class="container">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="row ">
                                        <div class="logo-wrapper span4">
                                            <a href="#nav" class="hidden-desktop" id="btn-nav">Toggle navigation</a>

                                            <div class="logo">
                                                <a href="index.html" title="Home">
                                                    <img src="<?php echo base_url('assets/find/img/zuiplo.png');?>" class="zuiplo-logo-find" alt="Home" width="150px;" height="100px;">
                                                </a>
                                            </div><!-- /.logo -->

                                            <div class="site-name">
                                                <a href="/" title="Home" class="brand"></a>
                                            </div><!-- /.site-name -->

                                            <div class="site-slogan">
                                                <span>Real estate &amp; Rental<br>made easy</span>
                                            </div><!-- /.site-slogan -->
                                        </div><!-- /.logo-wrapper -->

                                        <div class="info">
                                            <div class="site-email">

                                            </div><!-- /.site-email -->


                                        </div><!-- /.info -->
                                        <a class="list-your-property arrow-right">
                                        <form method="get" class="site-search" action="?">
                                           <div class="input-append">
                                               <input title="Enter the terms you wish to search for." class="search-query span2 form-text" placeholder="Search" type="text" name="">
                                               <button type="submit" class="btn">
                                                  <i class="fa fa-search" aria-hidden="true"></i></button>
                                           </div><!-- /.input-append -->
                                       </form><!-- /.site-search -->
                                       </a>
                                    </div><!-- /.row -->
                                </div><!-- /.navbar-inner -->
                            </div><!-- /.navbar -->
                        </div><!-- /.container -->
                    </div><!-- /#header-inner -->
                </div><!-- /#header -->
            </div><!-- /#header-wrapper -->

            <div id="map">

            </div>

            <div id="content">

<div class="container col-md-12" >
      <div class="col-md-12">
        <div id="main" class="col-md-12">
            <div class="row">
                <div class="span12">
                    <h1 class="page-header"></h1>

                    <div class="properties-rows">
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
                            <a href="detail.html"></a>
                            <img src="<?php echo base_url('assets/find/img/property-small-1.png');?>" alt="">
                        </div><!-- /.content -->
                    </div><!-- /.image -->

                    <div class="body span7">
                        <div class="title-price row">
                            <div class="title span4">
                                <h2><a href="detail.html">27523 Pacific Coast</a></h2>
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
                        <div class="bedrooms"><div class="content">4</div></div><!-- /.bedrooms -->
                        <div class="bathrooms"><div class="content">3</div></div><!-- /.bathrooms -->
                    </div><!-- /.body -->
                </div><!-- /.property -->
            </div><!-- /.row -->
            <div class="property span12">
                <div class="row">
                  <div class="span1"></div>
                    <div class="image span3">
                        <div class="content">
                            <a href="detail.html"></a>
                            <img src="<?php echo base_url('assets/find/img/property-small-1.png');?>" alt="">
                        </div><!-- /.content -->
                    </div><!-- /.image -->

                    <div class="body span7">
                        <div class="title-price row">
                            <div class="title span4">
                                <h2><a href="detail.html">27523 Pacific Coast</a></h2>
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
                        <div class="bedrooms"><div class="content">4</div></div><!-- /.bedrooms -->
                        <div class="bathrooms"><div class="content">3</div></div><!-- /.bathrooms -->
                    </div><!-- /.body -->
                </div><!-- /.property -->
            </div><!-- /.row -->
            <div class="property span12">
                <div class="row">
                  <div class="span1"></div>
                    <div class="image span3">
                        <div class="content">
                            <a href="detail.html"></a>
                            <img src="<?php echo base_url('assets/find/img/property-small-1.png');?>" alt="">
                        </div><!-- /.content -->
                    </div><!-- /.image -->

                    <div class="body span7">
                        <div class="title-price row">
                            <div class="title span4">
                                <h2><a href="detail.html">27523 Pacific Coast</a></h2>
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
                        <div class="bedrooms"><div class="content">4</div></div><!-- /.bedrooms -->
                        <div class="bathrooms"><div class="content">3</div></div><!-- /.bathrooms -->
                    </div><!-- /.body -->
                </div><!-- /.property -->
            </div><!-- /.row -->
            <div class="property span12">
                <div class="row">
                  <div class="span1"></div>
                    <div class="image span3">
                        <div class="content">
                            <a href="detail.html"></a>
                            <img src="<?php echo base_url('assets/find/img/property-small-1.png');?>" alt="">
                        </div><!-- /.content -->
                    </div><!-- /.image -->

                    <div class="body span7">
                        <div class="title-price row">
                            <div class="title span4">
                                <h2><a href="detail.html">27523 Pacific Coast</a></h2>
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
                        <div class="bedrooms"><div class="content">4</div></div><!-- /.bedrooms -->
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
    </div><!-- /.pagination -->            </div>

                </div>
            </div>
        </div>
    </div>

        </div><!-- /#content -->
    </div><!-- /#wrapper-inner -->

    <div id="footer-wrapper">


        <div id="footer" class="footer container">
            <div id="footer-inner">
                <div class="row">
                    <div class="span6 copyright">
                        <p>&copy;2016 Zuiplo. Created by JICOS <a>
                    </div><!-- /.copyright -->


                </div><!-- /.row -->
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->
    </div><!-- /#footer-wrapper -->
    </div><!-- /#wrapper -->
    </div><!-- /#wrapper-outer -->
</div>

  </body>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/jquery.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/jquery.ezmark.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/jquery.currency.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/jquery.cookie.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/retina.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/bootstrap.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/carousel.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/gmap3.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/gmap3.infobox.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/libraries/chosen/chosen.jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/libraries/bootstrap-fileupload/bootstrap-fileupload.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/find/js/realia.js');?>"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40414414-1', 'byaviators.com');
    ga('send', 'pageview');

  </script>

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
        var lat = results[0].geometry.location.lat();
        var lng = results[0].geometry.location.lng();
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
  var image = 'assets/find/images/property.png';
  var image2= 'assets/find/images/lokasi_sekitar.png';


  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz7xYV8gxtSq4_IE8aGv2L6Wx9vyzQtnc&callback=initMap">
  </script>

  </html>
