<?php
if($_POST){
    include "koneksi.php";
    $id_barang = $_POST['id_barang'];
    $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    if (isset($_FILES['foto'])){
    $foto = $_FILES['foto'];
    } else {
        $foto = "";
    }
    // var_dump($_POST);die;

    if(empty($nama_barang)){
        echo "<script> alert ('nama barang tidak boleh kosong'); 
        location.href = 'ubah_barang.php';</script>";
    } elseif (empty($deskripsi)){
        echo "<script> alert ('deskripsi tidak boleh kosong'); 
        location.href = 'ubah_barang.php';</script>";
    } elseif (empty($harga)){
        echo "<script> alert ('harga tidak boleh kosong'); 
        location.href = 'ubah_barang.php';</script>";
    } else {
        if(empty($foto)){
            $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."',deskripsi='".$deskripsi."', harga='".$harga."' where id_barang = '".$id_barang."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update barang');location.href='home_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id_barang=".$id_barang."';</script>";
            }
        } else {
            $ekstensi_diperbolehkan    = array('png','jpg');
            $namaFile = $_FILES['foto']['name'];
            $x = explode('.', $namaFile);
            $ekstensi = strtolower(end($x));
            $ukuran    = $_FILES['foto']['size'];
            $file_tmp = $_FILES['foto']['tmp_name'];
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){            
                    move_uploaded_file($file_tmp, 'gambar/'.$namaFile);
                }else{
                    echo "<script> alert ('ukuran file terlalu besar'); 
                    location.href = 'tambah_barang.php';</script>";
                }
            }else{
                echo "<script> alert ('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); 
                location.href = 'tambah_barang.php';</script>";
            }
            
            $foto = 'http://localhost/tokoonline1/gambar'.$namaFile;
            // $foto = $namaFile;
            $link = "insert into barang (nama_barang, deskripsi, harga, foto) values ('".$nama_barang."','".$deskripsi."','".$harga."','".$foto."')";
            $insert = mysqli_query($conn, $link) or trigger_error(mysqli_error($conn)." ".$link);
            // var_dump($update);die;
            if($update){
                echo "<script>alert('Sukses update barang');location.href='home_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id=".$id_barang."';</script>";
            }
        }
        
    } 
}
?>