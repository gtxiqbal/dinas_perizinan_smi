<?php
	include '../config/config.php';

	$user_id = $_POST['user_id'];
    $user_nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $pass = $_POST['password'];
    $username = $_POST['username'];
    $keterangan = $_POST['keterangan'];
    $password   = addslashes (strip_tags (md5($_POST['password'])));

	if (empty($user_nama)) {
		echo '<script>alert ("Maaf...!!!, Harap Masukan Nama Anda!"); </script>';
		echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
	}else{
									$query = mysql_query("UPDATE tbl_user SET user_nama='$user_nama', username='$username', pass='$pass', password='$password' ,user_tanggal='$tgl_lahir', user_tempat='$tempat_lahir', user_alamat='$alamat', user_email='$email', user_jabatan='$jabatan', level='$level', keterangan='$keterangan' WHERE user_id='$user_id'") or die(mysql_error());

									if($query){
										echo '<script>alert ("Sukses... Data User Berhasil di UPDATE!"); </script>';
										echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
									}else{
										echo '<script>alert ("Maaf, Data User GAGAL di UPDATE!"); </script>';
										echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
									}
								}

?>