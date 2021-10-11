<?php
	session_start();
	include "koneksi.php";
?>



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
                                    <form class="user" method="post" action="loginaksi.php">
                                        <div class="form-group">
                                            <input name="username" placeholder="Username" required type="text" class="form-control form-control-user"
                                                placeholder="Masukkan username...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" placeholder="Password" required type="password" class="form-control form-control-user"
                                                 placeholder="Masukkan Password...">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="Submit" value="LOGIN"></input>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.php?p=lupapass">Lupa Password?</a>
                                    </div>
                                    <div class="text-center"> Belum mempunyai akun? 
                                        <a class="small" href="<?php echo "?p=registrasi"; ?>"> Lakukan Registrasi</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>

