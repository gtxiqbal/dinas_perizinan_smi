<?php
    include ("../config/config.php");

    if(isset($_POST['simpan'])) {

        $id_perusahaan = $_POST['id_perusahaan'];
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
    $user_edit     = $_POST['user_edit'];
    $kemitraan     = $_POST['kemitraan'];
         

        if(empty($_POST['nama_perusahaan']) || empty($_POST['luas_perusahaan'])){
            echo '<script>alert ("MAAF, Data Perusahaan tidak terisi!"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGVydXNhaGFhbl92aWV3=">';
        }else{
                    if(count($errors) > 0){
                        foreach($errors AS $error){
                            echo $error . "<br>\n";
                        }
                    }else {
                        $query = mysql_query("UPDATE tbl_perusahaan SET nama_perusahaan='$nama_perusahaan',alamat_perusahaan='$alamat_perusahaan',nama_pemilik='$nama_pemilik',alamat_pemilik='$alamat_pemilik', tlp_perusahaan='$tlp_perusahaan', id_kecamatan='$id_kecamatan', nama_kecamatan='$nama_kecamatan', sektor_usaha='$sektor_usaha', luas_perusahaan='$luas_perusahaan', satuan_luas='$satuan_luas',tgl_berkas='$tgl_berkas',no_izin='$no_izin',tgl_register_izin='$tgl_register_izin', tahun_berdiri='$tahun_berdiri', kemitraan='$kemitraan',latitude='$latitude',longitude='$longitude', user_edit='$user_edit' WHERE id_perusahaan='$id_perusahaan'");
                        
                        if($query) {
                            echo "<script> alert ('SUKSES, Data Perusahaan berhasil di UPDATE'); document.location.href='home.php?hal=cGVydXNhaGFhbl92aWV3'; </script>";
                        }else{
                            echo "<script> alert ('MAAF, Data Perusahaan gagal di UPDATE'); document.location.href='home.php?hal=cGVydXNhaGFhbl92aWV3'; </script>";
                        }
                    }
                }

    }else{
        echo '<script>alert ("MAAF, Data Perusahaan GAGAL di Update!"); </script>';
        echo '<meta http-equiv="refresh" content="0; url=home.php?hal=cGVydXNhaGFhbl92aWV3">';
    }
?>