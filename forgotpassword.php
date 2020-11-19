<?php

    require_once('dbconfig.php');

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $stmt = $connect->prepare("SELECT * FROM registration WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        if($user)
        {
            $password = $user->password;
            $to = $user->email;
            $subject = "GetTop3 : Your Recovered Password";

            $message = "Please use this password to login ".$password;
            $headers = "From : help.gettop3@gmail.com";
            if(mail($to, $subject, $message, $headers)){
                echo "Your Password has been sent to your email id";
                sleep(3);
                header('Location: loginpage.php');
            }
            else
                echo "Failed to Recover your password, try again";
        }
        else
        {
            echo "User name does not exist is database";
        }

        
    }


?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>GetTop3 Homepage</title>

        <link rel="stylesheet" type="text/css" href="css/navbar.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        
        <script src="https://use.fontawesome.com/add0ed00dc.js"></script>

        <link rel="stylesheet" type="text/css" href="css/LoginSignUp.css"

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

        <script src="togglepassword.js"></script>

  </head>
  <body>
    <div style="width:100vw; height:100vh;" class="d-flex justify-content-center align-items-center">
        <div class="card p-4">

    <form action="" method="POST">
    
    <div class="mb-4 text-center text-danger" >
        
    </div>

    <div class="form-row input-group mb-2">
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="E-mail here . . . " required />
        </div>
    </div>
    
    
    <div> 
        <input name="submit" type="submit" value="Send Password" style="border-radius: 16px;" class="btn btn-outline-info btn-block my-4">           
    </div>

</form>
        </div>
    </div>
  </body>
</html>