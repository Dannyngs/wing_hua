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
    
 
 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.640181897133!2d114.16213161441051!3d22.329443947480343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400b4f8c80207%3A0x902fd8d1c3a9b2ce!2z5aGY5bC-6ZW35rKZ54Gj6YGTMTM26Jmf!5e0!3m2!1szh-TW!2shk!4v1456285271394" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>			
    
</div>
        
       
       
    </div>



   </div>
 
<?php
require_once 'footer.php';
?>