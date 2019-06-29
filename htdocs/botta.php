<! DOCTYPE html>
<html>
<head>
<h1>BIO DATA</h1>
</head>
<body>
<form style="text-align:center" action="" method="POST">
NAME:<input type="text" name="NAME"><br>
ROLL NO:<input type="text" name="ROLL_NO"><br>
DATE OF BIRTH:<input type="date" name="DATE_OF_BIRTH" max="2018-07-25"><br>
ADDRESS:<textarea name="ADDRESS" rows="5" columns="20"></textarea><br>
MOBILE NUMBER:<input type="number" name="MOBILE_NUMBER"><br>
EMAIL ID:<input type="email" name="EMAIL_ID"><br>
S1:<input type="number" name="S1" step="0.01"><br>
S2:<input type="number" name="S2" step="0.01"><br>
S3:<input type="number" name="S3" step="0.01"><br>
S4:<input type="number" name="S4" step="0.01"><br>
S5:<input type="number" name="S5" step="0.01"><br>
S6:<input type="number" name="S6" step="0.01"><br>
S7:<input type="number" name="S7" step="0.01"><br>
S8:<input type="number" name="S8" step="0.01"><br>
CGPA:<input type="number" name="CGPA" step="0.01"><br>
HOBBIES:<textarea rows="5" columns="20" name="HOBBIES"></textarea><br>
RESIDENCE:<input type="radio" name="RESIDENCE" value="HOSTELER">HOSTELER<br>
<input type="radio" name="RESIDENCE" value="DAYSCHOLAR">DAYSCHOLAR<br>
REFERENCES:<textarea name="REFERENCES" rows="5" columns="20"></textarea><br>
<input type="submit" value="REGISTER">
 
<?php

$fptr=fopen("botta.txt","a");
$var=$_POST["NAME"].";".$_POST["ROLL_NO"].";".$_POST["ADDRESS"].";".$_POST["MOBILE_NUMBER"].";".$_POST["EMAIL_ID"].";".$_POST["S1"].";".$_POST["S2"].";".$_POST["S3"].";".$_POST["S4"].";".$_POST["S5"].";".$_POST["S6"].";".$_POST["S7"].";".$_POST["S8"].";".$_POST["CGPA"].";".$_POST["HOBBIES"].";".$_POST["RESIDENCE"].";".$_POST["REFERENCES"];
$var=str_replace(";","$",$var);
$var=$var.";";
fwrite($fptr,$var);
fclose($fptr); 


 ?>
</form>
</body>
</html>
