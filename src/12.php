<?php

// Random PHP Code

function getRandomNumber($min, $max) {
  return rand($min, $max);
}

$randomNumber = getRandomNumber(1, 100);

echo "The random number is: " . $randomNumber;

?>
