<?php
  include ('config/config.php');

  $queryapi=mysql_query("SELECT * FROM google_api")or die(mysql_error());
  $api = mysql_fetch_array($queryapi);
?>



        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Peta Kecamatan Kabupaten Sukabumi
              </div>
              <div class="card-body ">

              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="cari_kecamatan" class="form-control" value="<?php echo $_GET['cari_kecamatan']; ?>" placeholder="Silakan Ketikan Nama Kecamatan Disini...!">
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

                <div id="map" class="map">
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
    var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
    
    setMarkers(map, beaches);
  }

  var beaches = [<?php


//echo "$_GET[idlokasi]";
  $id = $_GET['cari_kecamatan'];

  $carimap = mysql_query("SELECT * FROM tbl_kecamatan WHERE nama_kecamatan LIKE'%".$id."%' AND latitude IS NOT NULL");
  while ($dcari = mysql_fetch_array($carimap)) {
?>

    ['<?php echo "$dcari[nama_kecamatan]"; ?>', <?php echo "$dcari[latitude], $dcari[longitude]"; ?>, '<?php echo "$dcari[luas_kecamatan] $dcari[satuan_luas]"; ?>', <?php echo "$dcari[id_kecamatan]"; ?>],
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
        icon: "assets_peta/ico/if_courthouse_1989006.png",
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
      });
      var html = 'Kecamatan : '+beach[0]+'<br/>Luas Kecamatan : '+beach[3]+'<br/><a href="?hal=<?php echo base64_encode(detail_kecamatan); ?>&id_kecamatan='+beach[4]+'" >Detail Kecamatan</a><br/><a href="?hal=<?php echo base64_encode(peta_industri); ?>&nama_kecamatan='+beach[0]+'" >Peta Perusahaan</a><br/><a href="?hal=<?php echo base64_encode(peta_kawasan); ?>&kecamatan='+beach[0]+'" >Peta Potensi dan Peluang Investasi</a>';
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