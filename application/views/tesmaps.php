<!-- <!DOCTYPE html>
<html>
  <head>
    <title>$.geocomplete()</title>
    <meta charset="UTF-8">

    <style type="text/css" media="screen">
      .map_canvas { float: left; }
      form { width: 300px; float: left; }
      fieldset { width: 320px; margin-top: 20px}
      fieldset label { display: block; margin: 0.5em 0 0em; }
      fieldset input { width: 95%; }
    </style>
  </head>
  <body>

    <div class="map_canvas"></div>
    <form>
      <input id="geocomplete" type="text" placeholder="Type in an address" value="Empire State Bldg" />
      <input id="find" type="button" value="find" />

      <fieldset>
        <h3>Address-Details</h3>

        <label>Name</label>
        <input name="name" type="text" value="">

        <label>POI Name</label>
        <input name="point_of_interest" type="text" value="">

        <label>Latitude</label>
        <input name="lat" type="text" value="">

        <label>Longitude</label>
        <input name="lng" type="text" value="">

        <label>Location</label>
        <input name="location" type="text" value="">

        <label>Location Type</label>
        <input name="location_type" type="text" value="">

        <label>Formatted Address</label>
        <input name="formatted_address" type="text" value="">

        <label>Bounds</label>
        <input name="bounds" type="text" value="">

        <label>Viewport</label>
        <input name="viewport" type="text" value="">

        <label>Route</label>
        <input name="route" type="text" value="">

        <label>Street Number</label>
        <input name="street_number" type="text" value="">

        <label>Postal Code</label>
        <input name="postal_code" type="text" value="">

        <label>Locality</label>
        <input name="locality" type="text" value="">

        <label>Sub Locality</label>
        <input name="sublocality" type="text" value="">

        <label>Country</label>
        <input name="country" type="text" value="">

        <label>Country Code</label>
        <input name="country_short" type="text" value="">

        <label>State</label>
        <input name="administrative_area_level_1" type="text" value="">

        <label>Place ID</label>
        <input name="place_id" type="text" value="">

        <label>ID</label>
        <input name="id" type="text" value="">

        <label>Reference</label>
        <input name="reference" type="text" value="">

        <label>URL</label>
        <input name="url" type="text" value="">

        <label>Website</label>
        <input name="website" type="text" value="">
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
    <style media="screen">
    body {
color: #333;
}

body, input, button {
line-height: 1.4;
font: 13px Helvetica,arial,freesans,clean,sans-serif;
}


a {
color: #4183C4;
text-decoration: none;
}

#examples a {
text-decoration: underline;
}

#geocomplete { width: 200px}

.map_canvas {
width: 600px;
height: 400px;
margin: 10px 20px 10px 0;
}

#multiple li {
cursor: pointer;
text-decoration: underline;
}
    </style>

  </body>
</html> -->
