<?php
error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="containder">
<div class="col-lg-12">
<h1 class="text-warning text-center">DISPLAY DATA</h1>

<div class="d-flex justify-content-end">

<button class="btn-primary btn "> <a href="admin.php" class="text-white">Insert The Data</a></button>
</div>
<h2>All Records</h2>
<br>

<table class="table table-striped  table-hover table-bordered">
<tr>
<th> id</th>
<th> Email</th>
<th>PHP </th>
<th> MYSQL</th>
<th> HTML</th>
<th> Percentage</th>
<th> Delete</th>
<th> Update</th>

</tr>
<?php
error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");


    $query=mysqli_query($con,"select * from certi");
    while($res=mysqli_fetch_array($query)){
        
?>
<tr class="bg-dark text-white text-center">
<td><?php echo $res['id'];?></td>
<td><?php echo $res['email'];?></td>
<td><?php echo $res['php'];?></td>
<td><?php echo $res['mysql'];?></td>
<td><?php echo $res['html'];?></td>
<td><?php echo $res['percent'];?></td>
<td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
<td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button></td>
</tr>

<?php
    }
?>
</table>
<div>
</div>
</body>
</html>