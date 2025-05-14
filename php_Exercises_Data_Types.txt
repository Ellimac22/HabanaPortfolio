<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE DATA TYPES</title>
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
    <h1>PHP EXERCISE DATA TYPES</h1>

    <div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 1: Personal Information</h2>
    
    <p id="output"></p>

    <script>
    // Define variables
    let x = 10;
    let y = 4;

    // Perform the operation: (x + y) * 5
    let z = (x + y) * 5;

    // Display the result
    document.getElementById("output").innerText = "The total is " + z;
    </script>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 2: Value added tax</h2>
    
    <p id="output"></p>

    <?php
    // Define variables
    $price = 100;     // Base price
    $vat = 0.21;      // 21% VAT

    // Calculate total price
    $totalPrice = $price + ($price * $vat);

    // Print results
    echo "Price: " . number_format($price, 2) . "<br>";
    echo "Vat: " . number_format($vat * 100, 2) . "%<br>";
    echo "Total price: " . number_format($totalPrice, 2);
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 3: Average</h2>
    
    <p id="output"></p>

    <?php
    // Define variables
    $x = 7;
    $y = 13;
    $z = 20;

    // Calculate average
    $average = ($x + $y + $z) / 3;

    // Print the average with 2 decimal places
    echo "The average is " . number_format($average, 2);
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 4: Countries and Capitals</h2>
    
    <p id="output"></p>

    <?php
    // Create an associative array of countries and their capitals
    $countries = array(
        "Netherlands" => "Amsterdam",
        "Thailand" => "Bangkok",
        "Germany" => "Berlin",
        "Japan" => "Tokyo",
        "Canada" => "Ottawa"
    );

    // Loop through the array and print the output
    foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital<br>";
    }
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 5: Centimeters to inches</h2>

    <p id="output"></p>

    <?php
    // Define the length in centimeters
    $cm = 100;

    // Conversion factor: 1 cm = 0.39 inch
    $inch = $cm * 0.39;

    // Convert to integer (rounded down)
    $cmToInch = (int)$inch;

    // Print the result
    echo "$cm centimeters is $cmToInch inches.";
    ?>

  </div>
  <div class="column" style="background-color:#e6d7dc;">
    <h2>Exercise 6: Expenses</h2>

    <p id="output"></p>

    <?php
    // Define an array with your biggest expenses
    $expenses = array(250, 120, 300, 90, 150);

    // Initialize total amount
    $totalAmount = 0;

    // Loop through the array to calculate total
    foreach ($expenses as $expense) {
    $totalAmount += $expense;
    }

    // Count the number of expenses
    $amountOfExpenses = count($expenses);

    // Display the result
    echo "My $amountOfExpenses biggest expenses were $totalAmount.";
    ?>

  </div>
</div>

</body>
</html>