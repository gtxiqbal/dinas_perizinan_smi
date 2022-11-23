<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR DATA USER</h2>
                                <br/>
<!--                             <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                          <div class="table-responsive">
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
          <thead>
              <tr>
                <th><span class="style10">No</span></th>                
                <th><span class="style10">Edit</span></th>
                <th><span class="style10">Hapus</span></th>
                <th><span class="style10">Nama</span></th>
                <th><span class="style10">Alamat</span></th>
                <th><span class="style10">Tempat, Tanggal Lahir</span></th>
                <!-- <th>Satuan Luas</th> -->
                <th><span class="style10">Jabatan</span></th>
                <th><span class="style10">Email</span></th>
                <th><span class="style10">Keterangan User</span></th>
                <th><span class="style10">Username</span></th>
                <th><span class="style10">Password</span></th>
              </tr>
          </thead>
          <tbody>
          <?php


                    $query  = "SELECT * FROM tbl_user order by user_nama ASC";  
                    $hasil  = mysql_query($query);

                    $no = 1;
                        while ($data = mysql_fetch_array($hasil)) {

                    $id = base64_encode($data['user_id']);
                    $idd = base64_encode($id);
                    $iddd = base64_encode($idd);
                    $idddd = base64_encode($iddd);
                    $iddddd = base64_encode($idddd);
                    $idddddd = base64_encode($iddddd);
                ?>
              <tr>
                  <td><span class="style9"><?php echo $no; ?><span class="style9"></td>
                  <td>
                  <?php if (($data['username'] <> $_SESSION['username'])) { // Show if recordset not empty ?>
                  <a href="home.php?hal=<?php echo base64_encode ('profil_tambah_edit'); ?><?php echo '&user_id='.$idddddd; ?>" class="btn bg-orange btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">border_color</i> </a>
                  <?php } // Show if recordset not empty ?>
                  </td>
                  <td>
                  <?php if (($data['username'] <> $_SESSION['username'])) { // Show if recordset not empty ?> 
                  <a href="home.php?hal=<?php echo base64_encode ('profil_hapus'); ?>&amp;user_id=<?php echo $idddddd; ?>" onclick="return confirm('Anda yakin data ini akan dihapus?')" class="btn bg-pink btn-circle waves-effect waves-circle waves-float waves-light"><i class="material-icons">delete_forever</i> </a>
                  <?php } // Show if recordset not empty ?>
                  </td>
                  <td><span class="style9"><?php echo $data['user_nama']; ?></td>
                  <td><span class="style9"><?php echo $data['user_alamat']; ?></span></td>
                  <td><span class="style9"><?php echo $data['user_tempat']; ?> <?php echo $data['user_tanggal']; ?></span></td>
                  <!-- <td><?php echo $data['satuan_luas']; ?></td> -->
                  <td><span class="style9"><?php echo $data['user_jabatan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['user_email']; ?></span></td>
                  <td><span class="style9"><?php echo $data['keterangan']; ?></span></td>
                  <td><span class="style9"><?php echo $data['username']; ?></span></td>
                  <td><span class="style9"><?php echo $data['password']; ?></span></td>
                  
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
</div>