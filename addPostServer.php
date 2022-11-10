<?php
// include "./config.php";
if (isset($_POST["addPostBtn"])) {
    $username = $_SESSION['username'];
    $quoteInp = mysqli_real_escape_string($conn, $_POST["quoteInp"]);
    $authorInp = mysqli_real_escape_string($conn, $_POST["authorInp"]);

    $bgPostInp = $_FILES['bgPostInp']["name"];
    $bgPostInp_tmp = $_FILES['bgPostInp']["tmp_name"];

    $query = "INSERT INTO `posts`(`bgImage`, `quote`, `author`, `userId`) VALUES ('$bgPostInp','$quoteInp,'$authorInp','$username')";

    mysqli_query($conn, $query);
    echo "<script>alert('Quote Posted Succesfully!!!');</script>";
    header("Location: ./index.php");
}
