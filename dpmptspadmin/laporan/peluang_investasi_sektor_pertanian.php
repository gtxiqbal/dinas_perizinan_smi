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
          <div class="col-md-4"> <b>Nama Kecamatan</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">account_balance</i> </span>
              <div class="form-line">
              <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                <input type="text" class="form-control" name="cari" value="<?php echo $_GET['cari']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-4"> <b>Peluang Investasi</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">chrome_reader_mode</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari2" value="<?php echo $_GET['cari2']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-2"> <b>Tahun</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari3" value="<?php echo $_GET['cari3']; ?>" >
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
            <a href="" onclick="MM_openBrWindow('laporan/print_peluang_investasi_sektor_pertanian.php?cari=<?php echo $_GET['cari']; ?>&amp;cari2=<?php echo $_GET['cari2']; ?>&amp;cari3=<?php echo $_GET['cari3']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
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
                                DATA PELUANG INVESTASI SEKTOR PERTANIAN KABUPATEN SUKABUMI
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
                <th><span class="style10">Peluang Investasi</span></th>
                <th><span class="style10">Sebaran Lokasi</span></th>
                <th><span class="style10">Peluang Pasar</span></th>
                <th><span class="style10">Kapasitas Produksi</span></th>
                <th><span class="style10">Luas Lahan</span></th>
                <th><span class="style10">Sarana Prasarana</span></th>
                <th><span class="style10">Kebutuhan Tenaga Kerja Dalam</span></th>
                <th><span class="style10">Kebutuhan Tenaga Kerja Luar</span></th>
                <th><span class="style10">Perkiraan Investasi (Rp)</span></th>
                <th><span class="style10">PMDN/PMA</span></th>
                <th><span class="style10">Tahun</span></th>
              </tr>
          </thead>
          <tbody>
            <?php

                    $id = $_GET['cari'];
                    $idd = $_GET['cari2'];
                    $iddd = $_GET['cari3'];

                    $query  = "SELECT * FROM tbl_peluang_investasi  WHERE nama_kecamatan LIKE'%".$id."%' AND peluang_investasi LIKE'%".$idd."%' AND tahun LIKE'%".$iddd."%' ORDER BY peluang_investasi ASC ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_pasar']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['luas_lahan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sarana_prasarana']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['perkiraan_investasi'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  
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