<?php
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');



if (isset($_POST['save'])) {
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];
    $book_id = $_POST['book_id'];
    $lib_id = $_SESSION['uid'];
    $return_date = $_POST['return_date'];
    $status = "pending";

    $mysql_query1 = "INSERT INTO `book_borrowings` (`book_id`, `user_id`, `user_email`, `lib_id`, `return_date`, `status`) VALUES ( '$book_id', '$user_id', '$user_email', '$lib_id', '$return_date', '$status')";
    $mysql_query2 = "UPDATE `book` SET `copies` = `copies` -1 WHERE `book`.`id` ='$book_id'";

    $sqlquery = $mysql_query1.";".$mysql_query2;

    $result = mysqli_multi_query($database, $sqlquery);

    header('location: ../dashbord.php');
} else {
    die("Error: The file does not exist.");
}
