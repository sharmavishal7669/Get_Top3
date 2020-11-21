<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.php";?>
    <title>Document</title>
    <link rel="stylesheet" href="css/browse.css">
</head>
<body>
    <?php require "navbar.php";?>
    <br>
    <br>
    <div id="bannercarousel" class="carousel slide mx-auto m-3" style="max-width:98%;" data-ride="carousel">
        <div class="carousel-inner mx-auto">
            <div class="carousel-item active" data-interval="10000">
                <img src="imgs/Trending banner.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="imgs/coming soon 2.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imgs/3.jpg" class="d-block" alt="...">
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
</body>
</html>