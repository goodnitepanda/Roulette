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
		console.log($('#' + dayOfWeek[i]));
		console.log(data.result['opening_hours']['weekday_text'][i])
		$('#' + dayOfWeek[i]).text(data.result['opening_hours']['weekday_text'][i]);
		i++;
	}
}