<?php




require(dirname(__FILE__) . '/phpmailer/sendamail.php');

$msg="<p>Name:".$_POST['myname']."</p>";
$msg.="<p>Email:".$_POST['myemail']."</p>";
$msg.="<p>Message:".$_POST['mymsg']."</p>";


if(smtp_mail("danny.ng198811@yahoo.com", "Application Form " ,$msg))
    echo "ok";
else echo "not ok!";

