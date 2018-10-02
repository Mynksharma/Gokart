<?php require 'includes/common.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<style>
	body{overflow-x:hidden;}
	.icon{text-decoration:line-through;color:grey;}
	.pan:hover{box-shadow:2px 2px  3px 3px grey;}
</style>	
</head>
<body>
<?php include 'includes/header.php' ?>
<?php include 'includes/check_if_added.php' ?>
<div class="container-fluid">
 	  
 <div class="row" style="margin-top:75px;">
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 1</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/lenovo-vibe.png" alt=" " style="height:200px;"/>
 <div class="caption text-center">
 <p><b>Lenovo</b><br> <i class="fa fa-rupee"></i>6,499 <span class="icon"><i class="fa fa-rupee"></i> 6,360</span>  2% off</p>
  <?php if(check_if_added_to_cart(1)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=1" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?>
 </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 2</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src=" images/asus-zenfone.jpeg " alt=" " style="height:200px;"  />
 <div class="caption text-center">
 <p><b>Asus</b> <br> <i class="fa fa-rupee"></i>12,999 <span class="icon"><i class="fa fa-rupee"></i> 12,986</span>  1% off</p>
<?php if(check_if_added_to_cart(2)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=2" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?> </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 3</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src=" images/redmi-4x.jpg " alt=" " style="height:200px;" />
 <div class="caption text-center">
 <p><b>Redmi</b> <br> <i class="fa fa-rupee"></i>10,999 <span class="icon"><i class="fa fa-rupee"></i> 10,987</span>  1% off</p>
<?php if(check_if_added_to_cart(3)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=3" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?> </div></div></div></div></div>
 </div>
 
 <div class="row">
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 4</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/canvas-nitro.jpeg" alt=" " style="height:200px;"   />
 <div class="caption text-center">
 <p><b>Micromax</b><br>
 <i class="fa fa-rupee"></i>5,890 <span class="icon"><i class="fa fa-rupee"></i> 5,875</span>  1% off</p>
<?php if(check_if_added_to_cart(4)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=4" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?> </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 5</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/lyf-f1s.jpeg" alt=" "  style="height:200px;"  />
 <div class="caption text-center">
 <p><b>Lyf</b> <br> <i class="fa fa-rupee"></i>4,999 <span class="icon"><i class="fa fa-rupee"></i> 4,950</span>  2% off</p>
<?php if(check_if_added_to_cart(5)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=5" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?> </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 6</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/appleiphone-7.jpg" alt=" "  style="height:200px;"  />
 <div class="caption text-center">
 <p><b>Apple</b> <br> <i class="fa fa-rupee"></i>40,999 <span class="icon"><i class="fa fa-rupee"></i> 40,960</span>  2% off</p>
 <?php if(check_if_added_to_cart(6)){
		?>
  <a href="#" class="btn btn-success btn-block disabled">Added To Cart</a> <?php }
  else{ ?>
  <a href="cart-add.php?id=6" class="btn btn-primary btn-block">Add To Cart</a> <?php } ?></div></div></div></div></div>
  </div></div>
<?php include 'includes/footer1.php' ?>
</body></html>