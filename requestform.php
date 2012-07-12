<?php
$name = $_POST['name'];
$reply = $_POST['reply'];
$service = $_POST['service'];
$details = $_POST['details'];
$to = '"Benjamin" <geek@autono.ms>';
$subject = "New Reqest for Appointment from {$name}";
$message = "Name: {$name}" . PHP_EOL .
			"Reply-to: {$reply}" . PHP_EOL .
			"Service Requested: {$service}" . PHP_EOL .
			"Special Details: {$details}" . PHP_EOL;
$headers = 'From: "autonoms" <geek@autono.ms>' . PHP_EOL .
           'X-Mailer: PHP/' . phpversion();
           
if (mail($to, $subject, $message, $headers)) {
  header("Location:success.php");
}
else {
  header("Location:fail.php");
}
?>


