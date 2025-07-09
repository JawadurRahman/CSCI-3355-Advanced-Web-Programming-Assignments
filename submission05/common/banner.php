<!--
banner.php
This file handels the banner display of our Productivity Tech website.
This includes a logo and welcome message.
-->
<?php
$msg = "<p>Welcome</p>";
$btn = "<a class='w3-button w3-blue w3-round' href='pages/formLogin.php'>
    Log in</a>";

@session_start();
// Check if the authorization cookie is set
if (isset($_COOKIE['authorization'])) {
  if (isset($_SESSION['username'], $_SESSION['salutation'], $_SESSION['firstname'], $_SESSION['lastname'], $_SESSION['middleInitial'])) {

    $salutation = $_SESSION['salutation'];
    $username = $_SESSION['username'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $middleInitial = $_SESSION['middleInitial'];
    $msg = "<p>Welcome, $username!<br/>$salutation $firstname $middleInitial $lastname </p>";
    $btn = "<a class='w3-button w3-blue w3-round' href='pages/logout.php'>
        Log out</a>";
  }
}
?>

<div id="logo" class="w3-half">
  <img src="./images/ProductivityTechLogo.jpg" alt="ProductivityTech Logo" style="width: 100%;">

</div>

<div class="w3-half w3-right-align">
  <div class="w3-panel">
    <?php echo $msg; ?>
    <p id="serverDateTime" class="w3-right-align"></p>

    <?php echo $btn; ?>
    <p class="quote w3-left-align" style="font-style: italic;">
      <?php include("/home/course/u44/public_html/submissions/submission05/scripts/get_quote_from_mongodb.php"); ?>
    </p>
  </div>
</div>

<script>
  $(document).ready(function () {
    function updateServerDateTime() {
      $.ajax({
        url: 'scripts/time.php',
        type: 'GET',
        success: function (data) {
          $('#serverDateTime').html(data);
        }
      });
    }

    updateServerDateTime();

    setInterval(updateServerDateTime, 60000);
  });
</script>