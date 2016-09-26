<?php
  require 'helperfunctions\callAPI.php';

  class PagesController
  {

    public function home()
      {
        require_once('views/pages/home.php');
      }
    public function error()
      {

        require_once('views/pages/error.php');
      }
    public function getRestaurant()
      {
        $startLat = $_GET['lat'];
        $startLon = $_GET['lon'];
        $apiendpoint = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?"."location=".$startLat.",".$startLon."&radius=16093.4"."&type=restaurant"."&key="."AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s";
        $helper = new helperfunctions;

        $resturantData = $helper->CallAPI($apiendpoint);

        echo json_encode($resturantData);
      }
      public function getPlaceDetails()
      {
        $placeid = $_GET['placeid'];
        $apiendpoint = "https://maps.googleapis.com/maps/api/place/details/json?placeid=".$placeid."&key="."AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s";
        $helper = new helperfunctions;

        $placeData = $helper->CallAPI($apiendpoint);

        echo json_encode($placeData);
      }
  }
?>
