<?php
if (isset($_POST["addPostBtn"])) {
    $username = $_SESSION['name'];
    $quoteInp = $_POST["quoteInp"];
    $authorInp = $_POST["authorInp"];

    $fileUpload1 = $_FILES['fileUpload1']['name']; //emri fotos
    $fileUpload1_tmp = $_FILES['fileUpload1']['tmp_name']; //e run foton, temporarly perkohsisht

    move_uploaded_file($fileUpload1_tmp, "assets/postBgs/$fileUpload1"); // e ruan ne folder ne baz te emrit te foto.

    $uploadFile = "INSERT INTO posts(quote ,author,username, bgPost)
    VALUES('$quoteInp','$authorInp','$username', '$fileUpload1');";

    if (mysqli_query($conn, $uploadFile)) {
        echo "<script>alert('File is Upload');</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Query is wrong!')</script>";
    }
} else {
    echo "Error 404";
}
