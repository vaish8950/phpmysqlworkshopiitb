
<?php error_reporting (E_ALL ^ E_NOTICE); ?><html>
<body>

<form action="q1.php" method="POST">
Name of the Student: <input type="text" name="myname"><br>
Marks in Each Subject<br>
subject1: <input type="text" name="subject1" ><br>
subject2: <input type="text" name="subject2" ><br>
subject3: <input type="text" name="subject3" ><br>
subject4: <input type="text" name="subject4" /><br>
subject5: <input type="text" name="subject5" ><br>
<input type="submit"  name="submit" value="Submit"><br>


</form>
<?php

$con= mysqli_connect("localhost","root","","result") or die("connection failed");
echo"connection ";



$total=500;
$name=$_POST['myname'];
$sub1=$_POST['subject1'];
$sub2=$_POST['subject2'];
$sub3=$_POST['subject3'];
$sub4=$_POST['subject4'];
$sub5=$_POST['subject5'];
$obtained_M = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5);
$percentage = (float)(($sub1 + $sub2 + $sub3 + $sub4 + $sub5)/$total)*100;
if(isset($_POST['submit'])){
echo"Total Marks Obtained: $obtained_M <br>";
echo"Total Marks:  ".$total."<br>";
echo"Percentage: ". $percentage."%";

$res="INSERT INTO class1 VALUES('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$obtained_M','$total','$percentage')";
   echo"<br>";
    $data=mysqli_query($con,$res);
    if($data){
        echo"inserted";
    }
    else{
        echo"not inserted";
    }
}

?>

</body>
</html>



