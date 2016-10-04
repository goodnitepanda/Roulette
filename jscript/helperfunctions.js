function countResults(data){
  var resturants = 0;
  for (resturants ; (data.results[resturants] != null); resturants++)
  {

  }
  return resturants;
}

function assignHours(data){
	var i = 0;
	var dayOfWeek = ['monday' , 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
	while (i != 7){
		// console.log($('#' + dayOfWeek[i]));
		// console.log(data.result['opening_hours']['weekday_text'][i])
		$('#' + dayOfWeek[i]).text(data.result['opening_hours']['weekday_text'][i]);
		i++;
	}
}

function assignPhotos(data){
	var images = ' ';
	var i = 0;
	for (i ; i < data.result.photos.length; i++){
		if (i == 0){
			images += '<div style="display: inline-block;"> <img class="bizimg center-block img-thumbnail"  src="https://maps.googleapis.com/maps/api/place/photo?&maxheight=255&photoreference='
			+ data.result.photos[i]['photo_reference'] + '&key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s"> </div>';
		}
		else{
			images += '<div> <img class="bizimg center-block img-thumbnail"  src="https://maps.googleapis.com/maps/api/place/photo?&maxheight=255&photoreference='
			+ data.result.photos[i]['photo_reference']  + '&key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s"> </div>';
		}
	}
	$(".imagecontainer").html(images);
}
