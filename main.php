<?php 
    $conn = mysqli_connect('localhost','root','','quotopia'); // e sheh admini
    mysqli_select_db($conn,'quotopia');
?>
<main>
    <div id="card">
        
        <?php
            $select = "SELECT * FROM posts;";
            $query = mysqli_query($conn, $select);
            while($row = mysqli_fetch_array($query)){
                $quote = $row['quote'];
                $author = $row['author'];
                $postBg = $row['bgPost'];
                $user = $row['username'];
                ?>
        <div class="cardNav">
                <i class="bi bi-person-circle"></i>
                <a href=""><?php echo $user ?></a>
        </div>
        <div class="cardBody">
            <img class="postBg" src="./assets/postBgs/<?php echo $postBg; ?>" alt="">
            <div class="content">
                <q class="heading"><?php echo $quote; ?></q>
                <div class="subHeading">
                    <div class="line"></div>
                    <h5 class="subHeader"><?php echo $author; ?></h5>
                    <div class="line"></div>
                </div>
            </div>
        </div>
            <?php } ?>
        <div class="cardFooter">
            <a href=""><?php echo $user ?></a>
        </div>
    </div>


</main>