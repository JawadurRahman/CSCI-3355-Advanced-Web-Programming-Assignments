<?php
include("../common/header.html");
?>

<body class="w3-auto w3-border"> 
    <header> 
        <?php
        include("../common/banner.php");
        include("../common/menus.html");
        ?>

    </header>
    <main class="w3-container w3-padding">
    <?php
$pages = array(
    "Home" => "my_business.php",
    "e-store" => array(
        "e-store Options" => "pages/estore.php",
        "Product Catalog" => "pages/sorry.php",
        "Register" => "pages/sorry.php",
        "Login" => "pages/sorry.php",
        "Shopping Cart" => "pages/sorry.php",
        "Checkout" => "pages/sorry.php",
        "Logout" => "pages/sorry.php",
    ),
    "Events" => array(
        "Recurring" => "pages/events_recurring.php",
    ),
    "About Us" => array(
        "Vision and Mission" => "pages/vision.php",
        "Locations" => "pages/locations.php",        
        "Feedback Form" => "pages/formFeedback.php",
    ),
    "Site Map" => "pages/sitemap.php"
);

function generateSiteMap($pages, $indent = 0) {
    foreach ($pages as $page => $url) {
        if (is_array($url)) {
            echo str_repeat("&nbsp;&nbsp;", $indent) . "<strong>$page</strong><br>";
            generateSiteMap($url, $indent + 1);
        } else {
            echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $indent) . "<a href='./$url'>$page</a><br>";
        }
    }
}

// Output the generated site map
generateSiteMap($pages);
?>


    </main>

    <?php
    include("../common/footer.html");
    ?>
</body>
</html>