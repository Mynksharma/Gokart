<?php 
 require 'includes/common.php';
 $id=$_GET['id'];
 $user_id=$_SESSION['id'];
 $sql="DELETE FROM user_items WHERE user_id='$user_id' AND item_id='$id';";
 mysqli_query($con,$sql);
 header('location:cart.php');
 ?>