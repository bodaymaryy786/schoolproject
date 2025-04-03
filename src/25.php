<?php
$student_id = 123456;
$sql = "SELECT name FROM students WHERE id = $student_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Student found with ID: " . $student_id . "\n";
} else {
    echo "No student found with the given ID.\n";
}
?>
