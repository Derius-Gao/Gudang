<h2>Barang</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Input barang</h1>
        <nav>
            <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="<? base_url('home/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
  <form action="/home/input_barang" method="POST">
    <table>
      <tr>
        <td>Nama barang</td>
        <td><input type="text" class="form-control" name="nama" value="<?= $marah->nama_barang?>"></td>
      </tr>
      <tr>
        <td>Kode barang</td>
       <td><input type="Password" class="form-control" name="kode_barang"  value="<?= $marah->kode_barang?>"></td>
      </tr>
      <tr>
        <td>Stok barang</td>
        <td><input type="text" class="form-control" name="stok"  value="<?= $marah->stok?>"></td>
      </tr>
        <tr>
        <td>Foto</td>
        <td><input type="file" class="form-control" name="stok"  value="<?= $marah->stok?>"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Simpan">
          <input type="reset" value="Reset">
          <input type="button" value="Kembali">
            
        </td>
      </tr>
    </table>

</body>
</html>
  </div>
                </div>
            </div>
        </div>
            </div>
    </section>

</main><!-- End #main -->