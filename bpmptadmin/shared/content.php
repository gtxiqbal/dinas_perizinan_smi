<?php  
    include '../config/config.php';

    $sql = "SELECT * FROM tbl_kecamatan";
    $query = mysql_query($sql);
    $count = mysql_num_rows($query);

    $sql2 = "SELECT * FROM tbl_perusahaan";
    $query2 = mysql_query($sql2);
    $count2 = mysql_num_rows($query2);

    $sql3 = "SELECT * FROM tbl_kawasan";
    $query3 = mysql_query($sql3);
    $count3 = mysql_num_rows($query3);
?>

    <!-- Bagian css Grafik -->
  <!-- <link rel="stylesheet" href="assets_grafik/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="../assets_grafik/css/ilmudetil.css"> -->
  <script src="../assets_grafik/js/jquery-1.10.1.min.js"></script>
  <script src="../assets_grafik/js/highcharts.js"></script>
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


            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH KECAMATAN</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $count; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PERUSAHAAN</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $count2; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">collections</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH KAWASAN</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $count3; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA INVESTASI KECAMATAN TAHUN <?php echo date('Y');?></h2>
                                <br/>
<!--                             <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                          <div class="table-responsive">
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
          <thead class=" text-default">
                      <th align="center"><span class="style10"><strong>No</strong></span></th>
                      <th align="center"><span class="style10"><strong>Kecamatan</strong></span></th>
                      <th align="center"><span class="style10"><strong>Jumlah Penduduk</strong></span></th>
                      <th align="center"><span class="style10"><strong>Nilai Investasi (Rp)</strong></span></th>
                    </thead>
                    <tbody>
                    <?php

                    $query  = "SELECT id_kecamatan,nama_kecamatan  FROM tbl_kecamatan  ORDER BY nama_kecamatan ASC LIMIT 0,25";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no; ?></span></td>
                        <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                        <td><span class="style9">
                          <?php
                          $id1 = $data['id_kecamatan'];

                          $query2  = mysql_query("SELECT jumlah_penduduk FROM detail_kecamatan WHERE id_kecamatan='".$id1."' AND tahun= (DATE_FORMAT(NOW(), '%Y')) ");  
                          $data2  = mysql_fetch_array($query2);

                          ?>
                          <?php echo $data2['jumlah_penduduk']; ?>
                        </span></td>
                        <td><span class="style9">
                          <?php
                          $id2 = $data['id_kecamatan'];

                          $query3  = mysql_query("SELECT SUM(jumlah_investasi) as investasi FROM investasi_tahunan_perusahaan WHERE id_kecamatan='".$id2."' AND tahun= (DATE_FORMAT(NOW(), '%Y')) GROUP BY nama_kecamatan ");  
                          $data3  = mysql_fetch_array($query3);

                          ?>
                          <?php echo $data3['investasi']; ?>
                        </span></td>
                      </tr>
                    <?php
                    $no++;
                }
            ?>  
                    </tbody>
          </table>

                          </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA INVESTASI PERUSAHAAN TAHUN <?php echo date('Y');?></h2>
                                <br/>
<!--                             <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                          <div class="table-responsive">
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
          <thead class=" text-default">
                      <th class="text-center"><span class="style10"><strong>No</strong></span></th>
                      <!-- <th class="text-center"><strong>Kecamatan</strong></th> -->
                      <th class="text-center"><span class="style10"><strong>Perusahan</strong></span></th>
                      <th class="text-center"><span class="style10"><strong>Sektor Usaha</strong></span></th>
                      <th class="text-center"><span class="style10"><strong>Bidang Usaha</strong></span></th>
                      <th class="text-center"><span class="style10"><strong>Nilai Invetasi (Rp)</strong></span></th>
                    </thead>
                    <tbody>
                    <?php

                    $query2  = "SELECT *  FROM investasi_tahunan_perusahaan WHERE tahun= (DATE_FORMAT(NOW(), '%Y')) ORDER BY nama_kecamatan ASC ";  
                    $hasil2  = mysql_query($query2);

                    $no2 = 1;
                        while ($data2 = mysql_fetch_array($hasil2)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no2; ?></span></td>
                        <!-- <td><span class="style9"><?php echo $data2['nama_kecamatan']; ?></span></td> -->
                        <td><span class="style9"><?php echo $data2['nama_perusahaan']; ?></span></td>
                        <td><span class="style9"><?php echo $data2['sektor_usaha']; ?></span></td>
                        <td><span class="style9"><?php echo $data2['bidang_usaha']; ?></span></td>
                        <td class="text-right"><span class="style9"><?php echo $data2['jumlah_investasi']; ?></span></td>
                      </tr>
                    <?php
                    $no2++;
                }
            ?>  
                    </tbody>
          </table>

                          </div>
                        </div>
                    </div>
                </div> 
                <!-- #END# Latest Social Trends -->
                
            </div>


<div class="row">

  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading"></div>
        <div class="panel-body">
          <div id ="mygraph"></div>
        </div>
    </div>
  </div>
</div>
