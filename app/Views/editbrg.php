<h2>Edit Barang</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Barang</h1>
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
  <h2>Barang</h2>
  <form action="<?= base_url('home/simpan_barang') ?>" method="post">
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
      <input type="hidden" value="<?=$marah->id_barang?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
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
    
    