<html>
<h1> CREATE ACCOUNT </h1>
<form   action="registor1.php" method="POST" style="border:2px solid black; box-sizing:border-box; width:250px; padding:29px" action="register.php" method="POST">
<div class="log" >
NAME: <br>
<input type="text" name="name"><br>

EMAIL: <br>
<input type="email" name="email"><br>
MOBILE NUMBER:<br>
<input type="text" name="mobile"><br>
PASSWORD:<br>
<input type="password" name="password"><br>
CONFIRM PASSWORD:<br>
<input type="password" name="cpassword"><br><p>
<input type="submit" name="submit" value="REGISTER">
<a href="login1.php"> LOGIN here? </a>
</div>
</form>
</html>
<?php
error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");
//echo"connection ";
echo"<br>";
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if(isset($_POST['submit'])){
    
    $emailquery="select * from registration where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
    //echo $emailcount;
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($password,PASSWORD_BCRYPT);
    if($emailcount<1){

        if($password === $cpassword){

            $insertquery="insert into registration values('$name','$email','$mobile','$pass','$cpass')";
            $iquery=mysqli_query($con,$insertquery);
            if($iquery){
                ?>
            <script>
            alert("REGISTER SUCCESFULLY");
            location.replace("login1.php");
            </script>
            <?php

            }
        }
        else{
            ?>
            <script>
            alert("password and confirm password are not matching");
            </script>
            <?php
        }
       


    }
    else{ 
        ?>
        <script>
        
        alert("email already exits");
        </script>
        <?php
        


    }
    
}



?>





