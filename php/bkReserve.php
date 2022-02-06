<?php 

session_start();

$uid = $_SESSION['uid'];

$bid = $_GET['id'];


 $database = mysqli_connect('localhost', 'root', '', 'lims');




$query = "INSERT INTO `reservationbook` ( `book_id`, `user_id`) VALUES ( '$bid', '$uid')";



if($database->query($query)===TRUE){
echo "Reserved";

}
else{

echo "Error:".$query."<br>".$database->error;
}
