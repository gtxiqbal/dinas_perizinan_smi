<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $nama_perusahaan   = $_POST['nama_perusahaan'];
    $id_perusahaan     = $_POST['id_perusahaan'];
    $jumlah_investasi     = $_POST['jumlah_investasi'];
    $bidang_usaha     = $_POST['bidang_usaha'];
    $tahun     = $_POST['tahun'];
    $tenaga_kerja_dalam   = $_POST['tenaga_kerja_dalam'];
    $tenaga_kerja_luar     = $_POST['tenaga_kerja_luar'];
    $sektor_usaha     = $_POST['sektor_usaha'];
    $user_input     = $_POST['user_input'];


        if(empty($_POST['nama_perusahaan']) || empty($_POST['id_perusahaan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan tidak terisi!')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
    }else{
        

                    $query = mysql_query("INSERT INTO investasi_tahunan_perusahaan (id_kecamatan,nama_kecamatan,id_perusahaan,nama_perusahaan,sektor_usaha,bidang_usaha,jumlah_investasi,tahun,tenaga_kerja_dalam,tenaga_kerja_luar,user_input) VALUES ('$id_kecamatan','$nama_kecamatan','$id_perusahaan','$nama_perusahaan','$sektor_usaha','$bidang_usaha','$jumlah_investasi','$tahun','$tenaga_kerja_dalam','$tenaga_kerja_luar','$user_input');");

                    if ($query) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Investasi Perusahaan berhasil disimpan')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('maaf..., Data Investasi Perusahaan gagal disimpan')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
                    }
                }

?>