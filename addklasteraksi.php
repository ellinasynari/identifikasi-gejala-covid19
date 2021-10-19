<?php
	session_start();
	include "koneksi.php";
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$paru = mysqli_query ($kon, $sqladm);
	$radm = mysqli_fetch_array($paru);
	
	$id_klaster = $_POST['id_klaster'];
	$kd_klaster = $_POST['kd_klaster'];
	$nm_klaster = $_POST['nm_klaster'];
	$ket = $_POST['ket'];
	$solusi = $_POST['solusi'];
	$tingkat_butuh_oksigen = $_POST['tingkat_butuh_oksigen'];

	
	
	$sql ="insert into klaster (id_klaster, kd_klaster, id_admin, nm_klaster, ket, solusi, tingkat_butuh_oksigen) value ('$id_klaster','$kd_klaster','$radm[id_admin]', '$nm_klaster','$ket','$solusi','$tingkat_butuh_oksigen')";
	
	$klaster = mysqli_query ($kon, $sql) or die(mysqli_error($kon));
	if($klaster){
			echo "<script>
		
			window.location.href='index.php?p=klaster';
		</script>";
		}else{
			echo "<script>
		
			window.location.href='index.php?p=addklaster';
		</script>";
		}
		
?>