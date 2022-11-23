<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $id_kecamatan = $_POST['id_kecamatan'];
        $nama_kecamatan  = $_POST['nama_kecamatan'];
        $luas_kecamatan   = $_POST['luas_kecamatan'];
        $satuan_luas   = $_POST['satuan_luas'];
        $jumlah_desa     = $_POST['jumlah_desa'];
        $jumlah_kelurahan     = $_POST['jumlah_kelurahan'];
        $latitude   = $_POST['latitude'];
        $longitude   = $_POST['longitude'];
        $user   = $_POST['user'];
         

        if(empty($_POST['nama_kecamatan']) || empty($_POST['luas_kecamatan'])){
            echo '<script>alert ("MAAF, Data Kecamatan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2VjYW1hdGFuX3ZpZXc=">';
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_kecamatan SET nama_kecamatan='$nama_kecamatan', luas_kecamatan='$luas_kecamatan', satuan_luas='$satuan_luas', jumlah_desa='$jumlah_desa', jumlah_kelurahan='$jumlah_kelurahan' ,latitude='$latitude',longitude='$longitude', user_edit='$user' WHERE id_kecamatan='$id_kecamatan'");
                        
                        if($query) {
                            echo "<script> alert ('SUKSES, Data Kecamatan berhasil di UPDATE'); document.location.href='home.php?hal=a2VjYW1hdGFuX3ZpZXc='; </script>";
                        }else{
                            echo "<script> alert ('MAAF, Data Kecamatan gagal di UPDATE'); document.location.href='home.php?hal=a2VjYW1hdGFuX3ZpZXc='; </script>";
                        }
                    }
                }

    }else{
        echo '<script>alert ("MAAF, Data Kecamatan GAGAL di Update!"); </script>';
        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2VjYW1hdGFuX3ZpZXc=">';
    }
?>