<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Ekstrakulikuler</div>
                        <?php
                        include 'action/koneksi.php';
                        $ekskul = mysqli_query($koneksi, "SELECT * FROM ekskul");
                        $jumlah_ekskul = mysqli_num_rows($ekskul);
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_ekskul; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Pengguna</div>
                        <?php
                        include 'action/koneksi.php';
                        $pengguna = mysqli_query($koneksi, "SELECT * FROM ekskul");
                        $jumlah_pengguna = mysqli_num_rows($pengguna);
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pengguna; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kriteria
                        </div>
                        <div class="row no-gutters align-items-center">
                            <?php
                            include 'action/koneksi.php';
                            $kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
                            $jumlah_kriteria = mysqli_num_rows($kriteria);
                            ?>
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_kriteria; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Siswa / Siswi</div>
                        <?php
                        include 'action/koneksi.php';
                        $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                        $jumlah_siswa = mysqli_num_rows($siswa);
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_siswa; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height: 500px;">
                    <div class="carousel-item active">
                        <img src="img/bg3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/bg1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/bg2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>