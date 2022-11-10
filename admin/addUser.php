<?php
require "../config.php";
if (empty($_SESSION["uid"])) {
    header("Location: ../login.php");
} else {
    $id = $_SESSION["uid"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    //echo "<script>alert('SOMETHING IS WRONG, FIX IT!!!');</script>";
}
?>

<?php
if (isset($_POST["addUserBtn"])) {
    $characterSafety = "/^[a-zA-Z ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pickType = $_POST['pickType'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];


    if (!preg_match($emailValidation, $email)) {
        echo "<script>alert('$email is not valid!');</script>";
    } else if (strlen($password) < 6) {
        echo "<script>alert('Password must be 6 characters or more');</script>";
    } else if ($password == $username) {
        echo "<script>alert('Password cannot be the same as your username!');</script>";
    } else {
        mysqli_query($conn, "INSERT INTO `users`(`email`, `name`, `username`, `password`, `usertype`) 
                            VALUES ('$email','$name','$username','$password','$pickType')") or die("Query 1 is inncorrect....");
        header("./manageUser.php");
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <!-- <Sidepanel> -->
    <?php include './admin-include/sidepanel.php'; ?>
    <!-- </Sidepanel> -->
    <!-- <Navbar> -->
    <?php include './admin-include/navpanel.php';
    ?>
    <!-- </Navbar> -->

    <!-- <Main Part of Page> -->
    <main class="allContent-section container-fluid my-5 mx-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Add Users</h4>
                    <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                    <form action="" method="POST" name="form" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group bmd-form-group">
                                    <input placeholder="Email:" type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <input placeholder="Name:" type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input placeholder="Username:" type="text" name="username" id="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input placeholder="Password:" type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label for="usertypes">Usertype:</label>
                                    <select name="pickType" id="usertypes">
                                        <option value="admin">Admin</option>
                                        <option value="mod">Mod</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <button type="submit" name="addUserBtn" id="addUser" class="btn btn-primary pull-right">Add User</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- </Main Part of Page> -->

    <!-- <Footer> -->
    <?php #include './footer.php'; 
    ?>
    <!-- </Footer> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>