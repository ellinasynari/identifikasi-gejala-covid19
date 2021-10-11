<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"update klaster set nm_klaster='$_POST[nm_klaster]',ket='$_POST[ket]', solusi='$_POST[solusi]' where kd_klaster='$_POST[kd_klaster]'");
	 
	if($simpan){
	echo"<script>
		
		window.location.href='index.php?p=klaster';
	</script>";
	}else{
	echo"<script>
		
		</script>";
	}
}

$qcari=mysqli_query($kon,"select * from klaster where kd_klaster='$_GET[edit]'");
$cari=mysqli_fetch_array($qcari);
?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-12 col-lg-6 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
						<div class="p-5">
<div id="kat">
<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Edit Klaster</h1>
							</div>
<form action='' method="post">
<div class="form-group">
    <input name="kd_klaster" value="<?php echo"$cari[kd_klaster]"; ?>" readonly class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="nm_klaster" type="text"  placeholder="Nama klaster" value="<?php echo"$cari[nm_klaster]"; ?>" class="form-control form-control-user">
</div>
<div class="form-group">
    <textarea name="ket" type="text" placeholder="Keterangan klaster" class="form-control form-control-user"><?php echo"$cari[ket]"; ?></textarea>
</div>
<div class="form-group">
    <textarea name="solusi" type="text" placeholder="Solusi" class="form-control form-control-user"><?php echo"$cari[solusi]"; ?></textarea>
</div>
<div class="form-group">
    <input name="tingkat_butuh_oksigen" type="text"  placeholder="Tingkat Butuh Bantuan Pernapasan" value="<?php echo"$cari[tingkat_butuh_oksigen]"; ?>" class="form-control form-control-user">
</div>

<hr>
<input name="simpan" type="submit" value="Simpan" class="btn btn-success btn-user btn-block"/>
</form>
</div>  
							
		</div>

	</div>

</div>

</div>
    