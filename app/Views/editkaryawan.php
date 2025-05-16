<h2>Edit Karyawan</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Karyawan</h1>
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
  <form action="<?= base_url('home/simpan_karyawan') ?>" method="post">
    <div class="mp-3">
      <label for="kode barang ">Username :</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username " name="username"value="<?=$marah->username?>">
    </div>
    <div class="mq-3">
      <label for="username ">Password :</label>
      <input type="text " class="form-control" id="password" placeholder="Enter username " name="password" value="<?=$marah->password?>">
    </div>
    <div class="ml-3">
      <label for="level ">Level :</label>
      <input type="text " class="form-control" id="level" placeholder="Enter level " name="level" value="<?=$marah->level?>">
    </div>
    <div class="mp-3">
      <label for="nama">nama karyawan :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="nama" value="<?= $marah->nama?>">
    </div>
    <div class="mq-3">
      <label for="NIK">NIK :</label>
      <input type="text" class="form-control" id="nik" placeholder="Enter NIK" name="NIK" value="<?= $marah->NIK?>">
    </div>
     <div class="ml-3">
      <label for="tanggal_lahir">Tanggal_lahir :</label>
      <input type="date" class="form-control" id="tanggal_lahir" placeholder="Enter tanggal_lahir" name="tanggal_lahir" value="<?= $marah->tanggal_lahir?>">
    </div>
     <div class="mf-3">
      <label for="jenis_kelamin">Jenis kelamin :</label>
      <input type="text" class="form-control" id="jenis_kelamin" placeholder="Enter Jenis kelamin" name="jeniskel" value="<?= $marah->jeniskel?>">
    </div>
     <div class="md-3">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat" value="<?= $marah->alamat?>">
    </div>
    <div class="md-3">
      <label for="no_hp">No hp :</label>
      <input type="text" class="form-control" id="no_hp" placeholder="Enter no_hp" name="no_hp" value="<?= $marah->no_hp?>">
    </div>
   <tr>
      <td></td>
      <td><input type="hidden" name="id" value="<?= $marah->id_user ?>">
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('home/hapus_karyawan/'.$marah->id_user) ?>" class="btn btn-danger">Hapus </a>
        <!-- <input type="reset" value="reset" class="form-control">
        <input type="button" value="kembali" class="form-control"> -->
      </td>
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