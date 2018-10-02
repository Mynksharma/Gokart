<?php require 'includes/common.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<style>@media screen and (min-width:300px){
    footer{position:absolute;}
    }
	</style>
	</head>
		<body style="overflow-x:hidden;"><?php include 'includes/header.php'; ?>
 <div class="container">
 <div class="col-md-8 col-lg-5 col-lg-offset-4 col-md-offset-2"> <?php $user=$_SESSION['id'];
 $sql="SELECT status FROM user_items WHERE status='Added to cart' AND user_id='$user' ;";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){ ?>
<div class="jumbotron text-center" style="margin-top:75px;"><h2>Add Items to the cart first !!</h2></div><?php }else{ ?>
 <table class="table table-striped table-bordered text-center" style="margin-top:75px;margin-left:-2vw;">
 <thead><th>Item Number</th>
 <th>Item Name</th>
 <th>Price</th><th></th></thead><tbody>
 <?php
 $sq="SELECT items.name,items.price,user_items.item_id FROM((user_items INNER JOIN users ON users.id='$user' AND users.id=user_items.user_id) INNER JOIN items ON items.id=user_items.item_id) WHERE user_items.status='Added to cart';";
$query=mysqli_query($con,$sq);
$x=1;$sum=0;$y=0;
while($row=mysqli_fetch_assoc($query)){
$arry[$y]= $row['item_id'];$y++;?>
<tr><td><?php echo $x;$x++; ?></td><td><?php echo $row['name']; ?></td><td><?php echo "&#8377 ".$row['price']."/-"; ?></td><td><a href="cart-remove.php?id=<?php echo $row['item_id'] ?>" class= "remove_item_link" >Remove</a></td><?php 
$sum+=$row['price'];} ?></tr><tr><td></td><td>Total</td><td><?php echo "&#8377 ".$sum."/-"?></td><td><a class="btn btn-primary" href='$uccess.php?id="<?php
foreach($arry as $q){echo $q;}?>"'>Confirm Order</a></td></tr></tbody></table><?php } ?>
 </div></div>
  <?php include 'includes/footer1.php'; ?>
 </body></html>