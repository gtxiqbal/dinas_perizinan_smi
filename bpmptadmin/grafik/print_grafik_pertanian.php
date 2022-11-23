<?php  
    include '../../config/config.php';
?>

<!-- Bagian css Grafik -->
  <link rel="stylesheet" href="../../assets_grafik/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets_grafik/css/ilmudetil.css">
  <script src="../../assets_grafik/js/jquery-1.10.1.min.js"></script>
  <script src="../../assets_grafik/js/highcharts.js"></script>
  <script>
    var chart1; 
    $(document).ready(function() {
        chart1 = new Highcharts.Chart({
         chart: {
          renderTo: 'mygraph2',
          type: 'column'
         },   
         title: {
          text: ''
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
            $id = $_GET['tahun'];
            $sql = mysql_query("SELECT peluang_investasi  FROM tbl_peluang_investasi WHERE (tahun='".$id."' OR tahun = (DATE_FORMAT(NOW(), '%Y')))");
            while ($temp = mysql_fetch_array($sql))


            // $sql   = "SELECT nama_perusahaan  FROM investasi_tahunan_perusahaan WHERE tahun = (DATE_FORMAT(NOW(), '%Y')) ";
            // $query = mysql_query( $con, $sql )  or die(mysql_error());
            // while( $temp = mysql_fetch_array( $query ) )
            {
              $trendbrowser=$temp['peluang_investasi']; 
              $sql_total = mysql_query("SELECT perkiraan_investasi FROM tbl_peluang_investasi WHERE peluang_investasi='$trendbrowser' AND (tahun='".$id."' OR tahun = (DATE_FORMAT(NOW(), '%Y')))");
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

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15%" rowspan="5" align="center"><img src="../../assets/img/kab_1.jpg" width="84" height="94"></td>
        <td width="85%"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center"><strong>PEMERINTAH KABUPATEN SUKABUMI</strong><strong> </strong></p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td width="545" align="left" valign="top"><p align="center"><strong>DINAS    PENANAMAN MODAL DAN PERIZINAN TERPADU SATU PINTU </strong></p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center">JI. Raya Cibolang Km 7 Cisaat, Sukabumi    43152. Telp/Fax :    (0266) 237527 </p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center">e-mail : dpmptsp.kabsmi@gmail.com, dpmptsp@sukabumikab.go.id </p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center">website  http://dpmptsp.sukabumikab.go.id</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="11" colspan="7" nowrap="nowrap"><hr color="#000000"/></td>
  </tr>
  <tr>
    <td align="center"><strong>GRAFIK KOMODITI SEKTOR PERTANIAN KABUPATEN SUKABUMI TAHUN <?php if ($_GET['tahun'] == '') { // Show if recordset empty ?><?php echo date('Y');?><?php } // Show if recordset empty ?><?php if ($_GET['tahun'] <> '') { // Show if recordset empty ?><?php echo $_GET['tahun'];?><?php } // Show if recordset empty ?></strong></td>
  </tr> 
  <tr>
    <td>
    <div id ="mygraph2"></div>
// <script>
// window.print();
// </script>