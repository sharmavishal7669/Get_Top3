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
        <h2 class="display-5">Samsung Galaxy Buds</h2>
        <p class="lead">₹8990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width:250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/samsung galaxy buds 10000.webp" alt="Samsung"></div>
      <a href="#1" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill mx-auto p-2 my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#2</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Sony WF-XB700</h2>
        <p class="lead">₹7990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width:250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/sony wf-xb700 10000.webp" alt="RM buds air pro"></div>
      <a href="#2" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>
    <div class="bg-info flex-md-fill p-2 mx-auto my-2 text-center overflow-hidden" style="width:300px;height:450px;">
      <div><p class="h3">#3</p></div>
      <div class="my-3 p-1">
        <h2 class="display-5">Oppo Encore Free</h2>
        <p class="lead">₹5990</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width:250px; height: 200px; border-radius: 21px 21px 0 0;"><img style="width: 100%; height: inherit;border-radius:inherit;" src="imgs/oppo encore free 10000.jpg" alt="Crossbeats"></div>
      <a href="#3" class="btn btn-dark px-5">Full Details <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    </div>

  </div>

<br id="1"><br>
  <!-- Specs -->

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Samsung Galaxy Buds</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/samsung galaxy buds 10000.webp" class="w-100 h-100" alt="Samsung Galaxy Buds">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Samsung-SM-R175NZKAINU-Galaxy-Buds-Black/dp/B084MXFPYQ/ref=pd_lpo_353_img_0/257-8074921-5563533?_encoding=UTF8&pd_rd_i=B084MXFPYQ&pd_rd_r=3cd56799-7bec-431f-ad47-feaf6cb70737&pd_rd_w=1VD60&pd_rd_wg=wBPOR&pf_rd_p=5a903e39-3cff-40f0-9a69-33552e242181&pf_rd_r=GX3YR123VX7BWMEET6PY&psc=1&refRID=GX3YR123VX7BWMEET6PY" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹8990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Battery - 85mAH for the earbuds and 270 mAh for the cradle/ case</li>
          <li>long lasting battery life ( 11 hours buds and 7 hours case)</li>
          <li>adaptive 3-mic system</li>
          <li>wireless earbuds with 2-way speakers</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">The Galaxy Buds were designed to provide a true screen-free experience for busy people on the go. Its adaptive dual microphone features an inner microphone and an outer microphone that work together to capture your voice more clearly during phone calls.</div>
      </div>
    </div>
  </div>
</div>

<br id="2"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Sony WF-XB700</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/sony wf-xb700 10000.webp" class="w-100 h-100" alt="Sony">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/Sony-WF-XB700-Wireless-Bluetooth-Headphones/dp/B085VQFZ91/ref=redir_mobile_desktop?ie=UTF8&aaxitk=-qYfKOFaYOEtk.dIP4inPA&hsa_cr_id=7149707600502&pd_rd_r=bd6bcfaa-8be8-4f1f-9f35-1b3b19a4cfbd&pd_rd_w=2wNGm&pd_rd_wg=gJf3k&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹7990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>Google Assistant/Siri</li>
          <li>With Mic: Yes</li>
          <li>Stable Connection/Low Latency</li>
          <li>Battery Life: 18 hours (9hrs Earbuds + 9hrs Case)</li>
          <li>IPX4 water resistance rating, splashes and sweat</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5"> The ergonomically designed in Tri-hold structure to contact with three different points on your ear for a secure and comfortable fit. Enjoy uninterrupted music on fully charged headphones for 9 long playback hours. Thanks to the handy charging case, charge further for 9 hours to keep you going through the day.</div>
      </div>
    </div>
  </div>
</div>

<br id="3"><br>

<div class="d-md-flex flex-sm-column flex-md-row">
  <div class="p-2 bg-light">
    <div class="d-flex flex-column" style="width:450px;height420px;">
      <div class="p-2 bg-light"><div class="h2 text-center">Oppo Encore Free</div></div>
      <div class="p-2 w-100 bg-light text-center mx-auto" style="height:350px; width:350px;">
        <img src="imgs/oppo encore free 10000.jpg" class="w-100 h-100" alt="Oppo">
      </div>
      <div class="p-2 bg-light">
        <div class="d-flex">
          <div class="flex-fill text-center"><a href="#" class="btn ">Add to Favourites <span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></div>
          <div class="flex-fill text-center"><a href="https://www.amazon.in/OPPO-ENCO-Wireless-Headphone-White/dp/B0849V6C4P/ref=sr_1_4_mod_primary_lightning_deal?crid=1ZJZIGREKY5C4&dchild=1&keywords=oppo+encore+free&qid=1606291731&s=electronics&sbo=Tc8eqSFhUl4VwMzbE4fw%2Fw%3D%3D&smid=A14CZOWI0VEHLG&sprefix=oppo+enc%2Celectronics%2C327&sr=1-4" class="btn ">Buy Now <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 bg-light flex-grow-1">
    <div class="d-flex mt-2 flex-column">
      <div class="pl-5">
        <p class="h3">Price: <span class="font-weight-bold text-danger">₹5990</span></p>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Highlights</div>
        <ul class="w-75 text-justify">
          <li>410mAH Charging Case battery</li>
          <li>IPX4 water resistance</li>
          <li>25 hours of music playback or 15 hours of call time</li>
          <li>3.4 mm ultra-dynamic speaker</li>
          <li>Noise cancelling</li>
        </ul>
      </div>
      <div class="mt-4 pl-5">
        <div class="h4">Description</div>
        <div class="p text-justify mr-5">OPPO Enco Free true wireless headphone: A perfect pair for your smartphone. Binaural simultaneous Bluetooth transmission | Ultra-dynamic speaker AI uplink noise cancellation during calls | Slide and tap</div>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php require 'scrolltotop.php';?>
<?php require 'footer.php'; ?>
    
</body>
</html>