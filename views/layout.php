<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <a href='/roulette'>Home</a>
    </header>

    <?php require_once('routes.php'); ?>

    <?php require_once('\views\pages\resturantinfo.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>
<script type="text/javascript">

var latitude;
var longitude;

function countResults(data){
  var resturants = 0;
  for (resturants ; (data.results[resturants] != null); resturants++)
  {

  }
  return resturants;
}

window.onload = function() {
  var geoSuccess = function(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);
};

 $(document).ready(function() {
  $("#submitBtn").click(function(e){
      $("#submitBtn").fadeTo("slow", 0);
      e.preventDefault();
      $.ajax({
        type: "get",
        dataType: 'json',
        data: {controller:"pages", action:"getRestaurant", lat: latitude, lon: longitude},
        error: function(resp) {
          alert("Please make sure you are sharing your location");
          console.log(resp)
          // a better error handling to be implimented would be to have a
          // message appear on the screen that appears and says please make sure you are sharing your location.            
        },
        success: function(response) {

          var data = jQuery.parseJSON(response);
          var resturantcount = Math.floor((Math.random() * countResults(data)) + 1);
          $('#resturantinfo').text(data.results[resturantcount]['name']);
          console.log(resturantcount);
          console.log(data.results[resturantcount]['name']);

        //json data we'll use as some point
        //alert(json.results[1]['name']);
        //alert(json.results[0]['photos']['photo_reference']);
        //alert(json.results[0]['geometry']['location']['lat']);
        }
      });
  });
 });
</script>