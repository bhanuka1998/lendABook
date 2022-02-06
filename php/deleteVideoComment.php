<?php



session_start();
$db = mysqli_connect('localhost', 'root', '', 'lims');



$id=$_GET['id'];
$sql = "DELETE FROM vcmnt WHERE vcustomer_id =$id";




mysqli_query($db,$sql);

header('location: ../viewVComments.php');




if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
