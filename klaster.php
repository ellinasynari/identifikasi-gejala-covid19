            <!-- About-->
			 <div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Klaster</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
								<tr>
								    <th>No</th>
                                    <th>Kode Klaster</th>
    	                            <th>Nama Klaster</th>
                                    <th>Keterangan Klaster</th>
                                    <th>Solusi</th>
                                    <th>Tingkat Butuh Bantuan Pernasapan</th>
									<th>Edit</th>
									<th>Hapus</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
									<th>No</th>
                                    <th>Kode Klaster</th>
    	                            <th>Nama Klaster</th>
                                    <th>Keterangan Klaster</th>
                                    <th>Solusi</th>
                                    <th>Tingkat Butuh Bantuan Pernasapan</th>
									<th>Edit</th>
									<th>Hapus</th>
                                    </tr>
                                </tfoot>
                                <tbody>
   
								<a href="<?php echo"?p=addklaster";?>" class="btn btn-primary btn-block">
									<i></i>Tambahkan klaster</a>
									<hr>
   
   <?php
   	include "koneksi.php";
	$sqladm = "select * from klaster";
	$klaster = mysqli_query($kon, $sqladm);
	$no = 1;
	while($radm = mysqli_fetch_array($klaster)){
		echo "<tr>
		
		<td>" .$no. "</td>
		<td>" .$radm['kd_klaster']. "</td>
		<td>" .$radm['nm_klaster']. "</td>
		<td>" .$radm['ket']. "</td>
		<td>".$radm['solusi']."</td>
        <td>".$radm['tingkat_butuh_oksigen']."</td>


<td><center>
<a href='?p=editklaster&edit=$radm[kd_klaster]' class='btn btn-info btn-circle btn-sm'>
<input type='hidden' name'edit' value='".$radm['kd_klaster']."'><i class='fas fa-info-circle'></i>
</a>
</td>

<td><center>
<a onClick=\"return confirm('Yakin ingin hapus?')\" href='?p=hapusklaster&hapus=$radm[kd_klaster]' class='btn btn-danger btn-circle btn-sm'>
<input type='hidden' name'hapus' value='".$radm['kd_klaster']."'>
<i class='fas fa-trash'></i>
</a>
</td>

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