<?php  
    include '../../config/config.php';
?>



<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<div class="container-fluid">
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <form name="cari" method="GET">
          <div class="demo-masked-input">
          <div class="row clearfix">
          <div class="col-md-3"> <b>Nama Kecamatan</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">account_balance</i> </span>
              <div class="form-line">
              <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                <input type="text" class="form-control" name="cari" value="<?php echo $_GET['cari']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-3"> <b>Jenis Tanaman</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">spa</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari2" value="<?php echo $_GET['cari2']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-3"> <b>Nama Tanaman</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">spa</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari3" value="<?php echo $_GET['cari3']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-2"> <b>Tahun</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari4" value="<?php echo $_GET['cari4']; ?>" >
              </div>
            </div>
          </div>
          
          <div class="col-md-1"> <b>&nbsp;</b> <br/>
            
            <button class="btn bg-pink waves-effect" type="submit"> <i class="material-icons">search</i></button>
          </div>
        </form>
        <div class="col-md-1">
            <b>&nbsp;</b><br/>
            <button type="button" class="btn bg-cyan waves-effect">
            <a href="" onclick="MM_openBrWindow('laporan/print_keadaan_tanaman.php?cari=<?php echo $_GET['cari']; ?>&amp;cari2=<?php echo $_GET['cari2']; ?>&amp;cari3=<?php echo $_GET['cari3']; ?>&amp;cari4=<?php echo $_GET['cari4']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
            </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KEADAAN TANAMAN<?php if ($_GET['cari3'] <> '') { // Show if recordset empty ?> <?php echo $_GET['cari3']; ?><?php } // Show if recordset empty ?> <?php if ($_GET['cari2'] <> '') { // Show if recordset empty ?>JENIS TANAMAN <?php echo $_GET['cari2']; ?><?php } // Show if recordset empty ?> TAHUN <?php echo $_GET['cari4']; ?> KABUPATEN SUKABUMI
                                </h2>
                                <br/>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                     
                                    <!-- <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          <div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
              <tr>
                <th><span class="style10">No</span></th>
                <th><span class="style10">Tanaman</span></th>
                <th><span class="style10">Kecamatan</span></th>
                <th><span class="style10">Luas Tanaman Akhir Desember Tahun Lalu</span></th>
                <th><span class="style10">Penanaman (Normal)</span></th>
                <th><span class="style10">Puso/Tidak Berhasil</span></th>
                <th><span class="style10">Luas Panen Kotor</span></th>
                <th><span class="style10">Luas Panen Bersih</span></th>
                <th><span class="style10">Hasil Per Hektar</span></th>
                <th><span class="style10">Produksi</span></th>
                <th><span class="style10">Sisa Tanaman Akhir Desember Tahun Ini</span></th>
                <th><span class="style10">Keterangan</span></th>
                <th><span class="style10">Periode</span></th>
              </tr>
          </thead>
          <tbody>
            <?php

                    $id = $_GET['cari'];
                    $idd = $_GET['cari2'];
                    $iddd = $_GET['cari3'];
                    $idddd = $_GET['cari4'];

                    $query  = "SELECT * FROM tbl_peluang_investasi  WHERE nama_kecamatan LIKE'%".$id."%' AND bidang_usaha LIKE'%".$idd."%' AND peluang_investasi LIKE'%".$iddd."%' AND tahun LIKE'%".$idddd."%' ORDER BY nama_kecamatan ASC ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['sisa_akhir_tahun_lalu'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_lalu']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['penanaman_normal'] ,0,",","."); ?> <?php echo $data['satuan_penanaman']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['puso'] ,0,",","."); ?> <?php echo $data['satuan_puso']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_panen_kotor'] ,0,",","."); ?> <?php echo $data['satuan_luas_panen_kotor']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_panen_bersih'] ,0,",","."); ?> <?php echo $data['satuan_panen_bersih']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['hasil_per_hektar'] ,0,",","."); ?> <?php echo $data['satuan_hasil_per_hektar']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?> <?php echo $data['satuan_kapasitas']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['sisa_akhir_tahun_ini'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_ini']; ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan_periode']; ?></span></td>
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