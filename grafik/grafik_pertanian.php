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
          renderTo: 'mygraph2',
          type: 'column'
         },   
         title: {
          text: 'Grafik Komoditi Sektor Pertanian Tahun <?php if ($_GET['tahun'] == '') { // Show if recordset empty ?><?php echo date('Y');?><?php } // Show if recordset empty ?><?php if ($_GET['tahun'] <> '') { // Show if recordset empty ?><?php echo $_GET['tahun'];?><?php } // Show if recordset empty ?>'
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



<div class="row">
<div class="col-md-12">
<div class="card ">
              <div class="card-header ">
              </div>
            <div class="card-body ">
              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                      <input name="komoditi" type="hidden" id="komoditi" value="<? echo $_GET['komoditi']; ?>" />
                        <input type="text" name="tahun" class="form-control" value="<?php echo $_GET['tahun']; ?>" placeholder="Silakan Ketikan Tahun Komoditi Disini...!">
                      </div>
                    </div>
                    <div class="col-md-1 px-1">
                      <div class="form-group">
                      
                      
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                      </div>
                    </div>
                    </div>
              </form>

            </div>


  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading"></div>
        <div class="panel-body">
          <div id ="mygraph2"></div>
        </div>
    </div>
  </div>



          </div>
          </div>

  
      </div>


