<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="map" style="width:400px; height: 400px;"></div>

    <script>
            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
              });
            }
          </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWsxpPtRelCNDw4GUJks3F2bkL3bW3o3U&callback=initMap">
    </script>
</body>
</html>