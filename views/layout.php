<html>
<title>Where to Resturant</title>
  <head>
  <style>
  td {
    padding-right: 50px;
}
</style>
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
<!--facebook share script-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header>
    <div class="jumbotron" style = "text-align:center">
    <h1>Where to Resturant</h1>
    <p class = "subheading">End the Hunger</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button" id = "submitBtn">Tell Me What To Eat!</a></p>
    </div>
    </header>
    <?php require_once('routes.php'); ?>

    <div class="content"><?php require_once('\views\pages\resturantinfo.php'); ?> </div>
    <footer>
      <div id = "footer" class="footer">
        <div class="container">
          <p class="muted credit">Created by Will Hamann and Jake Davis.</p>

          <div class="share-bear">
          <table cellpadding="100">
          <tr>
          <td>
          <!--facebook share-->
            <div class="fb-share-button" data-href="http://google.com" data-layout="icon" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgoogle.com%2F&amp;src=sdkpreparse"></a></div>
          </td>
          <td>
          <!--google share-->
          <a href="https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
          <img src="https://www.gstatic.com/images/icons/gplus-16.png" alt="Share on Google+"/></a>
          </td>
          <td>
          <!--twitter share-->
          <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </td>
          </tr>
          </table>
        </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<script src='./jscript/layout.js' type="text/javascript"></script>
<script src='./jscript/apicalls.js' type="text/javascript"></script>
<script src='./jscript/helperfunctions.js' type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA30yhaBrGHSuhrdyBsy9wuLIDoYO6qv0s&callback=myMap"></script>
