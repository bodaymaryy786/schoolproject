<?php
    function addNumbers($a, $b) {
        if ($a == 0 || $b == 0) {
            return 0;
        }
        return $a + $b;
    }

    // Example usage:
    echo "The sum of 5 and 3 is: " . addNumbers(5, 3);
?>
