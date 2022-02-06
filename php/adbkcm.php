<?php 

session_start();

$uid = $_SESSION['uid'];

$bid = $_GET['id'];


 $database = mysqli_connect('localhost', 'root', '', 'lims');


if (isset($_POST['save'])) {

    $com = $_POST['cm'];

$query = "INSERT INTO `bkcmnt` (`b_id`, `u_id`, `cmnt`) VALUES ('$bid', '$uid', '$com' )";

}




if($database->query($query)===TRUE){
echo "add comment";

}
else{

echo "Error:".$query."<br>".$database->error;
}
