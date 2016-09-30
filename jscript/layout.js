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
      e.preventDefault();

      // Call apicall.js
      winnerWinnerChickenDinner();
  });
 });

$('#hoursbtn').click(function(){
 $('.expand').slideToggle();
})

$('.carousel').carousel()



