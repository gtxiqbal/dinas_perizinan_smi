<?php  
    include '../config/config.php';

    $id = base64_decode($_GET['id_kecamatan']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);


  $query = mysql_query("SELECT * FROM tbl_kecamatan WHERE id_kecamatan='".$idddddd."'");
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
                    <h2>EDIT DATA KECAMATAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('kecamatan_update_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="id_kecamatan" value="<?php echo $data['id_kecamatan']; ?>">
                                            <input type="hidden" name="user" value="<?php echo $cari['user_nama']; ?>">
                                                <input name="nama_kecamatan" type="text" class="form-control" value="<?php echo $data['nama_kecamatan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Luas Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_kecamatan" type="text" class="form-control" value="<?php echo $data['luas_kecamatan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Luas</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_luas" id="nama_satuan1" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_luas']; ?>">
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Jumlah Desa</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="jumlah_desa" type="number" class="form-control" value="<?php echo $data['jumlah_desa']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Jumlah Kelurahan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="jumlah_kelurahan" type="number" class="form-control" value="<?php echo $data['jumlah_kelurahan']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>  
 
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Latitude</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">room</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="latitude" type="text" class="form-control" value="<?php echo $data['latitude']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                    <div class="col-md-6">
                                        <b>Longitude</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">room</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="longitude" type="text" class="form-control" value="<?php echo $data['longitude']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                            </div>
                                                                                                                      
                        <button class="btn btn-primary waves-effect" name="simpan" type="submit">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
  </div>