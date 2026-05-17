<!DOCTYPE html>
<html>
<body>
<!-- FORMS -->
<form method="post" action="">
 Name: <input type="text" name="name">
  <br>
 <input type="submit">
</form>

<!--php -->
<?php
if(isset($_POST['name'])) {
 echo "Hello, " . $_POST['name'];
 echo "<br>";
}

?>

</body>
</html>
