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
    <main class="w3-container">
        <h4 class='w3-center'>Items Available in Your Chosen Category
            &nbsp;&nbsp; <a class='w3-button w3-blue w3-round w3-small' href='pages/catalog.php'>
                Return to category list</a></h4>
        <?php include("../scripts/categoryProcess.php"); ?>
    </main>

    <?php
    include("../common/footer.html");
    ?>
</body>

</html>