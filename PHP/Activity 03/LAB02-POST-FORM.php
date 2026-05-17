<!DOCTYPE html>
<html>
<body>
<!-- FORMS -->
<form method="post" action="">
 Name: <input type="text" name="name">
  <br>
 Favorite GAME: <input type="text" name="favgame">
 <br>
 AGE: <input type="number" name="age">
 <br>
 <input type="submit">
</form>

<!--php -->
<?php
if(isset($_POST['name'])) {
 echo "Hello, " . $_POST['name'];
 echo "<br>";
 echo "Your favorite game is: " . $_POST['favgame'];
 echo "<br>";
 echo "YOU ARE " . $_POST['age'] . "years old";
}

?>

</body>
</html>
