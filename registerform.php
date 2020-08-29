
<form action="register.php" method="POST">
    
    <div class="mb-3 text-danger" id="invalidCredential" >
        <h6>All fields are mandatory</h6>
    </div>

    <div class="form-row input-group mb-2">
        <div class="col">
        <input type="text" name="fname" class="form-control" pattern="^[a-zA-Z]+$" oninvalid="setCustomValidity('Please use alphabets only')" onkeyup="setCustomValidity('')" placeholder="First name" required/>
        </div>
        <div class="col">
        <input type="text" name="lname" class="form-control" pattern="^[a-zA-Z]+$" oninvalid="setCustomValidity('Please use alphabets only')" onkeyup="setCustomValidity('')" placeholder="Last name" required/>
        </div>    
    </div>
    
    <div class="form-row input-group mb-2">
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="E-mail " required />
        </div>
    </div>

    <div class="form-row input-group mb-2">
        <div class="col d-flex">
            <input id="registerpassword" type="password" name="password" class="form-control" pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d).*$"  placeholder="Password" required /><span class="float-right mx-2 my-auto"><a id="togglevisibility" href="#" onclick="togglePassword()">show</a> </span>
        </div>
    </div>

    <div class="form-row input-group">
        <div class="input-group col">
            <div class="input-group-prepend">
                <span class="input-group-text">+91</span>
            </div>     
            <input type="tel" name="phoneno" class="form-control" pattern="^[6-9][0-9]{9}$"  placeholder="Phone number" required />
        </div>
    </div>
    
    <div class="d-flex mt-4 justify-content-center">
        <p>By clicking on <i>Register,</i> you agree our <a class="d-block text-center" href="#">Terms & Conditions.</a></p>
    </div>
    
    <div class="mb-3" style="margin-top:-4%;"> 
        <input name="submit" type="submit" value="REGISTER" style="border-radius: 16px;" class="btn btn-outline-info btn-block">           
    </div>
    <div class="d-flex justify-content-center">
        <span>Already registerd ? <a class="btn-link ml-2" href="loginpage.php">Login</a></span>
    </div>
</form>