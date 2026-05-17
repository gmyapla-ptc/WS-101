<!DOCTYPE html>
<html>
<body>
<!-- FORMS -->
<form method="post" action="">
 Name: <input type="text" name="name">
  <br>
  Email: <input type="email" name="email">
  <br>
 <input type="submit">
</form>

<!--php -->
<?php
//isset name && email
 if(isset($_POST['name']) && isset($_POST['email']))
{ 
 echo "Hello, " . $_POST['name'];
 echo "<br>";
 echo "email" . $_POST['email'];
 echo "<br>";
}

?>

</body>
</html>
