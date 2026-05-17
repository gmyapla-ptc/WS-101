<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>ACT 03</title>
<body>
<!-- FORMS added gendert -->
<form method="post" action="">
 Name: <input type="text" name="name">
  <br>
  Email: <input type="email" name="email">
  <br>
  <!-- L7 RADIO BUTTON -->
   Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female

    <br>
 <input type="submit">
</form>

<!--php -->
<?php
//isset name && email
if (isset($_POST['name']) && isset($_POST['email'])) {

    if (empty($_POST["name"])) {
        echo "Name is required";
    } 
    elseif (empty($_POST["email"])) {
        echo "Email is required <br>";
    } 
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
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
