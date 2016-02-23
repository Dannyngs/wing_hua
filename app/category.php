<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Product where cat_id =".$_GET['id']);
    $pros = $rs->fetchAll();

$rs = $db->query("SELECT* FROM T_Category where id =".$_GET['id']);
    $cat = $rs->fetch();

  ?>
<?php
require_once 'header.php';
?>

<div class="container">
     <div class="banner">
      <img class="img-responsive" src="_/img/pro1.jpg"/>
    </div>

    <div id="PageBody">
    <div class="row showc">

     <h4><B><?php echo $cat['cat_name']; ?></B></h4>

    <?php  foreach($pros as $pro)
{?>


   <div class="col-md-4 col-sm-6">
             <div class="prodiv text-center">
                 <a href="<?php echo  $imgurl.$pro['image'];?>" data-lightbox="image1" data-title="<?php echo $pro['title'];?>">
                 <img class="img-responsive" src="<?php echo  $imgurl.$pro['image'];?>"/>

                  <div class="moved">
                   <p><?php echo $pro['title'];?></p>
                  </div>
                </a>
             </div>
        </div>

        <?php
    }
?>




    </div>

        <!--
       <nav class="prolist">
  <ul class=" pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
   {% for product in totalpage %}
      <li><a href="#">1</a></li>
   {% endfor %}
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
-->
   </div>
<?php
require_once 'footer.php';
?>
