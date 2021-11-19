<div class = "row">
    <?php
    include "koneksi.php";
    $qry_barang = mysqli_query($conn, "select * from barang");
    while ($dt_barang = mysqli_fetch_array($qry_barang)){
        ?>
        <div class = "col-md-3">
            <div class = "card">
                <?php
                if (isset($dt_barang['foto']) && $dt_barang['foto'] != ''){
                ?>
                    <img src="<?php echo $dt_barang['foto'];?>"class="card-img-top">
                    <?php /* ?><img src="assets/foto_barang/<?=$dt_barang['foto']?>"> <?php */ ?>
                <?php } else {?>
                    <img src="" alt="">
                <?php } ?>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $dt_barang['nama_barang'];?></h4>
                    <h5 class="card-title">Rp. <?php echo $dt_barang['harga'];?></h5>
                    <a href="ubah_barang1.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-warning">Edit</a>
                    <a href="hapus_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-danger">Hapus</a>    
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
?>
<?php
    include "footer.php";
        ?>