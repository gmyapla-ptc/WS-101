<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title> ACT 03</title>
  </head> 
<body>
<!-- FORMS  -->
<!-- L11 Self-Processing_Form -->
<form method="post" action="">
action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
<!-- "Submit the data back to the exact same page that the user is currently looking at -->

<!-- name && email -->
 Name: <input type="text" name="name">
  <br>
  Email: <input type="email" name="email">
  <br>
  
<!--GENDER RADIO BUTTON L7 -->
   Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female <br>
    
 COURSE : 
<select name="course">
<option value="">-- Select Course --</option> 
<option value="BSIT">BSIT</option>
<option value="BSOA"> BSOA </option>
<option value="BSCS">BSCS </option>

</select> <br>

 <textarea name="message" rows="5" cols="30"></textarea>
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
    
// L10 VALIDATE
    elseif (empty($_POST["gender"])) {
    echo "Gender is required";
}

elseif (empty($_POST["course"])) {
    echo "Course is required";
}

elseif (empty($_POST["message"])) {
    echo "Message is required";
}
    else {
        echo "Hello, " . htmlspecialchars($_POST['name']);
        echo "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']);
  // l10 display
        echo "<br>";
        echo "Gender: " . htmlspecialchars($_POST['gender']);
        echo "<br>";
        echo "Course: " . htmlspecialchars($_POST['course']);
        echo "<br>";
        echo "Message: " . htmlspecialchars($_POST['message']);
        echo "<br>";



        
    }
    
    
    

}
?>
</body>
</html>
