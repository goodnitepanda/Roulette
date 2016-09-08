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
        $apiendpoint = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?";    
        $lat =  $_GET['lat'];
        $lon =  $_GET['lon'];
        $APIkey = "AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s"

        
     }
  }
?>
