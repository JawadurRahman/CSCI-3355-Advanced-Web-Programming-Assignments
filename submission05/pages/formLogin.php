<?php

if (isset($_COOKIE['authorization'])) {
  header("Location: estore.php");
}

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
      <div class="w3-center">
        <h3>Login Form</h3>
        <p style="background-color: red;" class="w3-padding">Important Reminder</p>
        <p>Purchasing items from our on-line e-store requires logging in. And if you have not yet registered with
          Productivity Tech, before attempting to log in you must <a href="pages/formRegistration.php">register
            here</a>.
        </p>
      </div>

      <form id="loginForm" class="w3-container" method="post" action="scripts/formLoginProcess.php">
        <div class="w3-padding">
          <label class="w3-text-blue"><b>Login Name:</b></label>
          <input name="username" class="w3-input w3-border w3-light-blue" type="text"
            placeholder="Must be name assigned at registration" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Password:</b></label>
          <input id="password" name="password" class="w3-input w3-border w3-light-blue" type="password"
            placeholder="Must be password chosen at registration" required>
        </div>

        <div class="w3-padding">
          <input class="w3-btn w3-blue" type="submit" value="Log in">
          <button type="button" onclick="resetForm()" class="w3-btn w3-red">Reset Form</button>
        </div>
      </form>
      <?php
      if (isset($_GET['retrying']) && $_GET['retrying'] == 'true') {
        echo "<p class='w3-center w3-padding' style='background-color: red;'>Sorry,
        but your login procedure failed. An invalid username or password was entered. 
        Please try again to enter your correct login information.</p>";
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
    document.getElementById("loginForm").reset();
  }
</script>