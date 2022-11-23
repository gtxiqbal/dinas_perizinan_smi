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
          
          <div class="col-md-1"> <b>&nbsp;</b> <br/>
            
            <button class="btn bg-pink waves-effect" type="submit"> <i class="material-icons">search</i></button>
          </div>
        </form>
        <div class="col-md-1">
            <b>&nbsp;</b><br/>
            <button type="button" class="btn bg-cyan waves-effect">
            <a href="" onclick="MM_openBrWindow('laporan/print_laporan_data_perusahaan.php?cari=<?php echo $_GET['cari']; ?>','','scrollbars=yes')"><i class="material-icons">print</i></a>
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
                                DATA PERUSAHAAN KABUPATEN SUKABUMI
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
                <th><span class="style10">Alamat Perusahaan</span></th>
                <th><span class="style10">Nama Pemilik</span></th>
                <th><span class="style10">Alamat Pemilik</span></th>
                <th><span class="style10">Telp. Perusahaan</span></th>
                <th><span class="style10">Nama Kecamatan</span></th>
                <th><span class="style10">Sektor Usaha</span></th>
                <th><span class="style10">Luas Perusahaan</span></th>
                <th><span class="style10">Tahun Berdiri</span></th>
                <th><span class="style10">Tanggal Berkas</span></th>
                <th><span class="style10">No. Izin</span></th>
                <th><span class="style10">Tanggal Register Izin</span></th>
              </tr>
          </thead>
          <tbody>
          <?php

          $id = $_GET['cari'];

                    $query  = "SELECT * FROM tbl_perusahaan WHERE nama_kecamatan LIKE'%".$id."%'";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {
                ?>

              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['alamat_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_pemilik']; ?></span></td>
                  <td><span class="style9"><?php echo $data['alamat_pemilik']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tlp_perusahaan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['nama_kecamatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sektor_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data['luas_perusahaan']; ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun_berdiri']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tgl_berkas']; ?></span></td>
                  <td><span class="style9"><?php echo $data['no_izin']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tgl_register_izin']; ?></span></td>
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