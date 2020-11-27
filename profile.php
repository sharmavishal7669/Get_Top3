<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include 'head.php';
    ?>
<link rel="stylesheet" href="css/browsenow.css">
</head>
<body>
<!-- Navbar -->
<?php
if(!isset($_SESSION['id'])){ 
    require 'navbar.php';
    ?>
<?php } else { 
    require 'navbar1.php'; 
?>
<?php } ?>
<div class="mt-5" id="profile" style="background-color: #404040; color:white ;">
	<br>
    <h3 style="font-family: Comic Sans MS"><b id="welcome">Welcome: <i><?php echo $_SESSION["email"]; ?></i></b></h3>
    <br>
    <a href="changepassword.php" >Change password</a>
</div>
	<?php include 'browse.php'; ?>
</body>
</html>