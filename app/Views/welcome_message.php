<!DOCTYPE html>
<html>
<head>
	<title>wendi tak suka cewek</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css')?>">
	<script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Log In</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">username:</label>
      <input type="text" class="form-control" id="email" placeholder="enter Username" name="u">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-control" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


	<table border="1">
		<tr>
			<td>No</td>
		    <td>Nama</td>
		    <td>Nis</td>
		    <td>Foto</td>
		</tr>
		<tr>
			<td>1</td>
			<td>alvi</td>
			<td>23161023</td>
			<td><a href="<?= base_url('foto/Alvi.png'); ?>">
				<img src="<?= base_url('foto/Alvi.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>2</td>
			<td>anjas</td>
			<td>23161050</td>
			<td><a href="<?= base_url('foto/ses dan anjas.jpg'); ?>">
				<img src="<?= base_url('foto/ses dan anjas.jpg'); ?>" width="30px"></td>
			</tr>
		<tr>
			<td>3</td>
			<td>chloe aquino</td>
			<td>23161013</td>
			<td><a href="<?= base_url('foto/Chloe.png'); ?>">
				<img src="<?= base_url('foto/Chloe.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>4</td>
			<td>dennis</td>
			<td>23161048</td>
			<td><a href="<?= base_url('foto/Dennis.png'); ?>">
				<img src="<?= base_url('foto/Dennis.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>5</td>
			<td>derius</td>
			<td>23161054</td>
			<td><a href="<?= base_url('foto/Derius.png'); ?>">
				<img src="<?= base_url('foto/Derius.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>6</td>
			<td>erwin</td>
			<td>23161057</td>
			<td><a href="<?= base_url('foto/Erwin.png'); ?>">
				<img src="<?= base_url('foto/Erwin.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>7</td>
			<td>roni gabriel sitompul</td>
			<td>23161061</td>
			<td><a href="<?= base_url('foto/roni.jng'); ?>">
				<img src="<?= base_url('foto/roni.jpg'); ?>" width="20px"></td>
		</tr>
		<tr>
			<td>8</td>
			<td>ririn</td>
			<td>24161059</td>
			<td><a href="<?= base_url('foto/ririn.jpg'); ?>">
				<img src="<?= base_url('foto/ririn.jpg'); ?>" width="20px"></td>
		</tr>
		<tr>
			<td>9</td>
			<td>meyliana</td>
			<td>23161008</td>
			<td><a href="<?= base_url('foto/Meyliana.png'); ?>">
				<img src="<?= base_url('foto/Meyliana.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>10</td>
			<td>natasha</td>
			<td>23161004</td>
			<td><a href="<?= base_url('foto/Natasha.png'); ?>">
				<img src="<?= base_url('foto/Natasha.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>11</td>
			<td>sim chiu</td>
			<td>23161064</td>
			<td><a href="<?= base_url('foto/sim.jng'); ?>">
				<img src="<?= base_url('foto/sim.jpg'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>12</td>
			<td>selliena</td>
			<td>23161032</td>
			<td><a href="<?= base_url('foto/Sel.png'); ?>">
				<img src="<?= base_url('foto/Sel.png'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>13</td>
			<td>steven ses</td>
			<td>23161053</td>
			<td><a href="<?= base_url('foto/ses dan anjas.jng'); ?>">
				<img src="<?= base_url('foto/ses dan anjas.jpg'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>14</td>
			<td>steven susanto</td>
			<td>23161025</td>
			<td><a href="<?= base_url('foto/sss.jpg'); ?>">
				<img src="<?= base_url('foto/sss.jpg'); ?>" width="30px"></td>
		</tr>
		<tr>
			<td>15</td>
			<td>wendy</td>
			<td>23161022</td>
			<td><a href="<?= base_url('foto/Wendy.png'); ?>">
				<img src="<?= base_url('foto/Wendy.png'); ?>" width="30px"></td>
		</tr>
	</table>
	
</body>
</html>