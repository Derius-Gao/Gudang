<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Utama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Web Gudang</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">List Tabel Barang <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tampilbarang">Page 1 (Tabel Barang)</a></li>
          <li><a href="tampilbarangmasuk">Page 2 (Tabel Barang Masuk)</a></li>
          <li><a href="tampilbarangkeluar">Page 3 (Tabel Barang Keluar)</a></li>
        </ul>
      </li>
      <li><a href="karyawan">List Karyawan</a></li>
      <li><a href="user">List User</a></li>
      <li><a href="<?= base_url('home/logout') ?>">Logout</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Gudang</h3>
  <p></p>
</div>

</body>
</html>