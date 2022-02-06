<?php
session_start();
unset($_SESSION["uid"]);



header("Location:../UserLogin.php");
?>