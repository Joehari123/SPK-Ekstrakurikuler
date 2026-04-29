<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Siswa / Siswi SMA Negeri 1 Stabat</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambahsiswa"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Siswa / Siswi</a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Siswa / Siswi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Siswa / Siswi</th>
                        <th>Alternatif Ekstrakulikuler</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Siswa / Siswi</th>
                        <th>Alternatif Ekstrakulikuler</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include 'action/koneksi.php';
                    $query = "SELECT * FROM siswa";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                        die("Query Error: " . mysqli_errno($koneksi) .
                            " - " . mysqli_error($koneksi));
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['nama']; ?></td>
                            <?php
                            $penilaian = $row['hasil'];
                            $query_ekskul = "SELECT * FROM ekskul WHERE penilaian = '$penilaian'";
                            $result_ekskul = mysqli_query($koneksi, $query_ekskul);
                            if (!$result_ekskul) {
                                die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                            }
                            while ($tampil_ekskul = mysqli_fetch_assoc($result_ekskul)) {
                            ?>
                                <td><?php echo $tampil_ekskul['nama']; ?></td>
                            <?php } ?>
                            
                            <td>
                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#rud<?php echo $row['id']; ?>">Option</button>
                                <?php
                        include 'modal/siswa/rud.php';
                        ?>
                            </td>
                        </tr>
                       
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>