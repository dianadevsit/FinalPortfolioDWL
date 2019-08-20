<?php
//using php to get responses from contact form
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

//setting up 3 parameters with method mail

$mailTo = "dianawlam@outlook.com";
$headers = "From: ".$mailFrom;

//will print out entire message from the contacter
$txt: "You have received an email from ".$name.".\n\n".$message;

//everything that is needed to be sent to my email is here
mail($mailTo, $subject, $txt, $headers);
//confirmation that the mail has been sent and that the content script has been loaded
header("Location: index.php?mailsend");

?>

