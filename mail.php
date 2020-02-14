<?php
$to = "shariqprotege@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: shariqa2zcreatorz@gmail.com" . "\r\n" .
"CC: shariqa2zcreatorz@gmail.com";

if(mail($to,$subject,$txt,$headers)){
	echo "Email Send " . date("h:i:sa");
} else {
	echo "Email Failed " . date("h:i:sa");
}
?>