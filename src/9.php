
<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return mt_rand(1, 10);
}

// Function to generate a random word from an array of words
function getRandomWord($words) {
    $randomIndex = mt_rand(0, count($words) - 1);
    return $words[$randomIndex];
}

// Function to generate a random sentence using the above functions
function getRandomSentence() {
    $words = array("The", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog");
    $sentence = getRandomWord($words) . " " . getRandomWord($words) . " " . getRandomNumber() . " " . getRandomWord($words);
    return $sentence;
}

?>