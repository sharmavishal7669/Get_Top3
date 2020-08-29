
<form action="login.php" method="POST">
    
    <div class="mb-4 text-center text-danger" id="invalidCredential" >
        <?php
        if(isset($_GET['email_error']))
        {
            echo '<h5>Invalid Password !</h5>';
        }
        ?>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary"><i class="fa fa-user fa-lg mr-2" aria-hidden="true" style="color:white"></i></span>
        </div>
        <input type="text" name="email" class="form-control" placeholder="User Email Here. . ." required/>
    </div>
    
    <div class=" input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary"><i class="fa fa-lock fa-lg mr-2" aria-hidden="true" style="color:white"></i></span>
        </div> 
        <input type="password" name="password" class="form-control" placeholder="User Password Here. . ." required />
    </div>
    
    <div class="d-flex justify-content-end">
        <a href="forgotpassword.php">Forgot Password ?</a>
    </div>
    
    <div> 
        <input name="submit" type="submit" value="LOGIN" style="border-radius: 16px;" class="btn btn-outline-info btn-block my-4">           
    </div>
    
    <div class="d-flex justify-content-center">
        <span>Not a member ? <a class="btn-link ml-2" href="registerpage.php">Register</a></span>
    </div>

</form>