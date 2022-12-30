<?php

$conn = mysqli_connect("localhost","root", "", "tugasakhir");


function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // pengecekan email sudah ada
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$username'");

    if (mysqli_fetch_assoc($result) ) {
        echo    "<script>
                    alert('email sudah terdaftar!');
                </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo    "<script>
                    alert('password tidak sesuai!');
                </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambah ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

if (isset($_POST["register"]) ){

    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('akun berhasil di tambahkan');
              </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>



<!doctype html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">

    <!--Css icon-->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>

    <!-- My Css -->
		<link
        rel="stylesheet"
        href="style.css"
    />

    <!--link font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Registration Page</title>

</head>
<body>
    <!--form-->
    <div class="row justify-content-center">
        <div class="col-6">
            <h1 class="text-center mt-5">Registration Account</h1>
            <div class="login-form">
                <form class="row login text-center justify-content-center mt-3" action="" method="post"  >
                            <!--input email-->
                        <label for="email" class="form-label ">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email">
                        <!--input password-->
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                        <!--confirm password-->
                        <label for="password2" class="form-label">Confirm Password</label>
                        <input type="password" name="password2" class="form-control mb-3" id="password2" placeholder="Confirm your password">
                        <button class="signin mb-4" type="submit" name="register">Register</button>
                        <a class="link" href="../login.php">Login</a>
                </form>
                
            </div>  
        </div>
    </div>
	<script src="script.js"></script>
</body>
</html>
