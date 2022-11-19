<?php
include "../config.php";
$delete_id = $_GET['id'];

if (isset($delete_id)) {


    $delete_query = "DELETE FROM posts WHERE id='$delete_id' ";

    if (mysqli_query($conn, $delete_query)) {

        echo "<script>alert('Post deleted successfully!!!!')</script>";
        echo "<script>window.open('./postList.php','_self')</script>";
    }
}
