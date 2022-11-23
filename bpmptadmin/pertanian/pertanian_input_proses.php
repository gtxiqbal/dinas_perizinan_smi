<?php
    include '../config/config.php';

    $nama_kecamatan   = $_POST['nama_kecamatan'];
    $id_kecamatan     = $_POST['id_kecamatan'];
    $sektor_usaha  = $_POST['sektor_usaha'];
    $bidang_usaha     = $_POST['bidang_usaha'];
    $peluang_investasi     = $_POST['peluang_investasi'];
    $peluang_pasar     = $_POST['peluang_pasar'];
    $kapasitas_produksi     = $_POST['kapasitas_produksi'];
    $satuan_kapasitas   = $_POST['satuan_kapasitas'];
    $hasil_per_hektar     = $_POST['hasil_per_hektar'];
    $satuan_hasil_per_hektar     = $_POST['satuan_hasil_perhektar'];
    $penanaman_normal     = $_POST['penanaman_normal'];
    $satuan_penanaman     = $_POST['satuan_penanaman'];
    $puso     = $_POST['puso'];
    $satuan_puso     = $_POST['satuan_puso'];
    $tambah_tanam     = $_POST['tambah_tanam'];
    $satuan_tambah_tanam     = $_POST['satuan_tambah_tanam'];
    $luas_lahan     = $_POST['luas_lahan'];
    $satuan_luas     = $_POST['satuan_luas'];
    $luas_panen_kotor    = $_POST['luas_panen_kotor'];
    $satuan_luas_panen_kotor     = $_POST['satuan_luas_panen_kotor'];
    $luas_panen_bersih     = $_POST['luas_panen_bersih'];
    $satuan_panen_bersih     = $_POST['satuan_luas_panen_bersih'];
    $sarana_prasarana     = $_POST['sarana_prasarana'];
    $perkiraan_investasi     = $_POST['perkiraan_investasi'];
    $tahun     = $_POST['tahun'];
    $tenaga_kerja_dalam     = $_POST['tenaga_kerja_dalam'];
    $tenaga_kerja_luar     = $_POST['tenaga_kerja_luar'];
    $keterangan     = $_POST['keterangan'];
    $sisa_akhir_tahun_lalu     = $_POST['sisa_akhir_tahun_lalu'];
    $satuan_sisa_akhir_tahun_lalu     = $_POST['satuan_sisa_akhir_tahun_lalu'];
    $sisa_akhir_tahun_ini     = $_POST['sisa_akhir_tahun_ini'];
    $satuan_sisa_akhir_tahun_ini     = $_POST['satuan_sisa_akhir_tahun_ini'];
    $keterangan_periode     = $_POST['keterangan_periode'];


        if(empty($_POST['nama_kecamatan']) || empty($_POST['id_kecamatan'])){
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('MAAF, Data Sektor Pertanian tidak terisi!')
                    window.location.href='home.php?hal=cGVydGFuaWFuX2lucHV0a';
                </SCRIPT>");
    }else{
        

                    $query = mysql_query("INSERT INTO tbl_peluang_investasi 
                        (sektor_usaha,   bidang_usaha,   peluang_investasi,   id_kecamatan,    nama_kecamatan,   peluang_pasar,  kapasitas_produksi,   satuan_kapasitas,   hasil_per_hektar,   satuan_hasil_per_hektar,    penanaman_normal,   satuan_penanaman,  puso,    satuan_puso,   tambah_tanam,   satuan_tambah_tanam,   luas_lahan,  satuan_luas,   luas_panen_kotor,   satuan_luas_panen_kotor,    luas_panen_bersih,  satuan_panen_bersih,   sarana_prasarana, perkiraan_investasi,  tahun,    tenaga_kerja_dalam,   tenaga_kerja_luar,   keterangan,   sisa_akhir_tahun_lalu,  satuan_sisa_akhir_tahun_lalu,  sisa_akhir_tahun_ini, satuan_sisa_akhir_tahun_ini, keterangan_periode) VALUES 
                        ('$sektor_usaha','$bidang_usaha','$peluang_investasi','$id_kecamatan','$nama_kecamatan','$peluang_pasar','$kapasitas_produksi','$satuan_kapasitas','$hasil_per_hektar','$satuan_hasil_per_hektar','$penanaman_normal','$satuan_penanaman','$puso','$satuan_puso','$tambah_tanam','$satuan_tambah_tanam','$luas_lahan','$satuan_luas','$luas_panen_kotor','$satuan_luas_panen_kotor','$luas_panen_bersih','$satuan_panen_bersih','$sarana_prasarana','$perkiraan_investasi','$tahun','$tenaga_kerja_dalam','$tenaga_kerja_luar','$keterangan','$sisa_akhir_tahun_lalu','$satuan_sisa_akhir_tahun_lalu','$sisa_akhir_tahun_ini','$satuan_sisa_akhir_tahun_ini','$keterangan_periode');");

                    if ($query) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Sektor Pertanian berhasil disimpan')
                    window.location.href='home.php?hal=cGVydGFuaWFuX3ZpZXc=';
                </SCRIPT>");
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('maaf..., Data Sektor Pertanian gagal disimpan')
                    window.location.href='home.php?hal=cGVydGFuaWFuX2lucHV0';
                </SCRIPT>");
                    }
                }

?>