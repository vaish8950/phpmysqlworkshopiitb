<?php
error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $php=$_POST['php'];
    $mysql=$_POST['mysql'];
    $html=$_POST['html'];
    $per=(($php+$mysql+$html)/300)*100;
    $query=mysqli_query($con,"insert into certi values('','$email','$php','$mysql','$html','$per')");
   
header('location:display.php');

}
?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
<form  method="POST">
<br><br>
<div  class="card">
<div class="card header bg-dark">
<h1 class="text-white text-center"> INSERT OPERATION </h1>
</div>
<label>EMAIL:</label>
<input type="text" name="email" class="form-control"><br>
<label>PHP:</label>
<input type="text" name="php" class="form-control"><br>
<label>MYSQL:</label>
<input type="text" name="mysql" class="form-control"><br>
<label>HTML:</label>
<input type="text" name="html" class="form-control"><br>
<button class="btn btn-success" type="submit" name="submit">INSERT</button>


</div>
</form>
</div>

</body>

</html>