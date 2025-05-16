<h2>Karyawan</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Input Karyawan</h1>
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
  <form action="/home/input_karyawan" method="POST">
    <table>
      <tr>
        <td>Nama</td>
       <td><input type="text" class="form-control" name="nama"  value="<?= $marah->nama?>"></td>
      </tr>
      <tr>
        <td>Nik</td>
        <td><input type="text" class="form-control" name="NIK"  value="<?= $marah->NIK?>"></td>
      </tr>
            <tr>
        <td>Username</td>
        <td><input type="text" class="form-control" name="username"  value="<?= $marah->username?>"></td>
      </tr>
      <tr>
        <td>Level</td>
        <td><input type="text" class="form-control" name="level"  value="<?= $marah->level?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" class="form-control" name="password"  value="<?= $marah->password?>"></td>
      </tr>
       <tr>
        <td>tanggal lahir</td>
        <td><input type="date" class="form-control" name="tanggal_lahir"  value="<?= $marah->tanggal_lahir?>"></td>
      </tr>
      <tr>
        <td>jenis kelamin</td>
        <td><input type="text" class="form-control" name="jeniskel"  value="<?= $marah->jeniskel?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" class="form-control" name="alamat"  value="<?= $marah->alamat?>"></td>
      </tr>
      <tr>
        <td>No_hp</td>
        <td><input type="text" class="form-control" name="no_hp"  value="<?= $marah->no_hp?>"></td>
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