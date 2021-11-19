<div class="row">
    <?php 
    include "koneksi.php";
    $qry_barang=mysqli_query($conn,"select * from barang");
    while($dt_barang=mysqli_fetch_array($qry_barang)){
        ?>
        <div class="col-md-3">
            <div class="card" >
            <img src=<?=$dt_barang['foto']?> class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_barang['nama_barang']?></h5>
                <p class="card-text"><?=substr($dt_barang['deskripsi'], 0,20)?></p>
                <p class="card-text">Rp.<?=substr($dt_barang['harga'], 0,20)?></p>
                <a href="ubah_barang1.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-warning">Edit</a>
                <a href="hapus_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-danger">Hapus</a>             
              </div>
            </div>
        </div>
        <?php
    }   
    ?>
