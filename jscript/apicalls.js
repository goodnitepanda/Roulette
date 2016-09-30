// chooses the winning restaurant
function winnerWinnerChickenDinner(){
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

      var data = jQuery.parseJSON(response);
      var resturantcount = Math.floor((Math.random() * countResults(data)) + 1);
      var maplat = data.results[resturantcount]['geometry']['location']['lat'];
      var maplon = data.results[resturantcount]['geometry']['location']['lng'];
      var bizname = data.results[resturantcount]['name'];

      // ****Bill - I can't figure out how to parse the "photo_reference" bc it's in a "photos" array with [] instead of curly {} so I've left this hardcoded
      var restmap = myMap(maplat,maplon);

      // display the results on the restaurantinfo.php
      $('#resturantinfo').text(bizname);
      $('#map').append(restmap);

      // the begnning of the places detail api callAPI
      var placeid = data.results[resturantcount]['place_id'];
      getDetails(placeid, bizname);
    }
  });
}

// gets the place details
function getDetails(placeid,bizname){
$.ajax({
  type: "get",
  dataType: 'json',
  data: {controller:"pages", action:"getPlaceDetails", placeid: placeid},
  error: function(response) {
    $("#submitBtn").fadeTo("slow", 0);
    alert("Could not get more details on "+bizname);
    console.log(response)
    // a better error handling to be implimented would be to have a
    // message appear on the screen that appears and says please make sure you are sharing your location.
  },
  success: function (response){
    var d = new Date();
    var json = jQuery.parseJSON(response);
    var address = json.result['formatted_address'];
    var phone = json.result['formatted_phone_number'];
    var price = json.result['price_level'];
    var ratinglevel = json.result['rating'];
    var rating = ratinglevel ? ratinglevel+" out of 5":"We got nothing. Maybe you should go and check it out though!";
    var website = json.result['website'];

    var photoID = json.result.photos[0]['photo_reference']
    console.log(photoID);
    var photoURL = 'https://maps.googleapis.com/maps/api/place/photo?&maxheight=255&photoreference='+photoID+'&key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s';
    $('.bizimg').attr("src", photoURL);

    // display the results on the restaurantinfo.php
    $('#address').text(address);
    $('#phone').html('<span class="glyphicon-earphone glyphicon"></span>Phone: ' + phone);

    assignHours(json);

    $('#price').html('<span class="glyphicon-usd glyphicon"></span>Price: '+price);
    $('#rating').html('<span class="glyphicon-star glyphicon"></span>Rating: ' + rating);
    $('a').attr("href", website); 

    console.log(json);
  }
});
}

function myMap(maplat,maplon) {
  var myCenter = new google.maps.LatLng(maplat,maplon);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  var photoID = "";
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
    content: "<h4><span class='label label-default' id='address'></span></h>"
    });
  infowindow.open(map,marker);
}
