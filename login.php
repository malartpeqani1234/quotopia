<?php
include './config.php';
$time = $_SERVER['REQUEST_TIME'];
if (!empty($_SESSION['id'])) {
	header("Location: index.php");
}
if (isset($_POST['submit'])) {
	$usernameemail = $_POST['usernameemail'];
	$password = $_POST['password'];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail'");
	$row = mysqli_fetch_assoc($result);

	// Admin Log In
	if ($row['usertype'] == 'admin' && $row["password"] == 'mali123') {
		$_SESSION['adminLogin'] = true;
		$_SESSION['uid'] = $row['ID'];
		header("Location: ./admin/index.php");
	} else {
		echo "<script>alert('Username or Email doesnt exist!')</script>";
	}

	// User Log In
	if ($row['usertype'] == "user" && $password == $row['password']) {
		$_SESSION['login'] = true;
		$_SESSION['id'] = $row['ID'];
		$_SESSION['name'] = $row["name"];
		$_SESSION['LAST_ACTIVITY'] = $time;
		header("Location: index.php");
	} else {
		echo "<script> alert('Username/Email or Password is incorrect!'); </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
	<link rel="stylesheet" href="./styles/reset.css">
	<link rel="stylesheet" href="./styles/style.css">
</head>

<main>
	<div id="main2">
		<div class="login_form">
			<h2>Login</h2>
			<form action="" method="post" autocomplete="off" id="mainForm form">
				<div class="inputBox">
					<input type="text" name="usernameemail" id="usernameemail" required value=""> <br>
					<span>Username or Email</span>
				</div>

				<div class="inputBox">
					<input type="password" name="password" id="password" required value=""> <br>
					<span>Password</span>
				</div>
				<button type="submit" name="submit">Login</button>
			</form>
			<p>Don't have an account? <a href="./registration.php"> Sign in</a></p>
		</div>
	</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>