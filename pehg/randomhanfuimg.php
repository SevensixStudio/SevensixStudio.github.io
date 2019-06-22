<?php
$url[1]="https://sevensixstudio.tk/pehg/hanfu"; //页面1
$url[2]="http://www.google.com.hk/search?q=%E7%94%B5%E8%84%91%E7%BB%B4%E4%BF%AE%E5%86%9B%E5%9B%A2%E4%B8%BB%E6%9D%BF%E7%BB%B4%E4%BF%AE%E5%85%A8%E9%9B%86&hl=zh-CN&newwindow=1&safe=strict&tbo=d&ei=3u_HUK-vGoijiAexloDIBA&start=130&sa=N"; //页面2
$url[3]="http://www.google.com.hk/search?hl=zh-CN&newwindow=1&safe=strict&tbo=d&q=%203d%20max%E7%B2%92%E5%url%90%E6%B1%87%E8%81%9A";  //页面3
$url[4]="http://www.google.com.hk/search?client=aff-360daohang&hl=zh-CN&ie=utf-8&newwindow=1&q=%E7%90%86%E5%8F%91%E5%85%A5%E9%97%A8%E8%A7%86%E9%A2%91%E6%95%99%E7%A8%8B"; //页面4
$url[5]="http://www.google.com.hk/search?q=%E5%AE%8C%E7%BE%8E%E5%8F%B6%E5%url%90%E7%BC%96%E7%BB%87%E8%A7%86%E9%A2%91%E7%AC%AC%E4%BA%94%E5%8D%81%E5%85%AB%E9%9B%86&ie=UTF-8&oe=UTF-8&hl=zh-hans&client=safari&hl=zh-CN&sourceid=cndr"; //页面5
$url[6]="http://www.google.com.hk/search?hl=zh-CN&newwindow=1&safe=strict&tbo=d&q=3dmax%E7%89%87%E5%A4%B4%E5%8A%A8%E7%94%BB%E6%95%99%E5%url%A6&btnG=Google+%E6%90%9C%E7%B4%A2"; //页面6
srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>