 <!-- About-->
 <div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
									<th>No</th>
                                    <th>ID</th>
									<th>Username</th>
									<th>Password</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Usia</th>
									<th>Alamat</th>
                                    <th>No. HP</th>
									<th>Pekerjaan</th>
                                    <th>Hapus</th>
                                     
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
									<th>No</th>
                                    <th>ID</th>
									<th>Username</th>
									<th>Password</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Usia</th>
									<th>Alamat</th>
                                    <th>No. HP</th>
									<th>Pekerjaan</th>
                                    <th>Hapus</th>
                                    </tr>
                                </tfoot>
                                <tbody>

   
								<!--<a href="<?php echo"?p=adduser";?>" class="btn btn-primary btn-block">
									<i></i>Tambahkan User</a>
									<hr>-->
   <?php
   	include "koneksi.php";
	$sqladm = "select * from user";
	$user = mysqli_query($kon, $sqladm);
	$no = 1;
	while($radm = mysqli_fetch_array($user)){
		echo "<tr>
		
		<td>" .$no. "</td>
		<td>" .$radm['id_user']. "</td>
		<td>" .$radm['nm_lengkap']. "</td>
		<td>" .$radm['password']. "</td>
		<td>".$radm['username']."</td>
        <td>" .$radm['jns_kelamin']. "</td>
        <td>" .$radm['usia']. "</td>
		<td>".$radm['alamat']."</td>
        <td>" .$radm['no_hp']. "</td>
        <td>" .$radm['pekerjaan']. "</td>


<!--<td><center>
<a href='?p=edituser&edit=$radm[id_user]' class='btn btn-info btn-circle btn-sm'>
<input type='hidden' name'edit' value='".$radm['id_user']."'><i class='fas fa-info-circle'></i>
</a>
</td>-->

<td><center>
<a onClick=\"return confirm('Yakin ingin hapus?')\" href='?p=hapususer&hapus=$radm[id_user]' class='btn btn-danger btn-circle btn-sm'>
<input type='hidden' name'hapus' value='".$radm['id_user']."'>
<i class='fas fa-trash'></i>
</a>
</td>

		</tr>";
		$no++;
		}
		?>
</table>

                        </div>
                    </div>
                </div>

            </div>
            </div>

</div>
            <!-- /.container-fluid -->		