<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.php";?>
    <title>Document</title>
    <link rel="stylesheet" href="css/browsenow.css">
</head>
<body>
    <?php require "navbar.php";?>
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

    <!-- Cards -->
            <div class="categories mt-5">
                <div class="h2 ml-3 text-center">Browse Popular Categories</div>
                <div class="gallery">
                        <a href="https://coursera.org/share/6b3dd4cd171e445f3ebdff13f305898c" target="_blank" class="hover_effect">
                            <img src="imgs/jsjpg.jpg" alt="pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                  
                        <a href="https://www.coursera.org/account/accomplishments/records/QYR9ZLC9GAZZ?utm_source=link&utm_medium=certificate&utm_content=cert_image&utm_campaign=sharing_cta&utm_product=course" target="_blank" class="hover_effect">
                            <img src="imgs/html5.webp" alt="smartphone pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                    
                        <a href="https://coursera.org/share/5d47c41cb3878bd5df41876fbc9dadda" target="_blank" class="hover_effect">
                            <img src="imgs/css3.jpg" alt="pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                        
                        <a href="https://coursera.org/share/2c48b06cb5549be54ce3991b24a32401" target="_blank" class="hover_effect">
                            <img src="imgs/python.jpg" alt="pic">
                            <i class="fa fa-hand-o-down  fa-4x" aria-hidden="true"></i>
                        </a>
                </div>
            </div>
</body>
</html>