<?php
session_start();
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

$salutation = getData("salutation");
$first = getData("first");
$middle = getData("middle");
$last = getData("last");
$gender = getData("gender");
$email = getData("email");
$phone = getData("phone");
$address = getData("address");
$city = getData("city");
$region = getData("region");
$postal = getData("postal");
$username = getData("username");
$password = getData("password");
$confirm = getData("confirm");

// Connect to DB
include_once('./connectToDatabase.php');
$connection = connectToDatabase();

// Check if email already exists
$emailCheckQuery = "SELECT COUNT(*) as count FROM my_Customer WHERE email = '$email'";
$emailCheckResult = mysqli_query($connection, $emailCheckQuery);
$emailCount = mysqli_fetch_assoc($emailCheckResult)['count'];
if ($emailCount > 0) {
   $_SESSION['emailExists'] = true;
   header("Location: ../scripts/formRegistrationResponse.php");
   exit(); 
} 

// Check if passwords do not match
if ($password !== $confirm) {
   $_SESSION['passwordsDoNotMatch'] = true;
   header("Location: ../scripts/formRegistrationResponse.php");
   exit(); 
}

// Check if username already exists. If it does keep incrementing username by 1.
$usernameCheckQuery = "SELECT COUNT(*) as count FROM my_Customer WHERE username = '$username'";
$usernameCheckResult = mysqli_query($connection, $usernameCheckQuery);
$usernameCount = mysqli_fetch_assoc($usernameCheckResult)['count'];
$count = 1;
$baseUsername = $username;
while ($usernameCount > 0) {
   $_SESSION['usernameExists'] = true;
   $username = $baseUsername . $count;
   $usernameCheckQuery = "SELECT COUNT(*) as count FROM my_Customer WHERE username = '$username'";
   $usernameCheckResult = mysqli_query($connection, $usernameCheckQuery);
   $usernameCount = mysqli_fetch_assoc($usernameCheckResult)['count'];
   $count++;
}


if (!$phone) {
   $phone = "NULL";
}
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$query = "INSERT INTO my_Customer (salutation, first_name, middle_initial, last_name, gender, email, phone, street_address, city, region, postal_code, username, password) 
VALUES ('$salutation', '$first', '$middle', '$last', '$gender', '$email', $phone, '$address', '$city', '$region', '$postal', '$username', '$passwordHash')";
$result = mysqli_query($connection, $query) or die("Couldn't execute query.");
if ($result && mysqli_affected_rows($connection) > 0) {
   $_SESSION['regUsername'] = $username;
   header("Location: ../scripts/formRegistrationResponse.php");
   exit(); 
} 
?>



