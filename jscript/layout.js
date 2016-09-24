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
    content: bizname+'<img src="https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png">'
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
          var type1 = data.results[resturantcount]['types']['0'];
          var type2 = data.results[resturantcount]['types']['1'];
          var isitopen = data.results[resturantcount]['opening_hours']['open_now'];
          var opennow = isitopen ? 'Ya! Go there!':'No, dang :(';
          var address = data.results[resturantcount]['vicinity'];
          var pricelevel = data.results[resturantcount]['price_level'];
          var price = pricelevel ? pricelevel+"/5":'no rating';
          var ratinglevel = data.results[resturantcount]['rating'];
          var rating = ratinglevel ? ratinglevel+"/5":'no rating';
          var restmap = myMap(maplat,maplon,bizname);
          // the begnning of the places detail api callAPI
          var placeid = data.results[resturantcount]['place_id'];
          console.log(placeid);
          getDetails(placeid)
          $('#resturantinfo').text(bizname);
          $('#map').append(restmap);
          $('#types').text(type1+", "+type2);
          $('#opennow').text(opennow);
          $('#address').text(address);
          $('#price').text(price);
          $('#rating').text(rating);
          //console.log(data);

        }
      });
  });
 });
