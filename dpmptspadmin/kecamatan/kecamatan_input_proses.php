<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $luas_wilayah     = $_POST['luas_kecamatan'];
    $satuan_luas     = $_POST['satuan_luas'];
    $jumlah_desa     = $_POST['jumlah_desa'];
    $jumlah_kelurahan     = $_POST['jumlah_kelurahan'];
    $latitude = $_POST['latitude'];
    $longitude     = $_POST['longitude'];
    $user     = $_POST['user'];

        if(empty($_POST['nama_kecamatan']) || empty($_POST['luas_kecamatan'])){
            echo '<script>alert ("MAAF, Data Kecamatan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2VjYW1hdGFuX2lucHV0">';
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_kecamatan (nama_kecamatan,luas_kecamatan,satuan_luas,jumlah_desa,jumlah_kelurahan,latitude,longitude,user_input) VALUES ('$nama_kecamatan','$luas_wilayah','$satuan_luas','$jumlah_desa','$jumlah_kelurahan','$latitude','$longitude','$user');");

                    if ($query) {
                        echo '<script>alert ("Sukses..., Data Kecamatan berhasil disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2VjYW1hdGFuX3ZpZXc=" />';
                    }else{
                        echo '<script>alert ("maaf..., Data Kecamatan gagal disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=a2VjYW1hdGFuX2lucHV0" />';
                    }
                }

?>