<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE CONTROL STRUCTURE</title>
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
    <h1>PHP EXERCISE CONTROL STRUCTURE</h1>

    <div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 1</h2>
    
    <p id="output"></p>

    <?php
    // Define two integer variables
    $number1 = 45;
    $number2 = 72;

    // Find highest and lowest
    $highest = max($number1, $number2);
    $lowest = min($number1, $number2);

    // Print the results
    echo "Highest value is $highest.<br>";
    echo "Lowest value is $lowest.";
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 2</h2>
    
    <p id="output"></p>

    <?php
    // Define the value
    $value = 3;

    // Check and print the corresponding suit
    if ($value == 1) {
    echo "Spades";
    } elseif ($value == 2) {
    echo "Hearts";
    } elseif ($value == 3) {
    echo "Diamonds";
    } elseif ($value == 4) {
    echo "Clubs";
    } else {
        echo "Invalid value. Please enter a number between 1 and 4.";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 3</h2>
    
    <p id="output"></p>

    <?php
    // Define the student's score
    $score = 85;

    // Determine the grade and pass/fail status
    if ($score >= 90 && $score <= 100) {
        $grade = 'A';
        $status = 'passed';
    } elseif ($score >= 80 && $score <= 89) {
        $grade = 'B';
        $status = 'passed';
    } elseif ($score >= 70 && $score <= 79) {
        $grade = 'C';
        $status = 'passed';
    } elseif ($score >= 60 && $score <= 69) {
        $grade = 'D';
        $status = 'failed';
    } else {
        $grade = 'F';
        $status = 'failed';
    }

    // Output the result
    echo "The student scored $score points.<br>";
    echo "Grade: $grade<br>";
    echo "The student has $status the exam.";
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 4</h2>
    
    <p id="output"></p>

    <?php
    // Define machine data
    $workingHours = 12000;
    $ageInYears = 5;
    $failuresPerYear = 30;

    // Check replacement conditions
    if ($workingHours > 10000 || $ageInYears > 7 || $failuresPerYear > 25) {
        echo "The machine should be replaced.";
    } else {
        echo "The machine is still in good condition.";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 5</h2>

    <p id="output"></p>

    <?php
    // Define the year
    $year = 2024;

    // Check if it's a leap year
    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 6</h2>

    <p id="output"></p>

    <?php
    // Define the number to multiply
    $number = 7;

    // Define the start and end of the loop
    $start = 1;
    $end = 10;

    // Display the multiplication table
    echo "Multiplication table for $number:<br>";
    for ($i = $start; $i <= $end; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 7</h2>

    <p id="output"></p>

    <?php
    // Initialize the first two Fibonacci numbers
    $fib1 = 0;
    $fib2 = 1;

    // Print the initial Fibonacci number
    echo "Fibonacci series from 0 to 50:<br>";
    echo "$fib1, $fib2";

    // Generate the rest of the series
    while (true) {
        $nextFib = $fib1 + $fib2;
        if ($nextFib > 50) {
            break;
        }
        echo ", $nextFib";
        // Update values for next iteration
        $fib1 = $fib2;
        $fib2 = $nextFib;
    }
    ?>

  </div>
</div>

</body>
</html>