<?php  
    include '../config/config.php';

    $id = $_GET['id_kecamatan'];



  $query = mysql_query("SELECT * FROM tbl_kecamatan WHERE id_kecamatan='".$id."'");
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
                    <h2>INPUT DATA DETAIL KECAMATAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('input_detail_kecamatan_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="user" value="<?php echo $cari['user_nama']; ?>">
                                                <input type="hidden" name="id_kecamatan" value="<?php echo $data['id_kecamatan']; ?>">
                                                <input name="nama_kecamatan" type="text" class="form-control" value="<?php echo $data['nama_kecamatan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Jumlah Penduduk</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">accessibility</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="jumlah_penduduk" type="number" class="form-control" value="">
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
                                                <input name="tahun" type="number" class="form-control" value="">
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
                                DATA DETAIL KECAMATAN <?php echo $data['nama_kecamatan']; ?> KABUPATEN SUKABUMI</h2>
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
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Jumlah Penduduk</span></th>
                <th><span class="style10">Tahun</span></th>
              </tr>
          </thead>
          <tbody>
          <?php

                    $id = $_GET['id_kecamatan'];

                    $query  = "SELECT * FROM detail_kecamatan  WHERE id_kecamatan='".$id."' ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_detail_kecamatan']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('update_detail_kecamatan'); ?>&amp;id_kecamatan=<?php echo $data['id_kecamatan']; ?>&amp;id_detail_kecamatan=<?php echo $data['id_detail_kecamatan']; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('hapus_detail_kecamatan'); ?>&amp;id_kecamatan=<?php echo $data['id_kecamatan']; ?>&amp;id_detail_kecamatan=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['jumlah_penduduk'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  
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