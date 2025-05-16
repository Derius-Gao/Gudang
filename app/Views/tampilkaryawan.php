<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Karyawan</h1>
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

                        <!-- Table with stripped rows -->
                        <button class="btn btn-success mb-3">
                          <i class="bi bi-plus-lg"></i>
                            <a href="/home/inputkaryawan" class="text-white">Tambah</a>
                        </button>
                         <div class="datatable-dropdown">
            <label>
                <select class="datatable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page
            </label>
        </div>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                  <th width="5%">No</th>
                                  <th>Id user</th>
                                  <th>Nama</th>
                                  <th>Nik</th>
                                  <th>username</th>
                                  <th>Level</th>
                                  <th>Password</th>
                                  <th>tanggal_lahir</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat</th>
                                  <th>no_hp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($marah as $key => $value) {
                                ?>
                             <tr>
         <td><?= $ms++ ?></td>
         <td><?= $value->id_user ?></td>
          <td><?= $value->nama ?></td>
         <td><?= $value->NIK ?></td>
          <td><?= $value->username ?></td>
            <td><?= $value->level ?></td>
            <td><?= $value->password?></td>
            <td><?= $value->tanggal_lahir?></td>
            <td><?= $value->jeniskel?></td>
            <td><?= $value->alamat?></td>
            <td><?= $value->no_hp?></td>
          <td>
            <a href="<?= base_url('home/editkaryawan/' .$value->id_user)?>">
              <button class="btn btn-info">
              <i class="fas fa-info-circle"></i>
              Detail
            </button>
          </td>
       </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->