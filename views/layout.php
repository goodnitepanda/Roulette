<html>
  <head>
  </head>
  <body>
    <header>
      <a href='/Restaurant'>Home</a>
    </header>

    <?php require_once('routes.php'); ?>
    <?php require_once('views/pages/resturantinfo.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>
<script>

window.onload = function() {
  var startPos;
  var geoSuccess = function(position) {
    startPos = position;
    document.getElementById('startLat').setAttribute("value", startPos.coords.latitude);
    document.getElementById('startLon').setAttribute("value", startPos.coords.longitude);
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);
};

</script>