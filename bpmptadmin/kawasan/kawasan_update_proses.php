<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $id_kawasan = $_POST['id_kawasan'];
        $nama_kawasan  = $_POST['nama_kawasan'];
        $luas_kawasan   = $_POST['luas_kawasan'];
        $satuan_luas   = $_POST['satuan_luas'];
        $id_kecamatan   = $_POST['id_kecamatan'];
        $nama_kecamatan   = $_POST['nama_kecamatan'];
        $latitude   = $_POST['latitude'];
        $longitude   = $_POST['longitude'];
         

        if(empty($_POST['nama_kawasan']) || empty($_POST['luas_kawasan'])){
            echo '<script>alert ("MAAF, Data kawasan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2F3YXNhbl92aWV3">';
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_kawasan SET nama_kawasan='$nama_kawasan', luas_kawasan='$luas_kawasan', satuan_luas='$satuan_luas',id_kecamatan='$id_kecamatan',nama_kecamatan='$nama_kecamatan',latitude='$latitude',longitude='$longitude' WHERE id_kawasan='$id_kawasan'");
                        
                        if($query) {
                            echo "<script> alert ('SUKSES, Data kawasan berhasil di UPDATE'); document.location.href='home.php?hal=a2F3YXNhbl92aWV3='; </script>";
                        }else{
                            echo "<script> alert ('MAAF, Data kawasan gagal di UPDATE'); document.location.href='home.php?hal=a2F3YXNhbl92aWV3'; </script>";
                        }
                    }
                }

    }else{
        echo '<script>alert ("MAAF, Data kawasan GAGAL di Update!"); </script>';
        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2F3YXNhbl92aWV3">';
    }
?>