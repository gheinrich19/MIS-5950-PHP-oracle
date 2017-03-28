<?php
// File verify.php

session_start();
require_once "dbGeneral.php";
require_once "salt.php";
$user = htmlentities(substr(trim($_POST['user']), 0,20));
$pass = htmlentities(substr(trim($_POST['password']), 0, 50));
$tohash = 'tiger';
$salt = new salt();
$pass = $salt->doubleSalt($tohash, $pass);
$query = "SELECT * FROM web_site WHERE vuser=:a AND pswd=:b";

$connect = new dbGeneral($query);
$connect->parse();
$connect->bind(':a',$user,20);
$connect->bind(':b',$pass,50);
$event = $connect->exe();

if($row =oci_fetch_assoc($event)) {
    $_SESSION['VID'] = $row['VID'];
    $_SESSION['VUSER'] = $row['VUSER'];
    header("location: home.html");
}

else
{
    header("location:admin.html");
}
?>