<?php
	session_start();
	if(!empty($_SESSION['namaadm']) && !empty($_SESSION['passadm'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Identifikasi Gejala COVID-19 || ADMINISTRATOR</title>
    <link rel="icon" type="image/x-icon" href="images/logo2.png" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->



    </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo"?p=home";?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"?p=klaster";?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Klaster</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"?p=gejala";?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Gejala</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"?p=basiskasus";?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Basis Kasus</span></a>
            </li>
			            <!-- Nav Item - Tables -->
						<li class="nav-item">
                <a class="nav-link" href="<?php echo"?p=hasilidentifikasi";?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Riwayat Identifikasi</span></a>
            </li>
             <!-- Nav Item - Tables -->
						<li class="nav-item">
                <a class="nav-link" href="<?php echo"?p=user";?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>LOGOUT</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                             <!-- Dropdown - Messages -->
                             <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
            
                        <!-- Nav Item - Charts -->
                        <li class="nav-item dropdown arrow">
                            <a style="color:black;" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-exclamation"></i>
                                <span>INFORMASI TERKAIT COVID-19</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" target="blank" href="https://covid19.go.id">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Info COVID-19 Indonesia
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="blank" href="https://pikobar.jabarprov.go.id">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Info COVID-19 Jawa Barat
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="blank" href="https://pikobar.jabarprov.go.id/distribution-case">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Peta Sebaran COVID-19 Jawa Barat
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="blank" href="https://cov-lineages.org">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    COVID LINEAGES 
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

					<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
	<?php
		if ($_GET["p"] == "klaster"){
			include "klaster.php";
		}else if ($_GET["p"] == "addklaster"){
			include "addklaster.php";
		}else if ($_GET["p"] == "addklasteraksi"){
			include "addklasteraksi.php";
		}else if ($_GET["p"] == "editklaster"){
			include "editklaster.php";
		}else if ($_GET["p"] == "editklasteraksi"){
			include "editklasteraksi.php";
		}else if ($_GET["p"] == "hapusklaster"){
			include "hapusklaster.php";
		}else if ($_GET["p"] == "logout"){
			include "logout.php";
		}else if ($_GET["p"] == "gejala"){
			include "gejala.php";
		}else if ($_GET["p"] == "addgejala"){
			include "addgejala.php";
		}else if ($_GET["p"] == "hapusgejala"){
			include "hapusgejala.php";
		}else if ($_GET["p"] == "editgejala"){
			include "editgejala.php";
		}else if ($_GET["p"] == "basiskasus"){
			include "basiskasus.php";
		}else if ($_GET["p"] == "addbasiskasus"){
			include "addbasiskasus.php";
		}else if ($_GET["p"] == "hapusbasiskasus"){
			include "hapusbasiskasus.php";
		}else if ($_GET["p"] == "editbasiskasus"){
			include "editbasiskasus.php";
		}else if ($_GET["p"] == "hasilidentifikasi"){
			include "hasilidentifikasi.php";
		}else if ($_GET["p"] == "hapushasilidentifikasi"){
			include "hapushasilidentifikasi.php";
    }else if ($_GET["p"] == "user"){
        include "user.php";
    }else if ($_GET["p"] == "hapususer"){
        include "hapususer.php";
    }else if ($_GET["p"] == "edituser"){
        include "edituser.php";
    }else{
			include "dashboard.php";
		}
		?>
</div>


            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; I C O V 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    </body>

</html>


 <?php
	}else{
			include "login.php";
		}			
			?>