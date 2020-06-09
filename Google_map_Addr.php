<!DOCTYPE html>
<html>
  <head>
    <title>Synchronous Loading</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf3QAEcQULHKAYAPdNDWQ8E0mGUK-0Yug"></script>
    <script>
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 23.1142687, lng: 81.6844362},
        zoom: 8
      });
    </script>
  </body>
</html>