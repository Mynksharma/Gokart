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
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<style>
	</style>
	</head>
	<body><?php include 'includes/header.php'; 
	include 'includes/check_if_added.php';
	?>
 <div class="container">
 <div class="jumbotron" style="margin-top:70px;"><h1>Welcome to our Lifestyle Store!</h1><p>
 We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.
 </p></div>
 <div class="row text-center">
 <div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/cam1.jpg"/>
 <div class="caption">
 <h3><b>Cannon EOS</b></h3>
 <p>Price:&#8377 36000.00</p>
  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(1)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=1" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/cam2.jpg"/>
 <div class="caption">
 <h3><b>Sony DSLR</b></h3>
 <p>Price:&#8377 40000.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(2)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=2" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 
 
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/cam3.jpg" />
 <div class="caption">
 <h3><b>Sony DSLR</b></h3>
 <p>Price:&#8377 50000.00</p>
 
  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(3)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=3" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/cam4.jpg"/>
 <div class="caption">
 <h3><b>Olympus DSLR</b></h3>
 <p>Price:&#8377 80000.00</p>
 
  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(4)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=4" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 </div>
 </div></div></div>
 <div class="row text-center">
<div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/watch1.jpg"/>
 <div class="caption">
 <h3><b>Titan Model#301</b></h3>
 <p>Price:&#8377 13000.00</p>
 
  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(5)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=5" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/watch2.jpg"/>
 <div class="caption">
 <h3><b>Titan #201</b></h3>
 <p>Price:&#8377 3000.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(6)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=6" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>

 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/watch3.jpg"/>
 <div class="caption">
 <h3><b>HMT Milan</b></h3>
 <p>Price:&#8377 8000.00</p>
 
  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(7)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=7" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/watch4.jpg"/> 
 <div class="caption">
 <h3><b>Faber Luba #111</b></h3>
 <p>Price:&#8377 18000.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(8)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=8" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>

 </div>
 </div></div></div>
  <div class="row text-center">
 <div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/shirt1.jpg"/>
 <div class="caption">
 <h3><b>H&W </b></h3>
 <p>Price:&#8377 800.00</p>


  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(9)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=9" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>
 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/shirt2.jpg"/>
 <div class="caption">
 <h3><b>Luis Phil</b></h3>
 <p>Price:&#8377 1000.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(10)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=10" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>

 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/shirt3.jpg" />
 <div class="caption">
 <h3><b>John Zok</b></h3>
 <p>Price:&#8377 1500.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(11)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=11" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>

 </div>
 </div></div><div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="images/shirt4.jpg"/>
 <div class="caption">
 <h3><b>Jhalsani</b></h3>
 <p>Price:&#8377 1300.00</p>

  <?php if(isset($_SESSION['email'])){
    if(check_if_added_to_cart(12)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=12" class="btn btn-primary btn-block">Add To Cart</a> <?php } }else{
	  ?>
  <a href="login.php" class="btn btn-primary btn-block">Buy Now</a> <?php } ?>

 </div>
 </div></div></div></div>
<?php include 'includes/footer1.php'
 ?>
 </body></html>