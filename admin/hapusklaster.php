<?php
	session_start();
	include "koneksi.php";
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$hapus = mysqli_query ($kon, $sqladm);
	
	if(mysqli_fetch_array($hapus)){
		$sqldelete="delete from klaster where kd_klaster = '$_GET[hapus]'";
		$hapus = mysqli_query($kon, $sqldelete) or die (mysqli_error($kon));
		if($hapus){
			echo"<script>
		
		window.location.href='index.php?p=klaster';
	</script>";
		}else{
			echo"<script>
		
		window.location.href='index.php?p=klaster';
	</script>";
			}
		}
	?>
