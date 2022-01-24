
<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');

$username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$username' AND password='$password'";

$exe = $database->query($query);
if($exe->num_rows>0){
	while ($row = $exe->fetch_assoc()) {
		

	$_SESSION["uid"] = $row['id'];
  

		//echo "Errorhkbhkbhj:";
	}

}
else{
	if($database->query($query)==TRUE){}
		else{
			echo "Error:".$query."<br>".$database->error;
		}
}
?>