<?php 
    include "header.php";
?>
<h2>Histori Peminjaman Buku</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Pinjam</th><th>Tanggal harus Kembali</th><th>Nama Buku</th><th>Status</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from pembelian_barang order by id_pembelian_barang desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $barang_dibeli="<ol>";
            $qry_buku=mysqli_query($conn,"select * from  detail_pembelian_barang join barang on barang.id_barang=detail_pembelian_barang.id_barang where id_pembelian_barang = '".$dt_histori['id_pembelian_barang']."'");
            while($dt_barang=mysqli_fetch_array($qry_barang)){
                $barang_dibeli.="<li>".$dt_buku['nama_buku']."</li>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tanggal_pinjam']?></td><td><?=$barang_dibeli?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>