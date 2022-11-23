<?php  
    include '../config/config.php';

    $id = base64_decode($_GET['id_perusahaan']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);


  $query = mysql_query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan='".$idddddd."'");
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
                    <h2>EDIT DATA PERUSAHAAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('perusahaan_update_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">location_city</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
                                            <input type="hidden" name="user_edit" value="<?php echo $cari['user_nama']; ?>">
                                                <input name="nama_perusahaan" type="text" class="form-control" value="<?php echo $data['nama_perusahaan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Alamat Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">streetview</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea name="alamat_perusahaan" cols="30" rows="5" class="form-control no-resize" value="<?php echo $data['alamat_perusahaan']; ?>" required><?php echo $data['alamat_perusahaan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Pemilik</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person_pin</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nama_pemilik" type="text" class="form-control" value="<?php echo $data['nama_pemilik']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Alamat Pemilik</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">streetview</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea name="alamat_pemilik" cols="30" rows="5" class="form-control no-resize" value="<?php echo $data['alamat_pemilik']; ?>" required><?php echo $data['alamat_pemilik']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Lokasi Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nama_kecamatan" type="text" id="nama_kecamatan1" placeholder="Silakan Ketikan Nama Kecamatan..." class="form-control" value="<?php echo $data['nama_kecamatan']; ?>" required>
                                                <input type="hidden" class="form-control" name="id_kecamatan" value="<?php echo $data['id_kecamatan']; ?>" id="id_kecamatan1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Luas Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_perusahaan" type="text" required class="form-control" value="<?php echo $data['luas_perusahaan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Satuan Luas</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_luas" id="nama_satuan1" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="<?php echo $data['satuan_luas']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div> 
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Sektor Usaha</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">work</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="sektor_usaha" value="<?php echo $data['sektor_usaha']; ?>" placeholder="Silakan Ketikan Nama Kecamatan..." id="jenis_sektor1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Telp. Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_in_talk</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tlp_perusahaan" type="number" required class="form-control" value="<?php echo $data['tlp_perusahaan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Tahun Berdiri</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tahun_berdiri" type="number" required class="form-control" value="<?php echo $data['tahun_berdiri']; ?>">
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Tanggal Berkas</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  id="date" class="form-control floating-label" value="<?php echo $data['tgl_berkas']; ?>" name="tgl_berkas" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>No. Izin</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="no_izin" type="text" required class="form-control" value="<?php echo $data['no_izin']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Tanggal Register Izin</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tgl_register_izin" type="text" id="date2" class="form-control floating-label" required class="form-control" value="<?php echo $data['tgl_register_izin']; ?>">
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
                                                <input name="latitude" type="text" required class="form-control" value="<?php echo $data['latitude']; ?>">
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
                                                <input name="longitude" type="text" required class="form-control" value="<?php echo $data['longitude']; ?>">
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