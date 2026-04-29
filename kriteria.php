
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Kriteria Ekstrakulikuler</h1>
                        
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria Ekstrakulikuler</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        include 'action/koneksi.php';
                                        $query = "SELECT * FROM kriteria ORDER BY nama ASC";
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
                                            <td>
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#rud<?php echo $row['id']; ?>">Option</button>
                                            </td>
                                        </tr>
                                        <?php 
                                            include 'modal/kriteria/rud.php';
                                        ?>
                                        <?php 
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>