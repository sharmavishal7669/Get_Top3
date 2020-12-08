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
    
  <div class="d-flex flex-column flex-md-row justify-content-between">

    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#1</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Apple Airpods</h2>
        <p class="lead">₹12990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/apple.jpg" alt="Apple airpods"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill mx-auto p-2 my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Samsung Galaxy Buds+</h2>
        <p class="lead">₹10990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/samsung-galaxy-buds-plus-9.jpg" alt="Samsung Galaxy Buds+"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Jabra Elite 75t</h2>
        <p class="lead">₹5990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/cwelch_200114_3847_0001.jpg" alt="Jabra elite 75t"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Apple Airpods</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/apple.jpg" class="w-100 h-100" alt="Apple airpods">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.reliancedigital.in/apple-mv7n2hn-a-wireless-airpods-with-charging-case-white/p/491431363?gclid=CjwKCAiAnvj9BRA4EiwAuUMDf96B4l1n4cyvSOtLE4iwjtgSJYcrc0Z3uSpxD3ELN71Xel_tck-3GxoCNnwQAvD_BwE" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹12990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>24 hours of listening time</li>
          <li>High-quality AAC wireless audio</li>
          <li>Apple-designed H1 chip</li>
          <li>Supports hands-free “Hey Siri”</li>
          <li>Voice detecting microphones</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Completely wireless headphones are automatically on and always connected. AirPods sense when they’re in your ears and know when you’re listening. Music pauses when you take one or both AirPods out, and playback automatically resumes when you put them back in within a few seconds. Use one AirPod or both-the sound and microphones are always in the right place.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Samsung Galaxy Buds+</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/samsung-galaxy-buds-plus-9.jpg" class="w-100 h-100" alt="Samsung Galaxy Buds+">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Samsung-SM-R175NZWAASA-Galaxy-Buds-White/dp/B084G9V2SD/ref=pd_lpo_23_img_1/257-8074921-5563533?_encoding=UTF8&pd_rd_i=B084G9V2SD&pd_rd_r=5e745f4e-5187-4e93-8840-0e70c520fbb7&pd_rd_w=yYGfN&pd_rd_wg=Nartg&pf_rd_p=5a903e39-3cff-40f0-9a69-33552e242181&pf_rd_r=J7CS8K1T9GP2NV2MFW1G&psc=1&refRID=J7CS8K1T9GP2NV2MFW1G" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹10990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Rich treble and deep bass</li>
          <li>an adaptive 3-mic system</li>
          <li>Rich, natural sound</li>
          <li>Ambient noise on/off</li>
          <li> Long battery life</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5"> Introducing Galaxy Buds+. Our first-ever wireless earbuds with 2-way speakers delivering sound by AKG with rich treble and deep bass, an adaptive 3-mic system for crystal clear calls, and long-lasting battery power — all for a premium listening experience. Rich, natural sound is now expanded by Galaxy Buds+ new, 2-way dynamic speaker system and boosted driver.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Jabra Elite 75t</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/cwelch_200114_3847_0001.jpg" class="w-100 h-100" alt="Jabra Elite 75t">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Jabra-Elite-75t-Bluetooth-Generation/dp/B07YDZL1V9/ref=sr_1_1_sspa?dchild=1&keywords=jabra+elite+75t&qid=1606293478&s=computers&smid=A14CZOWI0VEHLG&sr=1-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFSRlNCN1FUWDhQMzYmZW5jcnlwdGVkSWQ9QTAzODM5MjJaQTFVTTVZNTI3UkUmZW5jcnlwdGVkQWRJZD1BMDEzNDAyMjNUNzg5Mk40SDM4TEUmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹10999</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Active Noise Cancellation (ANC)</li>
          <li>4-Mic call technology for superior call quality</li>
          <li> IP55-rated protection</li>
          <li>Jabra Sound+ app for best experience</li>
          <li>7.5 hours of battery and a total of 28 hours with charging case</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">Jabra Elite 75t offer a great calls and music experience, engineered for comfort and tested for secure fit. You can be confident that they’ll stay put, And the smaller, ergonomic new design means they’re also comfortable. With enhanced 4-microphone call technology, you can be sure of great quality for your calls.</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>