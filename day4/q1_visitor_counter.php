<?php
error_reporting(0);
$file=file_get_contents("count1.txt","w");
$v2=$file;
$v1=$v2+1;

$n=fopen("count1.txt","w");
fwrite($n,$v1);
echo"$v1";


?>