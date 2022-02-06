<?php



session_start();
$db = mysqli_connect('localhost', 'root', '', 'lims');



$id=$_GET['id'];
$sql = "UPDATE `video_borrowings` SET status = 'Returned' WHERE vBorrow_id = '$id' ";




mysqli_query($db,$sql);

header('location: ../viewVideoBorrowings.php');




if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
