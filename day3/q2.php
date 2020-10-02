<?php
$con= mysqli_connect("localhost","root","","result") or die("connection failed");
echo"connection ";
$update= mysqli_query($con,"UPDATE class1 SET sub5=99 WHERE name='Rohan' ");
$extract = mysqli_query($con,"SELECT * FROM class1 WHERE name='Rohan'");
if($row = mysqli_fetch_assoc($extract)){
$id = $row['id'];
$name = $row['name'];
$sub1 = $row['sub1'];
$sub2 = $row['sub2'];
$sub3 = $row['sub3'];
$sub4 = $row['sub4'];
$sub5 = $row['sub5'];
$total=$row['total_marks'];
$obtained=($sub1+$sub2+$sub3+$sub4+$sub5);
$per=(($obtained/$total)*100);
$newupdate=mysqli_query($con," UPDATE class1 SET total_obtained='$obtained', percent='$per' WHERE name='Rohan'");
if($newupdate){
    echo"updation";
}
else{
    echo"not updated";
}
}
?>

