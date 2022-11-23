<?php
    include '../config/config.php';
    $namafolder="gambar/"; 

    if (!empty($_FILES["gambar_image"]["tmp_name"]))
    {
        $jenis_gambar=$_FILES['gambar_image']['type'];
        $galeri_judul=$_POST['jenis_gambar'];
        $galeri_tanggal=$_POST['tgl_input'];
        $katga_judul=$_POST['id_perusahaan'];
        $user_input=$_POST['user_input'];
        
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {           
            $gambar = $namafolder . basename($_FILES['gambar_image']['name']);       
            if (move_uploaded_file($_FILES['gambar_image']['tmp_name'], $gambar)) {
                echo '<script>alert ("Data Berhasil disimpan"); </script>';
                echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cGVydXNhaGFhbl92aWV3" />';
                    $sql="INSERT INTO galeri (galeri_judul,galeri_image,galeri_tanggal,katga_judul,galeri_status,galeri_pengirim) values ('$galeri_judul','$gambar','$galeri_tanggal','$katga_judul','1','$user_input')";
                    $res=mysql_query($sql) or die (mysql_error());
            } else {
                echo '<script>alert ("Maaf, Data Gagal diPublish!!!"); </script>';
                echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cGVydXNhaGFhbl92aWV3" />';
            }
       } else {
            echo '<script>alert ("Maaf jenis gambar yang anda kirim salah!. Harus berformat .jpg .gif .png!!!!"); </script>';
            echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cGVydXNhaGFhbl92aWV3" />';
       }
    } else {
        echo '<script>alert ("Maaf, Anda belum memasukan gambar!!!!"); </script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cGVydXNhaGFhbl92aWV3" />';
    }
?>