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
    <td align="center"><strong>PROIRITAS IDENTIFIKASI PELUANG INVESTASI SEKTOR PERTANIAN KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
      <thead>
              <tr>
                <th>No</th>
                <th>Peluang Investasi</th>
                <th>Sebaran Lokasi</th>
                <th>Peluang Pasar</th>
                <th>Kapasitas Produksi</th>
                <th>Luas Lahan</th>
                <th>Sarana Prasarana</th>
                <th>Kebutuhan Tenaga Kerja Dalam</th>
                <th>Kebutuhan Tenaga Kerja Luar</th>
                <th>Perkiraan Investasi (Rp)</th>
                <th>PMDN/PMA</th>
                <th>Tahun</th>
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
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['peluang_investasi']; ?></td>
                  <td><?php echo $data['nama_kecamatan']; ?></td>
                  <td><?php echo $data['peluang_pasar']; ?></td>
                  <td align="right"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?></td>
                  <td align="right"><?php echo number_format($data['luas_lahan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?></td>
                  <td><?php echo $data['sarana_prasarana']; ?></td>
                  <td align="right"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></td>
                  <td align="right"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></td>
                  <td align="right"><?php echo number_format($data['perkiraan_investasi'] ,0,",","."); ?></td>
                  <td><?php echo $data['keterangan']; ?></td>
                  <td><?php echo $data['tahun']; ?></td>
                  
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