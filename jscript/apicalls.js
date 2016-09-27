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
          //$('#content').css("background", "rgba(0,0,0,0)");
          // $("#content").removeClass("content-pre");
          var data = jQuery.parseJSON(response);
          var resturantcount = Math.floor((Math.random() * countResults(data)) + 1);
          var maplat = data.results[resturantcount]['geometry']['location']['lat'];
          var maplon = data.results[resturantcount]['geometry']['location']['lng'];
          var bizname = data.results[resturantcount]['name'];

          // ****Bill - I can't figure out how to parse the "photo_reference" bc it's in a "photos" array with [] instead of curly {} so I've left this hardcoded
          var photoID = "CoQBdwAAAFBxz7xugIlHLXv-MclA8Doa7tRZt1DAIozhKGC6EzhBDlKDFfKGUfZ_GALsMYbcQphqPLx0dw1AcY5oyOwQezKvl3ySwZLY44Ujeli9SNON3A7XlVtjwGohOxLWHafGFqpwerP1Ejgh2rUTQKpA1Ym1jl1fFV2VUrZYPK6xDcsKEhAlmCbvrU2blheWMw7hrk-pGhQ44-fSpnFDeap_7Irjskq14QORcg";
          var photoURL = '<img src="https://maps.googleapis.com/maps/api/place/photo?photoreference='+photoID+'&sensor=false&maxheight=50&maxwidth=50&key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s">';
          var restmap = myMap(maplat,maplon,bizname,photoURL);

          // display the results on the restaurantinfo.php
          $('#resturantinfo').text(bizname);
          $('#map').append(restmap);

          // the begnning of the places detail api callAPI
          var placeid = data.results[resturantcount]['place_id'];
          console.log("Place ID: "+placeid);
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
    var json = jQuery.parseJSON(response);
    var address = json.result['formatted_address'];
    var phone = json.result['formatted_phone_number'];
    var isitopen = json.result['opening_hours']['open_now'];
    var opennow = isitopen ? "OMG it's open right now!":"Aw snap, it's closed now :(";
    var hours = json.result['opening_hours']['weekday_text'];
    var price = json.result['price_level'];
    var pricelevel = json.result['price_level'];
    var price = pricelevel ? pricelevel+" out of 5":"Hmm, our super skills can't detect a rating";
    var ratinglevel = json.result['rating'];
    var rating = ratinglevel ? ratinglevel+" out of 5":"We got nothing. Maybe you should go and check it out though!";
    var website = json.result['website'];

    // display the results on the restaurantinfo.php
    $('#address').text(address);
    $('#phone').text(phone);
    $('#opennow').text(opennow);
    $('#hours').text(hours);
    $('#price').text("Price Level: "+price);
    $('#rating').text("Overall Rating: "+rating);
    $('#website').text(website);

    console.log(json);
  }
});
}
