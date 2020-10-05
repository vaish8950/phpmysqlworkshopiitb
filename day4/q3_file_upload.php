<html>
<form action='q3_file_upload.php' method='POST' enctype='multipart/form-data'>
<input type='file' name='myfile'>
<input type= 'submit' name='submit' value='upload'>
</form>
</html>
<?php
error_reporting(0);
if($_POST['submit']){
$new_file1 = fopen("new_file1.txt","w");
fwrite($new_file1,"abc");    
$name=$_FILES['myfile']['name'];
$size=$_FILES['myfile']['size'];
echo"Name of file : ".($name);
echo"<br>";
echo"Size of file : ".($size);
}
?>
