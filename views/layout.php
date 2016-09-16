<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <a href='/roulette'>Home</a>
    </header>

    <?php require_once('routes.php'); ?>


    <div id="divResults"></div>
    <button type = 'button' id = "submitBtn">Tell Me What To Eat!</button>

    <footer>
      Copyright
    </footer>
  <body>
<html>
<script type="text/javascript">

var latitude;
var longitude;

window.onload = function() {
  var geoSuccess = function(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);
};

  $("#submitBtn").click(function(e){
      $("#submitBtn").fadeTo("slow", 0);
      e.preventDefault();
      $.ajax({
        type: "get",
        datatype: 'JSON',
        data: {controller:"pages", action:"getRestaurant", lat: latitude, lon: longitude},
        error: function(resp) {
          alert("Please make sure you are sharing your location");
          console.log(resp)
          // a better error handling to be implimented would be to have a
          // message appear on the screen that appears and says please make sure you are sharing your location.            
        },
        success: function(response) {
          //console.log(data['message']);
          var data_array = response;
          alert(data_array);
          console.log(response)
          //$("#divResults").empty().append(data['message']);
        }
      });
  });
</script>