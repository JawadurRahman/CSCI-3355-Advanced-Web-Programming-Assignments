<?php
function getData($field)
{
   if (!isset($_POST[$field])) {
      $data = "";
   } else {
      $data = trim($_POST[$field]);
      $data = htmlspecialchars($data);
   }
   return $data;
}

$name = getData("first");
$last = getData("last");
$salutation = getData("salutation");
$email = getData("email");
$phone = getData("phone");
$subject = getData("subject");
$comments = getData("comments");
$check = getData("check");

// message to display and email to user after a succesful post.
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Your Message</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../css/my_css.css">
</head>
<body>
   <code>Dear ' . $salutation . ' ' . $last . ':
   <br>The following message was received from you by Productivity Tech:
   <br>========================
   <br>From: ' . $salutation . ' ' . $name . ' ' . $last . '
   <br>E-mail address: ' . $email . '
   <br>Phone number: ' . (!empty($phone) ? $phone : "Not given") . '
   <br>------------------------
   <br>Subject: ' . $subject . '
   <br>------------------------
   <br>' . $comments . '
   <br>========================
   <br>Thank you for your interest and your feedback.
   <br>From the folks at Productivity Tech
   <br>========================'
   . ($check ? "<br>P.S. We will contact you shortly with more information." : "") .'
   <br></code>
</body>
</html>';

$messageToBusiness = "-------------------------------------------------------
Date received: " . date("jS \of F, Y \a\\t H:i:s") . "
From: $salutation $name $last
E-mail address: $email
Phone number: " . (!empty($phone) ? $phone : "Not given") . "
------------------------
Subject: $subject
------------------------
$comments
========================
". ($check ? "Respond back to this message" : "");

$to = "u50@mail.cs.smu.ca";
$additional_headers = "From: $email\r\n";
mail($to, $subject, $messageToBusiness, $additional_headers);

$f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
   . "/submissions/submission03"
   . "/data/feedback.txt", "a");
fwrite($f, "\n" . $messageToBusiness . "\n");
fclose($f);

// confirmation to user
// Set headers to indicate HTML content and from email.
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $to\r\n";
$customer_subject = "RE: $subject\r\n";
mail($email, $customer_subject, $message, $headers);

echo $message;
?>