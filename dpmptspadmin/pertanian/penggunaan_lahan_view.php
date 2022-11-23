<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENGGUNAAN LAHAN SEKTOR PERTANIAN KABUPATEN SUKABUMI</h2>
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
                <th><span class="style10">Nama Lahan</span></th>
                <th><span class="style10">Jenis Lahan</span></th>
                <th><span class="style10">Kecamatan</span></th>
                <th><span class="style10">Tahun</span></th>
                <th><span class="style10">Ditanami Padi Satu Kali</span></th>
                <th><span class="style10">Ditanami Padi Dua Kali</span></th>
                <th><span class="style10">Ditanami Padi ≥ Tiga kali</span></th>
                <th><span class="style10">Ditanami Tanaman Lainnya</span></th>
                <th><span class="style10">Tidak Ditanami Apapun</span></th>
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_penggunaan_lahan order by nama_kecamatan ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_penggunaan_lahan']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('penggunaan_lahan_update'); ?><?php echo '&id_penggunaan_lahan='.$idddddd; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('penggunaan_lahan_delete'); ?>&amp;id_penggunaan_lahan=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><span class="style9"><?php echo $data['nama_lahan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['jenis_lahan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['ditanami_padi_satu'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['ditanami_padi_dua'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['ditanami_padi_lebih_tiga'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['ditanami_tanaman_lain'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tidak_ditanami_apapun'] ,0,",","."); ?></span></td>
                  
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