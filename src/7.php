 <?php
 $students = array("Jenny", "Bob", "Mark", "Sarah");
 $grades = array(85, 72, 91, 68);
 $totalGrades = count($grades);
 for ($i = 0; $i < $totalGrades; $i++) {
   echo "$students[$i] scored $grades[$i]\n";
 }
 ?>