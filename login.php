<?php
session_start();
$conn = mysqli_connect("localhost","root", "", "tugasakhir");

if(isset($_POST["login"])){
	$username = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1 ){
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {

			// set session
			$_SESSION["login"] = true;

			header("location: Dashboard/dashboard.php");
			exit;
		}
	}

	$error = true;
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1"
		/>

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>

		<!-- My Css -->
        <!-- <link rel="stylesheet" href="login.css"> 
    -->
        <link rel="stylesheet" href="style.css">

		<title>Login Page</title>
	</head>
	<body>
		<!--Form-->
		<div class="form">
			<div class="jumbotron text-center">
				<h1 class="welcome">Welcome</h1>
				<p>We Have your Technology to be great</p>
				<div class="container pb-4">
					<div class="row text-center">
						<div class="col mt-3">
							<h1 class="display-4">Masukkan Akun</h1>
						</div>
					</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-2">
						<form name="customer" action="" method="post">
							<div class="mb-3">
								<label
									for="email"
									class="form-label"
									>Email</label
								>
								<input
									name="email"
									type="email"
									class="form-control"
									id="email"
									placeholder="Email"
								/>
							</div>
							<div class="mb-3">
								<label
									for="password"
									class="form-label"
									>Password</label
								>
								<input
									name="password"
									type="password"
									class="form-control"
									id="password"
									placeholder="Password"
								/><br>
							</div>
							<?php if ( isset($error) ) : ?>
								<p class="text-danger"><i>Username atau password salah!</i></p>
							<?php endif; ?>
							<button name="login" id="tombol" type="submit" class="btn btn-dark btn-lg mb-5" href="#">Login</button>
						</form>
						<a class="link" href="register/register.php">Don't have an account</a>
					</div>
				</div>
			</div>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>
	</body>
</html>