    <h2>Edit User</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit User</h1>
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
  <form action="<?= base_url('home/simpan_user') ?>" method="post">
    <div class="mp-3">
      <label for="kode barang ">Username :</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username " name="username"value="<?=$marah->username?>">
    </div>
    <div class="mq-3">
      <label for="username ">Password :</label>
      <input type="text " class="form-control" id="password" placeholder="Enter username " name="password" value="<?=$marah->username?>">
    </div>
    <div class="ml-3">
      <label for="level ">Level :</label>
      <input type="text " class="form-control" id="level" placeholder="Enter level " name="level"value="<?=$marah->level?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$marah->id_user?>" name="id">
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