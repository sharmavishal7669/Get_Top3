<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php require "head.php";?>
	<title>Contact Us</title>
   
</head>
<body class="bg-dark">
<?php require 'navbar1.php' ?>
<div class="mt-5" id="profile" style="background-color: #404040; color:white ;">
	<br><br>
<h3 style="font-family: Comic Sans MS"><b id="welcome">We will be happy to help you "<i><?php echo $_SESSION["email"]; ?>"</i></b></h3>
</div>
<div class="row"  >
	<div class="container" style="margin-top: 40px; padding: 20px; border: 3px solid black ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12 text-white">

			<h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
			<h3 style="font-family: Comic Sans MS">Have any problem? Write to us!!</h3>
			</div>
			<div class="col-sm-3 col-xs-12">
			<!-- contact us pic-->
			

			</div>

		</div>
	</div>
</div>





<div class="row">
	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12 text-white" >
			<h3>CONTACT US</h3>
			<form method="post"  action="helpsub.php">

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message" placeholder="Write a message..."></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</button>

			</form>
			
			</div>
			
		</div>
	</div>
</div>





<div>
<?php require 'footer.php' ?>
</div>
</body>
</html>