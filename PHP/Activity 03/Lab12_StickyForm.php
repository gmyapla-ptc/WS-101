<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title> ACT 03</title>
  </head> 
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<!-- L12 STICKY FORM -->
<!-- text/email == value -->
<!-- radio == checked -->
<!-- dropdown == selected -->
<!-- textarea == inside tag -->

Name: <input type="text" name="name"
value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
  <br>
  Email: <input type="email" name="email"
  value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
  <br>
Gender:
    <input type="radio" name="gender" value="Male"<?php if(isset($_POST['gender']) && $_POST['gender'] == "Male") echo "checked"; ?>
> Male
    <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Female") echo "checked"; ?>
> Female <br>
    
COURSE : 
<select name="course">
<option value=""
    <?php if(!isset($_POST['course']) || $_POST['course'] == "") echo "selected"; ?>
    >-- Select Course --</option>
<option value="BSIT"
    <?php if(isset($_POST['course']) && $_POST['course'] == "BSIT") echo "selected"; ?>
    >BSIT</option>
<option value="BSOA"
    <?php if(isset($_POST['course']) && $_POST['course'] == "BSOA") echo "selected"; ?>
    >BSOA</option>
<option value="BSCS"
    <?php if(isset($_POST['course']) && $_POST['course'] == "BSCS") echo "selected"; ?>
    >BSCS</option>
</select> <br>

 <textarea name="message" rows="5" cols="30">
 <?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?>
 </textarea>
    <br>
 <input type="submit">
</form>





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
