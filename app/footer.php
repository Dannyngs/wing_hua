<footer id="SiteFooter">
    <div class="container">
        Copyright  Design By  <a style="color:white;" target="_blank" href="http://www.c-m.hk"> Creation Media </a>
    </div>
</footer>

 <script src="_/js/main.js"></script>
  <script type="text/javascript">
 $(document).ready(function(){
      
 $('#mysubmit').click(function(event){
     event.preventDefault();
 $('#mysubmit').attr("disabled",true); 
     var myname=$('#myname').val();
    var myemail=$('#myemail').val();
     var mymsg=$('#mymsg').val();
console.log(myname);
   if( myname=="" || myemail==""||mymsg=="")
       return alert("請完整填寫信息");
     
     $.post("mail.php",
     {
    myname:myname,
   myemail :myemail,
         mymsg:mymsg
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 

         }else{
         $('#myname').val("");$('#myemail').val("");$('#mymsg').val("");
         alert("遞交成功！");}
        
  });
     
 });  
   
 });
</script>

  
    </body>

</html>