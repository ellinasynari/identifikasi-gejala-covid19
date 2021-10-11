	

            <!-- About-->
			<div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Gejala</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
								<tr>
								<th>No</th>
                                <th>Kode Gejala</th>
    	                        <th>Nama Gejala</th>								
								<th>Pertanyaan</th>
                                <th>B1</th>
                                <th>B2</th>
                                <th>B3</th>
                                <th>B4</th>
                                <th>B5</th>
                                <th>B6</th>
    	                        <th>Edit</th>
                         <th>Hapus</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
								<th>No</th>
                                <th>Kode Gejala</th>
    	                        <th>Nama Gejala</th>
								<th>Pertanyaan</th>
                                <th>B1</th>
                                <th>B2</th>
                                <th>B3</th>
                                <th>B4</th>
                                <th>B5</th>
                                <th>B6</th>
    	                        <th>Edit</th>
                         <th>Hapus</th>
                                </tr>
                                </tfoot>
                                <tbody>
   
								<a href="<?php echo"?p=addgejala";?>" class="btn btn-primary btn-block">
									<i></i>Tambahkan Gejala</a>
									<hr>
									<?php
   	include "koneksi.php";
	$sqladm = "select * from gejala";
	$gejala = mysqli_query($kon, $sqladm);
	$no = 1;
	while($radm = mysqli_fetch_array($gejala)){
		echo "<tr>
		<td><center>" .$no. "</td>
		<td><center>" .$radm['kd_gejala']. "</td>
		<td>" .$radm['nm_gejala']. "</td>
		<td>" .$radm['question']. "</td>
		<td><center>" .$radm['b1']. "</td>
		<td><center>" .$radm['b2']. "</td>
		<td><center>" .$radm['b3']. "</td>
		<td><center>" .$radm['b4']. "</td>
		<td><center>" .$radm['b5']. "</td>
		<td><center>" .$radm['b6']. "</td>
		<td><center>
<a href='?p=editgejala&edit=$radm[kd_gejala]' class='btn btn-info btn-circle btn-sm'>
<input type='hidden' name'edit' value='".$radm['id_gejala']."'>
<i class='fas fa-info'></i>
</a>
</td>

<td><center>
<a onClick=\"return confirm('Yakin ingin hapus?')\" href='?p=hapusgejala&hapus=$radm[kd_gejala]' class='btn btn-danger btn-circle btn-sm'>
<input type='hidden' name'hapus' value='".$radm['id_gejala']."'><i class='fas fa-trash'></i>
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