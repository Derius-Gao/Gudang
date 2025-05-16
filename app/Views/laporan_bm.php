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
         <th width="5%">No</th>
         <th>Nama barang</th>
        <th>Id barang</th>
        <th>Jumlah barang</th>
        <th>Tanggal_diterima</th>
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
          <td><?= $value->id_barang ?></td>
         <td><?= $value->jumlah ?></td>
          <td><?= $value->tanggal_diterima ?></td>
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
