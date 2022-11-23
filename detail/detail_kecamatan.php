<?php  
    include 'config/config.php';
    $id = $_GET['id_kecamatan'];



  $query = mysql_query("SELECT * FROM tbl_kecamatan WHERE id_kecamatan='".$id."' ");
  $data = mysql_fetch_array($query);


?>


<div class="row">

<div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="assets/img/kab_100s.png" alt="...">
                    <h5 class="title"><?php echo $data['nama_kecamatan']; ?></h5>
                  </a>
                  <p class="description">
                    <?php echo number_format($data['luas_kecamatan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?>
                  </p>
                </div>
                <p class="description text-center">
                  <br> Jumlah Desa <?php echo $data['jumlah_desa']; ?>
                  <br> Jumlah Desa <?php echo $data['jumlah_kelurahan']; ?>
                </p>
              </div>
              <hr>
              <!-- <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div> -->
            </div>
          </div>



          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Detail Kecamatan</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table" class="table">
                    <thead class=" text-info">
                      <th class="text-center"><strong>No</strong></th>
                      <th class="text-center"><strong>Tahun</strong></th>
                      <th class="text-center"><strong>Jumlah Penduduk</strong></th>
                      <th class="text-center"><strong>Nilai Investasi (Rp)</strong></th>
                    </thead>
                    <tbody>
                    <?php
                    $idd = $_GET['id_kecamatan'];

                    $query  = "SELECT detail_kecamatan.jumlah_penduduk as penduduk ,investasi_tahunan_perusahaan.tahun as thn, SUM(investasi_tahunan_perusahaan.jumlah_investasi) as investasi FROM detail_kecamatan,investasi_tahunan_perusahaan WHERE detail_kecamatan.id_kecamatan=investasi_tahunan_perusahaan.id_kecamatan AND detail_kecamatan.tahun=investasi_tahunan_perusahaan.tahun AND investasi_tahunan_perusahaan.id_kecamatan='".$idd."' GROUP BY investasi_tahunan_perusahaan.tahun ORDER BY investasi_tahunan_perusahaan.tahun ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    ?>
                      <tr>
                        <td><span class="style9"><?php echo $no; ?></span></td>
                        <td><span class="style9"><?php echo $data['thn']; ?></span></td>
                        <td class="text-right"><span class="style9"><?php echo number_format($data['penduduk'] ,0,",","."); ?></span></td>
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