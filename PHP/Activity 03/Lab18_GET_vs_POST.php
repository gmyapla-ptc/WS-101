<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 18: GET vs POST</title>
</head>
<body>

<h1>Lab 18: GET vs POST Comparison</h1>

<hr>

<!-- GET FORM -->
<h2>GET Form</h2>
<form method="get" action="">
    Name: <input type="text" name="name_get">
    <input type="submit" value="Submit GET">
</form>

<hr>

<!-- POST FORM -->
<h2>POST Form</h2>
<form method="post" action="">
    Name: <input type="text" name="name_post">
    <input type="submit" value="Submit POST">
</form>

<hr>

<?php

// GET RESULTS
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name_get"])) {
    echo "<h3>GET Results:</h3>";
    echo "Name: " . $_GET["name_get"];
    echo "<br>";
    echo "URL: " . htmlspecialchars($_SERVER["REQUEST_URI"]);
    echo "<br>";
    echo "Notice: Data is visible in the URL!";
}

// POST RESULTS
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name_post"])) {
    echo "<h3>POST Results:</h3>";
    echo "Name: " . $_POST["name_post"];
    echo "<br>";
    echo "URL: " . htmlspecialchars($_SERVER["REQUEST_URI"]);
    echo "<br>";
    echo "Notice: Data is NOT visible in the URL!";
}

?>

</body>
</html>