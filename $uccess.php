<?php
require 'includes/common.php' ; 
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no">
	<style>
	body{overflow-x:hidden;}
        @media screen and (min-width:300px){
    footer{position:absolute;}
    }
	</style>
	</head>
		<body><?php
include 'includes/header.php' ; 
$user=$_SESSION['id'];
$sql="UPDATE user_items SET status='Confirmed' WHERE user_id='$user'";
mysqli_query($con,$sql);
?>
       <div class="container">
 <div class="jumbotron col-lg-5 col-lg-offset-4 col-md-8 col-md-offset-2" style="margin-top:80px;"><center> <h3>Your order is confirmed. Thank you for shopping
with us.</h3><hr/><a href="home.php"><h4>Click here</a>to purchase any other item.</h4></center></div></div>
<?php
include 'includes/footer1.php' ; 
?>
</body></html>