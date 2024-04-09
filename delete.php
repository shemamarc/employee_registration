<?php
include 'connect.php';
   $deleteid= $_GET['deleteid'];
  $sql= "DELETE FROM user WHERE id=$deleteid";
  if ($connect->query($sql) === TRUE) {
    header('location:display.php');
  }
 
?>
