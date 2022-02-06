<?php
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lims');



if (isset($_POST['save'])) {
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];
    $video_id = $_POST['video_id'];
    $lib_id = $_SESSION['uid'];
    $return_date = $_POST['return_date'];
    $status = "pending";

    $mysql_query1 = "INSERT INTO `video_borrowings` (`video_id`, `user_id`, `user_email`, `lib_id`, `return_date`, `status`) VALUES ( '$video_id', '$user_id', '$user_email', '$lib_id', '$return_date', '$status')";
    $mysql_query2 = "UPDATE `video` SET `copies` = `copies` -1 WHERE `video`.`id` = '$video_id'";

    $sqlquery = $mysql_query1.";".$mysql_query2;

    $result = mysqli_multi_query($database, $sqlquery);

    header('location: ../dashbord.php');
} else {
    die("Error: The file does not exist.");
}
