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
    <article>
      <h3>Feedback Form ... Tell Us What You Think, or Ask Us a Question</h3>
      <p class="w3-text-red">Each * denotes a required field.</p>

      <form id="feedbackForm" class="w3-container" method="post" action="scripts/formFeedbackProcess.php">
        <div class="w3-padding">
          <label class="w3-text-blue"><b>Salutation:<span class="w3-text-red">*</span></b></label>
          <select class="w3-input w3-border w3-light-blue" name="salutation" title="Select an item in the list."
            required>
            <option value="" selected disabled hidden>
              Choose one
            </option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mr.">Mr.</option>
            <option value="Dr.">Dr.</option>
          </select>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>First Name:<span class="w3-text-red">*</span></b></label>
          <input name="first" class="w3-input w3-border w3-light-blue" type="text" pattern="^[A-Z]['a-z A-Z \-]*$"
            title="Initial letter must be capital. Only letters, spaces, hyphens, and apostrophes 
are allowed after the initial capital letter." required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Last Name:<span class="w3-text-red">*</span></b></label>
          <input name="last" class="w3-input w3-border w3-light-blue" type="text" pattern="^[A-Z]['a-z A-Z \-]*$" title="Initial letter must be capital. Only letters, spaces, hyphens, and apostrophes 
are allowed after the initial capital letter." required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>E-mail Address:<span class="w3-text-red">*</span></b></label>
          <input name="email" class="w3-input w3-border w3-light-blue" type="email"
            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="characters@characters.domain (characters followed by an @ sign, followed by more characters, 
and then a period character '.'. After the '.' sign, add at least 2 letters from a to z" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Phone Number:</b></label>
          <input name="phone" class="w3-input w3-border w3-light-blue" type="tel" pattern="^(?:\d{3}-)?\d{3}-\d{4}$"
            title="Format: XXX-XXX-XXXX or XXX-XXXX">
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Subject:<span class="w3-text-red">*</span></b></label>
          <input name="subject" class="w3-input w3-border w3-light-blue" type="text" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Comments:<span class="w3-text-red">*</span></b></label>
          <textarea name="comments" class="w3-input w3-border w3-light-blue" required></textarea>
        </div>

        <div class="w3-padding w3-text-blue">
          Please check if you would like us to get
          back to you: <input name="check" class="w3-light-blue" type="checkbox">
        </div>

        <div class="w3-padding">
          <input class="w3-btn w3-blue" type="submit" value="Send Feedback">
          <button type="button" onclick="resetForm()" class="w3-btn w3-red">Reset Form</button>
        </div>
      </form>

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