<!DOCTYPE html>
<html>
<head>
  <title>oke</title>
</head>
<body>




<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAh0M3vKIhVO26dTSA_UMx-x2dl1JnM7Lc"></script>

<?php 
$lati = -7.311727772509914;
$longi = 112.72277434284221;
 ?>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lati ?>,<?php echo $longi ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo "Oke" ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Sekolah</td>
                 <td><h4></h4></td>
               </tr>
               <tr>
                 <td>Lokasi</td>
                 <td><h4></h4></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h4></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
  </body>
</html>