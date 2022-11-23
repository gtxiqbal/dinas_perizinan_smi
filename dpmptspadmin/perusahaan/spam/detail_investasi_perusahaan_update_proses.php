<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

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
    $id_peluang     = $_POST['id_peluang'];

         

        if(empty($_POST['nama_perusahaan']) || empty($_POST['id_perusahaan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan tidak terisi!')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFuX3VwZGF0ZQ==&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi&sektor_usaha=$bidang_usaha&id_peluang=$id_peluang';
                </SCRIPT>");
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_peluang_investasi SET id_investasi='$id_investasi',bidang_usaha='$bidang_usaha',peluang_investasi='$peluang_investasi',id_kecamatan='$id_kecamatan',nama_kecamatan='$nama_kecamatan', id_perusahaan='$id_perusahaan',nama_perusahaan='$nama_perusahaan',peluang_pasar='$peluang_pasar', kapasitas_produksi='$kapasitas_produksi',satuan_kapasitas='$satuan_kapasitas',luas_lahan='$luas_lahan',satuan_luas='$satuan_luas',sarana_prasarana='$sarana_prasarana',peluang_investasi='$perkiraan_investasi',tahun='$tahun',keterangan='$keterangan' WHERE id_peluang='$id_peluang'");
                        
                        if($query) {
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Investasi Perusahaan berhasil diupdate')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$bidang_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
                        }else{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan gagal diupdate')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi&sektor_usaha=$sektor_usaha&id_peluang=$id_peluang';
                </SCRIPT>");
                        }
                    }
                }

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Investasi Perusahaan gagal diupdate')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFuX3VwZGF0ZQ==&id_perusahaan=$id_perusahaan&id_investasi=$id_investasi&sektor_usaha=$bidang_usaha&id_peluang=$id_peluang';
                </SCRIPT>");
    }
?>