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
    
  <div class="d-flex flex-column flex-md-row justify-content-between">

    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Realme Narzo 20 Pro</h2>
        <p class="lead">₹13999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/rmnarzo10000.jpg" alt="Realme Narzo 20 Pro"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill mx-auto p-2 my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Galaxy M21</h2>
        <p class="lead">₹13999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/Galaxy-M31s-15k.webp" alt="Galaxy M21"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">POCO M2 Pro</h2>
        <p class="lead">₹13999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/poco m2 PRo.jpg" alt="POCO M2 Pro"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Realme Narzo 20 Pro</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/rmnarzo10000.jpg" class="w-100 h-100" alt="Realme Narzo 20 Pro">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/realme-narzo-20-pro-black-ninja-64-gb/p/itm043c480bf22fb?pid=MOBFVEATWGRHFRJ9&lid=LSTMOBFVEATWGRHFRJ9KMPDP5&marketplace=FLIPKART&srno=s_1_1&otracker=AS_QueryStore_OrganicAutoSuggest_3_9_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_3_9_na_na_na&fm=SEARCH&iid=5851001e-82ac-48df-9a0b-17f604c6fba9.MOBFVEATWGRHFRJ9.SEARCH&ppt=sp&ppn=sp&ssid=xiqvfaxdsw0000001606296298728&qH=878fa1b2c417bdbe" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹13999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>6 GB RAM | 64 GB ROM | Expandable Upto 256 GB</li>
          <li>16.51 cm (6.5 inch) Full HD+ Display</li>
          <li>48MP + 8MP + 2MP + 2MP | 16MP Front Camera</li>
          <li>4500 mAh Lithium-ion Battery</li>
          <li>MediaTek Helio G95 Processor</li>
          <li>65W Super Dart Charger</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">The Realme Narzo 20 Pro features a massive 4500 mAh battery which, with the help of superfast 65 W charge, goes from 0 to 100 in just about 38 minutes.With eight cores and a clock speed of up to 2.05 GHz, the Helio G95 gaming processor runs even heavy games smoothie and helps in multitasking without any lag.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Galaxy M21</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/Galaxy-M31s-15k.webp" class="w-100 h-100" alt="Galaxy M21">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Samsung-Galaxy-Midnight-Blue-Storage/dp/B07HGJJ559/ref=asc_df_B07HGJJ559/?tag=googleshopdes-21&linkCode=df0&hvadid=397083168716&hvpos=&hvnetw=g&hvrand=11554328578563448555&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007825&hvtargid=pla-903950310453&psc=1&ext_vrnc=hi" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹13999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>4GB RAM | 64GB internal memory | 512GB expandable</li>
          <li>6.4-inch(16.21 cm) Super Amoled - Infinity U Cut Display</li>
          <li>48MP + 8MP + 5MP | 20MP Front Camera</li>
          <li>6000 mAh Battery</li>
          <li>Exynos 9611,2.3GHz,1.7GHz Octa-Core processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">With the Samsung Galaxy M21, Samsung provide the powerful 6000 mAh battery along with all round features comprising of a 48 MP rear camera in Triple camera set up and 20 MP front camera and an immersive sAmoled screen.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Poco M2 Pro</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/poco m2 PRo.jpg" class="w-100 h-100" alt="Poco M2 Pro">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/poco-m2-pro-green-greener-64-gb/p/itm5de3b6eb57ab4" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹13999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>4 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
          <li>16.94 cm (6.67 inch) Full HD+ Display</li>
          <li>48MP + 8MP + 5MP + 2MP | 16MP Front Camera</li>
          <li>5000 mAh Lithium-ion Polymer Battery</li>
          <li>Qualcomm Snapdragon 720G Processor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">
Powerful to the Core
Thanks to its Qualcomm Snapdragon 720G processor, Qualcomm Adreno 618 GPU, and up to 4 GB of RAM, this smartphone is armed to its teeth to offer you breezy-smooth smartphone performance.The POCO M2 Pro boasts a 5000-mAh battery, which, when combined with its 33 W fast charging, sees to it that you can use the phone for hours on end without having to charge it frequently.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>