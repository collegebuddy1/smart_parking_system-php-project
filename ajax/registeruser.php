<?php
require "../connection.php";

  extract($_POST);
$password=md5($password);
  $sql="INSERT INTO `master_users` (`name`, `email`, `mobile`, `password`) VALUES ( '$name', '$mail_id', '$phonenumber', '$password')";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    echo "registerd";
  }
  else{
    echo "Not registerd";
  }

 ?>
