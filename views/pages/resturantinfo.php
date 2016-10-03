<div class = "wrapper">
  <div class="panel panel-default mapbox" >
    <div id="buttonclick">
      <div class="panel-body">
      	<div id="map">
        </div>
      </div>
    </div>
    <div id = "onload">
      <div class="panel-body lead text-center">
        Where You're Gunna Eat
        <span class = "glyphicon glyphicon-map-marker"></span>
      </div>
    </div>
  </div>

  <div class="panel panel-default resturantinfobox" >
    <div id="buttonclick1" >
      <div class="panel-body" id="restpanel" >
        <div id = "resturantinfo" class="lead">
        </div>
        <ul class="list-group">
          <li class="list-group-item" id="phone"></li>
          <li class="list-group-item hours">
            <span class="glyphicon glyphicon-time"></span>
            <button class="btn btn-sm" id="hoursbtn" type="submit">Hours</button>
            <div class = 'expand'>
              <table>
                <tr><th></th></tr>
                <tr><td id = 'monday'></td></tr>
                <tr><td id = 'tuesday'></td></tr>
                <tr><td id = 'wednesday'></td></tr>
                <tr><td id = 'thursday'></td></tr>
                <tr><td id = 'friday'></td></tr>
                <tr><td id = 'saturday'></td></tr>
                <tr><td id = 'sunday'></td></tr>
              </table>
            </div>
          </li>
          <li class="list-group-item" id="price"></li>
          <li class="list-group-item" id="rating"></li>
          <li class="list-group-item" id="website"><span class="glyphicon glyphicon-globe"></span><a href="http://placeholder.com" target="_blank">Website</a></li>
        </ul>
      </div>
      <?php require_once('\views\pages\carousel.php'); ?>
    </div>
    <div id = "onload1">
      <div class="panel-body lead text-center">
        What You're Gunna Eat
        <span class = "glyphicon glyphicon-cutlery "></span>
      </div>
    </div>
  </div>
</div>
