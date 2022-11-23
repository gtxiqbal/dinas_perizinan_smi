<?php  
    include 'config/config.php';

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

      <div class="content">
<div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="alert alert-danger alert-with-icon" data-notify="container">
                  <span data-notify="icon" class="now-ui-icons business_money-coins"></span>
                  <span data-notify="message" class="text-center"><strong>JUMLAH INVESTASI KABUPATEN SUKABUMI</strong></span>
                  
                  <div class="style99">
                  <marquee>
                  <?php

                    $query2  = "SELECT tahun, SUM(jumlah_investasi) as investasi FROM investasi_tahunan_perusahaan GROUP BY tahun ";  
                    $hasil2  = mysql_query($query2);

                    $no = 1;
                        while ($data22 = mysql_fetch_array($hasil2)) {

                    ?>
                  <strong>Tahun <?php echo $data22['tahun']; ?>: Rp. <?php echo number_format($data22['investasi'] ,0,",","."); ?></strong> &nbsp;
                  <?php
                    $no++;
                }
            ?>
            </marquee>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          </div>

<div class="row">

  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading"></div>
        <div class="panel-body">
          <div id ="mygraph2"></div>
        </div>
    </div>
  </div>
</div>





      <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="alert alert-warning alert-with-icon" data-notify="container">
                <a href="?hal=<?php echo base64_encode('peta_kecamatan'); ?>">
                  <span data-notify="icon" class="now-ui-icons business_bank"></span>
                  <span data-notify="message" class="text-center"><strong>JUMLAH KECAMATAN</strong></span><div class="style10"><strong><?php echo $count; ?></strong></div>
                  </a>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="alert alert-info alert-with-icon" data-notify="container">
                <a href="?hal=<?php echo base64_encode('peta_industri'); ?>">
                  <span data-notify="icon" class="now-ui-icons shopping_shop"></span>
                  <span data-notify="message" class="text-center"><strong>JUMLAH PERUSAHAAN</strong></span><div class="style10"><strong><?php echo $count2; ?></strong></div>
                  </a>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="alert alert-success alert-with-icon" data-notify="container">
                <a href="?hal=<?php echo base64_encode('peta_kawasan'); ?>">
                  <span data-notify="icon" class="now-ui-icons design_image"></span>
                  <span data-notify="message" class="text-center"><strong>JUMLAH KAWASAN POTENSI DAN PELUANG INVESTASI</strong></span><div class="style10"><strong><?php echo $count3; ?></strong></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          </div>









        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data Investasi Kecamatan</h5>
                <h4 class="card-title">Tahun <?php echo date('Y');?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table" class="table">
                    <thead class=" text-info">
                      <th class="text-center"><strong>No</strong></th>
                      <th class="text-center"><strong>Kecamatan</strong></th>
                      <!-- <th class="text-center"><strong>Jumlah Penduduk</strong></th> -->
                      <th class="text-center"><strong>Nilai Investasi (Rp)</strong></th>
                    </thead>
                    <tbody>
                    <?php

                    $query  = "SELECT id_kecamatan,nama_kecamatan  FROM tbl_kecamatan  ORDER BY nama_kecamatan ASC ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no; ?></span></td>
                        <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                        <!-- <td class="text-right"><span class="style9">
                          <?php
                          $id1 = $data['id_kecamatan'];

                          $query2  = mysql_query("SELECT jumlah_penduduk FROM detail_kecamatan WHERE id_kecamatan='".$id1."' AND tahun= (DATE_FORMAT(NOW(), '%Y')) ");  
                          $data2  = mysql_fetch_array($query2);

                          ?>
                          <?php echo $data2['jumlah_penduduk']; ?>
                        </span></td> -->
                        <td class="text-right"><span class="style9">
                          <?php
                          $id2 = $data['id_kecamatan'];

                          $query3  = mysql_query("SELECT SUM(jumlah_investasi) as investasi FROM investasi_tahunan_perusahaan WHERE id_kecamatan='".$id2."' AND tahun= (DATE_FORMAT(NOW(), '%Y')) GROUP BY nama_kecamatan ");  
                          $data3  = mysql_fetch_array($query3);

                          ?>
                          <?php echo number_format($data3['investasi'] ,0,",","."); ?>
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

<div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data Investasi Per Sektor Usaha</h5>
                <h4 class="card-title">Tahun <?php echo date('Y');?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table2" class="table">
                    <thead class=" text-info">
                      <th class="text-center"><strong>No</strong></th>
                      <!-- <th class="text-center"><strong>Kecamatan</strong></th> -->
                      <!-- <th class="text-center"><strong>Perusahaan</strong></th> -->
                      <th class="text-center"><strong>Sektor Usaha</strong></th>
                      <!-- <th class="text-center"><strong>Bidang Usaha</strong></th> -->
                      <th class="text-center"><strong>Nilai Investasi (Rp)</strong></th>
                    </thead>
                    <tbody>
                    <?php

                    $query2  = "SELECT sektor_usaha, sum(jumlah_investasi) as jumlah  FROM investasi_tahunan_perusahaan WHERE tahun= (DATE_FORMAT(NOW(), '%Y')) GROUP BY sektor_usaha ORDER BY sektor_usaha ASC ";  
                    $hasil2  = mysql_query($query2);

                    $no2 = 1;
                        while ($data2 = mysql_fetch_array($hasil2)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no2; ?></span></td>
                        <!-- <td><span class="style9"><?php echo $data2['nama_kecamatan']; ?></span></td> -->
                        <!-- <td><span class="style9"><?php echo $data2['nama_perusahaan']; ?></span></td> -->
                        <td><span class="style9"><?php echo $data2['sektor_usaha']; ?></span></td>
                        <!-- <td><span class="style9"><?php echo $data2['bidang_usaha']; ?></span></td> -->
                        <td class="text-right"><span class="style9"><?php echo number_format($data2['jumlah'] ,0,",","."); ?></span></td>
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


<div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data Kawasan Potensi dan Peluang Investasi</h5>
                <h4 class="card-title">Tahun <?php echo date('Y');?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table3" class="table">
                    <thead class=" text-info">
                      <th class="text-center"><strong>No</strong></th>
                      <!-- <th class="text-center"><strong>Kecamatan</strong></th> -->
                      <th class="text-center"><strong>Nama Kawasan</strong></th>
                      <th class="text-center"><strong>Luas Kawasan</strong></th>
                      <th class="text-center"><strong>Lokasi Kawasan</strong></th>
                      <th class="text-center"><strong>Jenis Peluang dan Potensi</strong></th>
                    </thead>
                    <tbody>
                    <?php

                    $query2  = "SELECT *  FROM tbl_kawasan ORDER BY nama_kawasan ASC ";  
                    $hasil2  = mysql_query($query2);

                    $no2 = 1;
                        while ($data2 = mysql_fetch_array($hasil2)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no2; ?></span></td>
                        <!-- <td><span class="style9"><?php echo $data2['nama_kecamatan']; ?></span></td> -->
                        <td><span class="style9"><?php echo $data2['nama_kawasan']; ?></span></td>
                        <td><span class="style9"><?php echo $data2['luas_kawasan']; ?> <?php echo $data2['satuan_luas']; ?></span></td>
                        <td><span class="style9"><?php echo $data2['nama_kecamatan']; ?></span></td>
                        <td><span class="style9"><?php echo $data2['jenis_peluang']; ?></span></td>
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

          
          </div>
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



