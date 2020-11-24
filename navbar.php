<nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
<a class="navbar-brand" href="index.php">Get TOP3</a>
    <div class="container" id="navbarContainer">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <div class="collapse navbar-collapse px-1 mx-2" id="navbarToggle">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  class="nav-link" href="loginpage.php">
                            <span><i class="fa fa-home" aria-hidden="true" style="color: white"></i> Home <span class="sr-only">(current)</span></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <span><i class="fa fa-list" aria-hidden="true" style="color: white"></i> Categories</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">True wireless earphones</a>
                            <a class="dropdown-item" href="#">Smart Phones</a>
                            <a class="dropdown-item" href="#">Laptops</a>
                            <a class="dropdown-item" href="#">Smart Watches</a>
                        </div>
                    </li>
                    

                    

                    <?php
                        if(!isset($_SESSION["email"]))
                        {       
                    ?>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="loginpage.php"> 
                        <span><i class="fa fa-sign-in fa-10x mr-2" aria-hidden="true" style="color:white"></i>Login</span>
                    </a>
                    </li>

                    <li class="nav-item"  style="margin-right:-30px">
                        <a class="nav-link" href="registerpage.php"> 
                            <span><i class="fa fa-user-plus fa-10x mr-2" aria-hidden="true" style="color:white"></i>Register</span>
                        </a>
                    </li>
                    <?php
                        }
                    ?>

                    <?php
                        if(isset($_SESSION['email']))
                        {
                    ?>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php"> 
                        <span><i class="fa fa-sign-in fa-10x mr-2" aria-hidden="true" style="color:white"></i>Log Out</span>
                    </a>
                    </li>
                    <?php
                        }
                    ?>
                        
                    
            </ul>
         </div>
         
    </div>
</nav> 