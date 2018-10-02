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
header('location:about.php?login=0');
}
else{
	$row=mysqli_fetch_array($query);
	$_SESSION['id']= $row['id'];
	$_SESSION['email']= $row['email'];
	header('Location:home.php');
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<style>.pan{border:none;}</style>
<?php $aas=(isset($_GET['login']) ? $_GET['login'] : '');?>
	<script>
	function message(){
		var js=<?php echo $aas ;?>;
		if(js==0){
		alert("Enter valid Email or Password");}}
	</script>
	
	
	</head><body style="overflow-x:hidden;" onLoad="message();">
	<?php include 'includes/header.php' ?>
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
	<div class="container">
 <div class="row" style="margin-top:75px;">
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>WHO WE ARE</h4></div>
 <div class="panel-body"><div class="thumbnail">
 <img src="images/ecom.jpg"/></div><br>
 <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
 </div></div></div>
 
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>OUR HISTORY</h4></div>
 <div class="panel-body">
 <h3 style="color:blue;">1998:</h3>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
 <h3 style="color:blue;">2002:</h3>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 
 <h3 style="color:blue;">2007:</h3>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>

 
 </div></div></div>
 
 <div class="col-sm-4">
 <div class="panel panel-default pan">
 <div class="panel-heading">
 <h4>OPPORTUNITIES</h4></div>
 <div class="panel-body" ><p>
<b>Available Roles:</b><br><br>1.Web Developer [6 months internship]<br><br>2.Bussiness Apprentice [6 months internship]<br><br>3.Manager at backend [6 months internship]</p>
 </div></div></div></div></div>
 	<?php include 'includes/footer1.php' ?>
 </body></html>
 