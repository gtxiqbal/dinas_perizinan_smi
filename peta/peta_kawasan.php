<?php
  include ('config/config.php');

  $queryapi=mysql_query("SELECT * FROM google_api")or die(mysql_error());
  $api = mysql_fetch_array($queryapi);
?>

        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Peta Potensi Investasi Kabupaten Sukabumi
              </div>
              <div class="card-body ">

              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="kawasan" class="form-control" value="<?php echo $_GET['kawasan']; ?>" placeholder="Silakan Ketikan Nama Kawasan Disini...!">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="kecamatan" class="form-control" value="<?php echo $_GET['kecamatan']; ?>" placeholder="Silakan Ketikan Nama Kecamatan Disini...!">
                      </div>
                    </div>
                    <div class="col-md-1 px-1">
                      <div class="form-group">
                      <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                      </div>
                    </div>
                    </div>
              </form>

                <div id="map2" class="map">
                </div>
              </div>
            </div>
          </div>
        </div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo $api['key'] ?>"></script>
<script type="text/javascript">

    function initialize() {
    var mapOptions = {
      zoom: 9,
      center: new google.maps.LatLng(-6.9866678,106.2085906)
    }
    var map = new google.maps.Map(document.getElementById('map2'),
      mapOptions);
    
    setMarkers(map, beaches);
  }

  var beaches = [<?php


$id = $_GET['kawasan'];
$idd = $_GET['kecamatan'];

  $carimap = mysql_query("SELECT * FROM tbl_kawasan WHERE nama_kawasan LIKE'%".$id."%' AND nama_kecamatan LIKE'%".$idd."%' AND latitude IS NOT NULL");
  while ($dcari = mysql_fetch_array($carimap)) {

    
?>

    ['<?php echo "$dcari[nama_kawasan]"; ?>', <?php echo "$dcari[latitude], $dcari[longitude]"; ?>, '<?php echo "$dcari[luas_kawasan] $dcari[satuan_luas]"; ?>',<?php echo "$dcari[id_kawasan]"; ?>,'<?php echo "$dcari[nama_kecamatan]"; ?>','<?php echo "$dcari[jenis_peluang]"; ?>'],
  <?php
                }
            ?>];

  function setMarkers(map, locations) {
    var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
    };
    var infoWindow = new google.maps.InfoWindow;

    for (var i = 0; i < locations.length; i++) {

      var beach = locations[i];
      var myLatLng = new google.maps.LatLng(beaches[i][1], beaches[i][2]);
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: "assets_peta/ico/icons8-location-symbol-28.png",
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
      });
      var html = 'Kawasan : '+beach[0]+'<br/>Luas Kawasan : '+beach[3]+'<br/>Lokasi Kawasan : '+beach[5]+'<br/><a href="?hal=<?php echo base64_encode(peta_kecamatan); ?>&cari_kecamatan='+beach[5]+'" >Peta Kecamatan</a><br/><a href="?hal=<?php echo base64_encode(peta_industri); ?>&nama_kecamatan='+beach[5]+'&sektor_usaha='+beach[6]+'" >Peta Perusahaan</a>';
      bindInfoWindow(marker, map, infoWindow, html);
    }
  }

  function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

  google.maps.event.addDomListener(window, 'load', initialize);
  
</script>        