<html>
<head>

    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap/css2/style.css">

</head>

<body>
    <h4><img src="image/Random Logo.png" class="rounded mx-auto d-block" alt="" width="5%"></h4>
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="add-process-pendaftaran.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat_cust" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_tlp" placeholder="No Hp">
                    </div>
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk_cust" id="inlineRadio2" value="Pria">
                        <label class="form-check-label" for="inlineRadio2">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk_cust" id="inlineRadio1" value="Wanita">
                        <label class="form-check-label" for="inlineRadio1">Wanita</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email_cust" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">DAFTAR</button>
                    </div>
                    <div class="form-footer mt-2">
                        <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>
</body>
</html>