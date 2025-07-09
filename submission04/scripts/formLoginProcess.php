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

$username = getData("username");
$password = getData("password");


include_once('./connectToDatabase.php');
$connection = connectToDatabase();


$query = "SELECT * FROM my_Customer WHERE username='$username'";

$result = mysqli_query($connection, $query)
    or die("Can't execute query.");

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPasswordFromDB = $row['password'];
    if (password_verify($password, $hashedPasswordFromDB)) {
        $cookie_name = "authorization";
        $cookie_value = "ok";
        $cookie_expire = time()+6000;
        $cookie_domain = ".smu.ca";
        $_SESSION['username'] = $username;
        $_SESSION['salutation'] = $row['salutation'];
        $_SESSION['firstname'] = $row['first_name'];
        $_SESSION['lastname'] = $row['last_name'];
        $_SESSION['middleInitial'] = $row['middle_initial'];
        //Use @ to suppress error re third parameter not long enough:
        @setcookie($cookie_name, $cookie_value, $cookie_expire,
        "/", $cookie_domain, 0);
        header("Location: ../pages/estore.php");
        exit;
    } else {
        header("Location: ../pages/formLogin.php?retrying=true");
        exit;
    }
} else {
    header("Location: ../pages/formLogin.php?retrying=true");
    exit;
}

?>