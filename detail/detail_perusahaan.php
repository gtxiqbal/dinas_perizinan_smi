<?php  
    include 'config/config.php';
    $id = $_GET['id_perusahaan'];



  $query = mysql_query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan='".$id."' ");
  $data = mysql_fetch_array($query);

  $cari = mysql_query("SELECT * FROM galeri WHERE galeri_status='".$id."' ");
  $datagambar = mysql_fetch_array($cari);


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
                    <img class="avatar border-gray" src="bpmptadmin/<?php echo $datagambar['galeri_image']; ?>" alt="...">
                    <h5 class="title"><?php echo $data['nama_perusahaan']; ?></h5>
                  </a>
                  <p class="description">
                    <?php echo number_format($data['luas_perusahaan'] ,0,",","."); ?> <?php echo $data['satuan_luas']; ?>
                  </p>
                  <p class="description">
                    <?php echo $data['alamat_perusahaan']; ?>
                  </p>
                </div>
                <p class="description text-center">
                  <br> Lokasi Perusahaan Kecamatan <?php echo $data['nama_kecamatan']; ?>
                  <br> Sektor Usaha <?php echo $data['sektor_usaha']; ?>
                  <br> Tahun Berdiri <?php echo $data['tahun_berdiri']; ?>
                  <br> Telp. Perusahaan <?php echo $data['tlp_perusahaan']; ?>
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
                <h5 class="title">Detail Perusahaan</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="fresh-table" class="table">
                    <thead class=" text-info">
              <tr>
                <th class="text-center"><strong>No</strong></th>
                <th class="text-center"><strong>Sektor Usaha</strong></th>
                <th class="text-center"><strong>Bidang Usaha</strong></th>
                <th class="text-center"><strong>Jumlah Investasi (Rp)</strong></th>
                <th class="text-center"><strong>Tahun</strong></th>
                <th class="text-center"><strong>Jumlah Tenaga Kerja Dalam</strong></th>
                <th class="text-center"><strong>Jumlah Tenaga Kerja Luar</strong></th>
              </tr>
          </thead>
          <tbody>
          <?php

                     $idd = $_GET['id_perusahaan'];

                    $query  = "SELECT * FROM investasi_tahunan_perusahaan WHERE id_perusahaan='".$idd."' ORDER BY tahun ASC";  
                    $data  = mysql_query($query);

                    $no = 1;
                        while ($data2 = mysql_fetch_array($data)) {
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?></span></td>
                  <td><span class="style9"><?php echo $data2['sektor_usaha']; ?></span></td>
                  <td><span class="style9"><?php echo $data2['bidang_usaha']; ?></span></td>
                  <td align="right"><span class="style9"><?php echo number_format($data2['jumlah_investasi'] ,0,",","."); ?></span></td>
                  <td><span class="style9"><?php echo $data2['tahun']; ?></span></td>
                  <td align="right"><span class="style9"><?php echo number_format($data2['tenaga_kerja_dalam'] ,0,",","."); ?></span></td>
                  <td align="right"><span class="style9"><?php echo number_format($data2['tenaga_kerja_luar'] ,0,",","."); ?></span></td>
                  
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