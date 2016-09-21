<!DOCTYPE html>
<html>
<title>Where to Resturant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <header class="w3-container w3-theme w3-padding" id="myHeader">
    <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i>
    <div class="w3-center">
    <h4>WHERE TO RESTURANT</h4>
    <h1 class="w3-xxxlarge w3-animate-bottom">End the Hunger</h1>
      <div class="w3-padding-32">
        <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
      </div>
    </div>
    </header>
    <?php require_once('routes.php'); ?>

    <?php require_once('\views\pages\resturantinfo.php'); ?>

    <footer class="w3-container w3-theme-dark w3-padding-16">
    <h3>Credits</h3>
    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
      <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
      <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
    <p>Created by Will Hamann and Jake Davis</p>
    </footer>
  </body>
</html>
<script src='./jscript/layout.js' type="text/javascript"></script>