
<div class="container-fluid">

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>INPUT DATA SEKTOR PERTANIAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('pertanian_input_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Nama Kecamatan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_balance</i>
                                            </span>
                                            <div class="form-line">
                                            <input name="nama_kecamatan" type="text" id="nama_kecamatan1" placeholder="Ketikan Nama Kecamatan..." class="form-control" value="" required>
                                            <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan1" required>
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
                                                <input name="bidang_usaha" id="detail_sektor1" placeholder="Ketikan Bidang Usaha..." type="text" required class="form-control" value="">
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
                                                <input name="peluang_investasi" type="text" required class="form-control" value="">
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
                                                <input name="tahun" type="number" class="form-control"  value="" required>
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
                                                <input name="peluang_pasar" id="nama_peluang1" placeholder="Silakan Ketikan Peluang..." type="text" required class="form-control" value="">
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
                                                <input name="kapasitas_produksi" type="number" class="form-control" value="" required>
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
                                                <input name="satuan_kapasitas" id="nama_satuan2" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="perkiraan_investasi" type="number" class="form-control" value="" required>
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
                                                <input name="hasil_per_hektar" type="number" class="form-control"  value="" required>
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
                                                <input name="satuan_hasil_perhektar" id="nama_satuan3" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="tambah_tanam" type="number" class="form-control" value="" required>
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
                                                <input name="satuan_tambah_tanam" id="nama_satuan4" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="sarana_prasarana" type="text"  class="form-control" value="" required>
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
                                                <input name="luas_lahan" type="text" required class="form-control" value="">
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
                                                <input name="satuan_luas" id="nama_satuan1" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="penanaman_normal" type="number" class="form-control"  value="" required>
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
                                                <input name="satuan_penanaman" id="nama_satuan5" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="puso" type="number" class="form-control" value="" required>
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
                                                <input name="satuan_puso" id="nama_satuan6" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="luas_panen_kotor" type="number" class="form-control"  value="" required>
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
                                                <input name="satuan_luas_panen_kotor" id="nama_satuan7" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="luas_panen_bersih" type="number" class="form-control" value="" required>
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
                                                <input name="satuan_luas_panen_bersih" id="nama_satuan8" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="sisa_akhir_tahun_lalu" type="number"  class="form-control" value="" required>
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
                                                <input name="satuan_sisa_akhir_tahun_lalu" id="nama_satuan9" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="sisa_akhir_tahun_ini" type="number"  class="form-control" value="" required>
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
                                                <input name="satuan_sisa_akhir_tahun_Ini" id="nama_satuan10" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="">
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
                                                <input name="tenaga_kerja_dalam" type="number" required class="form-control" value="">
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
                                                <input name="tenaga_kerja_luar" type="text" required class="form-control" value="">
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
                                                <input name="keterangan_periode" id="nama_periode1" placeholder="Silakan Ketikan Periode..." type="text" required class="form-control" value="">
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
                                                 <input name="keterangan" id="nama_keterangan1" placeholder="Silakan Ketikan Keterangan..." type="text" required class="form-control" value="">
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

