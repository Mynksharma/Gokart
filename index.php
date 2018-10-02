<?php require 'includes/common.php';
if(isset($_SESSION['email'])){
header("location:home.php");}
if($_SERVER['REQUEST_METHOD']=="POST"){
	$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$sql="SELECT id,email FROM users WHERE email='$email' AND password='$password' ";  
$query=mysqli_query($con,$sql);
if(!$query){die("connection failed:".mysqli_error());}
if(mysqli_num_rows($query)==0){
header('location:index.php?login=0');
}
else{
	$row=mysqli_fetch_array($query);
	$_SESSION['id']= $row['id'];
	$_SESSION['email']= $row['email'];
	header('Location:home.php');
}}
?>

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
<?php $aas=(isset($_GET['login']) ? $_GET['login'] : '');?>
	<script>
	function message(){
		var js=<?php echo $aas ;?>;
		if(js==0){
		alert("Enter valid Email or Password");}}
	</script>

</head>
<body onLoad="message();"><?php include 'includes/header.php'; ?>
<div class="container-fluid">
   <div class="modal fade" id="mymodal">
             <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
				    <div class="modal-header">
					   <h2> LOGIN
						 <button type="button" class="close" data-dismiss="modal">&times;
							</button></h2>
					</div>
					<div class="modal-body">
					    Don't have a account?<a href="signup.php">Register</a><br><br>
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
						<div class="form-group"><input class="form-control input-lg" type="email" name="email" placeholder="Email"/></div>
					 <div class="form-group"><input class="form-control input-lg" type="password" name="password" placeholder="Password"/></div>
					<div class="form-group"><input class="btn btn-primary btn-lg" type="submit" value="Submit"/>
					</div>
                       </form>
					</div>
                    <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                    </div>
				</div>
			</div>
		</div>
 <div class="row" style="margin-top:75px;">
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 1</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/lenovo-vibe.png" alt=" " style="height:200px;"/>
 <div class="caption text-center">
 <p><b>Lenovo</b><br> <i class="fa fa-rupee"></i>6,499<span class="icon"><i class="fa fa-rupee"></i> 6,360</span>  2% off</p>
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
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
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
 </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 3</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src=" images/redmi-4x.jpg " alt=" " style="height:200px;" />
 <div class="caption text-center">
 <p><b>Redmi</b> <br> <i class="fa fa-rupee"></i>10,999 <span class="icon"><i class="fa fa-rupee"></i> 10,987</span>  1% off</p>
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
 </div></div></div></div></div>
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
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
 </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 5</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/lyf-f1s.jpeg" alt=" "  style="height:200px;"  />
 <div class="caption text-center">
 <p><b>Lyf</b> <br> <i class="fa fa-rupee"></i>4,999 <span class="icon"><i class="fa fa-rupee"></i> 4,950</span>  2% off</p>
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
 </div></div></div></div></div>
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>Mobile 6</h4></div>
 <div class="panel-body">
 <div class="thumbnail">
 <img src="images/appleiphone-7.jpg" alt=" "  style="height:200px;"  />
 <div class="caption text-center">
 <p><b>Apple</b> <br> <i class="fa fa-rupee"></i>40,999 <span class="icon"><i class="fa fa-rupee"></i> 40,960</span>  2% off</p>
 <a href="#" data-toggle="modal" data-target="#mymodal" class="btn btn-primary btn-block">Order Now</a>
 </div></div></div></div></div>
  </div></div>
<?php include 'includes/footer1.php' ?>
</body>


</html>