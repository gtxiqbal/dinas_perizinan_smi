<?php
    include '../config/config.php';

    $nama_perusahaan   = $_POST['nama_perusahaan'];
    $alamat_perusahaan   = $_POST['alamat_perusahaan'];
    $nama_pemilik   = $_POST['nama_pemilik'];
    $alamat_pemilik   = $_POST['alamat_pemilik'];
    $tlp_perusahaan     = $_POST['tlp_perusahaan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $nama_kecamatan     = $_POST['nama_kecamatan'];
    $sektor_usaha     = $_POST['sektor_usaha'];
    $luas_perusahaan     = $_POST['luas_perusahaan'];
    $satuan_luas     = $_POST['satuan_luas'];
    $tahun_berdiri     = $_POST['tahun_berdiri'];
    $tgl_berkas     = $_POST['tgl_berkas'];
    $no_izin     = $_POST['no_izin'];
    $tgl_register_izin    = $_POST['tgl_register_izin'];
    $latitude = $_POST['latitude'];
    $longitude     = $_POST['longitude'];
    $user_input     = $_POST['user_input'];

        if(empty($_POST['nama_perusahaan']) || empty($_POST['luas_perusahaan'])){
            echo '<script>alert ("MAAF, Data Perusahaan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGVydXNhaGFhbl9pbnB1dA==">';
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_perusahaan (nama_perusahaan,alamat_perusahaan,nama_pemilik,alamat_pemilik,tlp_perusahaan,id_kecamatan,nama_kecamatan,sektor_usaha,luas_perusahaan,satuan_luas,tahun_berdiri,tgl_berkas,no_izin,tgl_register_izin,latitude,longitude,user_input) VALUES ('$nama_perusahaan','$alamat_perusahaan','$nama_pemilik','$alamat_pemilik','$tlp_perusahaan','$id_kecamatan','$nama_kecamatan','$sektor_usaha','$luas_perusahaan','$satuan_luas','$tahun_berdiri','$tgl_berkas','$no_izin','$tgl_register_izin','$latitude','$longitude','$user_input');");

                    if ($query) {
                        echo '<script>alert ("Sukses..., Data Perusahaan berhasil disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGVydXNhaGFhbl92aWV3" />';
                    }else{
                        echo '<script>alert ("maaf..., Data Perusahaan gagal disimpan"); </script>';
                        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGVydXNhaGFhbl9pbnB1dA==" />';
                    }
                }

?>