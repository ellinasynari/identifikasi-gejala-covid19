

                        <!-- About-->
            <div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel History Identifikasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Identifikasi</th>
                                        <th>Nama User</th>
                                        <th>Nilai</th>
                                        <th>ID Klaster</th>
                                        <th>Tanggal Identifikasi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Identifikasi</th>
                                        <th>Nama User</th>
                                        <th>Nilai</th>
                                        <th>ID Klaster</th>
                                        <th>Tanggal Identifikasi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                 $sqladm = "select * from keterangan";
                                 $ket = mysqli_query($kon, $sqladm);
                                 $no = 1;
                                 while($radm = mysqli_fetch_array($ket)){
                                     echo "<tr>
                                     <td><center>" .$no. "</td>
                                     <td><center>" .$radm['id_identifikasi']. "</td>
                                     <td>" .$radm['nama']. "</td>
                                     <td><center>" .$radm['nilai']. "</td>
                                     <td><center>" .$radm['id_klaster']. "</td>
                                     <td><center>" .$radm['tgl_identifikasi']. "</td>

                                     </tr>";
                                     $no++;
                                     }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            </div>

</div>
            <!-- /.container-fluid -->