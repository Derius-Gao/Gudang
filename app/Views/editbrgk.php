<h2>Edit Barang Keluar</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Barang Keluar</h1>
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
<div class="container mt-3">
  <h2>Barang masuk</h2>
  <form action="<?= base_url('home/simpan_barangk') ?>" method="post">
    <div class="mp-3">
      <label for="tanggal_keluar">tanggal_keluar Barang :</label>
      <input type="text" class="form-control" id="tanggal_keluar" placeholder="Enter tanggal_keluar" name="tanggal_keluar"value="<?= $marah->tanggal_keluar?>">
    </div>
    <div class="mq-3">
      <label for="jumlah">jumlah :</label>
      <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah" value="<?= $marah->jumlah?>">
    </div>
    <div class="mk-3">
      <label for="nama">Nama Barang :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama barang " name="nama" value="<?= $marah->nama_barang?>">
    </div>
    <div class="mp-3">
      <label for="kode">Kode Barang :</label>
      <input type="text" class="form-control" id="kode_barang" placeholder="Enter kode barang" name="kode_barang"value="<?= $marah->kode_barang?>">
    </div>
    <div class="mq-3">
      <label for="stok">Stok :</label>
      <input type="text" class="form-control" id="stok" placeholder="Enter stok" name="stok" value="<?= $marah->stok?>">
    </div>
    <tr>
      <td></td>
      <td><input type="hidden" name="id" value="<?= $marah->id_barang ?>">
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('home/hapus_barangk/'.$marah->id_barang) ?>" class="btn btn-danger">Hapus </a>
    </tr>
  </form>
</div>

   </div>
                </div>
            </div>
        </div>
            </div>
    </section>

</main><!-- End #main -->
</table>