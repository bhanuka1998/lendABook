<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lims');



if (isset($_POST['save'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $age = $_POST['age'];
  $package = "NoPackage";
  $role = "librarian";




  mysqli_query($db, "INSERT INTO `tbl_user` (`first_name`, `last_name`, `email`, `role`, `age`, `password`, `package`) VALUES ( '$fname', '$lname', '$email', '$role', '$age', '$password', '$package')");
  $_SESSION['message'] = "Address saved";
  header('location: ../adminDashboard.php');
} else {
  die("Error: The file does not exist.");
}
