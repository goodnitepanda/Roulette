var latitude;
var longitude;

function countResults(data){
  var resturants = 0;
  for (resturants ; (data.results[resturants] != null); resturants++)
  {

  }
  return resturants;
}

function myMap(maplat,maplon,bizname) {
  var myCenter = new google.maps.LatLng(maplat,maplon);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
    content: bizname
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

      $.ajax({
        type: "get",
        dataType: 'json',
        data: {controller:"pages", action:"getRestaurant", lat: latitude, lon: longitude},
        error: function(response) {
          $("#submitBtn").fadeTo("slow", 0);
          alert("Please make sure you are sharing your location");
          console.log(response)
          // a better error handling to be implimented would be to have a
          // message appear on the screen that appears and says please make sure you are sharing your location.
        },
        success: function(response) {
          $('#map').height(300);
          $('#submitBtn').text("Yeh nah, try something else");
          //$('#content').css("background", "rgba(0,0,0,0)");
          // $("#content").removeClass("content-pre");
          var data = jQuery.parseJSON(response);
          var resturantcount = Math.floor((Math.random() * countResults(data)) + 1);
          var maplat = data.results[resturantcount]['geometry']['location']['lat'];
          var maplon = data.results[resturantcount]['geometry']['location']['lng'];
          var bizname = data.results[resturantcount]['name'];
          var restmap = myMap(maplat,maplon,bizname);
          $('#resturantinfo').text(bizname);
          $('#map').append(restmap);
          console.log(resturantcount);
          console.log(bizname);
          console.log(maplat);
          console.log(maplon);

        //json data we'll use as some point
        //alert(json.results[1]['name']);
        //alert(json.results[0]['photos']['photo_reference']);
        //alert(json.results[0]['geometry']['location']['lat']);
        }
      });
  });
 });
