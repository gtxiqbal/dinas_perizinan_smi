<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $id_kecamatan = $_POST['id_kecamatan'];
        $id_detail_kecamatan = $_POST['id_detail_kecamatan'];
        $nama_kecamatan  = $_POST['nama_kecamatan'];
        $jumlah_penduduk   = $_POST['jumlah_penduduk'];
        $tahun   = $_POST['tahun'];
        $user   = $_POST['user'];
         

        if(empty($_POST['nama_kecamatan']) || empty($_POST['id_kecamatan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Kecamatan tidak terisi!')
                    window.location.href='home.php?hal=dXBkYXRlX2RldGFpbF9rZWNhbWF0YW4=&id_kecamatan=$id_kecamatan&id_detail_kecamatan=$id_detail_kecamatan';
                </SCRIPT>");
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE detail_kecamatan SET id_kecamatan='$id_kecamatan',nama_kecamatan='$nama_kecamatan', jumlah_penduduk='$jumlah_penduduk', tahun='$tahun',user_edit='$user' WHERE id_detail_kecamatan='$id_detail_kecamatan'");
                        
                        if($query) {
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Kecamatan berhasil diupdate')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
                        }else{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Kecamatan gagal diupdate')
                    window.location.href='home.php?hal=dXBkYXRlX2RldGFpbF9rZWNhbWF0YW4=&id_kecamatan=$id_kecamatan&id_detail_kecamatan=$id_detail_kecamatan';
                </SCRIPT>");
                        }
                    }
                }

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Kecamatan gagal diupdate')
                    window.location.href='home.php?hal=dXBkYXRlX2RldGFpbF9rZWNhbWF0YW4=&id_kecamatan=$id_kecamatan&id_detail_kecamatan=$id_detail_kecamatan';
                </SCRIPT>");
    }
?>