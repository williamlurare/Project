<?php
/* watch the video for detailed instructions */
$to = "0798674874@vtext.com";
$from = "xxxx@yourdomain.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>