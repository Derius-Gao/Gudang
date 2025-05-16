<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barang rusak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css')?>">
 <script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Barang rusak</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="id barang">Id Barang:</label>
      <input type="id barang" class="form-control" id="id barang" placeholder="Enter id barang" name="id barang">
    </div>
    <div class="mb-3">
      <label for="nama barang ">Nama Barang rusak :</label>
      <input type="nama barang " class="form-control" id="nama barang rusak" placeholder="Enter nama barang rusak" name="nama barang rusak">
    </div>
    <div class="mb-3">
      <label for="jumlah barang ">Jumlah barang rusak :</label>
      <input type="jumlah barang rusak " class="form-control" id="Jumlah barang rusak " placeholder="Enter jumlah barang rusak" name="jumlah barang rusak ">
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