<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');



  if (isset($_POST['save'])) {
    $name = $_POST['video_name'];
    $author= $_POST['author'];
    $copies = $_POST['copies'];
    $restrictions =$_POST['restrictions'];
    $publisher =$_POST['publisher'];
    
    
    
mysqli_query($database,"INSERT INTO `video` (`video_name`, `author`, `restrictions`, `copies`, `publisher`) VALUES ( '$name', '$author', '$copies', '$restrictions', '$publisher')");

 
    header('location: ../viewVideo.php');

}
    else {
  die("Error: The file does not exist.");
}
