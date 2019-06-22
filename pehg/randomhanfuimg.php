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
$url[10]="https://sevensixstudio.tk/pehg/hanfu/1-c.jpg"; 
$url[11]="https://sevensixstudio.tk/pehg/hanfu/2-c.jpg"; 
$url[12]="https://sevensixstudio.tk/pehg/hanfu/4-c.jpg"; 
$url[13]="https://sevensixstudio.tk/pehg/hanfu/5-c.jpg"; 
$url[14]="https://sevensixstudio.tk/pehg/hanfu/6-c.jpg"; 
$url[15]="https://sevensixstudio.tk/pehg/hanfu/7-c.jpg"; 
$url[16]="https://sevensixstudio.tk/pehg/hanfu/8-c.jpg"; 
$url[17]="https://sevensixstudio.tk/pehg/hanfu/9-c.jpg"; 
$url[18]="https://sevensixstudio.tk/pehg/hanfu/10-c.jpg"; 
$url[19]="https://sevensixstudio.tk/pehg/hanfu/11-c.jpg"; 
$url[20]="https://sevensixstudio.tk/pehg/hanfu/12-c.jpg"; 
$url[21]="https://sevensixstudio.tk/pehg/hanfu/13-c.jpg"; 

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>