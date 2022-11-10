<nav style="display: block; background: white;" id="mainSideBar">
    <ul class="sideBarLinks">
        <li class="sidebarLogo">
            <h1>Quotopia</h1>
        </li>
        <div id="sideBar">
            <li class="sideBarLink">
                <i class="bi bi-house-door"></i>
                <a href="./index.php">
                    Home
                </a>
            </li>
            <li class="sideBarLink">
                <i class="bi bi-search"></i>
                <a href="#">
                    Search
                </a>
            </li>
            <li class="sideBarLink">
                <i class="bi bi-plus-circle"></i>
                <a href="#" class="open-link">Create</a>
            </li>

            <li class="sideBarLink">
                <img src="" alt="">
                <i class="bi bi-person-circle"></i>
                <a href="#">
                    <?php echo " " . $_SESSION['name']; ?>
                </a>
            </li>
        </div>

        <a class="sideBarLink logoutButton" href="logout.php">
            <i class="bi bi-box-arrow-left"></i>
            Logout
        </a>
    </ul>
</nav>