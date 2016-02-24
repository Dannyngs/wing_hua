<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Showcase");
    $showcases = $rs->fetchAll();
?>

<?php
require_once 'header.php';
?>
     
        
  <div class="container">
     <div class="banner">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img class="img-responsive" src="_/img/banner1.jpg"/>
     
    </div>
       <div class="item">
      <img class="img-responsive" src="_/img/banner2.jpg"/>
     
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
         
      <!--<img class="img-responsive" src="_/img/banner1.jpg"/> -->
    </div>
    
    <div id="PageBody">
    <div class="row showc">
        
        
        
    <?php  foreach($showcases as $show)          
{?> 

        <div class="col-sm-6 col-md-4">
      
        <div class="thumbnail">
        <a class="cat-list" href="<?php echo $show['link'];?>">
         <img class="img-responsive" src="<?php echo $imgurl.$show['img'];?>"/>    
        </a>    
      
      <div class="caption text-center">
        <h3 class="hometitle"><?php echo $show['title'];?></h3>
        
        <p><a href="<?php echo $show['link'];?>" class="btn btn-primary cat-but" role="button">READ MORE</a></p>
    
    </div>
      </a>
   
  </div>
        
</div>
<?php
    }
?>

        
       



    </div>

<div class="ind-bottom">
    <div class="row">
        <div class="col-md-3">
           <ul class="list-unstyled left-menu">
            
    <?php include "nav.php"; ?>
           </ul>
        </div>
        <div class="col-md-4">
          <h4 style="font-size:16px;"><b>WIN GHUA ENTERPRISE DEVELOPNENT CO</b></h4>
            <p><?php echo $system['description'];?></p>
        </div>
        <div class="col-md-4 col-md-offset-1">
      
 				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.640181897133!2d114.16213161441051!3d22.329443947480343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400b4f8c80207%3A0x902fd8d1c3a9b2ce!2z5aGY5bC-6ZW35rKZ54Gj6YGTMTM26Jmf!5e0!3m2!1szh-TW!2shk!4v1456285271394" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>			
        </div>
    </div>
</div>


   </div>
    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. 
        Please <a href="http://browsehappy.com/">upgrade your browser</a> 
        or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->


<?php
require_once 'footer.php';
?>
