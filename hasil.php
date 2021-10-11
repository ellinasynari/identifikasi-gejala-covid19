<?php
	session_start();
	$id = $_GET['id'];
	$identifikasi = $_GET['identifikasi'];			
?>
                    <div class="card shadow mb-4">
                        <!-- Page Heading -->
                        <a href="#" class="d-block card-header py-3" aria-expanded="true" aria-controls="collapseCardExample">
                          <h6 class="m-0 font-weight-bold text-primary">Hasil Identifikasi</h6>
                        </a>

                                <div class="d-block card-body py-3">                            
                                    <div class="collapse show" id="collapseCardExample">
                                    <form style="color:black; margin-left: 18px;" method="post" action="">
                        
                    <?php
                                //PROSES klaster P001
                                $s1 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '1%') AND identifikasi=$identifikasi");
                                $r1 = mysqli_num_rows($s1);
                                
                                $ssum1 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b1,0)) as j1
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '1%')")
                                                        or die(mysqli_error());
                                $dsum1 = mysqli_fetch_array($ssum1);
                                $cek1=$dsum1['j1'];
                    $proses1 = $dsum1['j1']/16;
                    $proses1_ok = number_format($proses1, 2, '.', '');
                  $peroa1 = $proses1_ok*100;
                                //echo"$cek1";
                                //PROSES klaster P002
                                $s2 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '2%') AND identifikasi=$identifikasi");
                                $r2 = mysqli_num_rows($s2);
                                
                                $ssum2 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b2,0)) as j2
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '2%')")
                                                        or die(mysql_error());
                                $dsum2 = mysqli_fetch_array($ssum2);
                    $cek2=$dsum2['j2'];
                                $proses2 = $dsum2['j2']/21;
                    $proses2_ok = number_format($proses2, 2, '.', '');
                  $peroa2 = $proses2_ok*100;
                                //echo"$cek2";
                                //PROSES klaster P003
                                $s3 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '3%') AND identifikasi=$identifikasi");
                                $r3 = mysqli_num_rows($s3);
                                
                                $ssum3 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b3,0)) as j3
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '3%')")
                                                        or die(mysqli_error());
                                $dsum3 = mysqli_fetch_array($ssum3);
                    $cek3=$dsum3['j3'];
                                $proses3 = $dsum3['j3']/20;
                    $proses3_ok = number_format($proses3, 2, '.', '');
                  $peroa3 = $proses3_ok*100;
                                //echo"$cek3";
                                //PROSES klaster P004
                                $s4 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '4%') AND identifikasi=$identifikasi");
                                $r4 = mysqli_num_rows($s4);
                                
                                $ssum4 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b4,0)) as j4
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '4%')")
                                                        or die(mysqli_error());
                                $dsum4 = mysqli_fetch_array($ssum4);
                    $cek4=$dsum4['j4'];
                                $proses4 = $dsum4['j4']/25;
                    $proses4_ok = number_format($proses4, 2, '.', '');
                  $peroa4 = $proses4_ok*100;
                               // echo"$cek4";
                                //PROSES klaster P005
                                $s5 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '5%') AND identifikasi=$identifikasi");
                                $r5 = mysqli_num_rows($s5);
                                
                                $ssum5 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b5,0)) as j5
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '5%')")
                                                        or die(mysqli_error());
                                $dsum5 = mysqli_fetch_array($ssum5);
                    $cek5=$dsum5['j5'];
                                $proses5 = $dsum5['j5']/27;
                                
                                $proses5_ok = number_format($proses5, 2, '.', '');
                  $peroa5 = $proses5_ok*100;
                                //echo"$cek5";
                                //PROSES klaster P006
                                $s6 = mysqli_query($kon,"select * from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '6%') AND identifikasi=$identifikasi");
                                $r6 = mysqli_num_rows($s6);
                                
                                $ssum6 = mysqli_query($kon,"select sum(if(a.identifikasi=$identifikasi, a.b6,0)) as j6
                                                        from hasil_identifikasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.id_klaster like '6%')")
                                                        or die(mysqli_error());
                                $dsum6 = mysqli_fetch_array($ssum6);
                                $cek6= $dsum6['j6'];
                                $proses6 = $dsum6['j6']/31;
                                $proses6_ok = number_format($proses6, 2, '.', '');
                            $peroa6 = $proses6_ok*100;
                               // echo "$cek6";
         
                                //MEMBANDINGKAN NILAI SIMILARITY DAN MENGAMBIL NILAI YANG PALING TINGGI
                                $MAX = max($proses1, $proses2, $proses3, $proses4, $proses5, $proses6);
                                // echo "<div  style='margin-top:10px;'><font face='Times New Roman cursive'>
                                // Proses Perhitungan <b ><br>
                                 //   Flu Tanpa Demam: Similiarity = $cek1/16 = $proses1_ok x 100 = $peroa1%<br>
                                 //   Flu Dengan Demam: Similiarity = $cek2/21 = $proses2_ok x 100 = $peroa2 %<br>
                                 //   Gastrointestinal: Similiarity = $cek3/20 = $proses3_ok x 100 = $peroa3%<br> 
                                 //   Tingkat I Parah dengan Kelelahan: Similiarity = $cek4/25 = $proses4_ok x 100 = $peroa4%<br>
                                  //  Tingkat II Parah dengan Kebingungan: Similiarity = $cek5/27 = $proses5_ok x 100 = $peroa5%<br>
                                  //  Tingkat III Parah dengan Sesak Napas: Similiarity = $cek6/31 = $proses6_ok x 100 = $peroa6 %<br></b></font></div>";
                                
                                //MENAMPILKAN HASIL AKHIR
                                if($MAX==$proses1){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '1%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon,"select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                      
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>
                                    Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>
                                    Gejala yang dipilih:</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                                    
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>
                                    Berdasarkan gejala anda, kemungkinan anda memiliki: <b><u>$dp[nm_klaster]</u></b></font></div>";
                                   // echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>
                                    //Keterangan: <b><u>$dp[keterangan]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak </a>";
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
                                }
                                else if($MAX==$proses2){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '2%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon, "select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                      
                                    echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala anda, kemungkinan anda memiliki: <b ><u>$dp[nm_klaster]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak 
                      </a>";
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
                                }
                                else if($MAX==$proses3){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '3%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon,"select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                                    
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                      
                                    echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala anda, kemungkinan anda memiliki: <b ><u>$dp[nm_klaster]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak 
                      </a>";
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
                                }
                                else if($MAX==$proses4){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '4%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon,"select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                      
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                                    
                                    
                                    echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala anda, kemungkinan anda memiliki: <b ><u>$dp[nm_klaster]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak 
                      </a>";
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
                                }
                                else if($MAX==$proses5){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '5%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon,"select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                                    
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                                    
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala anda, kemungkinan anda memiliki: <b ><u>$dp[nm_klaster]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak 
                      </a>";
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
         }
                                else if($MAX==$proses6){
                                    $sp = mysqli_query($kon,"select * from klaster where id_klaster LIKE '6%'") or die(mysqli_error());
                                    $dp = mysqli_fetch_array($sp);
                                    $spas =  mysqli_query($kon,"select * from user where id_user='$id'") or die(mysqli_error());
                                    $dpas = mysqli_fetch_array($spas);
                      $nk = mysqli_query($kon,"select * from hasil_identifikasi group by waktu desc limit 1");
                      $r = mysqli_fetch_array($nk);
                                    
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama user: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
                      $h = mysqli_query($kon, "select * from hasil_identifikasi where identifikasi='$identifikasi'");
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
                      while($rh=mysqli_fetch_array($h)){
                        $sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
                        $rg = mysqli_fetch_array($sg);
                      echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
                      }
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala anda, kemungkinan anda memiliki: <b ><u>$dp[nm_klaster]</u></b></font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Solusi:</b><br/>$dp[solusi]</font></div>";
                                    echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>
                                    Tingkat Butuh Bantuan Pernapasan:</b><br/>$dp[tingkat_butuh_oksigen]</font></div>";
                      echo "<br><a href='cetak.php?id=$id&identifikasi=$identifikasi' class='btn btn-success btn-lg' >
                          <span class='glyphicon glyphicon-print'></span> Cetak 
                      </a>";
                    
                                    $ket = mysqli_query($kon,"insert into keterangan (id_identifikasi, nama, tgl_identifikasi, nilai, id_klaster) values ('$identifikasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[id_klaster]')");
                                }
        
                               
                                
                        
                            ?>
                            
                            </form>

                                    </div>

  
                                </div>
 
                        </div>
                        
                    </div>

                  </div>
