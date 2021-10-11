<?php
	session_start();
	include "koneksi.php";
	
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$edit = mysqli_query($kon, $sqladm);
	$radm = mysqli_fetch_array($edit);
	$nm_klaster = $_POST['nm_klaster'];	
	
	$sql ="update klaster set id_admin='$radm[id_admin]', nm_klaster='$nm_klaster' where kd_klaster='$_POST[kd_klaster]'";	
	
	$edit1 = mysqli_query ($kon, $sql) or die(mysqli_error($kon));
	if($edit1){
			echo"<script>
		
		window.location.href='index.php?p=klaster';
	</script>";
		}else{
			echo"<script>
		
		window.location.href='index.php?p=klaster';
	</script>";
			}
		
?>