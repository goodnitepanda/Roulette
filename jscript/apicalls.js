function getDetails(placeid){
$.ajax({
  type: "get",
  dataType: 'json',
  data: {controller:"pages", action:"getPlaceDetails", placeid: placeid},
  success: function (response){
    var json = jQuery.parseJSON(response);
    console.log(json);
  }
});
}
