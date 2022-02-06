
<?php
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');

$username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_user WHERE email='$username' AND password='$password'";

$exe = $database->query($query);
if ($exe->num_rows > 0) {
	while ($row = $exe->fetch_assoc()) {


		$_SESSION["uid"] = $row['id'];

		$role = $row['role'];


		//echo "Errorhkbhkbhj:";
	}

	if ($role == "admin") {
		header('location: ../adminDashboard.php');
	} elseif ($role == "librarian") {
		header('location: ../dashbord.php');
	} else {
		header('location: ../userDashboard.php');
	}
} else {
	if ($database->query($query) == TRUE) {
	} else {
		echo "Error:" . $query . "<br>" . $database->error;
	}
}
?>