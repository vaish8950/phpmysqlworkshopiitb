<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<html>

<form action="q6_1_special_variables_html.php" method="get">
Side1: <input type="text" name="side1"><br>
Side2: <input type="text" name="side2"><br>
Side3: <input type="text" name="side3"><br>
<input type="submit" name="submit" value="check"><br>
</form>
</html>
<?php

$s1 = $_GET["side1"];
$s2 = $_GET["side2"];
$s3 = $_GET["side3"];
if($s3 && $s2 && $s1){
if($s1==$s2 && $s2==$s3){
    echo"Triangle is Equilateral.";
}
elseif($s1==$s2 || $s2==$s3 || $s1==$s3){
    echo"Triangle is Isosceles.";
}
else{
    echo"scalene or right angled triangle.";
}
}

?>
