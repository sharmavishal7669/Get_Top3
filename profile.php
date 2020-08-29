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
<?php require 'navbar.php'; ?>
<div class="mt-5" id="profile">
    <b id="welcome">Welcome : <i><?php echo $_SESSION["email"]; ?></i></b>
    <br><br>
    <a href="changepassword.php" >Change password</a>
</div>
</body>
</html>