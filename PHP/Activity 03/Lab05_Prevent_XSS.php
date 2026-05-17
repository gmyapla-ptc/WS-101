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
 if(isset($_POST['name']) && isset($_POST['email'])) {
 
 if(empty($_POST["name"])) {
 echo "Name is required";}
 
 elseif (empty($_POST["email"])) {
 echo "Email is required <br>";

}

else {
 echo "Hello, " . htmlspecialchars($_POST['name']);
        echo "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']);
        echo "<br>";
}
}

?>

</body>
</html>
