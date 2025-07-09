<?php

function create_quote_today()
{
    // 1. Connecting PHP with MongoDB
    //Step 1: Include Composer's autoloader file to connect PHP and MongoDB.
    include('/var/shared/vendor/autoload.php');

    //Step 2: Access username and password from outside location.
    include($_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/../htpasswd/mongodb.inc');

    //Step 3: Connect to the MongoDB database and collection.
    $client = new MongoDB\Client("mongodb://$username:$password@localhost/$username");
    $collection = $client->u44->quotes;

    // 2. Write random quote to file
    //Step 1: Get a random quote
    $quote_id = rand(1, $collection->count());
    $quote = $collection->findone( [ '_id' => $quote_id ] );
    
    //Step 2: Open file
    $f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
        . "/submissions/submission03"
        . "/resources/quote_today.txt", "w");
    fwrite($f, date("l, F jS") . "\n");

    //Step 3: Write and return today's quote.
    $quote_today = "Today's "
        . $quote['adjective']
        . " quote, from "
        . $quote['author']
        . ":\n"
        . $quote['text'];
    fwrite($f, $quote_today);
    fclose($f);
    return $quote_today;
}

if (
    file_exists($_SERVER['CONTEXT_DOCUMENT_ROOT']
        . "/submissions/submission03"
        . "/resources/quote_today.txt")
) {
    $f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
        . "/submissions/submission03"
        . "/resources/quote_today.txt", "r");
    $date = trim(fgets($f));
    if ($date == date("l, F jS")) {
        $quote = fgets($f, 2000);
        $quote .= fgets($f, 2000);
        fclose($f);
        echo $quote;
    } else {
        fclose($f);
        unlink($_SERVER['CONTEXT_DOCUMENT_ROOT']
            . "/submissions/submission03"
            . "/resources/quote_today.txt");
        echo create_quote_today();
    }
} else {
    echo create_quote_today();
}
?>
