<!DOCTYPE html>
<html>
    <head>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
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
      <a class="btn btn-outline-primary" href="login.php">Admin</a>
    </div>
  </div>
</nav>
<div class="container bg-light " style="margin-top:10px">
