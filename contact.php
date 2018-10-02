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
header('location:contact.php?login=0');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no,minimum-scale=1.0">
	<style> body{overflow-x:hidden;}</style>
<?php $aas=(isset($_GET['login']) ? $_GET['login'] : '');?>
	<script>
	function message(){
		var js=<?php echo $aas ;?>;
		if(js==0){
		alert("Enter valid Email or Password");}}
	</script>
</head>
<body onLoad="message();"><?php include 'includes/header.php' ?>
<div class="container" style="padding-top:75px;">

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
    <div class="row">
    <div class="col-md-9">
     <h1>LIVE SUPPORT</h1><br>
	 <h4>24 hours| 7 days a week |365 days a year Live Technical Support</h4>
	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p></div>
	 <div class="col-md-3"><img src="images/cust-service.png" /></div></div>
	 
	  <div class="row">
    <div class="col-md-8">
      <h1>CONTACT US</h1><br><form><div class="form-group">
	  <label for="Name">Name</label>
	  <input type="text" name="name" class="form-control"/></div><div class="form-group">
	   <label for="Name">Email</label>
	  <input type="email" name="email" class="form-control" /></div><div class="form-group">
	   <label for="Name">Message</label>
	    <textarea class="form-control" rows="5"></textarea></div><div class="form-group">
	  <input type="submit" value="submit" class="btn btn-primary"/></div></form></div>
	   <div class="col-md-4">
	   <h2>Company Information:</h2>
	   <p style="line-height:30px;">
Keas 69 Str.
15234, Chalandri<br>
Athens,Greece<br>
Phone: +30-210601931<br>
Fax: +30-2106398905<br>
Email: info@mycom.com<br>
Follow us on: Facebook,Twitter</p>	  
	  </div>
	  </div></div><?php include 'includes/footer1.php' ?>
</body></html>