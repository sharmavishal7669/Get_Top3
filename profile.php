<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include 'head.php';
    ?>

</head>
<body>
<!-- Navbar -->
<?php require 'navbar1.php'; ?>
<div class="mt-5" id="profile" style="background-color: #404040; color:white ;">
	<br>
    <h3 style="font-family: Comic Sans MS"><b id="welcome">Welcome: <i><?php echo $_SESSION["email"]; ?></i></b></h3>
    <br>
    <a href="changepassword.php" >Change password</a>
</div>
	<?php require 'browse1.php'; ?>
</body>
</html>