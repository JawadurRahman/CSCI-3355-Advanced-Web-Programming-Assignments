<?php
// Define a function to establish database connection
function connectToDatabase() {
    include($_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/../htpasswd/mysqldb.inc');
    $connection = mysqli_connect("localhost", $dbUsername, $dbPassword, $dbName)
        or die("Couldn't connect.");
    return $connection;
}
?>
