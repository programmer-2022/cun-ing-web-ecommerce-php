<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>E-Shopper - Productos</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="Free HTML Templates" name="keywords" />
		<meta content="Free HTML Templates" name="description" />

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
			rel="stylesheet"
		/>

		<!-- Font Awesome -->
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
			rel="stylesheet"
		/>

		<!-- Libraries Stylesheet -->
		<link
			href="lib/owlcarousel/assets/owl.carousel.min.css"
			rel="stylesheet"
		/>

		<!-- Customized Bootstrap Stylesheet -->
		<link href="css/style.css" rel="stylesheet" />
	</head>

	<body>
		<!-- Topbar Start -->
		<div class="container-fluid">
			<div class="row bg-secondary py-2 px-xl-5">
				<div class="col-lg-6 d-none d-lg-block">
					<div class="d-inline-flex align-items-center">
						<a class="text-dark" href="">E-Shopper</a>
						<span class="text-muted px-2">|</span>
						<a class="text-dark" href="">Bogota DC</a>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="d-inline-flex align-items-center">
						<a class="text-dark px-2" href="">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="text-dark pl-2" href="">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row align-items-center py-3 px-xl-5">
				<div class="col-lg-3 d-none d-lg-block">
					<a href="index.php" class="text-decoration-none">
						<h1 class="m-0 display-5 font-weight-semi-bold">
							<span
								class="text-primary font-weight-bold border px-3 mr-1"
								>E</span
							>Shopper
						</h1>
					</a>
				</div>
			</div>
		</div>
		<!-- Topbar End -->
		
		<!-- Navbar Start -->
		<div class="container-fluid mb-5">
			<div class="row border-top px-xl-5">
				<div class="col-lg-12">
					<nav
						class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
					>
						<a
							href="index.php"
							class="text-decoration-none d-block d-lg-none"
						>
							<h1 class="m-0 display-5 font-weight-semi-bold">
								<span
									class="text-primary font-weight-bold border px-3 mr-1"
									>E</span
								>Shopper
							</h1>
						</a>
						<button
							type="button"
							class="navbar-toggler"
							data-toggle="collapse"
							data-target="#navbarCollapse"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div
							class="collapse navbar-collapse justify-content-between"
							id="navbarCollapse"
						>
							<div class="navbar-nav mr-auto py-0">
								<a href="index.php" class="nav-item nav-link"
									>Home</a
								>
								<a href="products.php" class="nav-item nav-link active"
									>Products</a
								>
								<a href="contact.php" class="nav-item nav-link"
									>Contact</a
								>
							</div>
							<div class="navbar-nav ml-auto py-0">
								<a href="login.html" class="nav-item nav-link">Login</a>
							</div>
						</div>
					</nav>
					
				</div>
			</div>
		</div>

		<!-- Navbar End -->

		<!-- Categories Start -->
		<div class="container-fluid pt-5">
    		<div class="row px-xl-5 pb-3">
						<?php
							include 'obtener_productos.php';
											
							if (!empty($productos)) {				
								foreach ($productos as $producto) {
									echo "<div class='col-lg-4 col-md-6 pb-1'>";
									echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>";
									echo "<a href='' class='cat-img position-relative overflow-hidden mb-3'>";
									echo "<img class='img-fluid' src='{$producto['imagen']}' alt='' />";
									echo "</a>";
									echo "<h5 class='font-weight-semi-bold m-0'>{$producto['nombre']}</h5>";
									echo "<button class='btn btn-primary mt-3'>Cotizar</button>";
									echo "</div>";
									echo "</div>";
								}
							} else {
								echo "<h3>Ocurri&oacute; un error, contacte un administrador</h3>";
							}   
                		?>
	
			</div>
		</div>

		<!-- <div class="container-fluid pt-5">
			<div class="row px-xl-5 pb-3">
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-1.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">Men's dresses</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-2.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">
							Women's dresses
						</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-3.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">
							Baby's dresses
						</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-4.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">Accessories</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-5.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">Bags</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-1">
					<div
						class="cat-item d-flex flex-column border mb-4"
						style="padding: 30px"
					>
						<a
							href=""
							class="cat-img position-relative overflow-hidden mb-3"
						>
							<img class="img-fluid" src="img/cat-6.jpg" alt="" />
						</a>
						<h5 class="font-weight-semi-bold m-0">Shoes</h5>
						<button class="btn btn-primary mt-3">Cotizar</button>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Categories End -->

		<!-- Footer Start -->
		<div class="container-fluid bg-secondary text-dark mt-1 pt-1">
			<div class="row border-top border-light mx-xl-5 py-4">
				<div class="col-md-7 px-xl-0">
					<p class="mb-md-0 text-center text-md-left text-dark">
						&copy;
						<a class="text-dark font-weight-semi-bold" href="#"
							>Ecommerce - E-Shopper</a
						>. All Rights Reserved. Designed by
						<a
							class="text-dark font-weight-semi-bold"
							href="https://htmlcodex.com"
							>Cesar Martinez</a
						>
					</p>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-primary back-to-top"
			><i class="fa fa-angle-double-up"></i
		></a>

		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script src="lib/easing/easing.min.js"></script>
		<script src="lib/owlcarousel/owl.carousel.min.js"></script>

		<!-- Contact Javascript File -->
		<script src="mail/jqBootstrapValidation.min.js"></script>
		<script src="mail/contact.js"></script>

		<!-- Template Javascript -->
		<script src="js/main.js"></script>
	</body>
</html>
