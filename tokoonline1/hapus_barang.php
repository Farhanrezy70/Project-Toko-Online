<?php
if($_GET['id_barang']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from barang where id_barang='".$_GET['id_barang']."'");
    if($qry_hapus){
        echo "<script>alert('sukses hapus barang');location.href='home_admin.php';</script>";
    }else {
        echo "<script>alert('gagal hapus barang');location.href='home_admin.php';</script>";
    }
}
?>