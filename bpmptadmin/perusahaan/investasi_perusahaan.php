<?php  
    include '../config/config.php';

    $id = $_GET['id_kecamatan'];

    $idd = $_GET['id_perusahaan'];



  $query = mysql_query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan='".$idd."'");
  $data = mysql_fetch_array($query);

  $username= $_SESSION['username']; 

        $query3=mysql_query("SELECT * FROM tbl_user WHERE username='".$username."'")or die(mysql_error());
        $cari = mysql_fetch_array($query3);


?>



<div class="container-fluid">

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>INPUT NILAI INVESTASI TAHUNAN PERUSAHAAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('investasi_perusahaan_input'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">location_city</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="user_input" value="<?php echo $cari['user_nama']; ?>">
                                            <input type="hidden" name="id_kecamatan" value="<?php echo $data['id_kecamatan']; ?>">
                                            <input type="hidden" name="nama_kecamatan" value="<?php echo $data['nama_kecamatan']; ?>">
                                            <input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
                                                <input name="nama_perusahaan" readonly="yess" type="text" class="form-control" value="<?php echo $data['nama_perusahaan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Jumlah Investasi (Rp)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="jumlah_investasi" type="number" required class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Tahun</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tahun" type="number" required class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Sektor Usaha</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">work</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="sektor_usaha" readonly="yess" type="text" class="form-control" value="<?php echo $data['sektor_usaha']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Bidang Usaha</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">work</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="bidang_usaha" type="text" class="form-control" value="" required>
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Jumlah Tenaga Kerja Dalam</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person_pin</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tenaga_kerja_dalam" type="number" class="form-control" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Jumlah Tenaga Kerja Luar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person_pin</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tenaga_kerja_luar" type="number" class="form-control" value="" required>
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            
                                                                                                                      
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
  </div>

<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA NILAI INVESTASI TAHUNAN PERUSAHAAN <?php echo $data['nama_perusahaan']; ?> KABUPATEN SUKABUMI</h2>
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
                <th><span class="style10">Nama Perusahaan</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Sektor Usaha</span></th>
                <th><span class="style10">Bidang Usaha</span></th>
                <th><span class="style10">Jumlah Investasi (Rp)</span></th>
                <th><span class="style10">Tahun</span></th>
                <th><span class="style10">Jumlah Tenaga Kerja Dalam</span></th>
                <th><span class="style10">Jumlah Tenaga Kerja Luar</span></th>
                <?php if (($cari['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                <th><span class="style10">User Input</span></th>
                <th><span class="style10">User Edit</span></th>
                <?php } // Show if recordset not empty ?>
              </tr>
          </thead>
          <tbody>
          <?php

                    $id = $_GET['id_perusahaan'];

                    $query  = "SELECT * FROM investasi_tahunan_perusahaan  WHERE id_perusahaan='".$id."' ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_investasi']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('investasi_perusahaan_update'); ?>&amp;id_perusahaan=<?php echo $data['id_perusahaan']; ?>&amp;id_investasi=<?php echo $data['id_investasi']; ?>&amp;sektor_usaha=<?php echo $_GET['sektor_usaha']; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('investasi_perusahaan_hapus'); ?>&amp;id_perusahaan=<?php echo $data['id_perusahaan']; ?>&amp;id_investasi=<?php echo $idddddd; ?>&amp;sektor_usaha=<?php echo $_GET['sektor_usaha']; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><span class="style9"><?php echo $data['nama_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sektor_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data['bidang_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data['jumlah_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tenaga_kerja_dalam']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tenaga_kerja_luar']; ?></span></td>
                  <?php if (($cari['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                  <td><span class="style9"><?php echo $data['user_input']; ?></span></td>
                  <td><span class="style9"><?php echo $data['user_edit']; ?></span></td>
                  <?php } // Show if recordset not empty ?>
                  
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