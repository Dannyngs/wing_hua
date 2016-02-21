<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

 
<div class="container">
     <div class="banner">
      <img class="img-responsive" src="_/img/cont1.jpg"/> 
    </div>
    
    <div id="PageBody">
    <div class="row showc">
  <div class="col-md-7">
     <form>
          <div class="form-group">
    <label for="exampleInputPassword1">姓名</label>
    <input type="text" class="form-control" id="myname" placeholder="姓名">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">電郵</label>
    <input type="email" class="form-control" id="myemail" placeholder="電郵">
  </div>
 
  <div class="form-group">
    <label for="exampleInputFile">留言內容</label>
    <textarea class="form-control" placeholder="留言內容" id="mymsg" rows="15"></textarea>
  </div>
 
  <button  id="mysubmit" class="btn btn-default cat-but fcw">SEND</button>
</form> 
       
        
</div>
        
<div class="col-md-4 col-md-offset-1">
    
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.8190829230048!2d114.16750771492734!3d22.32268094772317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c84c46944f%3A0xc8c9cef078a1785a!2z5pe66KeS6YCa6I-c6KGXMTgxLTE4N-iZn-amruiLseaokw!5e0!3m2!1szh-TW!2shk!4v1454061304376" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 						
    
</div>
        
       
       
    </div>



   </div>
 
<?php
require_once 'footer.php';
?>