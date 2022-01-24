<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'lims');



  if (isset($_POST['save'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $password = $_POST['email'];
    $age =$_POST['age'];
    $package =$_POST['package'];
    $role = 1;
    

    mysqli_query($db, "INSERT INTO `user` (`first_name`, `last_name`, `email`, `role`, `age`, `password`, `package`) VALUES ( '$fname', '$lname', '$email', '$role', '$age', '$password', '$package')"); 
    $_SESSION['message'] = "Address saved"; 
    header('location: ../UserLogin.php');

}
    else {
  die("Error: The file does not exist.");
}



?>