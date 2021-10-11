<?php
	session_start();
	include "koneksi.php";
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$hapus = mysqli_query ($kon, $sqladm);
	
	if(mysqli_fetch_array($hapus)){
		$sqldelete="delete from user where id_user = '$_GET[hapus]'";
		$hapus = mysqli_query($kon, $sqldelete) or die (mysqli_error($kon));
		if($hapus){
			echo"<script>
		alert('data terhapus');
		window.location.href='index.php?p=user';
	</script>";
		}else{
			echo"<script>
		alert('data gagal dihapus');
		window.location.href='index.php?p=user';
	</script>";
			}
		}
	?>