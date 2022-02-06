<?php



session_start();
$db = mysqli_connect('localhost', 'root', '', 'lims');



$id=$_GET['id'];
$sql = "DELETE FROM bkcmnt WHERE bCmnt_id =$id";




mysqli_query($db,$sql);

header('location: ../viewBookComments.php');




if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
