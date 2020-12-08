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
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-light" style="background-image: url(imgs/4K-Ultra-HD-Wallpapers-Download-48.jpg);background-size: cover;background-position: center;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Laptops</h1>
        <p class="lead font-weight-normal">"More Power. More Performance. More Pro."</p>
        <a class="btn btn-outline-light" href="#">Get Top3</a>
    </div>
    </div>
  </div>

<br>
    
  <div class="d-flex flex-column flex-md-row justify-content-between">

    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">HP 15</h2>
        <p class="lead">₹34990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/hp_15-40k.webp" alt="HP 15"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill mx-auto p-2 my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Lenovo G50</h2>
        <p class="lead">₹32800</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/lenovo_g50-40k.webp" alt="Lenovo G50"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Dell Vostro</h2>
        <p class="lead">₹39998</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/images.jfif" alt="Dell Vostro"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">HP 15</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/hp_15-40k.webp" class="w-100 h-100" alt="HP 15">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/hp-15-core-i3-10th-gen-4-gb-1-tb-hdd-windows-10-home-15-da3001tu-laptop/p/itmfc115b369e6c7" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹34990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Pre-installed Genuine Windows 10 OS</li>
          <li>Core i3 10th gen | 4GB DDR4 RAM | 1TB HDD</li>
          <li>Light Laptop without Optical Disk Drive</li>
          <li>15.6 inch Full HD WLED Backlit Anti-glare SVA Micro-edge Display</li>
          <li>Battery Backup-Upto 12 hours</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Stay connected to what matters most with long-lasting battery life and a sleek and portable, micro-edge bezel design. Built to keep you productive and entertained from anywhere, the HP 15" laptop features reliable performance and an expansive display - letting you stream, surf and speed through tasks from sun up to sun down.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Lenovo G50</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/lenovo_g50-40k.webp" class="w-100 h-100" alt="Lenovo G50">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Lenovo-80E3023KIH-15-6-inch-A8-6410-Graphics/dp/B01EJPVEGA/ref=pd_lpo_147_img_1/257-8074921-5563533?_encoding=UTF8&pd_rd_i=B01EJPVEGA&pd_rd_r=8ba558cf-7a29-4e70-85c2-7327c55abd27&pd_rd_w=BeQCV&pd_rd_wg=3QYSv&pf_rd_p=5a903e39-3cff-40f0-9a69-33552e242181&pf_rd_r=Y2ZBXD2KEBD50JR5R9SZ&psc=1&refRID=Y2ZBXD2KEBD50JR5R9SZ" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹32800</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>2.4GHz AMD A8-6410 processor</li>
          <li>4GB DDR3 RAM</li>
          <li>1TB 5400rpm Serial ATA hard drive</li>
          <li>15.6-inch screen, ATI Exo Pro R5 M330 2GB Graphics</li>
          <li>Windows 10 operating system</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Your laptop is your biggest gateway to the online world and beyond (except for your smartphone, of course). And we all have different priorities: Performance laptops for creators, professionals, or gamers – we’ve got powerhouses that rival what desktops deliver. Ultraportable laptops for folks who are always on the go. Budget laptops that give you value and performance in a single package. Innovative 2-in-1s – part laptop, part tablet, part nothing you’ve seen before – for those who want to tap the untested power of the new.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Dell Vostro</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/images.jfif" class="w-100 h-100" alt="Dell Vostro">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/dell-vostro-core-i3-10th-gen-4-gb-1-tb-hdd-256-gb-ssd-windows-10-home-3491-thin-light-laptop/p/itmc535725c8e7af?pid=COMFTZ8FF5CCRJTC&lid=LSTCOMFTZ8FF5CCRJTC7JTSRI&marketplace=FLIPKART&srno=b_4_96&otracker=clp_metro_expandable_3_28.metroExpandable.METRO_EXPANDABLE_30-40K_laptops-store_A5C60VWO35X9_wp12&fm=neo%2Fmerchandising&iid=da73ff55-b7cb-475e-9ad7-607743fe1cfc.COMFTZ8FF5CCRJTC.SEARCH&ppt=browse&ppn=browse&ssid=i8c0nlpy680000001606305755153" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹39998</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Intel Core i3 Processor</li>
          <li>4 GB DDR4 RAM</li>
          <li>1TB HDD | 256GB SSD</li>
          <li>35.56 cm Display</li>
          <li>64bit Windows 10 Operating System</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Dell Vostro 3491 14 Inch FHD Laptop (10th Gen i3-1005G1,4 GB,1TB HDD + 256 SSD,Intel HD Graphics,Win 10 + MS Office,Black)D552115WIN9BE. Dell Technologies is committed to transforming businesses, shaping the future of innovation and developing technologies to drive human progress. We are passionate about driving human progress through greater access to better technology, for people with big ideas around the world. Dell Technologies is instrumental in changing the digital landscape the world over, fueled by the desire to drive human progress through technology.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>