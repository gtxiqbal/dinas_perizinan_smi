<?php  
    include '../config/config.php';

    $id = $_GET['id_peluang'];



  $query = mysql_query("SELECT * FROM tbl_peluang_investasi WHERE id_peluang='".$id."'");
  $data = mysql_fetch_array($query);


?>



<div class="container-fluid">

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>EDIT DETAIL NILAI INVESTASI PERUSAHAAN</h2>
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
                    <form action="?hal=<?php echo base64_encode ('detail_investasi_perusahaan_update_proses'); ?>" method="POST"  id="form_validation" name="form_validation">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Nama Perusahaan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">location_city</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="hidden" name="id_kecamatan" value="<?php echo $data['id_kecamatan']; ?>">
                                            <input type="hidden" name="nama_kecamatan" value="<?php echo $data['nama_kecamatan']; ?>">
                                            <input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
                                            <input type="hidden" name="id_investasi" value="<?php echo $_GET['id_investasi']; ?>">
                                            <input type="hidden" name="sektor_usaha" value="<?php echo $_GET['sektor_usaha']; ?>">
                                            <input type="hidden" name="id_peluang" value="<?php echo $data['id_peluang']; ?>">
                                                <input name="nama_perusahaan" type="text" readonly="yess" class="form-control" value="<?php echo $data['nama_perusahaan']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Peluang Investasi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="peluang_investasi" type="text" required class="form-control" value="<?php echo $data['peluang_investasi']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Tahun</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tahun" type="number" readonly="yess" class="form-control" value="<?php echo $data['tahun']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Peluang Pasar</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">shopping_cart</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="peluang_pasar" id="nama_peluang1" placeholder="Silakan Ketikan Peluang..." type="text" required class="form-control" value="<?php echo $data['peluang_pasar']; ?>">
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
                                                <input name="kapasitas_produksi" type="number" class="form-control" value="<?php echo $data['kapasitas_produksi']; ?>" required>
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
                                                <input name="satuan_kapasitas" id="nama_satuan2" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="<?php echo $data['satuan_kapasitas']; ?>">
                                            </div>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-5">
                                        <b>Sarana Prasarana</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">library_books</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="sarana_prasarana" type="text"  class="form-control" value="<?php echo $data['sarana_prasarana']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Luas Lahan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">description</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="luas_lahan" type="text" required class="form-control" value="<?php echo $data['luas_lahan']; ?>">
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
                                                <input name="satuan_luas" id="nama_satuan1" placeholder="Silakan Ketikan Satuan..." type="text" required class="form-control" value="<?php echo $data['satuan_luas']; ?>">
                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                             <div class="row clearfix">
                                    <div class="col-md-6">
                                        <b>Perkiraan Investasi (Rp)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">chrome_reader_mode</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="perkiraan_investasi" type="number" class="form-control" value="<?php echo $data['perkiraan_investasi']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Keterangan</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">speaker_notes</i>
                                            </span>
                                            <div class="form-line">
                                                 <input name="keterangan" id="nama_keterangan1" placeholder="Silakan Ketikan Keterangan..." type="text" required class="form-control" value="<?php echo $data['keterangan']; ?>">
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

<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA DETAIL NILAI INVESTASI PERUSAHAAN <?php echo $data['nama_perusahaan']; ?> KABUPATEN SUKABUMI</h2>
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
                <th>No</th>                
                <th>Edit</th>
                <th>Hapus</th>
                <th>Nama Perusahaan</th>
                <th>Nama Kecamatan</th>
                <th>Peluang Investasi</th>
                <th>Peluang Pasar</th>
                <th>Kapasitas Produksi</th>
                <th>Luas Lahan</th>
                <th>Sarana Prasarana</th>
                <th>Perkiraan Investasi (Rp)</th>
                <th>Tahun</th>
                <th>Keterangan</th>
              </tr>
          </thead>
          <tbody>
          <?php

                    $id = $_GET['id_investasi'];

                    $query  = "SELECT * FROM tbl_peluang_investasi  WHERE id_investasi='".$id."' ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_peluang']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('detail_investasi_perusahaan_update'); ?>&amp;id_perusahaan=<?php echo $data['id_perusahaan']; ?>&amp;id_investasi=<?php echo $data['id_investasi']; ?>&amp;id_peluang=<?php echo $data['id_peluang']; ?>&amp;sektor_usaha=<?php echo $_GET['sektor_usaha']; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a></td>
                  <td><a href="home.php?hal=<?php echo base64_encode ('detail_investasi_perusahaan_hapus'); ?>&amp;id_perusahaan=<?php echo $data['id_perusahaan']; ?>&amp;id_investasi=<?php echo $data['id_investasi']; ?>&amp;id_peluang=<?php echo $idddddd; ?>&amp;sektor_usaha=<?php echo $_GET['sektor_usaha']; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a></td>
                  <td><?php echo $data['nama_perusahaan']; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td><?php echo $data['peluang_investasi']; ?></td>
                  <td><?php echo $data['peluang_pasar']; ?></td>
                  <td><?php echo $data['kapasitas_produksi']; ?> <?php echo $data['satuan_kapasitas']; ?></td>
                  <td><?php echo $data['luas_lahan']; ?> <?php echo $data['satuan_luas']; ?></td>
                  <td><?php echo $data['sarana_prasarana']; ?></td>
                  <td><?php echo $data['perkiraan_investasi']; ?></td>
                  <td><?php echo $data['tahun']; ?></td>
                  <td><?php echo $data['keterangan']; ?></td>
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