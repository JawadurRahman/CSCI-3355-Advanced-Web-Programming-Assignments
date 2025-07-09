<!--
banner.html
This file handels the banner display of our Productivity Tech website.
This includes a logo and welcome message.
-->
<div id="logo" class="w3-half">
    <img src="./images/ProductivityTechLogo.jpg" alt="ProductivityTech Logo" style="width: 100%;" >

</div>

<div class="w3-half w3-right-align">
    <div class="w3-panel">
        <h4>Welcome!</h4>
        <p id="serverDateTime" class="w3-right-align"></p>

        <a title="Not Active yet" class="w3-button w3-blue w3-round" href="pages/sorry.php">
            Log in
        </a>
        <p class="quote w3-left-align" style="font-style: italic;">
        <?php include("/home/course/u44/public_html/submissions/submission03/scripts/get_quote_from_mongodb.php"); ?>
        </p>
    </div>
</div>

<script>
    $(document).ready(function() {
    function updateServerDateTime() {
        $.ajax({
            url: 'scripts/time.php',
            type: 'GET',
            success: function(data) {
                $('#serverDateTime').html(data);
            }
        });
    }

    updateServerDateTime();

    setInterval(updateServerDateTime, 60000);
});
</script>