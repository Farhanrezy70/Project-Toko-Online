<?php
include "header.php";
include "koneksi.php";
$qry_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
$dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Beli barang</h2>
<div class="row">
    <div class="col-md-4">
        <img src=<?=$dt_barang['foto']?> class="card-img-top">
    </div>
    <div class="col-md-8">
        <form
    action="masukkankeranjang.php?id_barang=<?=$dt_barang['id_barang']?>" method="post">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <td>Nama
                    barang</td><td><?=$dt_barang['nama_barang']?></td>
            </tr>
            <tr>
                <td>Deskripsi</td><td><?=$dt_barang['deskripsi']?></td>
            </tr>
            <tr>
                <td>Jumlah</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>