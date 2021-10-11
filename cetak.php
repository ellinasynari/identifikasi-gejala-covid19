<?php
	session_start();
	include "koneksi.php";
	$id = $_GET['id'];
	$identifikasi = $_GET['identifikasi'];
	
	?>
<title>Cetak Hasil identifikasi</title>
<body style="background-repeat: no-repeat;background-size: cover;" background="image/test.jpg" onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <p>
    <h4>Hasil Identifikasi Gejala COVID-19 Menggunakan I-COV</h4>
    </p>

  </div>
</div>
<br>
<hr>
  <table>
    <tr>
    <?php
    $sql = mysqli_query($kon,"select * from user where id_user='$_SESSION[id_user]'");
	$row=mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql) > 0){
		$nama = $row['nm_lengkap'];
		$jk = $row['jns_kelamin'];
		$nohp = $row['no_hp'];
		echo "<td><b>Nama user:</b> $nama </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>Jenis Kelamin:</b> $jk </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>No Hp:</b> $nohp </td>";
		}
		?>
    </tr>
  </table>

  <br>
  <hr>

 <?php
	$s = mysqli_query($kon,"select * from keterangan,klaster where keterangan.id_klaster=klaster.id_klaster and id_identifikasi='$identifikasi'");
	while($data=mysqli_fetch_array($s)){
			$id_klaster=$data['id_klaster'];
			$nilai=$data['nilai']*100;
			$nilaiok=number_format($nilai, 2, '.', '');
			$nm_klaster=$data['nm_klaster'];
			$id_identifikasi=$data['id_identifikasi'];
			$ket_klaster=$data['ket'];
			$solusi=$data['solusi'];
			$tingkat_butuh_oksigen=$data['tingkat_butuh_oksigen'];
	}
	?>

 <table border="0">
    <!--<tr>
      <td><b>Kode Klaster</b></td>
	  <td><b>: </b></td>
	  <td></td>
      <td><?php echo "$id_klaster";?></td>
    </tr>-->
	<tr>
     
    </tr>
	<tr>
    	<td><b>Hasil Identifikasi</b></td>
		<td><b>: </b></td>
		<td></td>
        <td> <?php echo "$nm_klaster";?></td>
    </tr>
	<tr>
     
    </tr>
	<!--<tr>
      <td><b>Nilai</b> </td>
	  <td><b>: </b></td>
	  <td></td>
      <td><?php echo "$nilaiok%";?></td>
    </tr>
	<tr>-->
     
	 </tr>
	<tr>
      <td><b>Gejala</b> </td>
	  <td><b>: </b></td>
	  <td></td>
      <td>
	  <?php 
				$sh = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$id_identifikasi'");
				
				while($dh= mysqli_fetch_array($sh)){
					$sg = mysqli_query($kon,"select * from gejala where id_gejala='$dh[id_gejala]'");
					$dg = mysqli_fetch_array($sg);
					echo "$dg[nm_gejala]<br>";
					}
				?>
       </td>
    </tr>
	<tr>
     
	 </tr>
	<tr>
      <td><b>Keterangan</b></td>
	  <td><b>: </b></td>
	  <td></td>
	  <td></b><?php echo "$ket_klaster";?></td>
    </tr>
	<tr>
     
    </tr>
	<tr>
      <td><b>Solusi</b></td>
	  <td><b>: </b></td>
	  <td></td>
      <td><?php echo "$solusi";?></td>  
    </tr>
    <tr>

	</tr>
	<tr>
      <td><b>Tingkat Butuh Bantuan Pernapasan</b></td>
	  <td><b>: </b></td>
	  <td></td>
      <td><?php echo "$tingkat_butuh_oksigen";?></td>  
    </tr>
    <tr>

    </tr>
  </table>
 
</form>
