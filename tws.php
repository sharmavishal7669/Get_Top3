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
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-light" style="background-image: url(imgs/twsbg.jpg);background-size: cover;background-position: center;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">True Wireless</h1>
        <p class="lead font-weight-normal">"I Want Complete Freedom From Tangles"</p>
        <a class="btn btn-outline-light" href="#">Get Top3</a>
    </div>
    </div>
  </div>

<br>
    
  <div class="d-flex flex-column flex-md-row justify-content-between ">

    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">OnePlus Buds</h2>
        <p class="lead">₹4990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width:250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/oneplus-buds.jpg" alt="OnePlus"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill mx-auto p-2 my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">OPPO Enco W51</h2>
        <p class="lead">₹4999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/OPPO ENCO W51.webp" alt="RM buds air pro"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">boAt Airdopes 381</h2>
        <p class="lead">₹1999</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/urban.jpg" alt="Crossbeats"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">OnePlus Buds</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/oneplus-buds.jpg" class="w-100 h-100" alt="OnePlus">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/OnePlus-E501A-Buds-White/dp/B08CVMXPGY/ref=sr_1_2?dchild=1&keywords=oneplus+buds&qid=1606184641&sr=8-2" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹4990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Bluetooth version: 5</li>
          <li>30 hours of full Playtime</li>
          <li>Driver size: 13.4 mm</li>
          <li>Low Latency Mode | IPX4 resistant.</li>
          <li>Sweat Proof, Deep Bass, Water Resistant, With microphone</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">It’s time to take your music-listening experience up a notch. With the OnePlus Buds’ unique noise cancellation algorithm, ergonomic design, fast pairing, and IPX4 rating, making calls and listening to music on the go takes a turn for the better.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">OPPO Enco W51</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/OPPO ENCO W51.webp" class="w-100 h-100" alt="OnePlus">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.flipkart.com/oppo-enco-w51-active-noise-cancellation-bluetooth-headset/p/itm311f2089bfd69?pid=ACCFV7Z3AHHZT9NB&lid=LSTACCFV7Z3AHHZT9NBKSRTXM&marketplace=FLIPKART&cmpid=content_headphone_10043474080_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,434904834931,,,,c,,,,,,,&gclid=CjwKCAiAnvj9BRA4EiwAuUMDf8OcF8NCPj3OUKXwwS_P7fUfRaULqDEs5x6pbBPQruhsHa6zSOua2BoCwyMQAvD_BwE&gclsrc=aw.ds" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹4999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Bluetooth version: 5</li>
          <li>With Mic: Yes</li>
          <li>Driver Size: 7 mm</li>
          <li>Charging time: 2.5 hrs</li>
          <li>Sweat Proof, Deep Bass, Water Resistant</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">In Depth Noise Reduction for Music and Calls, Fast, Stable and Smooth Connection, IP54 Rated Dust and Water Resistance, Tailor-made to Fit in Your Ear, 15 Minute Charge and Listen for 9 Hours, Lightweight with Soft Silicon Tips.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">boAt Airdopes 381</div></div>
      <div class="p-2 w-100 bg-light text-center">
        <img src="imgs/urban.jpg" class="w-100 h-100" alt="OnePlus">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.boat-lifestyle.com/products/airdopes-381?variant=31233327071330&currency=INR" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹1999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Bluetooth version: 5</li>
          <li>Battery Life: 20 hrs</li>
          <li>Wireless range: 10 m</li>
          <li>Charging time: 1.5 hrs</li>
          <li>Sweat Proof, Deep Bass, IPX5 Water Resistant</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Tune into the true wireless vibe with the all new boAt Airdopes 381 TWS earbuds. With our ASAP Fast Charge technology, the earbuds fetch a playback time of up to 60 min in just 5 min of charge. Its smooth touch controls lets one command playback, hands-free and activate voice assistant with ease.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>