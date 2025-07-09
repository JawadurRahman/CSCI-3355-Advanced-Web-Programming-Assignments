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
        <h3>Complete List of Product Categories</h3>
        <?php include("../scripts/catalogProcess.php"); ?>
    </main>

    <?php
    include("../common/footer.html");
    ?>
</body>

</html>