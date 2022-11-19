<!doctype html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" href="./assets/img/user.png" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="assets/css/Material+Icons.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link href="assets/css/material-dashboard-min.css" rel="stylesheet" />

    <style>
        #bodyPart {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="light-edition" id="bodyPart">
    <div class="wrapper">
        <div class="col-md-2">
            <div class="sidebar" data-color="purple" data-background-color="purple" data-image="./assets/img/sidebar-2.jpg">
                <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
                <div class="logo">
                    <a href="./index.php" class="simple-text logo-normal">
                        Quotopia Admin Panel
                    </a>
                </div>
                <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3a8db1f4-24d8-4dbf-85c9-4f5215c1b29a">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="addUser" href="./addUser.php">
                                <i class="material-icons">person</i>
                                <p>Add User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="postList" href="./postList.php">
                                <i class="material-icons">list</i>
                                <p>Post List</p>
                            </a>

                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" id="manageUser" href="./manageUser.php">
                                <i class="material-icons">edit_user</i>
                                <p>Manage User</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="a_logout.php">
                                <i class="material-icons">logout</i>
                                <p>Logout</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
                    </ul>
                </div>
            </div>
        </div>