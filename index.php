<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GetTop3 Homepage</title>
        <?php
            include 'head.php';
        ?>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        
        
    </head>
    <body >
        
    
    <div class="d-flex flex-column" style="height:100%;">

        <!-- Navbar -->
        <?php require 'navbar.php'; ?>

        <div class="mt-5 page1bg d-flex flex-column justify-content-center">

            <div class="text-light text-center">
                <p>
                <h1>Save Your Precious Time<br>
& Choose The Best.</h1></p>
            </div>

            <div class="text-white p-2 text-center">
                <strong>Looking for best products in your budget ?</strong> <br> Give your custom constraints and get <b>TOP 3</b> products.
            </div>

            <div class="text-center">
                <input type="button" id="browsebutton" value="BROWSE NOW" onclick="window.location.href='browse.php'">
            </div>
        </div>

    </div>

    <div class="d-flex mouse justify-content-center">
        <a class="downbutton" href="#page2">
            <div>
                <span class="fa fa-chevron-down text-white"></span>
            </div>
        </a>
    </div>


    <div id="page2" style="height:70px;" class="bg-primary">
    </div>

    <section id="page2" class="bg-primary" style="height:100%;" >
        
        <div class="container">
            <div class="row justify-content center">
                <div class="col-md-12 text-center">
                    <span class="subheading">
                        WHY CHOOSE US?
                    </span>
                    <h2 class="mb-3">Top Reasons Why We Need GetTop3</h2>
                </div>
            </div>
        </div>  

        <div class="container-fluid px-0">
            <div class="row d-sm-flex">
                
            </div>
        </div>
        <div>
            &nbsp; &nbsp;

        </div>
        <div>
            &nbsp; &nbsp;
            
        </div>
 
        <div>
           <div class="card-deck">
  <div class="card bg-dark text-white">
    <h2><i class="fa fa-check-square-o fa-3x"></i></h2>
    <div class="card-body text-center">
      <h1 class="card-text">Quick and Accurate Results!</h1>
    </div>
  </div>
  <div class="card bg-warning">
    <h2><i class="fa fa-clock-o fa-3x"></i></h2>
    <div class="card-body text-center">
      <h1 class="card-text">Save Your Time!</h1>
    </div>
  </div>
  
</div>
        </div>
        <div>
            &nbsp; &nbsp;
        </div>
        
        <div class="card-deck">
            <div class="card bg-success">
                <h2><i class="fa fa-heart fa-3x"></i></h2>
    <div class="card-body text-center">
      <h1 class="card-text">Easy To Use!</h1>
    </div>
  </div>
  <div class="card bg-danger">
    <h2><i class="fa fa-user-circle-o fa-3x"></i></h2>
    <div class="card-body text-center">
      <h1 class="card-text">Get your desired product in few steps!</h1>
    </div>
  </div>
        </div>

    </section>   
 
    <div class="bg-info" style="height:100%;">
        
        <div>
            Useful Content Goes HERE!
        </div>  

        <div>
            Company Updates Goes Here!
        </div>

        <div>
            Offers Goes Here!
        </div>

       

    </div>
    <div style="background-color: #333; color:white ;">
        <?php require 'footer.php' ?>
    </div>
        

    </body>
</html>
