<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"update user set nm_lengkap='$_POST[nm_lengkap]', alamat='$_POST[alamat]' , no_hp='$_POST[no_hp]', jns_kelamin='$_POST[jns_kelamin]', pekerjaan='$_POST[pekerjaan]'");
	 
	if($simpan){
	echo"<script>
    alert('data berhasil tersimpan');
		window.location.href='index.php?p=user';
	</script>";
	}else{
	echo"<script>
    alert('data gagal tersimpan');
	window.location.href='index.php?p=edituser';
		</script>";
	}
}

$qcari=mysqli_query($kon,"select * from user where id_user='$_GET[edit]'");
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
								<h1 class="h4 text-gray-900 mb-4">Edit User</h1>
							</div>
<form action='' method="post">
<div class="form-group">ID USER
    <input name="id_user" value="<?php echo"$cari[id_user]"; ?>" readonly class="form-control form-control-user">
</div>
<div class="form-group">USERNAME
    <input name="username" value="<?php echo"$cari[username]"; ?>" readonly class="form-control form-control-user">
</div>
<div class="form-group">PASSWORD
    <input name="password" value="<?php echo"$cari[password]"; ?>" readonly class="form-control form-control-user">
</div>
<div class="form-group">Nama Lengkap
    <input name="nm_lengkap" type="text"  placeholder="Nama Lengkap" value="<?php echo"$cari[nm_lengkap]"; ?>" class="form-control form-control-user">
</div>
<div class="form-group">Jenis Kelamin
    <select name="jns_kelamin" type="text"  placeholder="Jenis Kelamin" value="<?php echo"$cari[jns_kelamin]"; ?>" class="form-control form-control-user">
    <option value="">Silahkan Dipilih</option>
                   					 <option value="L">Laki-Laki</option>
                  					  <option value="P">Perempuan</option>
    </select>
</div>
<div class="form-group">Alamat
    <input name="alamat" type="text"  placeholder=Alamat" value="<?php echo"$cari[alamat]"; ?>" class="form-control form-control-user">
</div>
<div class="form-group">Nomer HP
    <input name="no_hp" type="text"  placeholder="No. HP" value="<?php echo"$cari[no_hp]"; ?>" class="form-control form-control-user">
</div>
<div class="form-group">Pekerjaan
    <input name="pekerjaan" type="text"  placeholder="Pekerjaan" value="<?php echo"$cari[pekerjaan]"; ?>" class="form-control form-control-user">
</div>

<hr>
<input name="simpan" type="submit" value="Simpan" class="btn btn-success btn-user btn-block"/>
</form>
</div>  
							
		</div>

	</div>

</div>

</div>
    
    