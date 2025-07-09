<table class="w3-table w3-border w3-bordered">
    <tbody>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th># in Stock</th>
            <th>Purchase?</th>
        </tr>

        <?php

        if (isset($_GET['category'])) {
            include_once('connectToDatabase.php');
            $connection = connectToDatabase();
            $category = $_GET['category'];
            $query = "SELECT * FROM `my_Product` WHERE `category` = '$category'";

            $result = mysqli_query($connection, $query)
                or die("Can't execute query.");
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $description = $row['description'];
                    $category = $row['category'];
                    $price = $row['price'];
                    $inventory_count = $row['inventory_count'];
                    $image_file = $row['image_file'];

                    echo "        
                    <tr>
                    <td class='w3-center'>
                        <img width='70' src='images/products/$image_file' alt='Product Image'>
                    </td>
                    <td>
                        $description
                    </td>
                    <td class='w3-right-align'>
                        $$price
                    </td>
                    <td class='w3-center'>
                        $inventory_count
                    </td>
                    <td>
                        <a class='w3-button w3-blue w3-round w3-small' title='Not yet active' href='pages/sorry.php'>
                            Buy this item
                        </a>
                    </td>
                    </tr>";
                }
            }
            mysqli_close($connection);
        }

        ?>
    </tbody>
</table>