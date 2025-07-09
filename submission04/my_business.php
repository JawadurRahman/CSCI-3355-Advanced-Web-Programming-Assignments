<?php
include("common/header.html");
?>

<body class="w3-auto w3-border">
    <header>
        <?php
        include("common/banner.php");
        include("common/menus.html");
        ?>

    </header>

    <main class="w3-container">
        <article class="w3-half">
            <h3>You have come to Productivity Tech!</h3>
            <p>
                Founded in 2024, Productivity Tech was created to redefine the landscape of
                personal productivity. With a vision to empower individuals to improve their
                habits through technological solutions. At Productivity Tech, we believe
                that the right technology can be a catalyst for positive change,
                allowing individuals to have a more productive lifestyle.
            </p>
            <p>
                If you would like to revolutionize the way you approach productivity,
                Productivity Tech is here to guide you. Explore our innovative products
                in our e-store!
            </p>
        </article>

        <?php include("resources/images_and_labels.html"); ?>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                carousel();
            });
        </script>


    </main>
    <?php
    include("common/footer.html");
    ?>
</body>

</html>