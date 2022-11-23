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
    <td align="center"><strong>DATA INVESTASI PERUSAHAAN KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
              <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Nama Kecamatan</th>
                <th>Sektor Usaha</th>
                <th>Bidang Usaha</th>
                <th>Jumlah Investasi (Rp)</th>
                <th>Tahun</th>
                <th>Jumlah Tenaga Kerja Dalam</th>
                <th>Jumlah Tenaga Kerja Luar</th>
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
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nama_perusahaan']; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td><?php echo $data['sektor_usaha']; ?></td>
                  <td><?php echo $data['bidang_usaha']; ?></td>
                  <td align="right"><?php echo number_format($data['jumlah_investasi'] ,0,",","."); ?></td>
                  <td><?php echo $data['tahun']; ?></td>
                  <td align="right"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></td>
                  <td align="right"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></td>
                  
              </tr>
              <?php
                    $no++;
                }
            ?>
          </tbody>
          <tfoot>
            </tfoot>
</table>
<script>
window.print();
</script>