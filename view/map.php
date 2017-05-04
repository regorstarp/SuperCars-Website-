<!DOCTYPE HTML>
<html>
  <head>

    <title>Map</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
<?php
   require_once './controller/menu.php';
  ?>
  <body>
  <br>
  <h3 style="text-align: center;">Where can you find us?</h3>
  <br>
  <div id="map"></div>
  <script>
    function initMap() {
      var uluru = {lat: -25.363, lng: 131.044};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGspYaJWtnXSOmSbEPflDGpZvo9reoOHw&callback=initMap">
  </script>
</body>
</html>
