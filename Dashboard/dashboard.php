<?php
	session_start();

	if ( !isset($_SESSION["login"]) ) {
		header("location: ../login.php");
		exit;
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous" />
		<!-- Css Icon -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

		<!-- My Css -->
		<link
			rel="stylesheet"
			href="style.css" />

		<title>Web Development</title>
	</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<a
					class="navbar-brand"
					href="#"
					><i class="bi bi-fire"></i
				></a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div
					class="collapse navbar-collapse"
					id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li
							class="nav-item"
							id="dashboard">
							<a
								class="nav-link active"
								aria-current="page"
								href="../Dashboard/dashboard.html"
								>Dashboard</a
							>
						</li>
						<li class="nav-item">
							<a
								id="web"
								class="nav-link"
								href="../Page1/web.php"
								>Web Developer</a
							>
						</li>
						<li class="nav-item">
							<a
								id="app"
								class="nav-link"
								href="../Page2/android.php">
								Android Developer
							</a>
						</li>
						<li class="nav-item">
							<a
								id="graphic"
								class="nav-link"
								href="../Page3/graphic.php"
								>Graphic Design</a
							>
						</li>
					</ul>
					<form class="d-flex">
						<input
							class="form-control me-2"
							type="search"
							placeholder="Search"
							aria-label="Search" />
						<button
							class="btn btn-dark"
							type="submit">
							Search
						</button>
					</form>
					<a href="../logout.php"><i class="bi bi-door-open-fill"></i></a>
				</div>
			</div>
		</nav>
		<!-- Akhir Navbar -->

		<!-- Jumbotron -->
		<div class="jumbotron">
			<div
				id="carouselExampleCaptions"
				class="carousel slide"
				data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="0"
						class="active bg-dark"
						aria-current="true"
						aria-label="Slide 1"></button>
					<button
						class="bg-dark"
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button
						class="bg-dark"
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img
							src="img/img4.jpg"
							class="d-block w-100"
							alt="" />
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Some representative placeholder content for the first slide.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="img/img2.jpg"
							class="d-block w-100"
							alt="..." />
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Some representative placeholder content for the second slide.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="img/img3.jpg"
							class="d-block w-100"
							alt="..." />
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-dark">Third slide label</h5>
							<p class="text-dark">Some representative placeholder content for the third slide.</p>
						</div>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="prev">
					<span
						class="carousel-control-prev-icon"
						aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="next">
					<span
						class="carousel-control-next-icon"
						aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!-- akhir Jumbotron -->

		<!-- Footer -->
		<footer class="text-center">
			<p>Copyright <i class="bi bi-c-circle"></i> 2022 <a href="../timPengembang/Page5/page5.html">Tim Pengembang</a></p>
		</footer>
		<!-- akhir Footer -->

		<!-- Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>
	</body>
</html>
