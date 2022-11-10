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
<style>
    #gud {
        color: #00bcd4;
    }

    #bad {
        color: #f44336;
    }
</style>

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
        <h2>This is the postList.php page</h2>
    </main>
    <!-- </Main Part of Page> -->

    <!-- <Footer> -->
    <?php #include './footer.php'; 
    ?>
    <!-- </Footer> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>