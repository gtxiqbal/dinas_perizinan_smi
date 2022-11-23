<?php  
    include '../config/config.php';

    $id = base64_decode($_GET['id_pertanian']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);


  $query = mysql_query("SELECT * FROM tbl_peluang_investasi WHERE id_peluang='".$idddddd."'");
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
                    <h2>EDIT DATA SEKTOR PERTANIAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('pertanian_update_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Nama Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="user" value="<?php echo $cari['user_nama']; ?>">
                                            <input type="hidden" name="id_peluang" value="<?php echo $data['id_peluang']; ?>">
                                            <input name="nama_kecamatan" type="text" id="nama_kecamatan1" placeholder="Ketikan Nama Kecamatan..." class="form-control" value="<?php echo $data['nama_kecamatan']; ?>" required>
                                            <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan1" value="<?php echo $data['id_kecamatan']; ?>" required>
                                            <input type="hidden" name="sektor_usaha" value="PERTANIAN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Bidang Usaha</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="bidang_usaha" id="detail_sektor1" placeholder="Ketikan Bidang Usaha..." type="text" class="form-control" value="<?php echo $data['bidang_usaha']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Peluang Investasi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="peluang_investasi" type="text" class="form-control" value="<?php echo $data['peluang_investasi']; ?>">
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
                                                <input name="tahun" type="number" class="form-control"  value="<?php echo $data['tahun']; ?>">
                                            </div>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Peluang Pasar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">shopping_cart</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="peluang_pasar" id="nama_peluang1" placeholder="Silakan Ketikan Peluang..." type="text" class="form-control" value="<?php echo $data['peluang_pasar']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Kapasitas Produksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="kapasitas_produksi" type="number" class="form-control" value="<?php echo $data['kapasitas_produksi']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Kapasitas Produksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_kapasitas" id="nama_satuan2" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_kapasitas']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Perkiraan Investasi (Rp)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="perkiraan_investasi" type="number" class="form-control" value="<?php echo $data['perkiraan_investasi']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>

                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Hasil Per Hektar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="hasil_per_hektar" type="number" class="form-control"  value="<?php echo $data['hasil_per_hektar']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Hasil Per Hektar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_hasil_perhektar" id="nama_satuan3" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_hasil_per_hektar']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Tambah Tanam</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tambah_tanam" type="number" class="form-control" value="<?php echo $data['tambah_tanam']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Tambah Tanam</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_tambah_tanam" id="nama_satuan4" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_tambah_tanam']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Sarana Prasarana</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">library_books</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="sarana_prasarana" type="text"  class="form-control" value="<?php echo $data['sarana_prasarana']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Luas Lahan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_lahan" type="text" class="form-control" value="<?php echo $data['luas_lahan']; ?>">
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
                                    <div class="col-md-3">
                                        <b>Penanaman (Normal)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">photo_size_select_actual</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="penanaman_normal" type="number" class="form-control"  value="<?php echo $data['penanaman_normal']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Penanaman (Normal)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_penanaman" id="nama_satuan5" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_penanaman']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Penanaman Tidak Berhasil (Puso)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">photo_size_select_actual</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="puso" type="number" class="form-control" value="<?php echo $data['puso']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Penanaman Tidak Berhasil (Puso)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_puso" id="nama_satuan6" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_puso']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Luas Panen Kotor</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_panen_kotor" type="number" class="form-control"  value="<?php echo $data['luas_panen_kotor']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Luas Panen Kotor</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_luas_panen_kotor" id="nama_satuan7" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_luas_panen_kotor']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Luas Panen Bersih</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_panen_bersih" type="number" class="form-control" value="<?php echo $data['luas_panen_bersih']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Luas Panen Bersih</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_luas_panen_bersih" id="nama_satuan8" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_panen_bersih']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Sisa Akhir Tahun Lalu</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="sisa_akhir_tahun_lalu" type="number"  class="form-control" value="<?php echo $data['sisa_akhir_tahun_lalu']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Sisa Akhir Tahun Lalu</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_sisa_akhir_tahun_lalu" id="nama_satuan9" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_sisa_akhir_tahun_lalu']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Sisa Akhir Tahun Ini</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">spa</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="sisa_akhir_tahun_ini" type="number"  class="form-control" value="<?php echo $data['satuan_sisa_akhir_tahun_Ini']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Satuan Sisa Akhir Tahun Ini</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="satuan_sisa_akhir_tahun_ini" id="nama_satuan10" placeholder="Silakan Ketikan Satuan..." type="text" class="form-control" value="<?php echo $data['satuan_sisa_akhir_tahun_Ini']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                                      
                                </div>
                            </div> 
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Tenaga Kerja Dalam</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">group</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tenaga_kerja_dalam" type="number" class="form-control" value="<?php echo $data['tenaga_kerja_dalam']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Tenaga Kerja Luar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">group</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tenaga_kerja_luar" type="text" class="form-control" value="<?php echo $data['tenaga_kerja_luar']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Keterangan Periode</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="keterangan_periode" id="nama_periode1" placeholder="Silakan Ketikan Periode..." type="text" class="form-control" value="<?php echo $data['keterangan_periode']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Keterangan (PMA/PMDN)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">speaker_notes</i>
                                            </span>
                                            <div class="form-line">
                                                 <input name="keterangan" id="nama_keterangan1" placeholder="Silakan Ketikan Keterangan..." type="text" class="form-control" value="<?php echo $data['keterangan']; ?>">
                                            </div>
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

