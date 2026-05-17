<!DOCTYPE html>
<html>
<body>

<form method = "get">
ENTER A NUMBER : 
<input type="number" name="x" required>
<input type = "submit" value = "check" required>
</form>

<?php
if (isset($_GET['x'])) {
$x = $_GET['x'];

if ($x > 0) {
echo "POSITIVE";}
elseif ($x < 0) {
echo "NEGATIVE";}
else {
    echo "ZERO";} 
}

?>

</body>
</html>
