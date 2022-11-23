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

?>


<div class="container-fluid">

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>INPUT GAMBAR PERUSAHAAN</h2>
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
                    <form enctype="multipart/form-data" action="?hal=<?php echo base64_encode ('gambar_perusahaan_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Upload Gambar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">location_city</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
                                            <input type="hidden" class="form-control" value="FOTO PERUSAHAAN" name="jenis_gambar">
                                            <input type="hidden" class="form-control" value="<? echo $_SESSION['MM_Username']; ?>" name="user_input">
                                            <input type="hidden" class="form-control" value="<?php echo date('Y-m-d H:i:s');?>" name="tgl_input">
                                                <input name="gambar_image" type="file" class="form-control"required>
                                            </div>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                            
                                                                                                                      
                        <button class="btn btn-primary waves-effect" name="btnUploadFoto" type="submit">UPLOAD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
  </div>