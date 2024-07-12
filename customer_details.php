<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header('Location: login.html');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>E-Shopper - Messages</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles -->
    <link href="css/custom.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar-bg sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <span><b>Go to Main Page</b></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Products Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin-products.php">
                    <span><b>Products</b></span>
                </a>
            </li>

            <!-- Nav Item - Users Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin-users.php">
                    <span><b>Users</b></span>
                </a>
            </li>

            <!-- Nav Item - Messages Customers Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin-messages.php">
                    <span><b>Messages</b></span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <span><b>Logout</b></span>
                </a>
            </li>
            <!-- Sidebar Message -->
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cesar Martinez</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Customer Details
                            </h6>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>ID</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-id"></p>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>Name</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-name"></p>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>Email</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-email"></p>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>Subject</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-subject"></p>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>Message</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-message"></p>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6>
                                <strong>CreatedAt</strong>
                            </h6>
                            <div class="mt-2">
                                <p id="contact-createdAt"></p>
                            </div>
                        </div>
                        <div class="mt-5 card-header py-3">
                            <a class="btn btn-primary" href="admin-messages.php">Back</a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

    <script src="js/load_customer_details.js"></script>

</body>

</html>