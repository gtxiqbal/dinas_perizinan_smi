<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA SEKTOR PERTANIAN KABUPATEN SUKABUMI</h2>
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
                <th><span class="style10">Bidang Usaha</span></th>
                <th><span class="style10">Peluang Investasi</span></th>
                <th><span class="style10">Kecamatan</span></th>
                <th><span class="style10">Peluang Pasar</span></th>
                <th><span class="style10">Kapasitas Produksi</span></th>
                <th><span class="style10">Hasil Per Hektar</span></th>
                <th><span class="style10">Penanaman Normal</span></th>
                <th><span class="style10">Penanaman Tidak Berhasil (Puso)</span></th>
                <th><span class="style10">Tambah Tanam</span></th>
                <th><span class="style10">Luas Lahan</span></th>
                <th><span class="style10">Luas Panen Kotor</span></th>
                <th><span class="style10">Luas Panen Bersih</span></th>
                <th><span class="style10">Sarana Prasarana</span></th>
                <th><span class="style10">Perkiraan Investasi (Rp)</span></th>
                <th><span class="style10">Tahun</span></th>
                <th><span class="style10">Tenaga Kerja Dalam</span></th>
                <th><span class="style10">Tenaga Kerja Luar</span></th>
                <th><span class="style10">Keterangan</span></th>
                <th><span class="style10">Sisa Akhir Tahun Lalu</span></th>
                <th><span class="style10">Sisa Akhir Tahun Ini</span></th>
                <th><span class="style10">Keterangan Periode</span></th>
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_peluang_investasi order by nama_kecamatan ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_peluang']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('pertanian_update'); ?><?php echo '&id_pertanian='.$idddddd; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('pertanian_delete'); ?>&amp;id_pertanian=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><span class="style9"><?php echo $data['bidang_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_pasar']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?> <?php echo $data['satuan_kapasitas']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['hasil_per_hektar'] ,0,",","."); ?> <?php echo $data['satuan_hasil_per_hektar']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['penanaman_normal'] ,0,",","."); ?> <?php echo $data['satuan_penanaman']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['puso'] ,0,",","."); ?> <?php echo $data['satuan_puso']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tambah_tanam'] ,0,",","."); ?> <?php echo $data['satuan_tambah_tanam']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_lahan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_panen_kotor'] ,0,",","."); ?> <?php echo $data['satuan_luas_panen_kotor']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_panen_bersih'] ,0,",","."); ?> <?php echo $data['satuan_panen_bersih']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sarana_prasarana']; ?></span></td>
                  <td><span class="style9"><?php echo $data['perkiraan_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['sisa_akhir_tahun_lalu'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_lalu']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['sisa_akhir_tahun_ini'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_ini']; ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan_periode']; ?></span></td>
                  
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