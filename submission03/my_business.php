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


        <!-- <div class="w3-half w3-padding w3-center">
            <div class="w3-card-4 w3-section"> -->
                <!-- <img src="./images/products/SunriseAlarmClock.jpg" 
                alt="Picture of a Sunrise Alarm Clock"
                class="w3-image"
                style="width: 100%">
                <footer class="w3-blue w3-container">
                    <h5>A Sunrise Alarm Clock: 
                    Helping you wake up in those dark winter days</h5>
                </footer> -->
                <?php include("resources/images_and_labels.html");?>
            <!-- </div>     
        </div> -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                carousel();
            });
        </script>   


    </main>
    <?php
    include("common/footer.html");
    ?>
</body>
</html>