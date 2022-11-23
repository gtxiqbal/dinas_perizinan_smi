<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $user_id = $_POST['user_id'];
        $pass  = $_POST['password1'];
        $password1   = addslashes (strip_tags (md5($_POST['password1'])));
        $password2   = addslashes (strip_tags (md5($_POST['password2'])));
         

        if(empty($_POST['password1']) || empty($_POST['password2'])){
            echo '<script>alert ("MAAF, Kata Sandi tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGFzc3dvcmQ=">';
        }else{
            if($password1 != $password2){
                echo '<script>alert ("MAAF, Kata Sandi dan Kata Sandi Konfirmasi tidak sama!"); </script>';
                echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGFzc3dvcmQ=">';
            }else{
                if(strlen($_POST['password1']) < 8){
                    echo '<script>alert ("MAAF, Password Minimal 8 Karakter!"); </script>';
                    echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGFzc3dvcmQ=">';
                }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_user SET pass='$pass', password='$password1' WHERE user_id='$user_id'");
                        
                        if($query) {
                            echo "<script> alert ('SUKSES, PASSWORD berhasil di UPDATE'); document.location.href='home.php'; </script>";
                        }else{
                            echo "<script> alert ('MAAF, PASSWORD gagal di UPDATE'); document.location.href='home.php?hal=cGFzc3dvcmQ='; </script>";
                        }
                    }
                }
            }
        }
    }else{
        echo '<script>alert ("MAAF, Password GAGAL di Update!"); </script>';
        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGFzc3dvcmQ=">';
    }
?>