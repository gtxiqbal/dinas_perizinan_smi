<?php 
    include ("../config/config.php");

    $ambil1 =mysql_query("SELECT * FROM tbl_user WHERE user_id='$_SESSION[user_id]'");
    $ambil2=mysql_fetch_assoc($ambil1);
?>

<div class="container-fluid">

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>EDIT DATA PROFIL</h2>
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
                    <form action="?hal=<?php echo base64_encode ('profil_proses_update'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <b>Nama</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="hidden" name="user_id" value="<?php echo $ambil2['user_id']; ?>">
                                                <input name="nama" type="text" class="form-control" value="<?php echo $ambil2['user_nama']; ?>" required>
                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div> 
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <b>Alamat</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">assignment_ind</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="alamat" type="text" required class="form-control" value="<?php echo $ambil2['user_alamat']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                                     
                                </div>
                            </div>  
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Tempat Lahir</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tempat_lahir" type="text" required class="form-control" value="<?php echo $ambil2['user_tempat']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                    <div class="col-md-6">
                                        <b>Tanggal Lahir</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tgl_lahir" type="text" required class="form-control floating-label" id="date" value="<?php echo $ambil2['user_tanggal']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>E-mail</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="email" type="email" required class="form-control" value="<?php echo $ambil2['user_email']; ?>">
                                            </div>
                                        </div>
                                    </div>                                
                                
                                <div class="col-md-6">
                                        <b>Jabatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">work</i>
                                            </span>
                                            <div class="form-line">

                                                <input name="jabatan" type="text" required class="form-control" value="<?php echo $ambil2['user_jabatan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    </div> 
                            </div>                                                                                                                         
                        <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
  </div>