<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$comment = $_POST['comment'];
    $from = 'From: enactusvitvellore'; 
    $to = 'kashyapshashank@live.com'; 
    $subject = 'Form Data';

    $body = "From: $name\n E-Mail: $email\n Phone:\n $phone\n Comment:\n $comment";
?>
