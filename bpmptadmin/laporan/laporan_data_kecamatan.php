<?php  
    include '../../config/config.php';
?>



<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KECAMATAN KABUPATEN SUKABUMI
                                </h2>
                                <br/>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                     <form name="cari" method="GET"><button type="button" class="btn bg-cyan waves-effect"><a href="" onclick="MM_openBrWindow('laporan/print_laporan_data_kecamatan.php','','scrollbars=yes')"><i class="material-icons">print</i></a></button>
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
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
              <tr>
                <th><span class="style10">No</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Luas Wilayah</span></th>
                <!-- <th>Satuan Luas</th> -->
                <th><span class="style10">Jumlah Desa</span></th>
                <th><span class="style10">Jumlah Kelurahan</span></th>
                <!-- <th>Latitude</th>
                <th>Longitude</th> -->
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_kecamatan order by nama_kecamatan ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_kecamatan']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['luas_kecamatan']; ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <!-- <td><?php echo $data['satuan_luas']; ?></td> -->
                  <td><span class="style9"><?php echo $data['jumlah_desa']; ?></span></td>
                  <td><span class="style9"><?php echo $data['jumlah_kelurahan']; ?></span></td>
                  <!-- <td><?php echo $data['latitude']; ?></td>
                  <td><?php echo $data['longitude']; ?></td> -->
                  
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
</div>