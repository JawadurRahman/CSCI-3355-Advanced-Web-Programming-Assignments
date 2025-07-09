<?php
session_start();
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
        <article>
            <?php
            if (isset($_SESSION['emailExists'])) {
                echo "<h3>Sorry, but your e-mail address is already registered in our database. To register, you must use a different e-mail address.</h3>";
            }
            unset($_SESSION['emailExists']);

            if (isset($_SESSION['passwordsDoNotMatch'])) {
                echo "<h3>Sorry, but the passwords you entered do not match. Your attempt to register has failed. Please try again.</h3>";
            }
            unset($_SESSION['passwordsDoNotMatch']);

            if (isset($_SESSION['regUsername'])) {
                $username = $_SESSION['regUsername'];

                if (isset($_SESSION['usernameExists'])) {
                    echo "<h3>Your preferred login name already exists. So we have assigned \"$username\" as your login name.</h3>";
                }
                echo "<h3>Thank you for registering with Productivity Tech.</h3>";
                echo "<h3>Your login username for our website is \"$username\"</h3>";
                echo "<h3>Remember to record the password you supplied in a safe place.</h3>";
                echo "<h3>To log in and start shopping in our e-store please <a href=\"pages/formLogin.php\">click here</a>.</h3>";
            }
            unset($_SESSION['regUsername']);
            unset($_SESSION['usernameExists']);
            ?>

        </article>
    </main>

    <?php
    include("../common/footer.html");
    ?>
</body>

</html>

<script>
    function resetForm() {
        document.getElementById("feedbackForm").reset();
    }
</script>