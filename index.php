
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <title>Wijnwinkel | Welcome</title>
  <?php
    require_once "incl/globals.php";
  ?>
  
  <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
  <link href='css/foundation.css' rel='stylesheet' type='text/css'>
  <link href='css/navbar.css' rel='stylesheet' type='text/css'>
  <link href='css/slider.css' rel='stylesheet' type='text/css'>
  <style>
  
  </style>
</head>

<body>
<?php
// Navbar
require_once $globals->navbar_php;

// Slider
require_once $globals->slider_php;

?>

<!--Highlights-->
<div class="row column text-center">
  <h2>Some Other Neat Products</h2>
  <hr>
</div>

<div class="row small-up-2 medium-up-3 large-up-6">
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
  <div class="column">
    <img class="thumbnail" src="http://placehold.it/300x400">
    <h5>Nulla At Nulla Justo, Eget</h5>
    <p>$400</p>
    <a href="#" class="button small expanded hollow">Buy</a>
  </div>
</div>
  
<hr>

<!--Footer-->
<div class="callout large secondary">
  <div class="row">
    <div class="large-4 columns">
      <h5>Vivamus Hendrerit Arcu Sed Erat Molestie</h5>
      <p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>
      </h4>
    </div>
    <div class="large-3 large-offset-2 columns">
      <ul class="menu vertical">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
      </ul>
    </div>
    <div class="large-3 columns">
      <ul class="menu vertical">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
      </ul>
    </div>
  </div>
</div>
    
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
