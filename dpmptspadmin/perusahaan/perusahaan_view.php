<?php
  $username= $_SESSION['username']; 

        $query3=mysql_query("SELECT * FROM tbl_user WHERE username='".$username."'")or die(mysql_error());
        $data3 = mysql_fetch_array($query3);
?>

<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PERUSAHAAN KABUPATEN SUKABUMI</h2>
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
                <th><span class="style10">Gambar Perusahaan</span></th>
                <th><span class="style10">Investasi Perusahaan</span></th>
                <th><span class="style10">Nama Perusahaan</span></th>
                <th><span class="style10">Alamat Perusahaan</span></th>
                <th><span class="style10">Nama Pemilik</span></th>
                <th><span class="style10">Alamat Pemilik</span></th>
                <th><span class="style10">Telp. Perusahaan</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Sektor Usaha</span></th>
                <th><span class="style10">Luas Perusahaan</span></th>
                <!-- <th>Satuan Luas</th> -->
                <th><span class="style10">Tahun Berdiri</span></th>
                <th><span class="style10">Tanggal Berkas</span></th>
                <th><span class="style10">No. Izin</span></th>
                <th><span class="style10">Tanggal Register Izin</span></th>
                <th><span class="style10">Kemitraan Perusahaan</span></th>
                <?php if (($data3['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                <th><span class="style10">User Input</span></th>
                <th><span class="style10">User Edit</span></th>
                <?php } // Show if recordset not empty ?>
                <!-- 
                <th>Latitude</th>
                <th>Longitude</th> -->
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_perusahaan order by nama_perusahaan ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_perusahaan']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>

              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('perusahaan_update'); ?><?php echo '&id_perusahaan='.$idddddd; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('perusahaan_delete'); ?>&amp;id_perusahaan=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td>
                    <?php
                    $id1 = $data['id_perusahaan'];

                    $query2  = mysql_query("SELECT * FROM galeri WHERE katga_judul='".$id1."' order by galeri_id ASC");  
                    $data2  = mysql_fetch_array($query2);
                    // $query = mysql_query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan='".$idddddd."'");
                    // $data = mysql_fetch_array($query);

                        // while ($data2 = mysql_fetch_array($hasil2)) {

                ?>
                  <?php if (($data2['galeri_image'] == "")) { // Show if recordset not empty ?>  
                  <a href="home.php?hal=<?php echo base64_encode ('gambar_perusahaan'); ?><?php echo '&id_perusahaan='.$idddddd; ?>" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">collections</i> </a>
                  <?php } // Show if recordset not empty ?> 
                  <?php if (($data2['galeri_image'] <> "")) { // Show if recordset not empty ?> 

                  <div id="animated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a href="<?php echo $data2['galeri_image']; ?>" data-sub-html="<?php echo $data2['nama_perusahaan']; ?>">
                                      <img class="img-responsive thumbnail" src="<?php echo $data2['galeri_image']; ?>">
                                    </a>
                                  </div>
                            </div>   
<!--                       <img class="img-responsive thumbnail" src="<?php echo $data['galeri_image']; ?>" alt="">
 -->                      
                  <a href="perusahaan/hapus.php?no=<? echo $_GET['no']; ?>&id=<?php echo $data2['galeri_id']; ?>" onclick="return confirm(\'Anda yakin akan menghapus file? '<?php echo $data2['galeri_id']; ?>'\');" class="btn bg-red waves-effect"><i class="material-icons">delete_forever</i>Hapus</a>                  
                  <?php } // Show if recordset not empty ?>

                  </td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('investasi_perusahaan'); ?>&amp;id_perusahaan=<?php echo $data['id_perusahaan']; ?>&amp;id_kecamatan=<?php echo $data['id_kecamatan']; ?>&amp;sektor_usaha=<?php echo $data['sektor_usaha']; ?>" class="btn bg-lime btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><span class="style9"><?php echo $data['nama_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['alamat_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_pemilik']; ?></span></td>
                  <td><span class="style9"><?php echo $data['alamat_pemilik']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tlp_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sektor_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_perusahaan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?><span class="style9"></td>
                  <!-- <td></td> -->
                  <td><span class="style9"><?php echo $data['tahun_berdiri']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tgl_berkas']; ?></span></td>
                  <td><span class="style9"><?php echo $data['no_izin']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tgl_register_izin']; ?></span></td>
                  <td><span class="style9"><?php echo $data['kemitraan']; ?></span></td>
                  <?php if (($data3['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                  <td><span class="style9"><?php echo $data['user_input']; ?></span></td>
                  <td><span class="style9"><?php echo $data['user_edit']; ?></span></td>
                  <?php } // Show if recordset not empty ?>
                  <!-- 
                  <td><?php echo $data['latitude']; ?></td>
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