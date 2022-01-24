<?php 

session_start();

$uid = $_SESSION['uid'];

$vid = $_GET['id'];


 $database = mysqli_connect('localhost', 'root', '', 'lims');


if (isset($_POST['save'])) {

    $com = $_POST['cm'];

$query = "INSERT INTO `vcmnt` (`user_id`, `video_id`, `vcomment`) VALUES ('$uid', '$vid', '$com')";

}




if($database->query($query)===TRUE){
echo "add comment";

}
else{

echo "Error:".$query."<br>".$database->error;
}


 ?>

