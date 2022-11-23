<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $id_kecamatan = $_POST['id_kecamatan'];
        $id_investasi = $_POST['id_investasi'];
        $id_perusahaan = $_POST['id_perusahaan'];
        $nama_kecamatan  = $_POST['nama_kecamatan'];
        $nama_perusahaan  = $_POST['nama_perusahaan'];
        $jumlah_investasi   = $_POST['jumlah_investasi'];
        $tahun   = $_POST['tahun'];
        $tenaga_kerja_dalam  = $_POST['tenaga_kerja_dalam'];
        $tenaga_kerja_luar  = $_POST['tenaga_kerja_luar'];
        $sektor_usaha     = $_POST['sektor_usaha'];
        $bidang_usaha     = $_POST['bidang_usaha'];
        $user_edit     = $_POST['user_edit'];

         

        if(empty($_POST['nama_perusahaan']) || empty($_POST['id_perusahaan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan tidak terisi!')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW5fdXBkYXRl&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE investasi_tahunan_perusahaan SET id_kecamatan='$id_kecamatan',nama_kecamatan='$nama_kecamatan', id_perusahaan='$id_perusahaan',nama_perusahaan='$nama_perusahaan',sektor_usaha='$sektor_usaha',bidang_usaha='$bidang_usaha',jumlah_investasi='$jumlah_investasi', tahun='$tahun',tenaga_kerja_dalam='$tenaga_kerja_dalam',tenaga_kerja_luar='$tenaga_kerja_luar', user_edit='$user_edit' WHERE id_investasi='$id_investasi'");
                        
                        if($query) {
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Investasi Perusahaan berhasil diupdate')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
                        }else{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan gagal diupdate')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW5fdXBkYXRl&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
                        }
                    }
                }

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan gagal diupdate')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW5fdXBkYXRl&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi';
                </SCRIPT>");
    }
?>