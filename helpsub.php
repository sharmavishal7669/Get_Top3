
!DOCTYPE html>
<html>
<head>
	<?php require "head.php";?>
	<title>Contact Us</title>
	<style>
		.footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height:100px;
    background:#ccc;
}
	</style>
   
</head>
<body>
<?php require 'navbar1.php' ?><div>
<br>
<br>
<h1>
	<center>Thankyou for contacting us.<br>Our Representative will contact you soon.</center>
</h1>


<?php

	$con=mysqli_connect("localhost:3308","root","","gettop3") or die(mysqli_error($con));
	session_start();
 
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$message=mysqli_real_escape_string($con, $_POST['message']);

	$user_reg="insert into help(name,email,message) values('$name','$email','$message')";

	$result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));

	
?>



<a href="index.php"> <h1><center><?php echo "<br>Continue Searching..!!</center>"; ?></center></h1> </a>
</div>
<div class="footer">
<?php require 'footer.php' ?>
</div>
</body>
</html>





