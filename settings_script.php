<?php 
require 'includes/common.php' ; 
$user=$_SESSION['id'];
$old=md5($_POST['old_pass']);
if($_POST['new_pass']===$_POST['re_new_pass']){
$sql="SELECT password FROM users WHERE id='$user' AND password='$old' ";
$result=mysqli_query($con,$sql);
$r=md5($_POST['new_pass']);
$row=mysqli_fetch_array($result);
$h=$row['password'];
if(mysqli_num_rows($result)>0){
$sq="UPDATE users SET password='$r' WHERE id='$user' AND password='$h'";mysqli_query($con,$sq);
header('location:settings.php?pass=1');
exit();}
else{header('location:settings.php?pass=0');}
}
else{header('location:settings.php?pass=0');}
?> 