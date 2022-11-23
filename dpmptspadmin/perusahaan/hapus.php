<?php
 
   include '../../config/config.php';
 
    // membaca id file yang akan dihapus
    $id      = $_GET['id'];
 
    // membaca nama file yang akan dihapus berdasarkan id
    $query   = "SELECT * FROM galeri WHERE galeri_id = '$id'";
    $hasil   = mysql_query($query);
    $data    = mysql_fetch_array($hasil);
    $namaFile = $data['galeri_image'];
 
    // query untuk menghapus informasi file berdasarkan id
    $query = "DELETE FROM galeri WHERE galeri_id = $id";
    mysql_query($query);
 
    // menghapus file dalam folder sesuai namanya	
if (unlink("../".$namaFile)) {
    echo '<script>alert ("File Telah Dihapus"); </script>';
    echo '<meta http-equiv="refresh" content="0;url=../home.php?hal=cGVydXNhaGFhbl92aWV3" />';
 } //else {
//     echo '<script>alert ("Maaf, File Gagal Dihapus"); </script>';
//     echo '<meta http-equiv="refresh" content="0;url=../home.php?hal=cGVydXNhaGFhbl92aWV3" />';
// }	
	
 
?>