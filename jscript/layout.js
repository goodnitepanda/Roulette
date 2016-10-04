var latitude;
var longitude;
var currentIndex = 0;


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

$("#submitBtn").click(function(e){
   e.preventDefault();
    $('#onload').hide('fast');
    $('#buttonclick').show('slow')
    $('#onload1').hide('fast');
    $('#buttonclick1').show('slow')
})

$('#hoursbtn').click(function(){
 $('.expand').slideToggle();
})

function cycleItems() {
  var item = $('.imagecontainer div').eq(currentIndex);
  items.hide();
  item.css('display','inline-block');
}

$('.imagecontainer').click(function() {

  items = $('.imagecontainer div'), itemAmt = items.length;

  currentIndex ++;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});


