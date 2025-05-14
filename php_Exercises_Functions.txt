<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE FUNCTIONS</title>
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
    <h1>PHP EXERCISE FUNCTIONS</h1>

    <div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 1: Vat calculator</h2>
    
    <p id="output"></p>

    <?php
    // Define variables
    $price = 200;
    $vat = 0.21; // 21%

    // Function to calculate VAT
    function calculateVat($price, $vat) {
        $calculatedPrice = $price + ($price * $vat);
        return $calculatedPrice;
    }

    // Call the function and store the result
    $totalPrice = calculateVat($price, $vat);

    // Print the result
    echo "Price is: " . number_format($price, 2) . "<br>";
    echo "Vat is: " . number_format($vat * 100, 2) . "%<br>";
    echo "Total price is: " . number_format($totalPrice, 2);
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 2: Leap Year</h2>
    
    <p id="output"></p>

    <?php
    // Define the year
    $year = 2024;

    // Function to check if the year is a leap year
    function isLeapYear($year) {
        return ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0);
    }

    // Use the function and print the result
    if (isLeapYear($year)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 3: Calculator</h2>
    
    p id="output"></p>

    <?php
    // Define variables
    $num1 = 20;
    $num2 = 5;

    // Function to add two numbers
    function addNumbers($a, $b) {
        return $a + $b;
    }

    // Function to subtract two numbers
    function subtractNumbers($a, $b) {
        return $a - $b;
    }

    // Function to multiply two numbers
    function multiplyNumbers($a, $b) {
        return $a * $b;
    }

    // Function to divide two numbers
    function divideNumbers($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "undefined (division by zero)";
        }
    }

    // Call and display results
    echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "<br>";
    echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "<br>";
    echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "<br>";
    echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2);
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 4: Swapping numbers</h2>
    
    <p id="output"></p>

    <?php
    // Define the swap function
    function swapNumbers($num1, $num2) {
        echo "Before swapping: num1 = $num1, num2 = $num2<br>";

        // Swapping using a temporary variable
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "After swapping: num1 = $num1, num2 = $num2";
    }

    // Call the function with example values
    swapNumbers(4, 8);
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 5: Even or Odd</h2>

    <p id="output"></p>

    <?php
    // Define the function
    function evenOrNot($num1) {
        if ($num1 % 2 == 0) {
            echo "$num1 is even";
        } else {
            echo "$num1 is odd";
        }
    }

    // Call the function with an example number
    evenOrNot(7);
    ?>


  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 6</h2>

    <p id="output"></p>

    <?php
    // Define the swap function
    function swapNumbers1($nums1, $nums2) {
    echo "Before swapping: nums1 = $nums1, nums2 = $nums2<br>";

    // Swapping using a temporary variable
    $temps = $nums1;
    $nums1 = $nums2;
    $nums2 = $temps;

    echo "After swapping: nums1 = $nums1, nums2 = $nums2";
    }
    // Call the function with example values
    swapNumbers1(4, 8);
    ?>

  </div>
</div>

</body>
</html>