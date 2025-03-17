<?php 

require_once ('Classes/Student.php');

$student01 = new Student("Medicine", "Ikamn");
echo $student01 -> setCourse("Sofware Eneegering");
echo $student01 ->getCourse();
echo "<br>";

echo $student01 ->student_id;


?>