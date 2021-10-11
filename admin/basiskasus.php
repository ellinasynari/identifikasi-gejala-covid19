

                        <!-- About-->
						<div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Basis Kasus</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
									<th>No</th>
									<th>Nama Klaster</th>
									<th>Gejala</th>
									<th>Edit</th>
									<th>Hapus</th>
                                     
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
									<th>No</th>
									<th>Nama Klaster</th>
									<th>Gejala</th>
									<th>Edit</th>
									<th>Hapus</th>
                                    </tr>
                                </tfoot>
                                <tbody>

								<a href="<?php echo"?p=addbasiskasus";?>" class="btn btn-primary btn-block">
									<i></i>Tambah Basis Kasus</a>
									<hr>
   
   <?php
   	include "koneksi.php";
	$i = 1;
	$b = mysqli_query($kon, "select * from basis_kasus group by id_klaster ASC");
	while($pen = mysqli_fetch_array($b)){
		$bp = mysqli_query($kon,"select * from klaster where id_klaster='$pen[id_klaster]'");
		$dp = mysqli_fetch_array($bp);
	?>
		<td><?php echo $i;?></td>
        <td><?php echo "$dp[nm_klaster] ($dp[kd_klaster])";?></td>
        <td>
        	<?php 
				$sg = mysqli_query($kon,"select * from basis_kasus where id_klaster='$pen[id_klaster]'");
				
				while($dg = mysqli_fetch_array($sg)){
					$sp1 = mysqli_query($kon,"select * from gejala where id_gejala='$dg[id_gejala]'");
					$dp1 = mysqli_fetch_array($sp1);
					echo "* $dp1[nm_gejala]<br>";
				}
			?>
		<td><a href="?p=editbasiskasus&kode=<?php echo $pen['id_klaster'];?>" class="btn btn-info btn-circle btn-sm">
		<i class="fas fa-info"></i></a></td>
       <td><a onClick="return confirm('Yakin ingin hapus?')" href="?p=hapusbasiskasus&kode=<?php echo $pen['id_klaster'];?>"
	   class="btn btn-danger btn-circle btn-sm">
	   <i class="fas fa-trash"></i></a>
        
</td>

		</tr>
        <?php 
		$i++;
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