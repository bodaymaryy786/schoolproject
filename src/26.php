<?php
// Initialize session to ensure data is not lost on errors
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect user to login page
    header("Location: https://www.example.com/login");
    exit();
}

// Your code here...

?>
