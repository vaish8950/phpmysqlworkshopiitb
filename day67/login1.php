<?php
session_start();
?>

<html>
<h1> LOGIN </h1>
<form  action="login1.php" method="POST" style="border:2px solid black; box-sizing:border-box; width:250px; padding:29px" action="register.php" method="POST">
<div class="log" >
EMAIL: <br>
<input type="email" name="email"><br>
PASSWORD: <br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="submit">
<a href="registor1.php"> REGISTER here? </a>
</div>
</form>
</html>
<?php
error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");
//echo"connection ";
if (isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $email_s="select * from registration where email='$email'";
    $query=mysqli_query($con,$email_s);
    $emailcount = mysqli_num_rows($query);
    if($emailcount){
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $_SESSION['name']=$email_pass['name'];
        $_SESSION['email']=$email;
        $pass_decode=password_verify($password, $db_pass);

        if($pass_decode){
            ?>
            <script>
            alert("LOGIN SUCCESFULLY");
            location.replace("home123.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
            alert(" PASSWORD INCORRECT");
            </script>
            <?php
        }

    }
    else{
        ?>
        <script>
        alert("INVALID EMAIL");
        </script>
        <?php
    }

}

?>