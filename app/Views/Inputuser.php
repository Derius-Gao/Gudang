<h2>User</h2>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Input User</h1>
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
  <form action="/home/input_user" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>username</td>
        <td><input type="text" class="form-control" name="username"></td>
      </tr>
      <tr>
        <td>password</td>
       <td><input type="Password" class="form-control" name="Password"></td>
      </tr>
      <tr>
        <td>level</td>
        <td><input type="text" class="form-control" name="level"></td>
      </tr>
      <tr>
        <tr>
        <td>Foto</td>
        <td><input type="file" class="form-control" name="file" accept="img/" required></td>
      </tr>
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