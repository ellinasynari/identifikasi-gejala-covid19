
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-10 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Melakukan Login</h1>
                                    </div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input name="username" placeholder="Username" required type="text" class="form-control form-control-user"
                                                placeholder="Masukkan username...">
                                        </div>
										<div class="form-group">
                                            <input name="nama" placeholder="Nama Lengkap" required type="text" class="form-control form-control-user"
                                                placeholder="Masukkan nama lengkap...">
                                        </div>
										<div class="form-group">
                                            <input name="nohp" placeholder="Nomor HP" required type="text" class="form-control form-control-user"
                                                placeholder="Masukkan no hp...">
                                        </div>
                                        <input type="submit" name="Submit" value="Cek Password" class="btn btn-warning btn-user btn-block"></input>

                                    </form>
                                    <hr>
									<marquee direction ="left"> <b class="teal">Butuh bantuan menemukan password? hubungi admin melalui email </b></marquee>

                                </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>


<?php
include "koneksi.php";
	$un =$_POST['username'];
	$nm =$_POST['nama'];
	$nhp =$_POST['nohp'];
	$sqlpas = mysqli_query ($kon, "select * from user where username='$un' and nm_lengkap='$nm' and no_hp='$nhp'");
	$masuk =mysqli_fetch_array($sqlpas);
	$word = $masuk['password'];
	if (!empty($masuk)){
		echo "<script language=javascript>
				alert('Hai $nm password anda adalah $word');
				window.location=('?p=login')
				</script>";
	}
	else{
	echo "<script language=javascript>
    alert('Data yang kamu masukkan salah!');
				</script>";
	}

?>