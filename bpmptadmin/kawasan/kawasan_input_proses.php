<?php
    include '../config/config.php';

    $nama_kawasan   = $_POST['nama_kawasan'];
    $luas_kawasan     = $_POST['luas_kawasan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $nama_kecamatan     = $_POST['nama_kecamatan'];
    $satuan_luas     = $_POST['satuan_luas'];
    $latitude = $_POST['latitude'];
    $longitude     = $_POST['longitude'];

        if(empty($_POST['nama_kawasan']) || empty($_POST['luas_kawasan'])){
            echo '<script>alert ("MAAF, Data Kawasan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2F3YXNhbl9pbnB1dA==">';
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_kawasan (nama_kawasan,luas_kawasan,satuan_luas,id_kecamatan,nama_kecamatan,latitude,longitude) VALUES ('$nama_kawasan','$luas_kawasan','$satuan_luas','$id_kecamatan','$nama_kecamatan','$latitude','$longitude');");

                    if ($query) {
                        echo '<script>alert ("Sukses..., Data Kawasan berhasil disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2F3YXNhbl92aWV3" />';
                    }else{
                        echo '<script>alert ("maaf..., Data Kawasan gagal disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2F3YXNhbl9pbnB1dA==" />';
                    }
                }

?>