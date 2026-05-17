<!DOCTYPE html>
<html>
<body>

<form method = "get">
ENTER GRADE : 
<input type = "number" name = "grade">
<input type = "submit" value = "check">
</form>

<?php
if(isset($_GET['grade'])) {
$grade = $_GET['grade'];

if ($grade >= 90 && $grade <=100) {
echo "Excellence"; }

elseif ($grade >= 80 && $grade <= 89) {
echo "Good"; }

elseif ($grade >= 70 && $grade <= 79) {
echo "Average";}
else { 
echo "FAILED";}
}


?>
</body>
</html>


  


