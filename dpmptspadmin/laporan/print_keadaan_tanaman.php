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
    <td align="center"><strong>DATA KEADAAN TANAMAN<?php if ($_GET['cari3'] <> '') { // Show if recordset empty ?> <?php echo $_GET['cari3']; ?><?php } // Show if recordset empty ?> <?php if ($_GET['cari2'] <> '') { // Show if recordset empty ?>JENIS TANAMAN <?php echo $_GET['cari2']; ?><?php } // Show if recordset empty ?> TAHUN <?php echo $_GET['cari4']; ?> KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
      <thead>
              <tr>
                <th>No</th>
                <th>Tanaman</th>
                <th>Kecamatan</th>
                <th>Luas Tanaman Akhir Desember Tahun Lalu </th>
                <th>Penanaman (Normal)</th>
                <th>Puso/Tidak Berhasil</th>
                <th>Luas Panen Kotor</th>
                <th>Luas Panen Bersih</th>
                <th>Hasil Per Hektar</th>
                <th>Produksi</th>
                <th>Sisa Tanaman Akhir Desember Tahun Ini</th>
                <th>Keterangan</th>
                <th>Periode</th>
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
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['peluang_investasi']; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td align="right"><?php echo number_format($data['sisa_akhir_tahun_lalu'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_lalu']; ?></td>
                  <td align="right"><?php echo number_format($data['penanaman_normal'] ,0,",","."); ?> <?php echo $data['satuan_penanaman']; ?></td>
                  <td align="right"><?php echo number_format($data['puso'] ,0,",","."); ?> <?php echo $data['satuan_puso']; ?></td>
                  <td align="right"><?php echo number_format($data['luas_panen_kotor'] ,0,",","."); ?> <?php echo $data['satuan_luas_panen_kotor']; ?></td>
                  <td align="right"><?php echo number_format($data['luas_panen_bersih'] ,0,",","."); ?> <?php echo $data['satuan_panen_bersih']; ?></td>
                  <td align="right"><?php echo number_format($data['hasil_per_hektar'] ,0,",","."); ?> <?php echo $data['satuan_hasil_per_hektar']; ?></td>
                  <td align="right"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?> <?php echo $data['satuan_kapasitas']; ?></td>
                  <td align="right"><?php echo number_format($data['sisa_akhir_tahun_ini'] ,0,",","."); ?> <?php echo $data['satuan_sisa_akhir_tahun_ini']; ?></td>
                  <td><?php echo $data['keterangan']; ?></td>
                  <td><?php echo $data['keterangan_periode']; ?></td>
              </tr>
<?php
                    $no++;
                }
            ?>
          </tbody>
          <tfoot>
            </tfoot></td>
  </tr>
</table>
<script>
window.print();
</script>