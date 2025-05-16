<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table User</h1>
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
                            <a href="/home/inputuser" class="text-white">Tambah</a>
                        </button>
                        <div class="datatable-dropdown">
            <label>
                <select class="datatable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page
            </label>
        </div>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>>
                                    <th scope="col">Level</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($marah as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->username ?></td>
                                    <td><?= $value->password ?></td>
                                    <td><?= $value->level ?></td>
                                    <td><img src="<?= base_url('img/'.$value->foto);?>" width="30px"></td>
                                    <td>
                                        <a href="<?= base_url('home/edituser/' .$value->id_user)?>">
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