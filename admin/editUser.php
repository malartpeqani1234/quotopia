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

$user_id = $_REQUEST['id'];
$result = mysqli_query($conn, "select ID, email,name, username, password, usertype from users where ID='$user_id'") or die("query 1 incorrect.......");

list($user_id, $email, $name, $username, $password, $usertype) = mysqli_fetch_array($result);

if (isset($_POST['updateUser'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $updateQuery = "UPDATE users SET email='$email', name='$name', username='$username', password='$password' WHERE ID='$user_id'";

    mysqli_query($conn, $updateQuery) or die("Query 2 is inncorrect..........");

    header("location: ./manageUser.php");
    mysqli_close($conn);
}

?>

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
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h5 class="title">Edit User</h5>
                </div>
                <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Id</label>
                                <input type="text" id="id" name="id" class="form-control" disabled value="<?php echo $user_id; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Password</label>
                                <input disabled="disabled" type="text" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="usertypes">Usertype:</label>
                                <select name="pickType" id="usertypes">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="mod">Mod</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="btn_save" name="updateUser" class="btn btn-fill btn-primary">Update User</button>
                    </div>
                </form>
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