<?php

    if(isset($_POST['submit']))
    {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNo = $_POST['phoneno'];
   
    require 'dbconfig.php';

    $stmt = $connect->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if (mysqli_num_rows($result) > 0)
    {
        echo "<script>alert('This user already exist. Try with another email.')</script><br><br>";
        $stmt->close();
        header( "refresh:3;url=registerpage.php" );
        echo 'You\'ll be redirected in about 3 secs. If not, click <a href="registerpage.php">here</a>.'; 
    }
    else
    {
        $stmt = $connect->prepare("insert into registration(firstName, lastName, email, password, phoneNo) values(?, ?, ? ,?, ?)");
        $stmt->bind_param("ssssi",$firstName, $lastName, $email, $password, $phoneNo);
        $stmt->execute();
        $stmt->close();
        $connect->close();
        echo "<script>alert('Registration Successfull!')</script>";
        header( "refresh:3;url=loginpage.php" );
        echo 'You\'ll be redirected in about 3 secs. If not, click <a href="loginpage.php">here</a>.'; 
    }
    
} 
    
?>