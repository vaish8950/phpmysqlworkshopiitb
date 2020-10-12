<?php
session_start();
if(!isset($_SESSION['name'])){
    echo"you are logged out";
    header('location:login1.php');
}

?>

<html>
<div style="border:2px solid black;; width:300px">

NAME: <?php $name=$_SESSION['name'];echo $name ?><br>
<table border="1">
<tr>
<th>PHP</th>
<th>MYSQL</th>
<th>HTML</th>
<th>PERCENTAGE</th>
</tr>
<?php
error_reporting(0);
$email=$_SESSION['email'];
$con= mysqli_connect("localhost","root","","student") or die("connection failed");
$q1=mysqli_query($con,"select * from certi where email = '$email'");
$emailcount = mysqli_num_rows($q1);

if($row = mysqli_fetch_assoc($q1)){
    $php = $row['php'];
    $mysql=$row['mysql'];
    $html=$row['html'];
    $per=$row['percent'];
    echo"<tr>";
    echo"<td> $php </td>";
    echo"<td> $mysql </td>";
    echo"<td> $html </td>";
    echo"<td> $per </td> ";
    echo"</tr>";
    
}
else{
    echo"data is not availale";
}


echo"<br>";

?>
 

</table>
</div>
<?php

echo"<br>";
if($per>60){
        echo"CONGRULATIONS $name YOU GOT 60% ABOVE MARKS!!!";
    }
?> 
   

<form action="home123.php" method="POST">
<h3> SENDING EMAIL TO PARENTS:</h3>
<input type="text" name="name" placeholder="ENTER YOUR FULL NAME"><p>
<input type="email" name="email" placeholder="ENTER EMAIL"><p>
<input type="submit" name="submit" value="SEND EMAIL">
</form>

<?php

if(isset($_POST['submit'])){
    
    $to = $_POST['email'];
    $subject = "Email Subject";
    
    $message = 'Dear '.$_POST['name'];
    $headers = "Content-type:cer.jpg;charset=UTF-8" ;
    $headers .= 'From: vaishbhosale321@gmail.com' ;
    mail($to,$subject,$message,$headers);}
    
    ?>

<a  href="logout.php">LOGOUT</a>


</html>



