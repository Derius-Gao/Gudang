<!DOCTYPE html>
<html>
<head>
  <title>Lapor Barang Keluar</title>
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

  <table border="1" id="tabelbk">
    <thead>
      <tr>
         <th width="5%">No</th>
        <th>Id barang</th>
                <th>tanggal keluar</th>
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
                 <td><?= $value->tanggal_keluar ?></td>
         <td><?= $value->jumlah ?></td>
 
       </tr>
       <?php
     }
     ?>

    </tbody>
  </table>
  <script>
    window.onload = () => {
        const table = document.getElementById('tabelbk');
        exportTable(table, 'laporan_barang_keluar.xls');
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