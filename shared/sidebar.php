  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" align="center" class="simple-text logo-normal">
          KABUPATEN SUKABUMI
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="?hal=<?php echo base64_encode('dashboard'); ?>">
              <i class="now-ui-icons business_bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="?hal=<?php echo base64_encode('peta_kecamatan'); ?>">
              <i class="now-ui-icons location_world"></i>
              <p>Peta Kecamatan</p>
            </a>
          </li>
          <li>
            <a href="?hal=<?php echo base64_encode('peta_industri'); ?>">
              <i class="now-ui-icons location_world"></i>
              <p>Peta Perusahaan</p>
            </a>
          </li>
          <!-- <li>
            <a href="?hal=<?php echo base64_encode('peta_kawasan'); ?>">
              <i class="now-ui-icons location_world"></i>
              <p>Peta Potensi Investasi</p>
            </a>
          </li> -->
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons files_single-copy-04"></i>
                    Potensi dan Peluang Investasi &nbsp;
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('peta_kawasan'); ?>"><strong><font color="695050">PETA POTENSI DAN PELUANG INVESTASI</font></strong></a>
                  <?php
                    $query  = "SELECT DISTINCT jenis_peluang FROM tbl_kawasan";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data3 = mysql_fetch_array($hasil)) {
                ?>
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('peta_jenis_peluang'); ?>&amp;jenis_peluang=<?php echo $data3['jenis_peluang']; ?>"><strong><font color="695050">PETA PELUANG DAN POTENSI <?php echo $data3['jenis_peluang']; ?></font></strong></a>
                  <?php
                    $no++;
                }
            ?>
                </div>
              </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons files_single-copy-04"></i>
                    Sektor Pertanian &nbsp;
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('peta_sektor_pertanian2'); ?>"><strong><font color="695050">PETA SEKTOR PERTANIAN 2</font></strong></a>
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('peta_sektor_pertanian'); ?>"><strong><font color="695050">PETA SEKTOR PERTANIAN</font></strong></a>
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('grafik_pertanian'); ?>"><strong><font color="695050">GRAFIK SEKTOR PERTANIAN</font></strong></a>
                  <?php
                    $query  = "SELECT DISTINCT peluang_investasi FROM tbl_peluang_investasi";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data3 = mysql_fetch_array($hasil)) {
                ?>
                  <a class="dropdown-item" href="?hal=<?php echo base64_encode('detail_komoditi'); ?>&amp;komoditi=<?php echo $data3['peluang_investasi']; ?>"><strong><font color="695050">KOMODITI <?php echo $data3['peluang_investasi']; ?></font></strong></a>
                  <?php
                    $no++;
                }
            ?>
                </div>
              </li>
          <!-- <li>
            <a href="?hal=<?php echo base64_encode('peta_sektor_pertanian'); ?>">
              <i class="now-ui-icons location_world"></i>
              <p>Peta Sektor Pertanian</p>
            </a>
          </li> -->
          <li class="active ">
            <a href="dpmptspadmin">
              <i class="now-ui-icons users_single-02"></i>
              <p><strong>Administrator</strong></p>
            </a>
          </li>

        </ul>
      </div>
    </div>
