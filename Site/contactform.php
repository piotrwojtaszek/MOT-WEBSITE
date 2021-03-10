<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo="piowoj@piowoj.ct8.pl";
    $headers = "From: ";
    $subject = "Testing";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mailsend");
}
?>