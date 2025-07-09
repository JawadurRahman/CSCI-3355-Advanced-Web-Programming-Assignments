<?php
// Expire authorization cookie
session_start();
unset($_SESSION['username']);
unset($_SESSION['salutation']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['middleInitial']);
$cookie_name = "authorization";
$cookie_expire = time() - 3600;
$cookie_domain = ".smu.ca";
setcookie($cookie_name, "ok", $cookie_expire, "/", $cookie_domain, 0);
// session_unset();
// session_destroy();
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
      <h3>Logout</h3>
      <?php
      // Check if the authorization cookie is set
      if (isset($_COOKIE['authorization'])) {
        echo "
        <p>Thank you for visiting our e-store. You have successfully logged out.</p>
        <p>If you wish to log back in, <a href='pages/formLogin.php'>click here</a>.</p>
        <p>To browse our product catalog, <a title='Not yet active' href='pages/sorry.php'>click here</a>.</p>
        ";
      } else {
        echo "
        <p>Thank you for visiting Productivity Tech. You have not yet logged in.</p>
        <p>If you do wish to log in, <a href='pages/formLogin.php'>click here</a>.</p>
        <p>Or you can browse our product catalog without logging in by <a href='pages/sorry.php'>clicking here</a>.</p>
        ";
      }
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