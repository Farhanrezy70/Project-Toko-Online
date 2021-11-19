<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        mysqli_query($conn,"insert into pembelian_barang (id_barang,tanggal_pembelian) value('".$_SESSION['id_barang']."','".date('Y-m-d')."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_pembelian_barang (id_pembelian_barang,id_barang,qty) value('".$id."','".$val_produk['id_barang']."','".$val_produk['qty']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli barang");location.href="histori_peminjaman.php"</script>';
    }
?>