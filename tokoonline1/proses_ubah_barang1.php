<?php
if($_POST){
    $nama_barang=$_POST['nama_barang'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto=$_FILES['foto']['name'];
    $source=$_FILES['foto']['tmp_name'];
    if(empty($nama_barang)){
        echo "<script>alert('nama barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif(empty($foto)){
        move_uploaded_file($file_tmp, 'file/'.$nama);
			$insert = mysql_query($conn, "INSERT INTO foto VALUES(NULL, '$nama')");
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($kelompok)){
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        }
        
    } 
}
?>