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
        <h2 class="display-5">Moto E7 Plus</h2>
        <p class="lead">₹9499</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/motoe7plus10000.jfif" alt="Moto E7 plus"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 text-center overflow-hidden">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">RealMe C3</h2>
        <p class="lead">₹7999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/realmec310000.jfif" alt="RealMe c3"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 m-3 text-center overflow-hidden">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">RealMe Narzo 10A</h2>
        <p class="lead">₹9999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/41m3-OVtnQL.jpg" alt="RealMe Narzo 10A"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Moto E7 plus</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/motoe7plus10000.jfif" class="w-100 h-100" alt="Moto E7 plus">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/motorola-e7-plus-misty-blue-64-gb/p/itm5c34115d6c501" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹9499</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>4 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
          <li>16.51 cm (6.5 inch) HD+ Display</li>
          <li>48MP + 2MP | 8MP Front Camera</li>
          <li>5000 mAh Battery</li>
          <li>Qualcomm Snapdragon 460 Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">
Love clicking pictures at night? Well, then this Motorola smartphone might just be the one for you. Featuring the Quad Pixel technology, this phone’s light sensitivity is about 4 times more than that of ordinary smartphone cameras, so you can indulge in night photography. Also, this smartphone doesn’t lag performance-wise as it comes with a Snapdragon 460 octa-core processor and up to 4 GB of RAM.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">RealME C3</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/realmec310000.jfif" class="w-100 h-100" alt="RealME C3">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/realme-c3-frozen-blue-32-gb/p/itm58bf81a807d66" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹7999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>3 GB RAM | 32 GB ROM | Expandable Upto 256 GB</li>
          <li>16.56 cm (6.52 inch) HD+ Display</li>
          <li>12MP + 2MP | 5MP Front Camera</li>
          <li>5000 mAh Battery</li>
          <li>Helio G70 Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Packed with an octa-core Helio G70 AI processor, this Realme smartphone’s performance certainly packs a punch. Be it gaming or multitasking, you can do it all without any hint of lag by using this smartphone. It also comes equipped with a 16.5-centimetre (6.5) HD+ mini-drop fullscreen that has a screen-to-body ratio of about 89.8% to help you see every single detail in your favourite video content.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">RealMe Narzo 10A</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/41m3-OVtnQL.jpg" class="w-100 h-100" alt="RealMe Narzo 10A">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/realme-narzo-10a-so-white-32-gb/p/itmbeb412dade152?pid=MOBFQ36ASQHV3UGW&lid=LSTMOBFQ36ASQHV3UGWRF9MHV&marketplace=FLIPKART&srno=s_1_1&otracker=AS_Query_OrganicAutoSuggest_7_8_na_na_na&otracker1=AS_Query_OrganicAutoSuggest_7_8_na_na_na&fm=SEARCH&iid=311902b1-fdaf-4ec4-97ca-e44b10397a24.MOBFQ36ASQHV3UGW.SEARCH&ppt=sp&ppn=sp&ssid=n9qb22dutc0000001606294953579&qH=9036ff25ac09bf22" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹9999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>3 GB RAM | 32 GB ROM | Expandable Upto 256 GB</li>
          <li>16.56 cm (6.52 inch) HD+ Display</li>
          <li>12MP + 2MP + 2MP | 5MP Front Camera</li>
          <li>5000 mAh Lithium-ion Battery</li>
          <li>MediaTek Helio G70 (12 nm) Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Don’t worry about your phone running out of juice as the realme Narzo 10A features a massive 5000-mAh battery.Whether you’re watching movies, playing games, or reading, the Narzo 10A’s large 16.5-cm (6.5) HD+ Mini-drop Fullscreen offers a large field of vision, ensuring that you get an immersive visual experience.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>