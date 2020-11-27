<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.php";?>
    <title>Document</title>
    <link rel="stylesheet" href="css/browsenow.css">
</head>
<body>
    <?php
if(!isset($_SESSION['id'])){ 
    require 'navbar.php';
    ?>
<?php } else { 
    require 'navbar1.php'; 
?>
<?php } ?>
    <br>
    <br>
    
    <div id="bannercarousel" class="carousel slide mx-auto m-3" style="max-width:98%;" data-ride="carousel">
        <div class="carousel-inner mx-auto">
            <div class="carousel-item active">
                <img src="imgs/Trending banner.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imgs/coming soon 2.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imgs/cs3.png" class="d-block" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannercarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hiddden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannercarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hiddden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Cards -->
            <div class="categories mt-5  bg-dark">
                <div class="h2 text-center text-white pt-2">Browse Popular Categories</div>
                <div class="gallery">
                        <a href="#earphone"  class="hover_effect">
                            <img src="imgs/jsjpg.jpg" alt="pic" />
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>

                        <a href="#phones"  class="hover_effect">
                            <img src="imgs/html5.webp" alt="smartphone pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                    
                        <a href="#laptops"  class="hover_effect">
                            <img src="imgs/css3.jpg" alt="pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                        <a href="#watches"  class="hover_effect">
                            <img src="imgs/python.jpg" alt="pic" />
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                </div>
            </div>


            <br id="earphone"><br>

                    <!-- True Wireless -->

            <div class="p-2 bg-dark cards">
            <div class="h2 text-center text-white pb-2">True Wireless Earphones</div>
    <div class="d-flex justify-content-around pb-2">
            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/Realme buds air pro 5000.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹5000</h4>
                    <a href="tws.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/oppo encore free 10000.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹10000</h4>
                    <a href="tws1.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/apple.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹15000</h4>
                    <a href="tws2.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>
</div>
</div>

<br id="phones"><br>

            <!-- Smart Phones -->
<div class="p-2 bg-dark cards">
            <div class="h2 text-center text-white pb-2">Smart Phones</div>
    <div class="d-flex justify-content-around pb-2">
            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/gsmarena_000-1-e1597494842188.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹10000</h4>
                    
                    <a href="sp.php" class="btn btn-primary">Get Top3</a>
                    
                </div>
            </div>
            </div>

            <div class="container" >
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/rmnarzo10000.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹15000</h4>
                    
                    <a href="sp1.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/poco-x3-india-launch-image-2.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹20000</h4>
                    
                    <a href="sp2.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>
</div>
</div>

<br id="laptops"><br>

            <!-- Laptops -->
<div class="p-2 bg-dark cards">
            <div class="h2 text-center text-white pb-2" >Laptops</div>
    <div class="d-flex justify-content-around pb-2">
            <div class="container" >
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/hp_15-40k.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹40000</h4>
                    
                    <a  href="lap.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container" >
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/lenovo_ideapad-520-50k.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹50000</h4>
                    
                    <a href="lap1.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/lenovo_leigon-y520-60k.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹60000</h4>
                    
                    <a href="lap2.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>
</div>
</div>

<br id="watches" ><br>

            <!-- Smart Watches -->
<div class="p-2 bg-dark cards">
            <div class="h2 text-center text-white pb-2">Smart Watches</div>
    <div class="d-flex justify-content-around pb-2">
            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/noise-5k.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹5000</h4>
                    
                    <a href="watch.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container" >
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/fossil-q-explorist-10k.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹10000</h4>
                    
                    <a href="watch1.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="imgs/samsung_galaxy-15k.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Under ₹15000</h4>
                    
                    <a href="watch2.php" class="btn btn-primary">Get Top3</a>
                </div>
            </div>
            </div>
</div>
</div>

<br><br><br><br><br>
            <!--  Footer -->
            <div class="container-fluid">
            <div class="d-flex justify-content-between bg-dark px-5 pt-2">
                <div class="p-2 slinks" id="link">
                    <span class="mr-5 text-primary font-weight-bolder">FOLLOW US ON</span>
                    <a href="https://twitter.com/" target="_blank">
                        TWITTER<i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                    </a>
                    <span class="mx-2">|</span>
                    <a href="https://facebook.com/" target="_blank">
                        FACEBOOK <i class="fa fa-facebook ml-2" aria-hidden="true"></i>
                    </a>
                    <span class="mx-2">|</span>
                    <a href="https://instagram.com/tubextech_ig">
                        INSTAGRAM <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>

                <!-- Copyright-->
                <div class="p-2 slinks text-white">
                © 2020  <a href="index.php" class="font-weight-bolder text-primary">Get TOP3 </a> All Rights Reserved.  
                </div>
                
            </div>  
            </div>
            <?php require 'scrolltotop.php';?>
</body>
</html>