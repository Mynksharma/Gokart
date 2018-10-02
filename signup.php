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
	header('location:home.php');
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no"/>
	<style>
	@media screen and (min-width:965px){
        footer{position:absolute;}}
     
	 
	</style>
		<?php $as=(isset($_GET['sign']) ? $_GET['sign'] : '');
		?>
	<script>
function messag(){
	var a=<?php echo $as; ?>;
if(a==0){alert("Email id already Registered");}
}
	</script>
        
        
</head>
<body onLoad="messag();" style="overflow-x:hidden;" >
<?php include 'includes/header.php' ;?>
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

 <div class="container"  style="padding-top:75px;">
 <div class="col-md-5"><img src="images/tab.jpg" style="width:100%;height:100%;margin-top:60px;"/></div> 
 <div class="col-md-4 col-md-offset-2">
 <h1 style="margin-top:20px;"><b>SIGN UP</b></h1>
 <form method="POST" action="signup_script.php">

 <div class="form-group">  
 <input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z]{3,}" title="Your username should contain only lower-case or upper-case letters and of length at least 3. e.g.-johnNAsH" required /></div>
 <div class="form-group">
 <input type="email" class="form-control" placeholder="Email" name="email"   required /></div>
  <div class="form-group">
 <input type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number,one uppercase and lowercase letter, and at least 5 or more characters" required /></div>
 <div class="form-group">
 <input type="tel" class="form-control" placeholder="Contact" name="contact" pattern="[0-9]{10}" title="Enter 10-digit phone no. e.g.-9971099999" required /></div>

  <div class="form-group">
 <input type="text" class="form-control" placeholder="City" name="city" required /></div>
  <div class="form-group">
 <input type="text" class="form-control" placeholder="Address" name="address" required /></div>
<div class="form-group"> <input type="submit" class="btn btn-primary" value="Submit"/></div></form></div></div>
<?php include 'includes/footer1.php';?>
 
 </body></html>

 