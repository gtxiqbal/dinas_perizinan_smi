<?php
  $username= $_SESSION['username']; 

        $query=mysql_query("SELECT * FROM tbl_user WHERE username='".$username."'")or die(mysql_error());
        $data = mysql_fetch_array($query);
?>

            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $data['user_nama'] ?></div>
                    <div class="email"><?php echo $data['keterangan'] ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">settings</i>
                        <ul class="dropdown-menu pull-right">
                        <?php if (($data['keterangan']=="Administrator")) { // Show if recordset not empty ?>
                            <li><a href="?hal=<?php echo base64_encode('profil_tambah'); ?>"><i class="material-icons">person_add</i>Tambah User</a></li>
                            <li><a href="?hal=<?php echo base64_encode('profil_view'); ?>"><i class="material-icons">group</i>Daftar User</a></li>
                        <?php } // Show if recordset not empty ?>    
                            <li><a href="?hal=<?php echo base64_encode('profil'); ?>"><i class="material-icons">person</i>Ubah Profil</a></li>
                            <li><a href="?hal=<?php echo base64_encode('password'); ?>"><i class="material-icons">lock</i>Ubah Password</a></li>
                            <li><a href=login/logout.php onclick="return confirm('Apakah anda yakin ingin keluar?')"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
