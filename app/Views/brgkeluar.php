<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barang keluar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css')?>">
 <script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Barang keluar</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="id barang">Id Barang:</label>
      <input type="id barang" class="form-control" id="id barang" placeholder="Enter id barang" name="id barang">
    </div>
    <div class="mb-3">
      <label for="nama barang ">Nama Barang Keluar :</label>
      <input type="nama barang " class="form-control" id="nama barang keluar" placeholder="Enter nama barang keluar" name="nama barang keluar">
    </div>
    <div class="mb-3">
      <label for="jumlah barang ">Jumlah barang keluar :</label>
      <input type="jumlah barang keluar " class="form-control" id="Jumlah barang keluar " placeholder="Enter jumlah barang keluar" name="jumlah barang keluar ">
    </div>
     <div class="mb-3">
      <label for="jumlah barang ">Tanggal keluar :</label>
      <input type="tanggal keluar " class="form-control" id="tanggal keluar " placeholder="Enter tanggal keluar " name="tanggal keluar ">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>