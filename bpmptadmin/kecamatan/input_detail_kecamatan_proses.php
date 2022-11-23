<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $jumlah_penduduk     = $_POST['jumlah_penduduk'];
    $tahun     = $_POST['tahun'];

        if(empty($_POST['nama_kecamatan']) || empty($_POST['id_kecamatan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Kecamatan tidak terisi!')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
    }else{
        

                    $query = mysql_query("INSERT INTO detail_kecamatan (id_kecamatan,nama_kecamatan,jumlah_penduduk,tahun) VALUES ('$id_kecamatan','$nama_kecamatan','$jumlah_penduduk','$tahun');");

                    if ($query) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Kecamatan berhasil disimpan')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('maaf..., Data Kecamatan gagal disimpan')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
                    }
                }

?>