
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Ekstrakulikuler</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambahekskul"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Ekstrakulikuler</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Ekstrakulikuler</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Ekskul</th>
                                            <th>Penilaian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Ekskul</th>
                                            <th>Penilaian</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        include 'action/koneksi.php';
                                        $query = "SELECT * FROM ekskul ";
                                        $result = mysqli_query($koneksi, $query);
                                        if(!$result){
                                            die ("Query Error: ".mysqli_errno($koneksi).
                                            " - ".mysqli_error($koneksi));
                                        }
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['penilaian']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#rud<?php echo $row['id']; ?>">Option</button>
                                            </td>
                                        </tr>
                                        <?php 
                                            include 'modal/ekskul/rud.php';
                                        ?>
                                        <?php 
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>