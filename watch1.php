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
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-light" style="background-image: url(imgs/ghUDZv.jpg);background-size: cover;background-position: center;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Smart Watches</h1>
        <p class="lead font-weight-normal">"Time Has Been Transformed And We Have Changed"</p>
        <a class="btn btn-outline-light" href="#">Get Top3</a>
    </div>
    </div>
  </div>

<br>
    
  <div class="d-flex flex-sm-column flex-md-row justify-content-around">

    <div class="bg-info flex-md-fill p-2 m-3 text-center overflow-hidden">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Fossil Gen 3 Q Explorist</h2>
        <p class="lead">₹9998</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/fossil-q-explorist-10k.jpg" alt="Fossil Gen 3 Q Explorist"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 text-center overflow-hidden">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Huami Amazfit GTS</h2>
        <p class="lead">₹9999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/Amazfit-Huami-10k.webp" alt="Huami Amazfit GTS"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 m-3 text-center overflow-hidden">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">NoiseFit Endure Sport</h2>
        <p class="lead">₹5999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/wrb-sw-endure-std-blk-red-android-ios-noise-original-imafr9s5fzv7dxch.jpeg" alt="NoiseFit Endure Sport"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Fossil Gen 3 Q Explorist</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/fossil-q-explorist-10k.jpg" class="w-100 h-100" alt="Fossil Gen 3 Q Explorist">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/fossil-gen-3-q-explorist-smartwatch/p/itm699826a14807d" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹9998</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Android Wear 2.0</li>
          <li>Activity Tracking, Sleep Tracking, Calorie Count</li>
          <li>Wireless Charging</li>
          <li>Customisable Watch Faces</li>
          <li>Notifications - Call, Text, Alarm, Calendar, Email, Social Media</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Go where the road takes you, but don't forget to take your Fossil smartwatch with you. Customize your watch, receive notifications on the go, control your music playlist, and track your daily activities. Powered by the Android 2.0 OS, this watch is compatible with Android 4.3+ or iOS 9+ devices.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Huami Amazfit GTS</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/Amazfit-Huami-10k.webp" class="w-100 h-100" alt="Huami Amazfit GTS">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/huami-amazfit-gts-smartwatch/p/itmd8be178f03412?pid=SMWFNSX922XJAUAY&lid=LSTSMWFNSX922XJAUAYUNCO19&marketplace=FLIPKART&srno=s_1_5&otracker=search&otracker1=search&fm=SEARCH&iid=f7a7622d-fb25-4533-8854-7ea36dd0f529.SMWFNSX922XJAUAY.SEARCH&ppt=sp&ppn=sp&ssid=gaq33jrvfk0000001606317470611&qH=f82bf063cf7ee128" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
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
          <li>1.65" 341 PPI AMOLED Display with Corning Gorilla 3 Glass</li>
          <li>14 Days Battery Life on a Single Charge</li>
          <li>Touchscreen</li>
          <li>5 atm and music control</li>
          <li>12 Sports Modes & Activity Tracking with distance, calories and steps</li>
          <li>Fitness & Outdoor</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">
The Huami Amazfit GTS smartwatch is an elegantly designed fitness wearable that comes with a brilliant 4.19 cm (1.65) AMOLED display that is comfortable to view and comes with modular watch faces that can be customized as per your style. This beautifully crafted smartwatch comes with 14-day battery life, is water-resistant up to a depth of 50 meters and has multiple swimming modes to choose from. Its PPG sensors monitor your heart rate on a 24-hour basis and while you workout, it automatically detects the activity and warns you in case the levels exceed the standard norm. With a 12 sports mode, the Huami Amazfit GTS smartwatch can detect activities such as outdoor running, walking, outdoor cycling, indoor cycling, treadmill, elliptical trainer, hill climb, trail running, swimming, skiing, and gym workouts. Get this smartwatch and work towards that new, healthy you.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">NoiseFit Endure Sport</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/wrb-sw-endure-std-blk-red-android-ios-noise-original-imafr9s5fzv7dxch.jpeg" class="w-100 h-100" alt="NoiseFit Endure Sport">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/noisefit-endure-sport-smartwatch/p/itm3ac158a72e456?pid=SMWFRYSYY9HCDPFS&lid=LSTSMWFRYSYY9HCDPFSRTIVTK&marketplace=FLIPKART&srno=s_1_4&otracker=search&otracker1=search&fm=SEARCH&iid=85fe119e-55a1-4e9f-8d87-6211e02d17b2.SMWFRYSYY9HCDPFS.SEARCH&ppt=sp&ppn=sp&ssid=qzsgqdkw800000001606317757885&qH=fbe9e8df937d2d17" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹5999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Full-touch, Full-colour 1.28 inch display with 100+ cloud-based watch faces</li>
          <li>Compatible with Android 5.0+ and iOS 8+</li>
          <li>Up to 20 days of battery life; 30 days on standby</li>
          <li>9 sports modes. Sleep, step and calorie tracking</li>
          <li>IP68 dust and waterproof</li>
          <li>Touchscreen</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">
NoiseFit Endure is a rugged smartwatch with a stunning 1.28 inch display and 100+ cloud-based watch faces which will attract compliments from everyone. Enjoy up to 20-day battery life, with 9 sports modes, female health tracking and smart notifications, you get all updates right on your wrist. Paired with DaFit app, NoiseFit Endure becomes your reliable companion, at home or the gym, at work or on vacation.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>