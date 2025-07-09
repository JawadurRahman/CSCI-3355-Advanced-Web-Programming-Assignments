<?php
    $currDate = date_create();
    $fullDay = date_format($currDate, "l"); // Fully spelled out day
    $fullMonth = date_format($currDate, "F"); // Fully spelled out month
    $day = date_format($currDate, "j");

    if ($day == 1 || $day == 21 || $day == 31) {
        $day .= "st";
    } elseif ($day == 2 || $day == 22) {
        $day .= "nd";
    } elseif ($day == 3 || $day == 23) {
        $day .= "rd";
    } else {
        $day .= "th";
    }

    echo "It's " . $fullDay . ", " . $fullMonth . " " . $day . "<br>\n";
    echo "Our time is " . date_format($currDate, "g:ia") . "\n";
?>