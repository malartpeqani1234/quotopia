<?php
require "./config.php";
if (empty($_SESSION["id"])) {
    header("Location: login.php");
} else {
    $realTime = $_SERVER['REQUEST_TIME'];
    $timeout_duration = 1800;
    if (
        isset($_SESSION['LAST_ACTIVITY']) &&
        ($realTime - $_SESSION['LAST_ACTIVITY']) > $timeout_duration
    ) {
        session_unset();
        session_destroy();
        session_start();
        header("location: ./login.php");
    }
    $_SESSION['LAST_ACTIVITY'] = $realTime;
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
?>

<?php
    // include "./addPostServer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


    <!-- Self CSS link -->
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <!-- Self CSS link end -->
</head>

<body>
    <!-- <NAVBAR> -->
    <?php include "./sidebar.php"; ?>
    <!-- </NAVBAR> -->

    <!-- <MAIN> -->
    <?php include "./main.php"; ?>

    <!-- </MAIN> -->

    <a href="#" class="close"></a>
    <div id="contact-overlay">
        <div class="contact-form-wrap">
            <h1 class="formTitleIDK">Create New Post</h1>
            <form id="myForm" action="./addPostServer.php" method="POST" autocomplete="off">
                <div>
                    <textarea placeholder="Quote:" name="quoteInp" id="" cols="20" rows="10" required></textarea>
                </div>
                <div>
                    <input placeholder="Author" type="text" name="authorInp" id="name" required>
                </div>
                <div>
                    <label for="name">Background Image:</label>
                    <input type="file" name="bgPostInp" required>
                </div>
                <div>
                    <input type="submit" value="Add Post" name="addPostBtn">
                </div>
            </form>
        </div>
        <div class="dark-overlay"></div>
    </div>

    <script>
        $("a").click(function() {
            $("#contact-overlay").fadeToggle(250);
            $(".close").fadeToggle(250);
        });
    </script>



</body>

</html>