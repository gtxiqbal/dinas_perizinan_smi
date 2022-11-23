<?php
  include ('config/config.php');

  $queryapi=mysql_query("SELECT * FROM google_api")or die(mysql_error());
  $api = mysql_fetch_array($queryapi);
?>


<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

        <div class="row">
          <div class="col-md-8">
            <div class="card ">
              <div class="card-header ">
                Peta Perusahaan Kabupaten Sukabumi
              </div>
              <div class="card-body ">
              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-9 pr-1">
                      <div class="form-group">
                        <input type="text" name="nama_perusahaan" class="form-control" value="<?php echo $_GET['nama_perusahaan']; ?>" placeholder="Silakan Ketikan Nama Perusahaan Disini...!">
                      </div>
                    </div>
                    <div class="col-md-2 px-1">
                      <div class="form-group">
                      <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="text" name="nama_kecamatan" class="form-control" value="<?php echo $_GET['nama_kecamatan']; ?>" placeholder="Silakan Ketikan Nama Kecamatan Disini...!">
                      </div>
                    </div>
                    
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      <select name="sektor_usaha" class="form-control">
                        <option value="<?php echo $_GET['sektor_usaha']; ?>"><?php echo $_GET['sektor_usaha']; ?><?php if (($_GET['sektor_usaha']=="")) { // Show if recordset not empty ?>PILIH SEKTOR USAHA<?php } // Show if recordset not empty ?></option>
                        <option value="INDUSTRI">INDUSTRI</option>
                        <option value="PERTANIAN">PERTANIAN</option>
                        <option value="PETERNAKAN">PETERNAKAN</option>
                        <option value="PERKEBUNAN">PERKEBUNAN</option>
                        <option value="PERIKANAN">PERIKANAN</option>
                        <option value="PERTAMBANGAN">PERTAMBANGAN</option>
                        <option value="PARIWISATA">PARIWISATA</option>
                        <option value="LAINNYA">LAINNYA</option>
                      </select>
<!--                         <input type="text" name="sektor_usaha" id="jenis_sektor2" class="form-control" value="<?php echo $_GET['sektor_usaha']; ?>" placeholder="Silakan Ketikan Jenis Sektor Usaha Disini...!">
 -->                      </div>
                    </div>
                    
                    </div>
              </form>

                <div id="map1" class="map">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Data Nilai Investasi Perusahaan Tahun <?php echo date('Y');?></h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table" class="table">
                    <thead class=" text-info">
              <tr>
                <th class="text-center"><strong>No</strong></th>
                <th class="text-center"><strong>Nama Perusahaan</strong></th>
                <th class="text-center"><strong>Lokasi</strong></th>
                <th class="text-center"><strong>Jumlah Investasi (Rp)</strong></th>
              </tr>
          </thead>
          <tbody>
          <?php

                     // $idd = $_GET['id_perusahaan'];

                    $query  = "SELECT * FROM investasi_tahunan_perusahaan WHERE tahun= (DATE_FORMAT(NOW(), '%Y')) ORDER BY nama_perusahaan ASC";  
                    $data  = mysql_query($query);

                    $no = 1;
                        while ($data2 = mysql_fetch_array($data)) {
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data2['nama_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data2['nama_kecamatan']; ?></span></td>
                  <td align="right"><span class="style9"><?php echo $data2['jumlah_investasi']; ?></span></td>
                  
              </tr>
              <?php
                    $no++;
                }
            ?>
          </tbody>
          <tfoot>
            </tfoot>
                  </table>
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
    var map = new google.maps.Map(document.getElementById('map1'),
      mapOptions);
    
    setMarkers(map, beaches);
  }

  var beaches = [<?php



$id = $_GET['sektor_usaha'];
$idd = $_GET['nama_kecamatan'];
$iddd = $_GET['nama_perusahaan'];

  $carimap = mysql_query("SELECT * FROM tbl_perusahaan WHERE nama_perusahaan LIKE'%".$idd."%' AND nama_kecamatan LIKE'%".$idd."%' AND sektor_usaha LIKE'%".$id."%'  AND latitude IS NOT NULL");
  while ($dcari = mysql_fetch_array($carimap)) {

    
?>

    ['<?php echo "$dcari[nama_perusahaan]"; ?>', <?php echo "$dcari[latitude], $dcari[longitude]"; ?>, '<?php echo "$dcari[luas_perusahaan] $dcari[satuan_luas]"; ?>',<?php echo "$dcari[id_perusahaan]"; ?>,'<?php echo "$dcari[nama_kecamatan]"; ?>','<?php echo "$dcari[sektor_usaha]"; ?>'],
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
        icon: "assets_peta/ico/if_factory_1988988.png",
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
      });
      var html = 'Perusahaan : '+beach[0]+'<br/>Luas Perusahaan : '+beach[3]+'<br/>Nama Kecamatan : '+beach[5]+'<br/><a href="?hal=<?php echo base64_encode(detail_perusahaan); ?>&id_perusahaan='+beach[4]+'" >Detail Perusahaan</a><br/><a href="?hal=<?php echo base64_encode(peta_kecamatan); ?>&cari_kecamatan='+beach[5]+'" >Peta Kecamatan</a><br/><a href="?hal=<?php echo base64_encode(peta_jenis_peluang); ?>&kecamatan='+beach[5]+'&jenis_peluang='+beach[6]+'" >Peta Peluang dan Potensi Investasi</a>';
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