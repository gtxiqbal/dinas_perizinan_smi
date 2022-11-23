<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KECAMATAN KABUPATEN SUKABUMI</h2>
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
          <thead>
              <tr>
                <th><span class="style10">No</span></th>                
                <th><span class="style10">Edit</span></th>
                <th><span class="style10">Hapus</span></th>
                <th><span class="style10">Detail Kecamatan</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Luas Wilayah</span></th>
                <!-- <th>Satuan Luas</th> -->
                <th><span class="style10">Jumlah Desa</span></th>
                <th><span class="style10">Jumlah Kelurahan</span></th>
                <th><span class="style10">Latitude</span></th>
                <th><span class="style10">Longitude</span></th>
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
                  <td><span class="style9"><?php echo $no; ?><span class="style9"></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('kecamatan_update'); ?><?php echo '&id_kecamatan='.$idddddd; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('kecamatan_delete'); ?>&amp;id_kecamatan=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('input_detail_kecamatan'); ?>=&amp;id_kecamatan=<?php echo $data['id_kecamatan']; ?>" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_kecamatan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <!-- <td><?php echo $data['satuan_luas']; ?></td> -->
                  <td><span class="style9"><?php echo $data['jumlah_desa']; ?></span></td>
                  <td><span class="style9"><?php echo $data['jumlah_kelurahan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['latitude']; ?></span></td>
                  <td><span class="style9"><?php echo $data['longitude']; ?></span></td>
                  
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