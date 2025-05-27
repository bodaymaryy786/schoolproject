<?php
// This is a sample PHP script to demonstrate basic operations.
// You can add more functionalities as needed.

// Example: Adding 10 to any number passed in as an argument
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// Call the function and pass some numbers
$result = addNumbers(5, 3);
echo "The sum of 5 and 3 is: " . $result;

// Another example: Using an array to add multiple numbers
$numbersArray = [4, 6, 8, 10];
$result = addNumbers($numbersArray[0], $numbersArray[1]);
echo "The sum of the first two elements in the array is: " . $result;
