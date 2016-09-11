<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<script type="text/javascript">

window.onload = function() {
  var startPos;
  var geoSuccess = function(position) {
    startPos = position;
    document.getElementById('startLat').setAttribute("value", startPos.coords.latitude);
    document.getElementById('startLon').setAttribute("value", startPos.coords.longitude);
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);
};

$(document).ready(function(){
    $("#submitBtn").click(function(e){
        e.preventDefault();
        $("#submitBtn").fadeTo("slow", 0);
        $.ajax({
            data: {
              startLat: startPos.coords.latitude
            }
        })

    });
});

</script>