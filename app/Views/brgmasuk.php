<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barang Masuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css')?>">
 <script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Barang Masuk</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="id barang">Id Barang:</label>
      <input type="id barang" class="form-control" id="id barang" placeholder="Enter id barang" name="id barang">
    </div>
    <div class="mb-3">
      <label for="nama barang ">Nama Barang Masuk :</label>
      <input type="nama barang " class="form-control" id="nama barang masuk" placeholder="Enter nama barang masuk" name="nama barang masuk">
    </div>
    <div class="mb-3">
      <label for="jumlah barang ">Jumlah barang :</label>
      <input type="kode barang " class="form-control" id="Jumlah barang " placeholder="Enter jumlah barang " name="jumlah barang ">
    </div>
     <div class="mb-3">
      <label for="jumlah barang ">Tanggal masuk :</label>
      <input type="tanggal masuk " class="form-control" id="tanggal masuk " placeholder="Enter tanggal masuk " name="tanggal masuk ">
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