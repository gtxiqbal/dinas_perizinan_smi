            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="?hal=<?php echo base64_encode('home'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_balance</i>
                            <span>Data Kecamatan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?hal=<?php echo base64_encode('kecamatan_input'); ?>">Input</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('kecamatan_view'); ?>">View</a>
                            </li>
                        </ul>
                    </li>
                    <?php } // Show if recordset not empty ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">location_city</i>
                            <span>Data Perusahaan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?hal=<?php echo base64_encode('perusahaan_input'); ?>">Input</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('perusahaan_view'); ?>">View</a>
                            </li>
                        </ul>
                    </li>
                    <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections</i>
                            <span>Data Kawasan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?hal=<?php echo base64_encode('kawasan_input'); ?>">Input</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('kawasan_view'); ?>">View</a>
                            </li>
                        </ul>
                    </li>
                    <?php } // Show if recordset not empty ?>
                    <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">spa</i>
                            <span>Data Sektor Pertanian</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?hal=<?php echo base64_encode('pertanian_input'); ?>">Input Data Sektor Pertanian</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('pertanian_view'); ?>">View Data Sektor Pertanian</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('penggunaan_lahan_input'); ?>">Input Data Penggunaan Lahan Pertanian</a>
                            </li>
                            <li>
                                <a href="?hal=<?php echo base64_encode('penggunaan_lahan_view'); ?>">View Data Penggunaan Lahan Pertanian</a>
                            </li>
                        </ul>
                    </li>
                    <?php } // Show if recordset not empty ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">description</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                            <li>
                                <a href="?hal=<?php echo base64_encode('laporan_data_kecamatan'); ?>">Data Kecamatan</a>
                            </li>
                        <?php } // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('laporan_data_perusahaan'); ?>">Data Perusahaan</a>
                            </li>
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('laporan_data_kawasan'); ?>">Data Kawasan</a>
                            </li>
                        <?php } // Show if recordset not empty ?>
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('laporan_investasi_kecamatan'); ?>">Investasi Kecamatan</a>
                            </li>
                        <?php } // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('laporan_investasi_perusahaan'); ?>">Investasi Perusahaan</a>
                            </li>
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('peluang_investasi_sektor_pertanian'); ?>">Peluang Investasi Sektor Pertanian</a>
                            </li>
                        <?php } // Show if recordset not empty ?>
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('keadaan_tanaman'); ?>">Keadaan Tanaman</a>
                            </li>
                        <?php } // Show if recordset not empty ?>
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>    
                            <li>
                                <a href="?hal=<?php echo base64_encode('penggunaan_lahan'); ?>">Penggunaan Lahan Sektor Pertanian</a>
                            </li>
                        <?php } // Show if recordset not empty ?>    
                            <!-- <li>
                                <a href="?hal=<?php echo base64_encode('grafik_pertanian'); ?>">Grafik Sektor Pertanian</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">insert_chart</i>
                            <span>Grafik</span>
                        </a>
                        <ul class="ml-menu">
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                            <li>
                                <a href="?hal=<?php echo base64_encode('grafik_pertanian'); ?>">Grafik Komoditi Sektor Pertanian</a>
                            </li>
                        <?php } // Show if recordset not empty ?>    
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            &nbsp;
                        </a>
                    </li>






                    

                </ul>

                
            </div>
            <!-- #Menu -->
