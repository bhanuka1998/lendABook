<?php 

session_start();

$uid = $_SESSION['uid'];

$bid = $_GET['id'];


 $database = mysqli_connect('localhost', 'root', '', 'lims');




$query = "INSERT INTO `favoritebook` (`u_id`, `b_id`) VALUES ( '$uid', '$bid')";



if($database->query($query)===TRUE){
echo "Reserved";

}
else{

echo "Error:".$query."<br>".$database->error;
}
