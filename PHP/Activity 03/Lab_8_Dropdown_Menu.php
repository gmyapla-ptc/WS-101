<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>XSS Prevention</title>
<body>
<!-- FORMS added dropdown options -->
<form method="post" action="">
 Name: <input type="text" name="name">
  <br>
  Email: <input type="email" name="email">
  <br>
   Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female <br>
<!-- L8 DROP DOWN MENU -->
COURSE : 
<select name="course">
<option value="BSIT">BSIT</option>
<option value="BSOA"> BSOA </option>
<option value="BSCS">BSCS </option>

    </select>


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
