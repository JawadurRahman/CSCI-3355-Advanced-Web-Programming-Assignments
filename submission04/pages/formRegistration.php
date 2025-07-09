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
      <div class="w3-center">
        <h3>Registration Form</h3>
        <p>(sorry, but only Canadian residents for the moment)</p>
        <p class="w3-text-red">Each * denotes a required field.</p>
      </div>

      <form id="registrationForm" class="w3-container" method="post" action="scripts/formRegistrationProcess.php">
        <div class="w3-padding">
          <label class="w3-text-blue"><b>Salutation:<span class="w3-text-red">*</span></b></label>
          <select class="w3-input w3-border w3-light-blue" name="salutation" required>
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
          <label class="w3-text-blue"><b>Middle Initial: </b></label>
          <input name="middle" class="w3-border w3-light-blue" type="text" pattern="^[A-Z]\.?$"
            title="Capital letter, followed by optional period." maxlength="2" size="2">
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Last Name:<span class="w3-text-red">*</span></b></label>
          <input name="last" class="w3-input w3-border w3-light-blue" type="text" pattern="^[A-Z]['a-z A-Z \-]*$" title="Initial letter must be capital. Only letters, spaces, hyphens, and apostrophes 
are allowed after the initial capital letter." required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Gender:<span class="w3-text-red">*</span></b></label>
          <select class="w3-input w3-border w3-light-blue" name="gender" required>
            <option value="" selected disabled hidden>
              Choose one
            </option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
          </select>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>E-mail Address:<span class="w3-text-red">*</span></b></label>
          <input name="email" class="w3-input w3-border w3-light-blue" type="email"
            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="characters@characters.domain (characters followed by an @ sign, followed by more characters, 
and then a period character '.'. After the '.' sign, add at least 2 letters from a to z"
            placeholder="Must be unique within our database" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Phone Number:</b></label>
          <input name="phone" class="w3-input w3-border w3-light-blue" type="tel" pattern="^(?:\d{3}-)?\d{3}-\d{4}$"
            title="Format: XXX-XXX-XXXX or XXX-XXXX">
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Address:<span class="w3-text-red">*</span></b></label>
          <input name="address" class="w3-input w3-border w3-light-blue" type="text" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>City:<span class="w3-text-red">*</span></b></label>
          <input name="city" class="w3-input w3-border w3-light-blue" type="text" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Region:<span class="w3-text-red">*</span></b></label>
          <select class="w3-input w3-border w3-light-blue" name="region" required>
            <option value="">
              Choose one
            </option>
            <optgroup label="Provinces">
              <option title="Alberta" value="AB">
                AB
              </option>
              <option title="British Columbia" value="BC">
                BC
              </option>
              <option title="Manitoba" value="MB">
                MB
              </option>
              <option title="New Brunswick" value="NB">
                NB
              </option>
              <option title="Newfoundland and Labrador" value="NL">
                NL
              </option>
              <option title="Nova Scotia" value="NS">
                NS
              </option>
              <option title="Ontario" value="ON">
                ON
              </option>
              <option title="Prince Edward Island" value="PE">
                PE
              </option>
              <option title="Quebec" value="QC">
                QC
              </option>
              <option title="Saskatchewan" value="SK">
                SK
              </option>
            </optgroup>
            <optgroup label="Territories">
              <option title="Northwest Territories" value="NT">
                NT
              </option>
              <option title="Nunavut" value="NU">
                NU
              </option>
              <option title="Yukon Territory" value="YT">
                YT
              </option>
            </optgroup>
          </select>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Postal Code:<span class="w3-text-red">*</span></b></label>
          <input name="postal" class="w3-input w3-border w3-light-blue" type="text" title="A1B2C3 or A1B 2C3"
            pattern="[A-Z][0-9][A-Z] ?[0-9][A-Z][0-9]" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Login Name:<span class="w3-text-red">*</span></b></label>
          <input name="username" class="w3-input w3-border w3-light-blue" type="text"
            placeholder="Choose your preferred username for login" pattern="[A-Za-z][A-Za-z0-9]*" minlength="6"
            maxlength="15" title="Must start with a letter, contain only letters and digits, and be
6 to 15 characters in length" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Password:<span class="w3-text-red">*</span></b></label>
          <input id="password" name="password" class="w3-input w3-border w3-light-blue" type="text"
            placeholder="Choose a strong password"
            oninput="document.getElementById('confirm').pattern = this.value.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&')"
            pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@^_+=\[\]:])[A-Za-z\d@^_+=\[\]:]{8,15}$" minlength="8"
            maxlength="15" title="8 to 15 characters, including at least one uppercase letter, one lowercase 
letter, one digit and one special character from the group @^_+=[]:" required>
        </div>

        <div class="w3-padding">
          <label class="w3-text-blue"><b>Password again:<span class="w3-text-red">*</span></b></label>
          <input id="confirm" name="confirm" class="w3-input w3-border w3-light-blue" type="text"
            oninput="document.getElementById('confirm').pattern = document.getElementById('password').value.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&')"
            placeholder="Re-enter same password as above" minlength="8" maxlength="15" title="Must match the password"
            required>
        </div>

        <div class="w3-padding">
          <input class="w3-btn w3-blue" type="submit" value="Submit Form Data">
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
    document.getElementById("registrationForm").reset();
  }
</script>