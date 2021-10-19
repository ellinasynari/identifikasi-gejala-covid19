<?php
	session_start();
include "koneksi.php";
	$kode = $_GET['kode'];
	$sql	= mysqli_query($kon,"select * from basis_kasus where id_klaster='$kode'");
	$data	= mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql) > 0){
		$id_gejala	= $data['id_gejala'];
?>


                        <!-- About-->
						<div class="container px-4 px-lg-6">

	<div class="col-xl-12 col-lg-6 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
						<div class="p-5">

							<div id="kat">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Edit Basis Kasus</h1>
							</div>

<form action='' method="post">
<div class="form-group">
<label class="control-label" for="id_klaster">Nama Klaster</label>
<select class="control-label" name="id_klaster" id="id_klaster">
								<?php
									$sp0 = mysqli_query($kon,"select * from klaster where id_klaster='$kode'");
									if($dp0 = mysqli_fetch_array($sp0)){
                                		echo "<option value='$kode'>$kode == $dp0[nm_klaster]</option>";
									}
								?>
                                <?php
                                    $sp = mysqli_query($kon,"select * from klaster");
                                    while($dp = mysqli_fetch_array($sp)){
										echo "<option value=$dp[id_klaster]>$dp[id_klaster] == $dp[nm_klaster]</option>";
									}
                                ?>
                            </select></div>
<div class="form-group">
<label class="control-label" for="gejala">Gejala</label>
                        <div class="controls">
                        	<?php
                            	$sg = mysqli_query($kon,"select * from gejala");
								while($dg = mysqli_fetch_array($sg)){
									echo "<input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'>";
									echo "  $dg[id_gejala] == $dg[nm_gejala]<br>";
								}
							?>
                        </div>
</div>
<hr>
<input name="simpan" type="submit" value="Simpan" class="btn btn-success btn-user btn-block"/>
<?php }
					include "koneksi.php";
						if(isset($_POST['simpan'])){
							mysqli_query($kon, "delete from basis_kasus where id_klaster='$kode'") or die(mysqli_error());
							
							$jumlah = count($_POST['item']);
							
							for($i=0; $i < $jumlah; $i++){
								$gejala=$_POST['item'][$i];
								
								
								$q=mysqli_query($kon,"insert into basis_kasus(id_klaster, id_gejala) values ('$_POST[id_klaster]', '$gejala')") or die(mysqli_error());
							}
								
								if($q){
									echo "<script language=javascript> alert('Data Berhasil Disimpan');
											window.location='?p=basiskasus'</script>";
								}
								else{
									echo "Data Gagal Di Simpan";
									echo "Silahkan <a href = '?p=basiskasus'>Ulangi Disini</a>";
								}
						}
						
						if(isset($_POST['batal'])){
							echo "<script language=javascript>
								window.location='?p=basiskasus';
								</script>";
							exit;
						}
					?>
</form>
</div>  
                    
                  

</div>
                    </div>
                </div>

            </div>
            </div>

</div>
            <!-- /.container-fluid -->	


