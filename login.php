<?php
    session_start();
    
    if(isset($_POST['submit']))
    {
        $_SESSION["loggedin"] = false;
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        require "dbconfig.php";

        $stmt = $connect->prepare("SELECT * FROM registration WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
    
        if($user)
        {
            if( $password==($user->password))
            {
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $email;
                header('Location: profile.php');
            }
            else
            {
                $stmt->close();
            
                header('Location: loginpage.php?email_error=Incorrect Password');
            
            }
        
        }
        else
        {
            $stmt->close();
            require 'redirectingpage.php';
            
        
        }
    }
?>