<!DOCTYPE html>
<html>
<head>
  <title>Lapor Barang rusak</title>
  <style type="text/css">
  table,
  th,
  td{
    border-collapse: collapse;
    font-family: sans-serif;
    padding: 5px;
  }
</style>
</head>
<body>

  <table>
  <tr>
    <td width="100px"><img src="<?= base_url('foto/sph.jpg');?>" width="100px"></td>
    <td width="250%">Gudang Sekolah Permata Harapan</td>
    
  </tr>
  </table>

  <table border="1" id="tabelbm">
    <thead>
      <tr>
         <th width="5%">No</th>
        <th>Id barang</th>
                <th>tangal rusak</th>
        <th>Jumlah barang</th>

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
                    <td><?= $value->tanggal_rusak ?></td>
         <td><?= $value->jumlah ?></td>

       </tr>
       <?php
     }
     ?>

    </tbody>
  </table>
  </body>
  </html>