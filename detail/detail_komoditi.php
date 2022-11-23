<?php  
    include 'config/config.php';
    $id = $_GET['komoditi'];
    $idd = $_GET['tahun'];
?>

<div class="row">
<div class="col-md-12">
<div class="card ">
              <div class="card-header ">
              </div>
            <div class="card-body ">
              <form name="cari" method="GET">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      <input name="hal" type="hidden" id="hal" value="<? echo $_GET['hal']; ?>" />
                        <input type="text" name="tahun" class="form-control" value="<?php echo $_GET['tahun']; ?>" placeholder="Silakan Ketikan Tahun Komoditi Disini...!">
                      </div>
                    </div>
                    <div class="col-md-1 px-1">
                      <div class="form-group">
                      
                      
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                      </div>
                    </div>
                    </div>
              </form>

            </div>
          </div>
          </div>
          </div>





<div class="row">

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Peluang Investasi Sektor Pertanian Komoditi <?php echo $_GET['komoditi']; ?></h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table" class="table">
                   <thead class=" text-info">
              <tr>
                <th class="text-center"><strong>No</strong></th>
                <th class="text-center"><strong>Peluang Investasi</strong></th>
                <th class="text-center"><strong>Peluang Pasar</strong></th>
                <th class="text-center"><strong>Kapasitas Produksi</strong></th>
                <th class="text-center"><strong>Luas Lahan</strong></th>
                <th class="text-center"><strong>Sarana Prasarana</strong></th>
                <th class="text-center"><strong>Kebutuhan Tenaga Kerja Dalam</strong></th>
                <th class="text-center"><strong>Kebutuhan Tenaga Kerja Luar</strong></th>
                <th class="text-center"><strong>Perkiraan Investasi (Rp)</strong></th>
                <th class="text-center"><strong>PMDN/PMA</strong></th>
                <th class="text-center"><strong>Tahun</strong></th>
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_peluang_investasi WHERE peluang_investasi='".$id."' AND tahun LIKE'%".$idd."%' order by tahun ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data['peluang_pasar']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data['kapasitas_produksi'] ,0,",","."); ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data['luas_lahan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?></span></td>
                  <td><span class="style9"><?php echo $data['sarana_prasarana']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data['tenaga_kerja_dalam'] ,0,",","."); ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data['tenaga_kerja_luar'] ,0,",","."); ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data['perkiraan_investasi'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['tahun']; ?></span></td>
                  
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
          
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Keadaan Tanaman <?php echo $_GET['komoditi']; ?></h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table2" class="table">
                   <thead class=" text-info">
              <tr>
                <th class="text-center"><strong>No</strong></th>
                <th class="text-center"><strong>Peluang Investasi</strong></th>                
                <th class="text-center"><strong>Tahun</strong></th>
                <th class="text-center"><strong>Luas Tanaman Akhir Desember Tahun Lalu</strong></th>
                <th class="text-center"><strong>Penanaman (Normal)</strong></th>
                <th class="text-center"><strong>Puso/Tidak Berhasil</strong></th>
                <th class="text-center"><strong>Luas Panen Kotor</strong></th>
                <th class="text-center"><strong>Luas Panen Bersih</strong></th>
                <th class="text-center"><strong>Hasil Per Hektar</strong></th>
                <th class="text-center"><strong>Produksi</strong></th>
                <th class="text-center"><strong>Sisa Tanaman Akhir Desember Tahun Ini</strong></th>
                <th class="text-center"><strong>Keterangan</strong></th>
                <th class="text-center"><strong>Periode</strong></th>
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_peluang_investasi WHERE peluang_investasi='".$id."' AND tahun LIKE'%".$idd."%' order by tahun ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data3 = mysql_fetch_array($hasil)) {
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data3['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['tahun']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['sisa_akhir_tahun_lalu'] ,0,",","."); ?> <?php echo $data3['satuan_sisa_akhir_tahun_lalu']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['penanaman_normal'] ,0,",","."); ?> <?php echo $data3['satuan_penanaman']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['puso'] ,0,",","."); ?> <?php echo $data3['satuan_puso']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['luas_panen_kotor'] ,0,",","."); ?> <?php echo $data3['satuan_luas_panen_kotor']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['luas_panen_bersih'] ,0,",","."); ?> <?php echo $data3['satuan_panen_bersih']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['hasil_per_hektar'] ,0,",","."); ?> <?php echo $data3['satuan_hasil_per_hektar']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['kapasitas_produksi'] ,0,",","."); ?> <?php echo $data3['satuan_kapasitas']; ?></span></td>
                  
                  <td class="text-right"><span class="style9"><?php echo number_format($data3['sisa_akhir_tahun_ini'] ,0,",","."); ?> <?php echo $data3['satuan_sisa_akhir_tahun_ini']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['keterangan_periode']; ?></span></td>
                  
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



         <!--  <div class="row">


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Keadaan Tanaman <?php echo $_GET['komoditi']; ?></h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table border="1" class="table">
                   <thead class=" text-info">
              <tr>
                <th class="text-center"><strong>No</strong></th>
                <th class="text-center"><strong>Peluang Investasi</strong></th>                
                <th class="text-center"><strong>Tahun</strong></th>
                <th class="text-center"><strong>Luas Tanaman Akhir Desember Tahun Lalu</strong></th>
                <th class="text-center"><strong>Penanaman (Normal)</strong></th>
                <th class="text-center"><strong>Puso/Tidak Berhasil</strong></th>
                <th class="text-center"><strong>Luas Panen Kotor</strong></th>
                <th class="text-center"><strong>Luas Panen Bersih</strong></th>
                <th class="text-center"><strong>Hasil Per Hektar</strong></th>
                <th class="text-center"><strong>Produksi</strong></th>
                <th class="text-center"><strong>Sisa Tanaman Akhir Desember Tahun Ini</strong></th>
                <th class="text-center"><strong>Keterangan</strong></th>
                <th class="text-center"><strong>Periode</strong></th>
              </tr>
          </thead>
          <tbody>
          <?php
                    $query  = "SELECT * FROM tbl_peluang_investasi WHERE peluang_investasi='".$id."' AND tahun='".$idd."' order by tahun ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data3 = mysql_fetch_array($hasil)) {
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data3['peluang_investasi']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['tahun']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['sisa_akhir_tahun_lalu']; ?> <?php echo $data3['satuan_sisa_akhir_tahun_lalu']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['penanaman_normal']; ?> <?php echo $data3['satuan_penanaman']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['puso']; ?> <?php echo $data3['satuan_puso']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['luas_panen_kotor']; ?> <?php echo $data3['satuan_luas_panen_kotor']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['luas_panen_bersih']; ?> <?php echo $data3['satuan_panen_bersih']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['hasil_per_hektar']; ?> <?php echo $data3['satuan_hasil_per_hektar']; ?></span></td>
                  <td class="text-right"><span class="style9"><?php echo $data3['kapasitas_produksi']; ?> <?php echo $data3['satuan_kapasitas']; ?></span></td>
                  
                  <td class="text-right"><span class="style9"><?php echo $data3['sisa_akhir_tahun_ini']; ?> <?php echo $data3['satuan_sisa_akhir_tahun_ini']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data3['keterangan_periode']; ?></span></td>
                  
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









          
          </div> -->