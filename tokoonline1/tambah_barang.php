<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <h1 class="text-warning bg-dark me-4" href="">FR</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notifikasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="keranjang.php">Keranjang</a></li>
            <li><a class="dropdown-item" href="histori_pembelian.php">Transaksi</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-3" type="submit">Search</button>
      </form>
      <a class="btn btn-outline-primary" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
    <h3>Tambah Barang</h3>
    <a href="home_admin.php" class="btn btn-success">Kembali</a>
    <form action="proses_tambah_barang.php" method="post">
        Nama barang :
        <input type="text" name="nama_barang" value="" class="form-control">
        Deskripsi  : 
        <input type="text" name="deskripsi" value="" class="form-control">
        Harga : 
        <input type="text" name="harga" value="" class="form-control"><br>
        Foto : 
        <input type="file" name="foto" id="foto" class = "form-control" required><br>
        <input type="submit" name="simpan" value="Tambah Barang" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>
