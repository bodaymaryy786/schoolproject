<?php
// Simple Calculator with PHP

function calculate($num1, $operator, $num2) {
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            if ($num2 == 0) {
                return "Error: Cannot divide by zero!";
            } else {
                return $num1 / $num2;
            }
    }
}

$result = calculate(10, "+", 5);
echo "Result: " . $result;
?>