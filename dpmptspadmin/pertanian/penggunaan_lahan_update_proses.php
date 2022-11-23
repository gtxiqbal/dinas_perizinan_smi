<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

    $id_penggunaan_lahan = $_POST['id_penggunaan_lahan'];
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
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl92aWV3';
                </SCRIPT>");
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_penggunaan_lahan SET nama_kecamatan='$nama_kecamatan',id_kecamatan='$id_kecamatan',nama_lahan='$nama_lahan',jenis_lahan='$jenis_lahan',tahun='$tahun',ditanami_padi_satu='$ditanami_padi_satu',ditanami_padi_dua='$ditanami_padi_dua',ditanami_padi_lebih_tiga='$ditanami_padi_lebih_tiga',ditanami_tanaman_lain='$ditanami_tanaman_lain',tidak_ditanami_apapun='$tidak_ditanami_apapun',user_edit='$user' WHERE id_penggunaan_lahan  ='$id_penggunaan_lahan'");
                        
                        if($query) {
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Penggunaan Lahan Sektor Pertanian berhasil diupdate')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl92aWV3';
                </SCRIPT>");
                        }else{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Penggunaan Lahan Sektor Pertanian gagal diupdate')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl92aWV3';
                </SCRIPT>");
                        }
                    }
                }

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Penggunaan Lahan Sektor Pertanian gagal diupdate')
                    window.location.href='home.php?hal=cGVuZ2d1bmFhbl9sYWhhbl92aWV3';
                </SCRIPT>");
    }
?>