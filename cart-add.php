<?php
require 'includes/common.php';
$item_id= $_GET['id'];
$user_id=$_SESSION['id'];
$sql="INSERT INTO user_items(user_id,item_id,status) VALUES('$user_id','$item_id','Added to cart');";
mysqli_query($con,$sql);
header('location:home.php');
?> 
