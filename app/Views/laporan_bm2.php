<!DOCTYPE html>
<html>
<head>
  <title>Lapor Barang Masuk</title>
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
  <script>
    window.onload = () => {
        const table = document.getElementById('tabelbm');
        exportTable(table, 'laporan_barang_masuk.xls');
    };

    function exportTable(table, filename) {
        const tableHTML = encodeURIComponent(table.outerHTML);
        const downloadLink = document.createElement('a');

        downloadLink.href = `data:application/vnd.ms-excel,${tableHTML}`;
        downloadLink.download = filename;
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
        window.close();
    }
</script>
  </body>
  </html>