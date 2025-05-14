<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE BUILD IN FUNCTIONS</title>
    <style>
    * {
        box-sizing: border-box;
    }
    h1 {
        text-align: center; 
        font-size: 45px; 
        color: #e6d7dc;
    }
    h3 {
        text-align: center;
        font-size: 18px;
    }
    .row .column h2 {
        text-align: center; 
        font-size: 25px;
    }
    .column {
        margin-left: 20px;
        margin-bottom: 20px;
        float: left;
        width: 31%;
        height: 280px;
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
</head>
<body style="background-color: #91475e;">
    <h1>PHP EXERCISE BUILD IN FUNCTIONS</h1>

    <div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 1: Sorting array</h2>
    
    <p id="output"></p>

    <?php
    // Define the array
    $NUMBERS = array(5, 2, 9, 1, 7, 3);

    // Sort the array in descending order
    rsort($NUMBERS);

    // Display the sorted array
    echo "Sorted array in descending order:<br>";
    foreach ($NUMBERS as $number) {
        echo $number . "<br>";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 2: Birthday countdown</h2>
    
    <p id="output"></p>

    <?php
    // Set your birthday (month and day)
    $birthday = new DateTime(date("Y") . "-11-12"); // Example: November 12

    // Get today's date
    $today = new DateTime();

    // If birthday already passed this year, set it for next year
    if ($birthday < $today) {
        $birthday->modify('+1 year');
    }

    // Calculate the difference in days
    $interval = $today->diff($birthday);
    $daysRemaining = $interval->days;

    // Output the countdown
    echo "Your birthday is in $daysRemaining day(s)!";
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 3: Generating random float numbers</h2>
    
    <p id="output"></p>

    <?php
    // Function to generate a random float between two values
    function randNumber($min = 0, $max = 1) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }

    // Generate and print a random float
    $randomFloat = randNumber(1, 10); // example range: 1.0 to 10.0
    echo "Random float number: " . number_format($randomFloat, 4);
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 4: Lowercase check</h2>
    
    <p id="output"></p>

    <?php
    // Define a string variable
    $str = "PHP Is A Powerful SERVER-Side Scripting Language!";

    // Function to convert string to lowercase
    function lowercaseCheck($text) {
        return strtolower($text);
    }

    // Call the function and display the result
    $lowercaseText = lowercaseCheck($str);
    echo "Lowercase version: " . $lowercaseText;
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 5: Search inside of a text</h2>

    <p id="output"></p>

    <?php
    // Define a long piece of text
    $str = "Hello! How are you doing today? I hope you're well. Let's meet at 3:00 p.m., okay.";

    // Function to count punctuation characters
    function searchText($str, $punctuation) {
        $count = substr_count($str, $punctuation);
        echo "The text has $count '$punctuation' punctuation(s).<br>";
    }

    // Example usage for various punctuation marks
    searchText($str, '.');
    searchText($str, ',');
    searchText($str, '!');
    searchText($str, '?');
    searchText($str, ':');
    searchText($str, "'");
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 6: Lowest and highest valuest</h2>

    <p id="output"></p>

    <?php
    // Define an array of integers
    $onlyNumbers = [23, 5, 89, 12, 34, 1, 67];

    // Use min() and max() to find the lowest and highest values
    $minValue = min($onlyNumbers);
    $maxValue = max($onlyNumbers);

    // Output the result
    echo "The lowest value is $minValue and the highest value is $maxValue.";
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 7: String repeat</h2>

    <p id="output"></p>

    <?php
    // Define the string
    $str = "Hello! ";

    // Repeat the string 8 times
    $repeatedStr = str_repeat($str, 8);

    // Output the result
    echo $repeatedStr;
    ?>

  </div>
</div>

</body>
</html>