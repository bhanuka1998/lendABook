<?php



session_start();
$db = mysqli_connect('localhost', 'root', '', 'lims');



$id=$_GET['id'];
$sql = "UPDATE `book_borrowings` SET status = 'Returned' WHERE bBorrow_id = '$id' ";




mysqli_query($db,$sql);

header('location: ../viewBookBorrowing.php');




if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
