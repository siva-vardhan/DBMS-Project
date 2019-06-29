<!DOCTYPE HTML>
<html>
<body>
<?php
$str=";";
$var=$_POST["SEARCH"];
$op=fopen("botta.txt","r") or die ("NO DATA FOUND");
while (!feof($op)) {
$str=$str.fgetc($op);
}
$str1=strstr($str,$var);
$n=strpos($str1,";");
$str1=substr_replace($str1,"",$n);
//$arr=str_getcsv($str1,"$");

$str2=strstr($str,$var,true);
$str2=rtrim($str2,"$");
$str2=strrchr($str2,";");
$str2=ltrim($str2,";");
$str1=str_replace("$",";",$str1);
$str2=$str2.";".$str1;
echo $str2;
?>
</body>
</html>

