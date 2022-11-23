<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $nama_lahan  = $_POST['nama_lahan'];
    $jenis_lahan     = $_POST['jenis_lahan'];
    $tahun    = $_POST['tahun'];
    $ditanami_padi_satu    = $_POST['ditanami_padi_satu'];
    $ditanami_padi_dua     = $_POST['ditanami_padi_dua'];
    $ditanami_padi_lebih_tiga   = $_POST['ditanami_padi_lebih_tiga'];
    $ditanami_tanaman_lain    = $_POST['ditanami_tanaman_lain'];
    $tidak_ditanami_apapun     = $_POST['tidak_ditanami_apapun'];
    $user     = $_POST['user'];


        if(empty($_POST['nama_kecamatan']) || empty($_POST['id_kecamatan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Penggunaan Lahan Sektor Pertanian tidak terisi!')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl9pbnB1dA==';
                </SCRIPT>");
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_penggunaan_lahan 
                        (nama_lahan,jenis_lahan,nama_kecamatan,id_kecamatan,tahun,ditanami_padi_satu,ditanami_padi_dua,ditanami_padi_lebih_tiga,ditanami_tanaman_lain,tidak_ditanami_apapun,user_input) VALUES 
                        ('$nama_lahan','$jenis_lahan','$nama_kecamatan','$id_kecamatan','$tahun','$ditanami_padi_satu','$ditanami_padi_dua','$ditanami_padi_lebih_tiga','$ditanami_tanaman_lain','$tidak_ditanami_apapun','$user');");

                    if ($query) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Penggunaan Lahan Sektor Pertanian berhasil disimpan')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl92aWV3';
                </SCRIPT>");
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('maaf..., Data Penggunaan Lahan Sektor Pertanian gagal disimpan')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl9pbnB1dA==';
                </SCRIPT>");
                    }
                }

?>