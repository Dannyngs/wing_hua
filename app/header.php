<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $system['site_title']?></title>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Custom Favicon -->
        <link rel="shortcut icon" href="http://<?php echo($ServerName); ?>/favicon.ico">


        <link rel="stylesheet" href="_/css/lib/html5bp.css"/>

        <link rel="stylesheet" href="_/css/site-styles.css"/>

        <script src="_/js/lib/modernizr/modernizr.js"></script>

    </head>
    <body style="font-family:'微軟正黑體';color:black;">
        <header id="SiteHeader">
      <div class="container">
          <div class="top-line">
             <p class="text-right">電話：<?php echo $system['tel']?></p>
          </div>
  
  <nav class="navbar navbar-default">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="_/img/logo1.png"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
     <ul class="nav navbar-nav navbar-right">

    <?php include_once "nav.php" ;?>
        </ul>
      
      
      </div><!-- /.navbar-collapse -->
  
  </nav>
</div>
</header>
    
