<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"insert into gejala values ('', '$_POST[kd_gejala]','$_POST[nm_gejala]','$_POST[question]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[b6]')");
	
	if($simpan){
	echo"<script>
		alert('Input Gejala Berhasil');
		window.location.href='index.php?p=gejala';
	</script>";
	}else{
	echo"<script>
		alert('Input Gejala Gagal');
		window.location.href='index.php?p=gejala';
		</script>";
	}
}
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
								<h1 class="h4 text-gray-900 mb-4">Tambahkan Gejala</h1>
							</div>
<form action='' method="post">

<div class="form-group">
    <input name="kd_gejala" type="text"  placeholder="Kode Gejala" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="nm_gejala" type="text"  placeholder="Nama Gejala" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="question" type="text"  placeholder="Pertanyaan" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b1" type="text"  placeholder="b1" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b2" type="text"  placeholder="b2" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b3" type="text"  placeholder="b3" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b4" type="text"  placeholder="b4" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b5" type="text"  placeholder="b5" class="form-control form-control-user">
</div>
<div class="form-group">
    <input name="b6" type="text"  placeholder="b6" class="form-control form-control-user">
</div>
<hr>
<input name="simpan" type="submit" value="Simpan" class="btn btn-success btn-user btn-block"/>
</form>
</div>  
							
		</div>

	</div>

</div>

</div>

    