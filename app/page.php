<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=".$_GET['id']);
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>
  <div class="container">
      <div class="banner">
             <img class="img-responsive" src="<?php echo $imgurl.$page['banner']?>"/> 

    </div>
    
    <div id="PageBody">
      <div class="row showc aboutd">
      
  <div style="padding:50px;line-height:30px;">  <?php echo $page['content']?> </div>
     
        </div>
      </div>
<?php
require_once 'footer.php';
?>

