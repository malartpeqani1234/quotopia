<?php
include "./config.php";

if (isset($_POST['addPostBtn'])) {
    $quoteInp = $_POST['quoteInp'];
    $authorInp = $_POST['authorInp'];

    $postBg = $_FILES["bgPostInp"]["name"];
    $postBg_tmp = $_FILES['bgPostInp']["tmp_name"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
    <?php include "./sidebar.php" ?>

</body>

</html>