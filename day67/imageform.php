


<?php
header('content-type:image/jpeg');
$font="C:\Users\ADMIN\Downloads\BOOKOS.TTF";

$image=imagecreatefromjpeg("cer.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="vaishna";

imagettftext($image,40,0,200,420,$color,$font,$name);
imagejpeg($image);

imagedestroy($image);
?>

 