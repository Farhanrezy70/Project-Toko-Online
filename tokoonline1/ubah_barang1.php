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
        $qry_get_barang = mysqli_query($conn, "select * from barang where id_barang= '".$_GET['id_barang']."'");
        $data_barang = mysqli_fetch_array($qry_get_barang);
        ?>
        <br><h3>Ubah barang</h3>
        <form action="proses_ubah_barang.php" method="post">
            <input type = "hidden" name = "id_barang" value = "<?php echo $data_barang['id_barang']?>">
        	  <br>Nama barang :
            <input type = "text" name = "nama_barang" value = "<?php echo $data_barang['nama_barang']?>" class = "form-control" required>
            <br> Deskripsi :
            <textarea name="deskripsi" _barang="" cols="30" rows="10" class="form-control" required><?php echo $data_barang['deskripsi']?></textarea>
            <br>Harga :
            <input type = "text" name = "harga" value = "<?php echo $data_barang['harga']?>" class = "form-control" required>
            <br>Ubah Foto Barang :
            <input type="file" name="foto" _barang="foto" class = "form-control" >
            <br><button class="btn btn-primary" type="submit" name="submit">Ubah</button>
            </form>
      </div>
		</div>
      
    </body>
</html>