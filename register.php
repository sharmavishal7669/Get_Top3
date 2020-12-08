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
        echo '<script>alert("Sorry... username already taken! Redirecting to register page.")</script>'; 
        header('Location: registerpage.php');
    }
    else
    {
        $stmt = $connect->prepare("insert into registration(firstName, lastName, email, password, phoneNo) values(?, ?, ? ,?, ?)");
        $stmt->bind_param("ssssi",$firstName, $lastName, $email, $password, $phoneNo);
        $stmt->execute();
        echo '<script>alert("Registration Successful!")</script>';
        header('Location: loginpage.php');
        $stmt->close();
        $connect->close();
    }
     
} 

?>
<div>
<?php require 'browse.php'; ?>
</div>