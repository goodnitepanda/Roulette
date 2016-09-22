<!DOCTYPE html>
<html>
<title>Where to Resturant</title>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- manualcss changes -->
     <link rel="stylesheet" href="css/manualcss.css">  
  </head>
  <body>
    <header>
    <div class="jumbotron" style = "text-align:center">
    <h1>Where to Resturant</h1>
    <p class = "subheading">End the Hunger</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button" id = "submitBtn">Tell Me What To Eat!</a></p>
    </div>
    </header>
    <?php require_once('routes.php'); ?>

    <?php require_once('\views\pages\resturantinfo.php'); ?>
    <div class="content"></div>
    <footer>
      <div id = "footer" class="footer">
        <div class="container">
          <p class="muted credit">Created by Will Hamann and Jake Davis.</p>
        </div>
      </div>
    </footer>
  </body>
</html>
<script src='./jscript/layout.js' type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s&callback=myMap"></script>
