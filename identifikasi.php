<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>

<div class="card shadow mb-4">
                        <!-- Page Heading -->
                        <a href="#" class="d-block card-header py-3" aria-expanded="true" aria-controls="collapseCardExample">
                          <h6 class="m-0 font-weight-bold text-primary">IDENTIFIKASI</h6>
                        </a>

                                <div class="d-block card-body py-3">                            
                                    <div class="collapse show" id="collapseCardExample">
                                      <div class="row ">
                                        
                                        <div class="col-lg-12">
 <section class="container justify-content-center">	
<?php if(!empty($_SESSION['namapas']) && ($_SESSION['passpas'])){
?>

                    <form name="form1" method="post" action="">
                        <table class="table table-condensed table-hover">
						<div id="view"><h3 align="center" style="color:blue;">Silahkan isi kotak (centang) sesuai dengan gejala dan keadaan anda.</h3></div>
                            <?php 
                                $sg = mysqli_query($kon,"select * from gejala");
                                while($dg = mysqli_fetch_array($sg)){
                                    echo
                                    "<tr>
                                        <td class='text-center'  width='2%'><input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'></td>
										<td class='text-left text-error' style='color:black;' width='98%'>$dg[question]</td>		
		
                                    </tr>";
                                }
                            ?>
                        </table>
                        <div>
                            <input type="submit" class="btn btn-primary" name="periksa" id="periksa" value="Lakukan Identifikasi"> 
                        </div>
                            
                        <?php
							if(isset($_POST['periksa'])){
								$jumlah = count($_POST["item"]);
								
								if($jumlah<1){
									echo "<script language=javascript>
											alert('Pilih satu atau beberapa gejala untuk melakukan identifikasi');
											window.location='?p=identifikasi'</script>";
								}else if($jumlah>=4){
								if($jumlah>110){
									echo "<script language=javascript>
											alert('Maksimal Inputkan 11 Gejala. Mohon Diulangi Kembali');
											window.location='?p=identifikasi'</script>";
								}else if($jumlah<=110){
								$sk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
								$dk = mysqli_fetch_array($sk);
								$k=$dk['identifikasi'];
								$identifikasi=$k+1;
								$id_user=$_SESSION['id_user'];
								
									for($i=0; $i < $jumlah; $i++){
										$gejala = $_POST["item"][$i];
										
										$sb = mysqli_query($kon,"select * from gejala where id_gejala=$gejala");
										$rb = mysqli_fetch_array($sb);
										$b1 = $rb['b1'];
										$b2 = $rb['b2'];
										$b3 = $rb['b3'];
										$b4 = $rb['b4'];
										$b5 = $rb['b5'];
										$b6 = $rb['b6'];

										$q=mysqli_query($kon,"insert into hasil_identifikasi (id_user, identifikasi, id_gejala, b1, b2, b3, b4, b5, b6, waktu) value ('$id_user', $identifikasi, '$gejala', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', NOW())") or die(mysqli_error());
										
										if ($q){
											$nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
											$r = mysqli_fetch_array($nk);
											echo "<script language=javascript>
													alert('Lihat Hasil');
													window.location='?p=hasil&id=$id_user&identifikasi=$r[identifikasi]';
													</script>";
										}
										else{
											echo "identifikasi Gagal";
											echo "Silahkan <a href = '?p=identifikasi'>Ulangi Disini</a>";
										}
									}                            
								}
							}
							}
                        ?>
                    </form>

		</div>

  
</div>

</div>

</div>

</div>

<br><br><br><br>
<?php }else{
		echo "<script language='javascript'>
		alert('Sebelum melakukan identifikasi, silahkan login terlebih dahulu');
		window.location=('?p=login')</script>";
} ?>

</body>
</html>