
<?php
	session_start();
	include "koneksi.php";
	if(isset($_POST['simpan'])){
    $simpan=mysqli_query($kon,"insert into gejala values ('', '$_POST[kd_gejala]','$_POST[nm_gejala]','$_POST[question]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[b6]')");

	
	$simpan = mysqli_query ($kon, $simpan) or die(mysqli_error($kon));
	if($simpan){
			echo"<script>
		
		window.location.href='index.php?p=gejala';
	</script>";
		}else{
			echo"<script>
		
		window.location.href='index.php?p=gejala';
	</script>";
			}
    }
?>