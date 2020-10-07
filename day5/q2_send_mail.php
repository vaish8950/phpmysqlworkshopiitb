<html>

<form action="q2_send_mail.php" method="POST">
<h1> Feedback Form </h1>
NAME:     <input type="text" name="name"><p>
EMAIL:    <input type="email"  name="email"><p>
FEEDBACK: <input type="text" name="fb"><p>
<input type="submit" value="submit" name="submit">

</form>

</html>

<?php


if($_POST['submit']){
$name=$_POST['name'];
$email=$_POST['email'];
$feedb=$_POST['fb'];


$subject = "Simple Email Test via PHP";
$body = "thanking for Giving  feedback";
$headers = "From: vaishbhosale321@gmail.com";

if (mail($email, $subject, $body, $headers)) {
    echo "Email successfully sent to $email...";
} else {
    echo "Email sending failed...";
}
$admin="vaishbhosale321@gmail.com";

if(mail($admin,$subject,"NAME: $name  EMAIL: $email  FEEDBACK: $feedb",$headers)){
    echo "Email successfully sent to $admin...";
} else {
    echo "Email sending failed...";

}


}


?>
