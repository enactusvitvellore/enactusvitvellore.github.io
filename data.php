
<?php
if ($_POST['submit'])  {
$recipient = "kashyapshashank@live.com"; //my email
echo $subject = 'Email message from Point Plumbing';
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $phone = $_POST['phone'];
echo $comment = $_POST['comment'];

 $mailBody="From: $name\n E-Mail: $email\n Phone:\n $phone\n Comment:\n $comment"; 

 mail($recipient, $subject, $mailBody, $email);

}
?>
