<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');



  if (isset($_POST['save'])) {
    $name = $_POST['book_name'];
    $isbn= $_POST['isbn'];
    $author= $_POST['author'];
    $copies = $_POST['copies'];
    $publisher =$_POST['publisher'];
    
    
    

    mysqli_query($database, "INSERT INTO `book` (`name`, `isbn`, `author`, `copies`, `publisher`) VALUES ( '$name ', '$isbn', '$author', '$copies', '$publisher')"); 
     
    header('location: ../viewBook.php');

}
    else {
  die("Error: The file does not exist.");
}



?>