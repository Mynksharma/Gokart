<?php
require 'includes/common.php' ;
$a=$_POST['name'];
$c=$_POST['email'];
$d=md5($_POST['password']);
$e=$_POST['contact'];
$f=$_POST['city'];
$g=$_POST['address'];
$sql="SELECT id FROM users WHERE email='$c'";
$row=mysqli_query($con,$sql);
if(mysqli_num_rows($row)>0){
header('Location:signup.php?sign=0');
}
else{
$sql="INSERT INTO users(name,email,password,contact,city,address) VALUES ('$a','$c','$d','$e','$f','$g')";
$query=mysqli_query($con,$sql);$pr=mysqli_insert_id($con);
$sq="SELECT email FROM users WHERE id='$pr'";$quer=mysqli_query($con,$sq);
$row=mysqli_fetch_array($quer);
$_SESSION['id']=$pr;
$_SESSION['email']=$row['email'];
header("Location:home.php?signup=success");}
?>
