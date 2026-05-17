<!DOCTYPE html>
<html>
<body>
<!-- FORMS -->
 <!-- L2 CHANGED TO POST FORMAT -->
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
