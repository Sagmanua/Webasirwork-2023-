<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $userInput = $_POST["user_input"];

    // Save the input to a file
    $filename = "user_input.txt";
    file_put_contents($filename, $userInput . PHP_EOL, FILE_APPEND);

    // Display a message
    echo "You entered: " . $userInput . ". This has been saved to " . $filename;
}
?>
