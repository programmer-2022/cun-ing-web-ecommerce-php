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

    <title>E-Shopper - Dashboard</title>

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
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
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
                                Registered Products
                            </h6>
                            <div class="mt-4">
                                <button class="btn btn-success w-25 btn-create" data-toggle='modal'
                                    data-target='#createModal' data-toggle='tooltip' data-placement='top'
                                    title='Create'>New Product</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Registration Date</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Registration Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
											include 'obtener_productos.php';
											
											if (!empty($productos)) {
												foreach ($productos as $producto) {
													echo "<tr>													
														<td class='product-id'>{$producto['id']}</td>
														<td><img src='{$producto['imagen']}' alt='{$producto['nombre']}' width='50' class='product-image'></td>
														<td class='product-name'>{$producto['nombre']}</td>
														<td class='product-description'>{$producto['descripcion']}</td>
														<td class='product-category'>{$producto['categoria']}</td>
														<td class='product-price'>{$producto['precio']}</td>
														<td>{$producto['fecha_registro']}</td>
														<td>
															<div class='d-flex justify-content-around'>
																<button class='btn btn-outline-danger mr-2 btn-delete' data-id='{$producto['id']}' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fas fa-trash-alt'></i></button>
																<button class='btn btn-outline-primary mr-2 btn-edit' data-id='{$producto['id']}' data-toggle='modal' data-target='#editModal' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fas fa-edit'></i></button>															
															</div>
														</td>
													</tr>";
												}
											} else {
												echo "<tr><td colspan='7'>No se encontraron productos.</td></tr>";
											}
											?>
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Modal para editar producto -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editProductForm" name="editProductForm" novalidate="novalidate">
                        <input type="hidden" id="txtProductId" name="txtProductId" value="">
                        <div class="mb-3">
                            <label for="txtProductName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="txtProductName" name="txtProductName"
                                autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="txtDescription" class="form-label">Description</label>
                            <input class="form-control" id="txtDescription" name="txtDescription" />
                        </div>
                        <div class="mb-3">
                            <label for="txtCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="txtCategory" name="txtCategory">
                        </div>
                        <div class="mb-3">
                            <label for="txtPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="txtPrice" name="txtPrice">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Crear producto -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Crear Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createProductForm" name="createProductForm" novalidate="novalidate" method="POST"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="txtProductName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="txtProductName" name="txtProductName" autofocus
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="txtDescription" class="form-label">Description</label>
                            <input class="form-control" id="txtDescription" name="txtDescription" required />
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="file" name="file" required />
                        </div>
                        <div class="mb-3">
                            <label for="txtCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="txtCategory" name="txtCategory" required />
                        </div>
                        <div class="mb-3">
                            <label for="txtPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="txtPrice" name="txtPrice" required />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/eliminar_producto.js"></script>
    <script src="js/modal_editar_producto.js"></script>
    <script src="js/editar_producto.js"></script>
    <script src="js/crear_producto.js"></script>
</body>

</html>