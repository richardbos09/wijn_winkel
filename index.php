
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
  <link href='css/style.css' rel='stylesheet' type='text/css'>
  <link href='css/custom.css' rel='stylesheet' type='text/css'>
  <style>
  
  </style>
</head>

<body>
<?php
// Header
require_once $globals->navbar_php;
require_once $globals->navmenu_php;

// Content
if(empty($_GET['content'])) {
  // Default
  require_once $globals->slider_php;
  require_once $globals->highlight_php;
}
else {
  switch($_GET['content']) {
    // Home
    case 'home':
      require_once $globals->slider_php;
      require_once $globals->highlight_php;
      break;
    // Bedrijf
    case 'bedrijf':
      require_once $globals->breadcrumb_php;
      require_once $globals->company_php;
      break;
    // Contact
    case 'contact':
      require_once $globals->breadcrumb_php;
      require_once $globals->contact_php;
      break;
    // Account
    case 'account':
      // Empty page
      break;
  }
}

// Footer
require_once $globals->footer_php;

?>
    
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
