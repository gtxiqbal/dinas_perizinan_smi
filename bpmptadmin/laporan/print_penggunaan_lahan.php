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
    <td align="center"><strong>DATA PENGGUNAAN LAHAN <?php if ($_GET['cari2'] <> '') { // Show if recordset empty ?>TANAMAN <?php echo $_GET['cari2']; ?><?php } // Show if recordset empty ?> SEKTOR PERTANIAN TAHUN <?php echo $_GET['cari3']; ?> KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
      <thead>
              <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Nama Lahan </th>
                <th>Tahun</th>
                <th>Ditanami Padi Satu Kali</th>
                <th>Ditanami Padi Dua Kali</th>
                <th>Ditanami Padi >= Tiga kali</th>
                <th>Ditanami Tanaman Lainnya</th>
                <th>Tidak Ditanami Apapun</th>
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
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td><?php echo $data['nama_lahan']; ?></td>
                  <td><?php echo $data['tahun']; ?></td>
                  <td align="right"><?php echo $data['ditanami_padi_satu']; ?></td>
                  <td align="right"><?php echo $data['ditanami_padi_dua']; ?></td>
                  <td align="right"><?php echo $data['ditanami_padi_lebih_tiga']; ?></td>
                  <td align="right"><?php echo $data['ditanami_tanaman_lain']; ?></td>
                  <td align="right"><?php echo $data['tidak_ditanami_apapun']; ?></td>
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