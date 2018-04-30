<?php
   error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_reservation_system";
$db = new mysqli($servername, $username, $password, $dbname);
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>