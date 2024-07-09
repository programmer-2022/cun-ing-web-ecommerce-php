<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>E-Shopper</title>
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
								<a href="index.php" class="nav-item nav-link active"
									>Home</a
								>
								<a href="products.php" class="nav-item nav-link"
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
					<div
						id="header-carousel"
						class="carousel slide"
						data-ride="carousel"
					>
						<div class="carousel-inner">
							<div class="carousel-item active" style="height: 410px">
								<img
									class="img-fluid"
									src="img/carousel-1.jpg"
									alt="Image"
								/>
								<div
									class="carousel-caption d-flex flex-column align-items-center justify-content-center"
								>
									<div class="p-3" style="max-width: 700px">
										<h4
											class="text-light text-uppercase font-weight-medium mb-3"
										>
											10% Off Your First Order
										</h4>
										<h3
											class="display-4 text-white font-weight-semi-bold mb-4"
										>
											Fashionable Dress
										</h3>
									</div>
								</div>
							</div>
							<div class="carousel-item" style="height: 410px">
								<img
									class="img-fluid"
									src="img/carousel-2.jpg"
									alt="Image"
								/>
								<div
									class="carousel-caption d-flex flex-column align-items-center justify-content-center"
								>
									<div class="p-3" style="max-width: 700px">
										<h4
											class="text-light text-uppercase font-weight-medium mb-3"
										>
											10% Off Your First Order
										</h4>
										<h3
											class="display-4 text-white font-weight-semi-bold mb-4"
										>
											Reasonable Price
										</h3>
									</div>
								</div>
							</div>
						</div>
						<a
							class="carousel-control-prev"
							href="#header-carousel"
							data-slide="prev"
						>
							<div class="btn btn-dark" style="width: 45px; height: 45px">
								<span class="carousel-control-prev-icon mb-n2"></span>
							</div>
						</a>
						<a
							class="carousel-control-next"
							href="#header-carousel"
							data-slide="next"
						>
							<div class="btn btn-dark" style="width: 45px; height: 45px">
								<span class="carousel-control-next-icon mb-n2"></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Navbar End -->

		<!-- Footer Start -->
		<?php include 'footer.html'; ?>
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
