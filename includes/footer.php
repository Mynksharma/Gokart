<script>
function myFunction(x) {
    if (x.matches) { // If media query matches
        document.footer.style.position = "relative";
    } else {
        document.footer.style.position = "absolute";
    }
}

var x = window.matchMedia("(max-width: 990px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>
<footer   style="
padding: 10px 0;
background-color:black;
color:white;
bottom:0;
width: 100%;">
<div class="row">
<div class="container">
<?php if(isset($_SESSION['email'])){ ?>
<center>
Copyright &#169  E-Store. All Rights Reserved|Contact Us:+91 9971078119
</center>
<?php }else{ ?>
<div class="col-xs-4" >
<h4>Information</h4><br><a href="about.php"style="color:white;">About Us</a></br><a href="contact.php"style="color:white;">Contact Us</a></div>
<div class="col-xs-4" >
<h4>My Account</h4><br><a style="color:white;" href="#" data-toggle="modal" data-target="#mymodal">Login</a></br><a href="signup.php"style="color:white;">Sign Up</a></div>
<div class="col-xs-4" style="color:white;">
<h4>Contact Us</h4><br>Contact:+91 9971078119</div><?php }?>
</div></div>
</footer>