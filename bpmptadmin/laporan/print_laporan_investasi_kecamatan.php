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
    <td align="center"><strong>DATA INVESTASI KECAMATAN KABUPATEN SUKABUMI</strong></td>
  </tr>
  <tr>
    <td>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
                      <th><strong>No</strong></th>
                      <th><strong>Nama Kecamatan</strong></th>
                      <th><strong>Tahun</strong></th>
                      <th><strong>Jumlah Penduduk</strong></th>
                      <th><strong>Nilai Investasi (Rp)</strong></th>
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
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['kecamatan']; ?></td>
                        <td><?php echo $data['thn']; ?></td>
                        <td align="right"><?php echo $data['penduduk']; ?></td>
                        <td align="right"><?php echo $data['investasi']; ?></td>
                      </tr>
                    <?php
                    $no++;
                }
            ?>  
                    </tbody>
          </table></td>
  </tr>
</table>
<script>
window.print();
</script>