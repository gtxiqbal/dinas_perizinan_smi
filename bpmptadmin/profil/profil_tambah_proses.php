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

        if(empty($_POST['nama']) || empty($_POST['alamat'])){
            echo '<script>alert ("MAAF, Data User tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cHJvZmlsX3RhbWJhaA==">';
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_user (user_nama,username,pass,password,user_email,user_tempat,user_tanggal,user_alamat,level,user_pekerjaan,user_tgl,user_jabatan,keterangan) VALUES ('$user_nama','$username','$pass','$password','$email','$tempat_lahir','$tgl_lahir','$alamat','$level','$jabatan','$tgl_lahir','$jabatan','$keterangan');");

                    if ($query) {
                        echo '<script>alert ("Sukses..., Data User berhasil disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
                    }else{
                        echo '<script>alert ("maaf..., Data User gagal disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cHJvZmlsX3RhbWJhaA==" />';
                    }
                }

?>