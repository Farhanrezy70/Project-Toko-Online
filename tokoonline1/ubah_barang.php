<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");  
    $dt_barang=mysqli_fetch_array($qry_get_barang);
    ?>
    <h3>Ubah Barang</h3>
    <a href="home_admin.php" class="btn btn-success">Kembali</a>
    <form action="proses_ubah_barang.php" method="post">
        <input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>">
        Nama barang :
        <input type="text" name="nama_barang" value="<?=$dt_barang['nama_barang']?>" class="form-control">
        Deskripsi  : 
        <input type="text" name="deskripsi" value="<?=$dt_barang['deskripsi']?>" class="form-control"><br>
        Foto : 
        <input type="file" name="foto" value="" class="form-control">
        Harga : 
        <input type="text" name="harga" value="<?=$dt_barang['harga']?>" class="form-control"><br>
    <input type="submit" name="simpan" value="Ubah Barang" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>
</html>