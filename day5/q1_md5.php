<html>
<form action="q1_md5.php" method="POST">

 USERNAME: <input type="text" name="username" ><p>
 PASSWORD: <input type="password" name=" password"><p>
<input type="submit" name="submit">

</form>
</html>
<?php

$con= mysqli_connect("localhost","root","","data1") or die("connection failed");
echo"connection ";
echo"<br>";

if($_POST['submit']){

$un=$_POST['username'];
$psd=$_POST['password'];
$encpsd=md5($psd);
$extract = mysqli_query($con,"INSERT INTO login VALUES('','$un','$encpsd')");
if ($extract){
    echo"Inserted";
}
else{
    echo"Not Iserted";
}

}

?>