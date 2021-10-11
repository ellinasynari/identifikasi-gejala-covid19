

                        <!-- About-->
						<div class="container px-4 px-lg-6">
                <!-- DataTales Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Riwayat Hasil Identifikasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
									<th>No</th>
									<th>Nama Pasien</th>
									<th>Waktu Identifikasi</th>
									<th>Gejala</th>
									<th>Hasil Identifikasi</th>
									<th>Nilai</th>
									<th>Aksi</th>
                                     
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
									<th>No</th>
									<th>Nama Pasien</th>
									<th>Waktu Identifikasi</th>
									<th>Gejala</th>
									<th>Hasil Identifikasi</th>
									<th>Nilai</th>
									<th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
  
   
   <?php
   	include "koneksi.php";
	$s = mysqli_query($kon, "select * from keterangan order by id_keterangan");
	$no = 1;
	while($data = mysqli_fetch_array($s)){
		$id_keterangan=$data['id_keterangan'];
		$id_identifikasi=$data['id_identifikasi'];
		$nama=$data['nama'];
		$tgl_identifikasi=$data['tgl_identifikasi'];
		$id_klaster=$data['id_klaster'];
		$nilai=$data['nilai'];
	?>

	 	<tr>
		
		<td align="center"><?php echo "$no" ?></td>
        <td align="center"><?php echo "$nama"; ?></td>
        <td align="center"><?php echo "$tgl_identifikasi"; ?></td>
		<td><?php 
				$sh = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$id_identifikasi'");
				
				while($dh= mysqli_fetch_array($sh)){
					$sg = mysqli_query($kon,"select * from gejala where id_gejala='$dh[id_gejala]'");
					$dg = mysqli_fetch_array($sg);
					echo "$raquo; $dg[nm_gejala]<br>";
					}
				?> 
		</td>
		<td> <?php 
					$sp = mysqli_query($kon,"select * from klaster where id_klaster='$id_klaster'");
					$dp = mysqli_fetch_array($sp);
					echo "$dp[nm_klaster]";
					
				?> </td>
		<td><?php echo "$nilai";?></td>
		
	<td><a onClick="return confirm('Yakin ingin hapus?')" href="?p=hapushasilidentifikasi&hapus=<?php echo $id_keterangan; ?>"
	class="btn btn-danger btn-circle btn-sm">
	<i class="fas fa-trash"></i>
	</td>

		</tr>
        <?php
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