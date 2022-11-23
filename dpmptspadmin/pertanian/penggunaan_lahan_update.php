<?php  
    include '../config/config.php';

    $id = base64_decode($_GET['id_penggunaan_lahan']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);


  $query = mysql_query("SELECT * FROM tbl_penggunaan_lahan WHERE id_penggunaan_lahan='".$idddddd."'");
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
                    <h2>UPDATE DATA PENGGUNAAN LAHAN SEKTOR PERTANIAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('penggunaan_lahan_update_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Nama Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="user" value="<?php echo $cari['user_nama']; ?>">
                                            <input type="hidden" name="id_penggunaan_lahan" value="<?php echo $data['id_penggunaan_lahan']; ?>">
                                            <input name="nama_kecamatan" type="text" id="nama_kecamatan1" placeholder="Ketikan Nama Kecamatan..." class="form-control" value="<?php echo $data['nama_kecamatan']; ?>" required>
                                            <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan1" value="<?php echo $data['id_kecamatan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Nama Lahan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nama_lahan" id="nama_lahan1" placeholder="Ketikan Nama Lahan..." type="text" class="form-control" value="<?php echo $data['nama_lahan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Jenis Lahan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="jenis_lahan" id="jenis_lahan1" type="text" class="form-control" value="<?php echo $data['jenis_lahan']; ?>">
                                            </div>
                                        </div>
                                    </div> 
                                                    
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Ditanami Padi Satu Kali</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="ditanami_padi_satu" type="number" class="form-control" value="<?php echo $data['ditanami_padi_satu']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Ditanami Padi Dua Kali</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="ditanami_padi_dua" type="number" class="form-control" value="<?php echo $data['ditanami_padi_dua']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Ditanami Padi ≥ Tiga Kali</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="ditanami_padi_lebih_tiga" type="number" class="form-control" value="<?php echo $data['ditanami_padi_lebih_tiga']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                                     
                                </div>
                            </div>
                             <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Ditanami Tanaman Lainnya</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="ditanami_tanaman_lain" type="number" class="form-control" value="<?php echo $data['ditanami_tanaman_lain']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Tidak Ditanami Apapun</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tidak_ditanami_apapun" type="number" class="form-control" value="<?php echo $data['tidak_ditanami_apapun']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Tahun</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tahun" type="number" class="form-control"  value="<?php echo $data['tahun']; ?>" required>
                                            </div>
                                        </div>
                                    </div> 
                                                     
                                </div>
                            </div>
                                                                                       
                        <button class="btn btn-primary waves-effect" name="simpan" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
  </div>

