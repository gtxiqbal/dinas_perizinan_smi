<?php  
    include '../../config/config.php';
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15%" rowspan="5" align="center"><img src="../../assets/img/kab_1.jpg" width="84" height="94"></td>
        <td width="85%"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center"><strong>PEMERINTAH KABUPATEN SUKABUMI</strong><strong> </strong></p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td width="545" align="left" valign="top"><p align="center"><strong>DINAS    PENANAMAN MODAL DAN PERIZINAN TERPADU SATU PINTU </strong></p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center">JI. Raya Cibolang Km 7 Cisaat, Sukabumi    43152. Telp/Fax :    (0266) 237527 </p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="center">
          <tr>
            <td valign="top" align="left"><p align="center">e-mail : dpmptsp.kabsmi@gmail.com, dpmptsp@sukabumikab.go.id </p></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center">website  http://dpmptsp.sukabumikab.go.id</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="11" colspan="7" nowrap="nowrap"><hr color="#000000"/></td>
  </tr>
  <tr>
    <td align="center"><strong>DATA PERUSAHAAN KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
              <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
                <th>Nama Pemilik</th>
                <th>Alamat Pemilik</th>
                <th>Telp. Perusahaan</th>
                <th>Nama Kecamatan</th>
                <th>Sektor Usaha</th>
                <th>Luas Perusahaan</th>
                <!-- <th>Satuan Luas</th> -->
                <th>Tahun Berdiri</th>
                <th>Tanggal Berkas</th>
                <th>No. Izin</th>
                <th>Tanggal Register Izin</th><!-- 
                <th>Latitude</th>
                <th>Longitude</th> -->
              </tr>
          </thead>
          <tbody>
          <?php

          $id = $_GET['cari'];


                    $query  = "SELECT tbl_perusahaan.id_perusahaan,tbl_perusahaan.nama_perusahaan,tbl_perusahaan.alamat_perusahaan,tbl_perusahaan.nama_pemilik,tbl_perusahaan.alamat_pemilik,tbl_perusahaan.tlp_perusahaan,tbl_perusahaan.id_kecamatan,tbl_perusahaan.nama_kecamatan,tbl_perusahaan.sektor_usaha,tbl_perusahaan.luas_perusahaan,tbl_perusahaan.satuan_luas,tbl_perusahaan.tgl_berkas,tbl_perusahaan.no_izin,tbl_perusahaan.tgl_register_izin,tbl_perusahaan.tahun_berdiri,tbl_perusahaan.latitude,tbl_perusahaan.longitude FROM tbl_perusahaan WHERE nama_kecamatan LIKE'%".$id."%' order by tbl_perusahaan.nama_perusahaan ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['id_perusahaan']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nama_perusahaan']; ?></td>
                  <td><?php echo $data['alamat_perusahaan']; ?></td>
                  <td><?php echo $data['nama_pemilik']; ?></td>
                  <td><?php echo $data['alamat_pemilik']; ?></td>
                  <td><?php echo $data['tlp_perusahaan']; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td><?php echo $data['sektor_usaha']; ?></td>
                  <td align="right"><?php echo $data['luas_perusahaan']; ?> <?php echo $data['satuan_luas']; ?></td>
                  <!-- <td></td> -->
                  <td><?php echo $data['tahun_berdiri']; ?></td>
                  <td><?php echo $data['tgl_berkas']; ?></td>
                  <td><?php echo $data['no_izin']; ?></td>
                  <td><?php echo $data['tgl_register_izin']; ?></td><!-- 
                  <td><?php echo $data['latitude']; ?></td>
                  <td><?php echo $data['longitude']; ?></td> -->
              </tr>
              <?php
                    $no++;
                }
            ?>
          </tbody>
          <tfoot>
            </tfoot>
          </table></td>
  </tr>
</table>
<script>
window.print();
</script>