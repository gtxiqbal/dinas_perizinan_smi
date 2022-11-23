<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $nama_perusahaan   = $_POST['nama_perusahaan'];
    $id_perusahaan     = $_POST['id_perusahaan'];
    $id_investasi     = $_POST['id_investasi'];
    $peluang_investasi     = $_POST['peluang_investasi'];
    $tahun     = $_POST['tahun'];
    $peluang_pasar   = $_POST['peluang_pasar'];
    $kapasitas_produksi     = $_POST['kapasitas_produksi'];
    $satuan_kapasitas     = $_POST['satuan_kapasitas'];
    $bidang_usaha     = $_POST['sektor_usaha'];
    $luas_lahan     = $_POST['luas_lahan'];
    $satuan_luas     = $_POST['satuan_luas'];
    $sarana_prasarana     = $_POST['sarana_prasarana'];
    $perkiraan_investasi     = $_POST['perkiraan_investasi'];
    $keterangan     = $_POST['keterangan'];

        if(empty($_POST['nama_perusahaan']) || empty($_POST['id_perusahaan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan tidak terisi!')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$bidang_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_peluang_investasi (id_investasi,bidang_usaha,peluang_investasi,id_kecamatan,nama_kecamatan,id_perusahaan,nama_perusahaan,peluang_pasar,kapasitas_produksi,satuan_kapasitas,luas_lahan,satuan_luas,sarana_prasarana,perkiraan_investasi,tahun,keterangan) VALUES ('$id_investasi','$bidang_usaha','$peluang_investasi','$id_kecamatan','$nama_kecamatan','$id_perusahaan','$nama_perusahaan','$peluang_pasar','$kapasitas_produksi','$satuan_kapasitas','$luas_lahan','$satuan_luas','$sarana_prasarana','$perkiraan_investasi','$tahun','$keterangan');");

                    if ($query) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Investasi Perusahaan berhasil disimpan')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$bidang_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('maaf..., Data Investasi Perusahaan gagal disimpan')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$bidang_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
                    }
                }

?>