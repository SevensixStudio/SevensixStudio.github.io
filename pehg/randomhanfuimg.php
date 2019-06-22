<?php
$url[1]="https://sevensixstudio.tk/pehg/hanfu/1.jpg"; 
$url[2]="https://sevensixstudio.tk/pehg/hanfu/2.jpg"; 
$url[3]="https://sevensixstudio.tk/pehg/hanfu/3.jpg"; 
$url[4]="https://sevensixstudio.tk/pehg/hanfu/3-c.jpg"; 
$url[5]="https://sevensixstudio.tk/pehg/hanfu/5.jpg"; 
$url[6]="https://sevensixstudio.tk/pehg/hanfu/6-b.jpg"; 
$url[7]="https://sevensixstudio.tk/pehg/hanfu/7-b.jpg"; 
$url[8]="https://sevensixstudio.tk/pehg/hanfu/8-b.jpg"; 
$url[9]="https://sevensixstudio.tk/pehg/hanfu/9-b.jpg"; 
$url[9]="https://sevensixstudio.tk/pehg/hanfu/1-c.jpg"; 
$url[9]="https://sevensixstudio.tk/pehg/hanfu/2-c.jpg"; 

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>