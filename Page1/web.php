<?php
	session_start();

	if ( !isset($_SESSION["login"]) ) {
		header("location: ../login.php");
		exit;
	}

	$conn = mysqli_connect("localhost", "root", "", "tugasakhir");

	if (isset($_POST["kirim"]) ){
		$nama = $_POST["nama"];
		$no = $_POST["no"];
		$email = $_POST["email"];
		$pesanan = $_POST["pesanan"];
	
		$query = "INSERT INTO web VALUES ('','$nama','$no','$email','$pesanan'); ";
	
		mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) > 0 ) {
			echo "
				<script>
					alert('pesanan berhasil di tambahkan!');
				</script>
			";
		} else {
			echo "
			<script>
				alert('pesanan gagal di tambahkan!');
			</script>
			";
		}
	
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

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

		<!-- My Css -->
		<link
			rel="stylesheet"
			href="style.css" />

		<title> Web Development</title>
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
						<li class="nav-item">
							<a
								class="nav-link"
								aria-current="page"
								href="../Dashboard/dashboard.php"
								>Dashboard</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link active"
								href="../Page1/web.php"
								>Web Developer</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="../Page2/android.php">
								Android Developer
							</a>
						</li>
						<li class="nav-item">
							<a
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
		<div class="hero">
			<div class="jumbotron text-center">
				<h1 class="display-4">Web Developer</h1>
				<p>Buat Websitemu menarik dan aman</p>
				<p class="lead">Buat website untuk peusahaanmu sekarang, dengan mengklik tombol di bawah ini</p>
				<a
					class="btn btn-dark btn-lg"
					href="#pesanan"
					>Pesan Sekarang</a
				>
			</div>
		</div>
		<!-- akhir Jumbotron -->

		<!-- Pesanan -->
		<section
			class="pesanan"
			id="pesanan">
			<div class="container pb-4">
				<div class="row text-center">
					<div class="col mt-5">
						<h1 class="display-4">Masukkan Data Diri</h1>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-2">
						<form action="" method="post" >
							<div class="mb-3">
								<label
									for="nama"
									class="form-label"
									>Nama</label
								>
								<input
									name="nama"
									type="text"
									class="form-control"
									id="nama"
									placeholder="Masukkan Nama/Nama perusahaan" />
							</div>
							<div class="mb-3">
								<label
									for="no"
									class="form-label"
									>No Whatsapp</label
								>
								<input
									name="no"
									type="text"
									class="form-control"
									id="no"
									placeholder="Masukkan No Whatsapp" />
							</div>
							<div class="mb-3">
								<label
									for="email"
									class="form-label"
									>Alamat Email</label
								>
								<input
									name="email"
									type="email"
									class="form-control"
									id="email"
									placeholder="Masukkan Alamat Email" />
							</div>
							<div class="mb-3">
								<label
									for="pesanan"
									class="form-label"
									>Detail Pesanan</label
								>
								<textarea
									name="pesanan"
									class="form-control"
									id="pesanan"
									rows="4"
									placeholder="Tuliskan Detail Pesanan"></textarea>
								<button
									id="kirim"
									name="kirim"
									type="submit"
									class="btn btn-dark mt-4 btn-kirim">
									Kirim
								</button>
								<button
									id="loading"
									class="btn btn-dark mt-4 d-none btn-loading"
									type="button"
									disabled>
									<span
										class="spinner-border spinner-border-sm"
										role="status"
										aria-hidden="true"></span>
									Loading...
								</button>
							</div>
							<div
								id="alert"
								class="alert alert-warning alert-dismissible fade show d-none my-alert"
								role="alert">
								<strong>Pesanan Diterima!</strong> Terima kasih.
								<button
									id="tutup"
									type="button"
									class="btn-close"
									data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- akhir Pesanan -->

		<!-- Footer -->
		<footer class="text-center">
			<p>Copyright <i class="bi bi-c-circle"></i> 2022 <a href="../timPengembang/Page5/page5.html">Tim Pengembang</a></p>
		</footer>
		<!-- akhir Footer -->

		<!-- Bootstrap Bundle with Popper -->
		<!-- <script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script> -->
	</body>
</html>
