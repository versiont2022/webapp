<?php
if(isset($_POST["SubmitBtn"])){

$to = "versiont2022@gmail.com";
$subject = $_POST["subject"];
$from=$_POST["email"];
$msg=$_POST["message"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>