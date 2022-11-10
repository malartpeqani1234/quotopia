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
		<div class="col-md-14">
			<div class="card ">
				<div class="card-header card-header-primary">
					<h4 class="card-title">Manage User</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive ps">
						<table class="table tablesorter table-hover" id="">
							<thead class=" text-primary">
								<tr>
									<th>ID</th>
									<th>Email</th>
									<th>Name</th>
									<th>Username</th>
									<th>Password</th>
									<th>Role</th>
									<th><a href="adduser.php" class="btn btn-success">Add New</a></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($conn, "select ID, email, name, username, password, usertype from users") or die("query 2 incorrect.......");

								while (list($ID, $email, $name, $username, $password, $usertype) =
									mysqli_fetch_array($result)
								) {
									echo "<tr>
                                            <td>$ID</td>
                                            <td>$email</td>
                                            <td>$name</td>
                                            <td>$username</td>
                                            <td>$password</td>
                                            <td>$usertype</td>";

									echo "<td>
                        <a href='editUser.php?id=$ID' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <i class='material-icons'>edit</i>
                              <div class='ripple-container'></div></a>
                        <a href='delete.php?id=$ID&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>
                        </td></tr>";
								}
								mysqli_close($conn);

								?>
							</tbody>
						</table>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
							<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
						</div>
						<div class="ps__rail-y" style="top: 0px; right: 0px;">
							<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- </Main Part of Page> -->

	<!-- <Footer> -->
	<?php #include './footer.php'; 
	?>
	<!-- </Footer> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>