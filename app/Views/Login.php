<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css')?>">
 <script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Login</h2>
 <form action="<?= base_url('home/aksi_login') ?>" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pswd ">Password :</label>
      <input type="pswd " class="form-control" id="pswd" placeholder="Enter password" name="pswd">
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