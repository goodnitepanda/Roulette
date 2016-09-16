<?php
  require 'helperfunctions\callAPI.php';

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
        $APIkey = "AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s";
        $startLat = $_GET['lat'];
        $startLon = $_GET['lon'];
        $helper = new helperfunctions;

        $constructedURL = $apiendpoint."location=".$startLat.",".$startLon."&radius=16093.4"."&type=restaurant"."&key=".$APIkey;
        $resturantData = $helper->CallAPI($constructedURL);

        //$testvar = 'chhhheeeeese';
        echo json_encode($resturantData);
      }
  }    
?>
