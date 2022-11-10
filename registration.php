<?php
require 'config.php';
if (!empty($_SESSION['id'])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confPassword = $_POST["confPassword"];

    $profilePic = $_FILES["profilePic"]["name"];
    $profilePic_tmp = $_FILES['profilePic']["tmp_name"];

    $characterSafety = "/^[a-zA-Z ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

    if (!preg_match($emailValidation, $email)) {
        echo "<script>alert('$email is not valid!');</script>";
    } else if (strlen($password) < 6) {
        echo "<script>alert('Password must be 6 characters or more');</script>";
    } else if (strlen($confPassword) < 6) {
        echo "<script>alert('Password must be 6 characters or more');</script>";
    } else if ($password == $username || $confPassword == $username) {
        echo "<script>alert('Password cannot be the same as your username!');</script>";
    } else if (empty($profilePic)) {
        echo "<script>alert('You must have a Profile Picture!');</script>";
    } else {
        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script> alert('Username or Email already exists!'); </script>";
        } else {
            if ($password == $confPassword) {
                // $encPassword = md5($password);
                move_uploaded_file($profilePic_tmp, "../assets/profilePictures/$profilePic");

                $query = "INSERT INTO `users`(`email`, `name`, `username`, `password`, `profilePic`)
                VALUES ('$email','$name','$username','$password','$profilePic')";
                mysqli_query($conn, $query);
                echo "<script> alert('Registration Succesful!'); </script>";
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['ID'];
                header("Location: index.php");
            } else {
                echo "<script> alert('Password does not match!'); </script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

    <div class="transition-1 is-active" id="transition"></div>

    <main>
        <div id="main">
            <div class="signin_form">
                <h2>Quotopia</h2>
                <form action="" method="post" autocomplete="off" id="mainForm form" enctype="multipart/form-data">
                    <div class="inputBox">
                        <input class="registInp emailInp" placeholder="" type="text" name="email" id="email" required value=""> <br>
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <input class="registInp nameInp" placeholder="" type="text" name="name" id="name" required value=""> <br>
                        <span>Name</span>
                    </div>

                    <div class="inputBox">
                        <input class="registInp usernameInp" placeholder="" type="text" name="username" id="username" required value=""> <br>
                        <span>Username</span>
                    </div>

                    <div class="inputBox">
                        <input class="registInp passwordInp" placeholder="" type="password" name="password" id="password" required value=""> <br>
                        <span>Password</span>
                    </div>

                    <div class="inputBox">
                        <input class="registInp confPasswordInp" placeholder="" type="password" name="confPassword" id="confPassword" required value=""> <br>
                        <span>Confirm Password</span>
                    </div>
                    <div class="inputBox">
                        <input type="file" name="profilePic" require>
                        <span>Profile Picture</span>
                    </div>
                    <button class="button submitBtn" type="submit" name="submit">Register</button>
                </form>
                <br>
                <p>Already have an account? <a href="./login.php">Login</a></p>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>