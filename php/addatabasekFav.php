<?php 
session_start();
$user_id = $_SESSION['uid'];
$video_id = $_GET['id'];
 $database = mysqli_connect('localhost', 'root', '', 'lims');
$query = "INSERT INTO `favoritevideo` ( `user_id`, `video_id`) VALUES ( '$user_id', '$video_id')";
if($database->query($query)===TRUE){
echo "add Fav";
}
else{
echo "Error:".$query."<br>".$database->error;
}


 ?>