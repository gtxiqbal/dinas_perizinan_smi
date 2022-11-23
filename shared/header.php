<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/kab_100s.png">
  <link rel="icon" type="image/png" href="assets/img/kab_100s.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dinas Penanaman Modal dan Perizinan Terpadu Satu Pintu Kabupaten Sukabumi
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

  <link href="assets_table/css/bootstrap.css" rel="stylesheet" />
  <link href="assets_table/css/fresh-bootstrap-table.css" rel="stylesheet" />
     
    <!--     Fonts and icons     -->
    <link href="assets_table/maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='assets_table/fonts.googleapis.com/css.css' rel='stylesheet' type='text/css'>

    <!--LEAFLET-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<style type="text/css">
.style9 { font-size: 11px;
  font-weight: bold;
}
.style99 { font-size: 20px;
  font-weight: bold;
}
.style10 { font-size: 40px;
  font-weight: bold;
}

.style11 { 
  font-weight: bold;
  /*color: #695050;*/
}
</style>

<!-- Bagian css Grafik -->
  <!-- <link rel="stylesheet" href="assets_grafik/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="assets_grafik/css/ilmudetil.css">
  <script src="assets_grafik/js/jquery-1.10.1.min.js"></script>
  <script src="assets_grafik/js/highcharts.js"></script>
  <script>
    var chart1; 
    $(document).ready(function() {
        chart1 = new Highcharts.Chart({
         chart: {
          renderTo: 'mygraph',
          type: 'column'
         },   
         title: {
          text: 'Grafik Komoditi Sektor Pertanian Tahun <?php echo date('Y');?>'
         },
         xAxis: {
          categories: ['Komoditi Sektor Pertanian']
         },
         yAxis: {
          title: {
             text: 'Perkiraan Investasi'
          }
         },
            series:             
          [
            <?php 
            include "config/config.php";
            $sql = mysql_query("SELECT peluang_investasi  FROM tbl_peluang_investasi WHERE tahun = (DATE_FORMAT(NOW(), '%Y'))");
            while ($temp = mysql_fetch_array($sql))


            // $sql   = "SELECT nama_perusahaan  FROM investasi_tahunan_perusahaan WHERE tahun = (DATE_FORMAT(NOW(), '%Y')) ";
            // $query = mysql_query( $con, $sql )  or die(mysql_error());
            // while( $temp = mysql_fetch_array( $query ) )
            {
              $trendbrowser=$temp['peluang_investasi']; 
              $sql_total = mysql_query("SELECT perkiraan_investasi FROM tbl_peluang_investasi WHERE peluang_investasi='$trendbrowser' AND tahun = (DATE_FORMAT(NOW(), '%Y'))");
              while ($data = mysql_fetch_array($sql_total))

              // $sql_total   = "SELECT jumlah_investasi FROM investasi_tahunan_perusahaan WHERE nama_perusahaan='$trendbrowser' AND tahun = (DATE_FORMAT(NOW(), '%Y'))";        
              // $query_total = mysql_query($con,$sql_total ) or die(mysql_error());
              // while( $data = mysql_fetch_array( $query_total ) )
              {
                $total = $data['perkiraan_investasi'];                 
              }             
            ?>
              {
                name: '<?php echo $trendbrowser; ?>',
                data: [<?php echo $total; ?>]
              },
              <?php 
            }   ?>
            ]
        });
       });  
  </script>

  <script>
    var chart2; 
    $(document).ready(function() {
        chart1 = new Highcharts.Chart({
         chart: {
          renderTo: 'mygraph2',
          type: 'column'
         },   
         title: {
          text: 'Grafik Investasi Tahunan'
         },
         xAxis: {
          categories: ['Tahun']
         },
         yAxis: {
          title: {
             text: 'Perkiraan Investasi'
          }
         },
            series:             
          [
            <?php 
            include "config/config.php";
            $sql = mysql_query("SELECT tahun, SUM(jumlah_investasi) as investasi FROM investasi_tahunan_perusahaan GROUP BY tahun");
            while ($temp = mysql_fetch_array($sql))


            // $sql   = "SELECT nama_perusahaan  FROM investasi_tahunan_perusahaan WHERE tahun = (DATE_FORMAT(NOW(), '%Y')) ";
            // $query = mysql_query( $con, $sql )  or die(mysql_error());
            // while( $temp = mysql_fetch_array( $query ) )
            {
              $trendbrowser=$temp['tahun']; 
              $sql_total = mysql_query("SELECT tahun, sum(jumlah_investasi) as investasi FROM investasi_tahunan_perusahaan WHERE tahun='$trendbrowser' group by tahun");
              while ($data = mysql_fetch_array($sql_total))

              // $sql_total   = "SELECT jumlah_investasi FROM investasi_tahunan_perusahaan WHERE nama_perusahaan='$trendbrowser' AND tahun = (DATE_FORMAT(NOW(), '%Y'))";        
              // $query_total = mysql_query($con,$sql_total ) or die(mysql_error());
              // while( $data = mysql_fetch_array( $query_total ) )
              {
                $total = $data['investasi'];                 
              }             
            ?>
              {
                name: '<?php echo $trendbrowser; ?>',
                data: [<?php echo $total; ?>]
              },
              <?php 
            }   ?>
            ]
        });
       });  
  </script>

</head>
