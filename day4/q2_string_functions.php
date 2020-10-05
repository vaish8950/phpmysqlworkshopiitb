<html>
<form action="q2_string_functions.php" method="post">
Enter some random string:<input type="text" name="name">
</form>
</html>



<?php
error_reporting(0);
$string=$_POST['name'];
if($string){
echo"Count number of Characters in the string : ".strlen($string);
echo"<br>";
echo"Breaking down a string into an array :";
print_r(explode(" ",$string));
echo"<br>";
echo"Reverse the string: ".strrev($string);
echo"<br>";
echo"string into lower case form : ".strtolower($string);
echo"<br>";
echo"string into upper case form : ".strtoupper($string);
echo"<br>";
$result=substr_replace($string,"alex ",6);
echo" replace string : ".$result;
}


?>