<!DOCTYPE html>
<html>
<head>
  <title>Barang masuk</title>
</head>
<body>
  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Laporan Barang Masuk</h1>
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

  <form class="mt-4" action="<?= base_url('home/lbarangm_1')?>" method="POST">
    <table>
      <tr>
        <td>tanggal awal</td>
       <td><input type="date" class="form-control" name="tanggal_awal"></td>
      </tr>
      <tr>
        <td>tanggal akhir</td>
        <td><input type="date" class="form-control" name="tanggal_akhir"></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <button class="btn btn-info">
              <i class="fas fa-print"></i>
            </button>
          </form>
           <form class="mt-4" action="<?= base_url('home/pdflapor_bm')?>" method="POST" target="_blank">
             <tr>
        <td>tanggal awal</td>
       <td><input type="date" class="form-control" name="tanggal_awal2"></td>
      </tr>
      <tr>
        <td>tanggal akhir</td>
        <td><input type="date" class="form-control" name="tanggal_akhir2"></td>
      </tr>
      <tr>
        <td></td>
        <td>
            <button class="btn btn-danger">
              <i class="fas fa-file-pdf"></i>
            </button>
          </td>
        </form>
      </tr>
        <form class="mt-4" action="<?= base_url('home/excellapor_bm')?>" method="POST" target="_blank">
           <tr>
        <td>tanggal awal</td>
       <td><input type="date" class="form-control" name="tanggal_awal3"></td>
      </tr>
      <tr>
        <td>tanggal akhir</td>
        <td><input type="date" class="form-control" name="tanggal_akhir3"></td>
      </tr>
      <tr>
        <td></td>
        <td>
            <button class="btn btn-success">
              <i class="fas fa-file-excel"></i>
            </button>
                      </td>
      </tr>
    </form>
    </table>

</body>
</html>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->