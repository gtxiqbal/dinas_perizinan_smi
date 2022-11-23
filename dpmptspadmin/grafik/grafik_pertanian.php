<!-- Bagian css Grafik -->
  <!-- <link rel="stylesheet" href="assets_grafik/css/bootstrap.min.css"> -->
  <!-- link rel="stylesheet" href="../assets_grafik/css/ilmudetil.css"> -->
  <script src="../assets_grafik/js/jquery-1.10.1.min.js"></script>
  <script src="../assets_grafik/js/highcharts.js"></script>
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
            include "../config/config.php";
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



<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<div class="container-fluid">
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <form name="cari" method="GET">
          <div class="demo-masked-input">
          <div class="row clearfix">
          <div class="col-md-2"> <b>Tahun</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
              <div class="form-line">
              <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                <input type="text" class="form-control" name="tahun" value="<?php echo $_GET['tahun']; ?>" >
              </div>
            </div>
          </div>
          
          <div class="col-md-1"> <b>&nbsp;</b> <br/>
            
            <button class="btn bg-pink waves-effect" type="submit"> <i class="material-icons">search</i></button>
          </div>
        </form>
        <div class="col-md-1">
            <b>&nbsp;</b><br/>
            <button type="button" class="btn bg-cyan waves-effect">
            <a href="" onclick="MM_openBrWindow('grafik/print_grafik_pertanian.php?tahun=<?php echo $_GET['tahun']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
            </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GRAFIK KOMODITI SEKTOR PERTANIAN KABUPATEN SUKABUMI
                                </h2>
                                <br/>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                     
                                    <!-- <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          <div class="table-responsive">
<div id ="mygraph2"></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
</div>