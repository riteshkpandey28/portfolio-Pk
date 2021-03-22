<?php

$to = 'riteshpandey75632@gmail.com';
$subject = "Portfolio Contact";
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$msg = $_REQUEST['message'];
$headers = 'From: '.$name."\r\n".'Email: '.$email."\r\n".'Message: '.$msg;

mail($to, $subject, $headers);
echo "<script type='text/javascript'>
            alert('Thank you for submitting your details for early access program');
            window.history.log(-1);
          </script>";

?>