var latitude;
var longitude;

function countResults(data){
  var resturants = 0;
  for (resturants ; (data.results[resturants] != null); resturants++)
  {

  }
  return resturants;
}

function myMap(maplat,maplon,bizname,photoURL) {
  var myCenter = new google.maps.LatLng(maplat,maplon);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  var photoID = "";
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
    content: bizname+photoURL
    });
  infowindow.open(map,marker);
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
      e.preventDefault();

      // Call apicall.js
      winnerWinnerChickenDinner();
  });
 });

