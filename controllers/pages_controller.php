<?php
  class PagesController 
  {

    public function home() 
      {
        $first_name = 'Jon';
        $last_name  = 'Snow';
        require_once('views/pages/home.php');
      }
    public function error() 
      {

        require_once('views/pages/error.php');
      }
    public function getRestaurant()
      {
        // $apiendpoint = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?";    
        // $APIkey = "AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s";

        // $constructedURL = $apiendpoint + "location=" + $startLat + "," + $startLon + "&radius=16093.4"+ "&type=restaurant" + "&key=" + $APIkey;
        // $resturantData = CallAPI($constructedURL);

        // try {
        //  return 'test';
        // } 
        // catch (Exception $e) {
        //   return $e;
        // }
        echo "biggggggeeeeeeeeeerrrrrrrr sssssstrrriiinnnnggg toooo seeeee";
      }
  }
?>
