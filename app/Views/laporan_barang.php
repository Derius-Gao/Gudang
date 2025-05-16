<!DOCTYPE html>
<html>
<head>
  <title>Barang masuk</title>
  </head>
   <body>
    <td width=30%><img src="<?= base_url('foto/sph.jpg'); ?>" width="250px"></td>

    <h1> Gudang sekolah permata harapan</h1>
 <table class="table table-striped">
    <thead>
      <tr>
        <th  width="5%">No</th>
        <th>Nama Barang</th>
        <th>Kode Barang</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
       <?php
       $no=1;
       foreach ($marah as $key => $value) {
       ?>
       <tr>
         <td><?= $no++ ?></td>
         <td><?= $value->nama_barang ?></td>
         <td><?= $value->kode_barang ?></td>
          <td><?= $value->stok ?></td>
       </tr>
        <?php
      }
      ?>
     
    </tbody>
  </table>
  <script type="text/javascript">
  window.print();
  </script>
</body>
</html>

