<?php
require "../connection.php";
extract($_POST);
$password=md5($password);
$sql="select * from master_users where email='$username' or mobile='$username' and password='$password'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 $count=mysqli_num_rows($res);
 if(mysqli_num_rows($res) == 1)
 {
   header('location:../vehicleno.php');
 }else{
   header("location:../login.php");
 }
 ?>
