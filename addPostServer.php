<?php
include "config.php";
if (isset($_POST["addPostBtn"])) {
    $username = $_SESSION['name'];
    $quoteInp = $_POST["quoteInp"];
    $authorInp = $_POST["authorInp"];

    $bgPostInp = $_FILES['bgPostInp']['name'];
    $bgPostInp_tmp = $_FILES['bgPostInp']['tmp_name'];

    echo $username.'<br>';
    echo $quoteInp.'<br>';
    echo $authorInp.'<br>';

    $query = "INSERT INTO posts(quote, author, username, bgPost) VALUES ('$quoteInp','$authorInp','$username', '$bgPostInp')";

    if(mysqli_query($conn, $query)){
        echo "<script>alert('Quote Posted Succesfully!!!');</script>";
    // header("Location: ./index.php");
    } else {
        echo "<script>alert('Query didint work');</script>";
    }
} else {
    echo "Error 404";
}