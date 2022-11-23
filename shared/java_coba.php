
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCZskeTvopw-FZO2q8-Ogm5WAKebR3ZBg4"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>

<script type="text/javascript">
    
  (function() {
  window.onload = function() {
var map;
    //Parameter Google maps
    var options = {
      zoom: 9, //level zoom
    //posisi tengah peta
      center: new google.maps.LatLng(-6.9866678,106.2085906),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  
   // Buat peta di 
    var map = new google.maps.Map(document.getElementById('peta'), options);
   // Tambahkan Marker 
     var locations = [
     <?php

include ('config/config.php');
//echo "$_GET[idlokasi]";
  $carimap = mysql_query("SELECT * FROM tbl_kecamatan WHERE latitude IS NOT NULL");
  while ($dcari = mysql_fetch_array($carimap)) {
?>
                      ['<?php echo "$dcari[nama_kecamatan]"; ?>', <?php echo "$dcari[latitude], $dcari[longitude]"; ?>],
   
    
     <?php
                }
            ?> ];
    var infowindow = new google.maps.InfoWindow();

    var marker, i;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
     icon: 'assets_peta/ico/blue.png'
      });
     /* menambahkan event clik untuk menampikan
       infowindows dengan isi sesuai denga
      marker yang di klik */
    
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  

  };
})();

  </script>

