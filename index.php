<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login SPK Ekstrakulikuler</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="col">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <center>
                                        <p>
                                            <img src="img/logo.png" style="max-height: 90px; min-height:30px;" alt="">
                                            <h5>Selamat Datang Di SPK Ekstrakulikuler</h5>
                                            <h5>Sekolah Menengah Atas Negeri 1 Stabat </h5>
                                        </p>
                                        <p hidden>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#mahasiswa" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="toggleCollapse('mahasiswa')">
                                                Search
                                            </a>
                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#login" aria-expanded="false" aria-controls="collapseExample" onclick="toggleCollapse('login')">
                                                Login
                                            </button>
                                        </p>

                                        <div class="collapse show" id="mahasiswa" hidden>
                                            <div class="card card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nim</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        <small id="emailHelp" class="form-text text-muted">Masukan Nim Mahasiswa Untuk Melihat Data.</small>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Search</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="collapse show" id="login">
                                            <div class="card card-body">
                                                <form action="action/login.php" method="post">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Masuk</button>
                                                </form>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        function toggleCollapse(id) {
            const otherId = id === 'mahasiswa' ? 'login' : 'mahasiswa';
            $('#' + otherId).collapse('hide');
            $('#' + id).collapse('toggle');
        }
    </script>

</body>

</html>