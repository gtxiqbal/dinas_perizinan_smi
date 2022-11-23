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
          <div class="col-md-8"> <b>Nama Kecamatan</b>
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">account_balance</i> </span>
              <div class="form-line">
              <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                <input type="text" class="form-control" name="cari" value="<?php echo $_GET['cari']; ?>" >
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
            <a href="" onclick="MM_openBrWindow('laporan/print_laporan_investasi_kecamatan.php?cari=<?php echo $_GET['cari']; ?>&amp;cari2=<?php echo $_GET['cari2']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
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
                                DATA INVESTASI KECAMATAN KABUPATEN SUKABUMI
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
                      <th><span class="style10"><strong>No</strong></span></th>
                      <th><span class="style10"><strong>Nama Kecamatan</strong></span></th>
                      <th><span class="style10"><strong>Tahun</strong></span></th>
                      <th><span class="style10"><strong>Jumlah Penduduk</strong></span></th>
                      <th><span class="style10"><strong>Nilai Investasi (Rp)</strong></span></th>
                    </thead>
                    <tbody>
                    <?php
                    $idd = $_GET['cari'];
                    $id = $_GET['cari2'];

                    $query  = "SELECT detail_kecamatan.nama_kecamatan as kecamatan, detail_kecamatan.jumlah_penduduk as penduduk ,investasi_tahunan_perusahaan.tahun as thn, SUM(investasi_tahunan_perusahaan.jumlah_investasi) as investasi FROM detail_kecamatan,investasi_tahunan_perusahaan WHERE detail_kecamatan.id_kecamatan=investasi_tahunan_perusahaan.id_kecamatan AND detail_kecamatan.tahun=investasi_tahunan_perusahaan.tahun AND detail_kecamatan.nama_kecamatan LIKE'%".$idd."%' AND investasi_tahunan_perusahaan.tahun LIKE'%".$id."%' GROUP BY investasi_tahunan_perusahaan.tahun ORDER BY investasi_tahunan_perusahaan.tahun ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no; ?></span></td>
                        <td><span class="style9"><?php echo $data['kecamatan']; ?></span></td>
                        <td><span class="style9"><?php echo $data['thn']; ?></span></td>
                        <td><span class="style9"><?php echo number_format($data['penduduk'] ,0,",","."); ?></span></td>
                        <td class="text-right"><span class="style9"><?php echo number_format($data['investasi'] ,0,",","."); ?></span></td>
                      </tr>
                    <?php
                    $no++;
                }
            ?>  
                    </tbody>
          </table>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
</div>