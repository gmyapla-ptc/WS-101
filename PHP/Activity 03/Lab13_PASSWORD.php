<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title> ACT 03</title>
  </head> 
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name: <input type="text" name="name"
value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
<br>
  Password: <input type="password" name="password">
<br>
  Email: <input type="email" name="email"
  value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
<br>
Gender:
    <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Female") echo "checked"; ?>> Female <br>
    
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

 <textarea name="message" rows="5" cols="30"><?php echo isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : ''; ?></textarea>
    <br>
 <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        echo "Name is required";
    }
// ADDED Pass imput
    elseif (empty($_POST["password"])) {
        echo "Password is required";
    }

    elseif (empty($_POST["email"])) {
        echo "Email is required";
    }

    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }

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
        // L13 password will not display
        echo "Password received securely.";
        echo "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']);
        echo "<br>";
        echo "Gender: " . htmlspecialchars($_POST['gender']);
        echo "<br>";
        echo "Course: " . htmlspecialchars($_POST['course']);
        echo "<br>";
        echo "Message: " . htmlspecialchars($_POST['message']);
    }
}
?>
</body>
</html>
