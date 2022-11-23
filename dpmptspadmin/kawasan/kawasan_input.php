<?php
include '../config/config.php';

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
                    <h2>INPUT DATA POTENSI INVESTASI</h2>
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
                    <form action="?hal=<?php echo base64_encode ('kawasan_input_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <b>Nama Potensi Investasi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">collections</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="user" value="<?php echo $cari['user_nama']; ?>">
                                                <input name="nama_kawasan" type="text" class="form-control" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                                        
                                </div>
                            </div>
                            <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Lokasi Potensi Investasi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nama_kecamatan" type="text" id="nama_kecamatan1" placeholder="Silakan Ketikan Nama Kecamatan..." class="form-control" value="" required>
                                                <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Jenis Peluang dan Potensi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">work</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="jenis_peluang" placeholder="Silakan Ketikan Jenis Peluang dan Potensi..." id="jenis_sektor1">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Latitude</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">room</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="latitude" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>                  
                                    <div class="col-md-3">
                                        <b>Longitude</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">room</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="longitude" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Luas Kawasan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_kawasan" type="text" class="form-control" value="">
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
                                                <input name="satuan_luas" id="nama_satuan1" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="">
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