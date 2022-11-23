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
          <div class="col-md-4"> <b>Nama Perusahaan</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">location_city</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari3" value="<?php echo $_GET['cari3']; ?>" >
              </div>
            </div>
          </div>
          <div class="col-md-2"> <b>Tahun</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
              <div class="form-line">
                <input type="text" class="form-control" name="cari2" value="<?php echo $_GET['cari2']; ?>" >
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
            <a href="" onclick="MM_openBrWindow('laporan/print_laporan_investasi_perusahaan.php?cari=<?php echo $_GET['cari']; ?>&amp;cari2=<?php echo $_GET['cari2']; ?>&amp;cari3=<?php echo $_GET['cari3']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
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
                                DATA INVESTASI PERUSAHAAN KABUPATEN SUKABUMI
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
                <th><span class="style10">Nama Perusahaan</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Sektor Usaha</span></th>
                <th><span class="style10">Bidang Usaha</span></th>
                <th><span class="style10">Jumlah Investasi (Rp)</span></th>
                <th><span class="style10">Tahun</span></th>
                <th><span class="style10">Jumlah Tenaga Kerja Dalam</span></th>
                <th><span class="style10">Jumlah Tenaga Kerja Luar</span></th>
              </tr>
          </thead>
          <tbody>
          <?php

                    $id = $_GET['cari'];
                    $idd = $_GET['cari2'];
                    $iddd = $_GET['cari3'];

                    $query  = "SELECT * FROM investasi_tahunan_perusahaan  WHERE nama_kecamatan LIKE'%".$id."%' AND tahun LIKE'%".$idd."%' AND nama_perusahaan LIKE'%".$iddd."%' ORDER BY tahun ASC ";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_investasi']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sektor_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data['bidang_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['jumlah_investasi'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></span></td>
                  
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