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
        <h3>Welcome to our e-store ... thanks for visiting.</h3>
        <p> We carry a large collection of productivity products. 
            For your shopping and browsing convenience, please 
            choose one of the following links:
        </p>
        <ul>
            <li>To browse our exciting product catalog 
            <a title="Not yet active" href="pages/sorry.php">
                click here</a>.
            </li>
            <li>Ready to purchase and already have a username and password?
                To log in to our e-store and begin shopping 
                <a title="Not yet active" href="pages/sorry.php">
                click here</a>.</li>
            <li>Need to register for our e-store so you can make purchases? 
                To register (you only need to do it once) 
                <a title="Not yet active" href="pages/sorry.php">
                click here</a>.</li>
        </ul>
    </main>

    <?php
    include("../common/footer.html");
    ?>
</body>
</html>