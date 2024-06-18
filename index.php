<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosPlan - Landing Page</title>
  <?php 
    require "header.php"; 
    require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();
  ?>
</head>
<body>
  <div class="slider" style="width: 60%; margin: auto;">
    <ul class="slides">
      <li>
        <img src="./static/images/carousel_1.jpg"> 
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3">Become your favorite character</h5>
        </div>
      </li>
      <li>
        <img src="./static/images/carousel_2.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">CosPlan Costume Maker</h3>
          <h5 class="bold page-title">From costumes to accessories, we got u covered.</h5>
        </div>
      </li>
      <li>
        <img src="static/images/banner.jpg"> 
      </li>
      <li>
        <img src="./static/images/banner_2.jpg"> 
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>
  
  <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="row" style="margin-bottom: -20px">
        <h4 class="underline white-text bold center">Categories</h4>
      </div>
      <div class="row hoverable">
        <div class="col hoverable">
          <a href="product_catalogue.php?category=0" class="hoverable">
            <div class="selectable-card hoverable" style="width: 300px; margin: 50px;">
                <img class="hoverable" src="static/images/male.jpg"/>
              <h5 class="white-text center bold hoverable">Male Costume</h5>
            </div>
          </a>
        </div>

        <div class="col hoverable">
          <a href="product_catalogue.php?category=1" class="hoverable">
            <div class="selectable-card hoverable" style="width: 300px; margin: 50px;">
                <img class="hoverable" src="static/images/female.jpg"/>
              <h5 class="white-text center bold hoverable">Female Costume</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/accessories.jpg"/>
              <h5 class="white-text center bold">Accessories</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section" style="margin-top: 100px;">
    <div class="wide-container">
      <h3 class="white-text center">BUILT BY ENTHUSIASTS FOR ENTHUSIASTS</h3>
      <h5 class="white-text center">
        At <b class="orange-text">CosPlan Costume Maker</b>, We are a team of passionate costume makers and cosplayer with focus towards customized and quality costumes.
      </h5>
    </div>
  </div>

  <div class="grid" style="margin-top: 20px; margin-bottom: 100px">
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">4</h1>
      <h5 class="white-text center">Years Of History</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">500</h1>
      <h5 class="white-text center">Costumes Built</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">14</h1>
      <h5 class="white-text center">Province Covered</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">100</h1>
      <h5 class="white-text center">% Satisfaction guaranteed</h5>
    </div>
  </div>

  <h3 class="white-text center">OUR DIFFERENCE</h3>
  <h6 class="white-text center">Compared to other Costume Maker services</h6>

  <div class="grid" style="margin-bottom: 0px;">
    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/P.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">O</h5>
            <h5 class="white-text bold center" style="display: inline;">riginal Custom Made</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/T.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">G</h5>
            <h5 class="white-text bold center" style="display: inline;">uaranteed Return/Warranty</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/E.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">T</h5>
            <h5 class="white-text bold center" style="display: inline;">echnical Support</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/Rebate.png" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">D</h5>
            <h5 class="white-text bold center" style="display: inline;">iscount Every Season</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/S.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">Q</h5>
            <h5 class="white-text bold center" style="display: inline;">uality Checked</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/H.png" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">H</h5>
            <h5 class="white-text bold center" style="display: inline;">ighly Professional</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-dcc4934e-3eb0-4e18-98af-67fd2f034df1"></div>

  <?php require "footer.php"; ?>
</body>

<script>
  $(document).ready(function(){
    // carousel autoswipe
    $('.slider').slider({full_width: true});

    // counter
    $('.count').each(function () 
    {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) { $(this).text(Math.ceil(now)); }
      });
    });
  });
</script>
</html>