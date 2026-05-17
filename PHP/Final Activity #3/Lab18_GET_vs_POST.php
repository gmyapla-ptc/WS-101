<!DOCTYPE html>
<html>
<head>
    <title>Lab 18 Activity</title>
</head>
<body>

    <h5>DEAR MADAM, <br>
    I am using my company laptop, and with that, I cannot install VS CODE and XAMPP to create a local server. I am using an online compiler to test and display the URL behavior needed for the Lab 1[...]
    
    <hr>
<!-- GET METHOD -->

    <h3>GET Method Testing</h3>
    <form method="get" action="">
        Name: <input type="text" name="name_get">
        <input type="submit" value="Submit GET">
    </form>

    <?php 
    if (!empty($_GET['name_get'])) {
        echo "<p><strong>Result (GET):</strong> Hello, " . htmlspecialchars($_GET['name_get']) . "</p>";
    }
    
// GET sends data through URL
// { name_get=YourName } it will look like this at the end of url
    ?>

    <hr>

    <h3>POST Method Testing</h3>
    <form method="post" action="">
        Name: <input type="text" name="name_post">
        <input type="submit" value="Submit POST">
    </form>

    <?php 
    if (!empty($_POST['name_post'])) {
        echo "<p><strong>Result (POST):</strong> Hello, " . htmlspecialchars($_POST['name_post']) . "</p>";
    }
    // POST sends data hidden (not visible in URL)
    ?>
    
    <br><br>
<h3>Comparison</h3>

<ul>
    <li>in GET method, data in visible in URL (?name=)</li>
    <li>in POST method, data hidden is from URL</li>
    <li>GET method is less secure and mainly used for serches</li>
    <li>POST is more secure and mainly used for login and other things that need to encypted</li>
</ul>


</body>
</html>
