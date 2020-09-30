
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<html>

<form action="q6_2_special_variables_html.php" method="post">
Name of the Student: <input type="text" name="myname"><br>
Marks in Each Subject<br>
subject1: <input type="text" name="subject1"><br>
subject2: <input type="text" name="subject2"><br>
subject3: <input type="text" name="subject3"><br>
subject4: <input type="text" name="subject4"><br>
subject5: <input type="text" name="subject5"><br>
<input type="submit" value="Submit"><br>
</form>
</html>

<?php

$total=500;
$name=$_POST['myname'];
$sub1=$_POST['subject1'];
$sub2=$_POST['subject2'];
$sub3=$_POST['subject3'];
$sub4=$_POST['subject4'];
$sub5=$_POST['subject5'];
$obtained_M = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5);
$percentage = (($sub1 + $sub2 + $sub3 + $sub4 + $sub5)/$total)*100;
if($obtained_M){
echo"Total Marks Obtained: $obtained_M <br>";
echo"Total Marks:  ".$total."<br>";
echo"Percentage: ". $percentage."%";
}
?>
