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
          <div class="col-md-3"> <b>Jenis Lahan</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">description</i> </span>
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
            <a href="" onclick="MM_openBrWindow('laporan/print_penggunaan_lahan.php?cari=<?php echo $_GET['cari']; ?>&amp;cari2=<?php echo $_GET['cari2']; ?>&amp;cari3=<?php echo $_GET['cari3']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
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
                                DATA PENGGUNAAN LAHAN <?php if ($_GET['cari2'] <> '') { // Show if recordset empty ?>TANAMAN <?php echo $_GET['cari2']; ?><?php } // Show if recordset empty ?> SEKTOR PERTANIAN TAHUN <?php echo $_GET['cari3']; ?> KABUPATEN SUKABUMI
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
                <th><span class="style9">No</span></th>
                <th><span class="style9">Kecamatan</span></th>
                <th><span class="style9">Nama Lahan</span></th>
                <th><span class="style9">Tahun</span></th>
                <th><span class="style9">Ditanami Padi Satu Kali</span></th>
                <th><span class="style9">Ditanami Padi Dua Kali</span></th>
                <th><span class="style9">Ditanami Padi ≥ Tiga kali</span></th>
                <th><span class="style9">Ditanami Tanaman Lainnya</span></th>
                <th><span class="style9">Tidak Ditanami Apapun</span></th>
              </tr>
          </thead>
          <tbody>
            <?php

                    $id = $_GET['cari'];
                    $idd = $_GET['cari2'];
                    $iddd = $_GET['cari3'];

                    $query  = "SELECT * FROM tbl_penggunaan_lahan  WHERE nama_kecamatan LIKE'%".$id."%' AND jenis_lahan LIKE'%".$idd."%' AND tahun LIKE'%".$iddd."%' ORDER BY nama_kecamatan ASC ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_lahan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  <td><span class="style9"><?php echo $data['ditanami_padi_satu']; ?></span></td>
                  <td><span class="style9"><?php echo $data['ditanami_padi_dua']; ?></span></td>
                  <td><span class="style9"><?php echo $data['ditanami_padi_lebih_tiga']; ?></span></td>
                  <td><span class="style9"><?php echo $data['ditanami_tanaman_lain']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tidak_ditanami_apapun']; ?></span></td>
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