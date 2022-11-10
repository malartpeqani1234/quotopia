<?php
include "../config.php";
$delete_id = $_GET['id'];

if (isset($delete_id)) {


    $delete_query = "DELETE FROM users WHERE ID='$delete_id' ";

    if (mysqli_query($conn, $delete_query)) {

        echo "<script>alert('User deleted successfully!!!!')</script>";
        echo "<script>window.open('./manageUser.php','_self')</script>";
    }
}
