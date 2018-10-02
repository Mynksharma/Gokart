<?php
function check_if_added_to_cart($item_id){
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="store";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
$user_id=$_SESSION['id'];
$sql="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id= '$user_id' AND status='Added to cart'";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query)>=1){
return 1;}
else{return 0;}
}
?>