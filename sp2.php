<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'head.php';?>
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
<br><br>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-light" style="background-image: url(imgs/iphone-7-iphone-smartphones-technology-high-tech-logo-cell-p.jpg);background-size: cover;background-position: center;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Smart Phones</h1>
        <p class="lead font-weight-normal">"Deep Dive in Smart World"</p>
        <a class="btn btn-outline-light" href="#">Get Top3</a>
    </div>
    </div>
  </div>

<br>
    
  <div class="d-flex flex-sm-column flex-md-row justify-content-around">

    <div class="bg-info flex-md-fill p-2 m-3 text-center overflow-hidden">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">POCO X3</h2>
        <p class="lead">₹16999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/poco-x3-india-launch-image-2.jpg" alt="POCO X3"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 text-center overflow-hidden">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Motorola One Fusion+</h2>
        <p class="lead">₹17499</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/motorola-one-fusion-20k.webp" alt="Motorola One Fusion+"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 m-3 text-center overflow-hidden">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Redmi Note 9 Pro Max</h2>
        <p class="lead">₹17450</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/redmi-note-9-pro-max-380x800-1584000985.webp" alt="Redmi Note 9 Pro Max"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">POCO X3</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/poco-x3-india-launch-image-2.jpg" class="w-100 h-100" alt="POCO X3">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/poco-x3-cobalt-blue-64-gb/p/itme71cba415d626" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹16999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
          <li>16.94 cm (6.67 inch) Full HD+ Display</li>
          <li>64MP + 13MP + 2MP + 2MP | 20MP Front Camera</li>
          <li>6000 mAh Lithium-ion Polymer Battery</li>
          <li>Qualcomm Snapdragon 732G Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Bring home this smartphone and experience performance and entertainment go hand in hand. Rocking a Qualcomm Snapdragon 732G processor and an Adreno 618 GPU, this phone can handle almost every smartphone task like a breeze. Additionally, you can take advantage of its 6,000-mAh battery and 16.94-centimetre (6.67) FHD+ Display to indulge in your favourite form of entertainment – be it movie-watching or gaming.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Motorola One Fusion+</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/motorola-one-fusion-20k.webp" class="w-100 h-100" alt="Motorola One Fusion+">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/motorola-one-fusion-twilight-blue-128-gb/p/itm9c0e4b9b56acd" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹17499</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>6 GB RAM | 128 GB ROM | Expandable Upto 1 TB</li>
          <li>16.51 cm (6.5 inch) Full HD+ Display</li>
          <li>64MP + 8MP + 5MP + 2MP | 16MP Front Camera</li>
          <li>5000 mAh Lithium Polymer Battery</li>
          <li>Qualcomm Snapdragon 730G Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">This Motorola handset packs a 16.51-centimetre (6.5) HDR10 certified Total Vision Full HD+ display with an aspect ratio of 19.5:9, offering you lifelike colours, enhanced brightness, and improved contrast. You can game, watch movies, and multitask between several apps, among other things, without any lag on this phone as it comes equipped with a Qualcomm Snapdragon 730G processor, along with 6 GB of RAM.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Redmi Note 9 Pro Max</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/redmi-note-9-pro-max-380x800-1584000985.webp" class="w-100 h-100" alt="Redmi Note 9 Pro Max">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/redmi-note-9-pro-max-champagne-gold-64-gb/p/itm8f7be0339828b?pid=MOBFV99GD4BZRXFD&lid=LSTMOBFV99GD4BZRXFDHE3DWC&marketplace=FLIPKART&srno=s_1_1&otracker=AS_Query_OrganicAutoSuggest_3_10_na_na_na&otracker1=AS_Query_OrganicAutoSuggest_3_10_na_na_na&fm=SEARCH&iid=decadf56-b4ef-4b3b-a366-d97fd22f3f5a.MOBFV99GD4BZRXFD.SEARCH&ppt=sp&ppn=sp&ssid=730v51brnk0000001606298731265&qH=a0508e13f08961a6" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹17450</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>6 GB RAM | 64 GB ROM | 512GB Expandable</li>
          <li>16.94 cm (6.67 inch) Display</li>
          <li>64MP rear camera | 32MP Front Camera</li>
          <li>5020mAH lithium-polymer Battery</li>
          <li>Qualcomm Snapdragon 720G with 8nm octa core processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">The 16.9cm(6.67") large display with rounded corner design and dot notch display. Qualcomm Snapdragon 720G octa-core processor with 8nm technology; coupled with MIUI 11 system level optimisations enables low power consumption for a longer battery life. 64MP Quad camera with high resolution camera. Capture great photos in different lighting conditions. Gorgeous portraits with automatically enhanced facial features. Support Ultra-wide and super macro mode. 32MP front camera. 5020 large mAh large battery with 33W fast charger in-box</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>