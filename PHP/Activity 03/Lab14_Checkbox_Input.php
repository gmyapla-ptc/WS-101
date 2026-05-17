<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title> ACT 03</title>
  </head> 
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<!-- name -->
Name: <input type="text" name="name"
value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
<br>

<!-- password -->
  Password: <input type="password" name="password">
<br>

<!-- email -->
  Email: <input type="email" name="email"
  value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
<br>

<!-- Gender -->
Gender:
    <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Female") echo "checked"; ?>> Female <br>
    
<!-- textarea -->    
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

<!-- textarea -->
 <textarea name="message" rows="5" cols="30"><?php echo isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : ''; ?></textarea>
    <br>
 <input type="submit">
 
 <!-- L14 hobby --> 
   <br><br>Hobbies:
    <br>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <input type="checkbox" name="hobbies[]" value="ART"> ART
    <input type="checkbox" name="hobbies[]" value="sleeping"> Sleeping

    <br><br>
 
</form>


<?php
//VALIDATION DEPARTMENT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//name
    if (empty($_POST["name"])) {
        echo "Name is required";
    }
//password
    elseif (empty($_POST["password"])) {
        echo "Password is required";
    }
//email
    elseif (empty($_POST["email"])) {
        echo "Email is required";
    }
//email validate @
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }
//gender
    elseif (empty($_POST["gender"])) {
        echo "Gender is required";
    }
//course
    elseif (empty($_POST["course"])) {
        echo "Course is required";
    }
//textarea
    elseif (empty($_POST["message"])) {
        echo "Message is required";
    }
//hobby L14
    elseif (empty($_POST["hobbies"])) {
        echo "Please select at least one hobby";
    }
    
    
    
// PRINTING AREA
    else {
//name
        echo "Hello, " . htmlspecialchars($_POST['name']);
        echo "<br>";
//password
        echo "Password received securely.";
        echo "<br>";
//email
        echo "Email: " . htmlspecialchars($_POST['email']);
        echo "<br>";
//gender
        echo "Gender: " . htmlspecialchars($_POST['gender']);
        echo "<br>";
//course
        echo "Course: " . htmlspecialchars($_POST['course']);
        echo "<br>";
//Textarea
        echo "Message: " . htmlspecialchars($_POST['message']);
//hobby
        echo "Hobbies: <br>";
        foreach ($_POST["hobbies"] as $hobby) {
        echo "- " . htmlspecialchars($hobby) . "<br>";}
        
    }
}
?>
</body>
</html>
