<!DOCTYPE html>
<html>
<head>
  <title>Barang keluar</title>
  </head>
 <body>
    <td width=30%><img src="<?= base_url('foto/sph.jpg'); ?>" width="250px"></td>

    <h1> Gudang sekolah permata harapan</h1>
 <table class="table table-striped">
    <thead>
      <tr>
        <th  width="5%">No</th>
        <th>Id barang</th>
        <th>tanggal keluar</th>
        <th>jumlah</th>
      </tr>
    </thead>
    <tbody>
       <?php
       $no=1;
       foreach ($marah as $key => $value) {
       ?>
      <tr>
         <td><?= $no++ ?></td>
          <td><?= $value->id_barang ?></td>
         <td><?= $value->tanggal_keluar ?></td>
          <td><?= $value->jumlah ?></td>
       </tr>
        <?php
      }
      ?>
     
    </tbody>
  </table>
  </script>
</body>
</html>