<?php
include_once('connectToDatabase.php');
$connection = connectToDatabase();
$query = "SELECT DISTINCT `category` FROM `my_Product`";

$result = mysqli_query($connection, $query)
    or die("Can't execute query.");
    
if ($result && mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['category'];
        echo "<li><a href='./pages/category.php?category=$category'>$category</a></li>";
    }
    echo "</ul>";
} else {
    echo "No categories found.";
}

mysqli_close($connection);
?>