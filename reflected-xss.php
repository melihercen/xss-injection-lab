<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS</title>
</head>
<body>
    <nav>
        <a href="reflected-xss.php">Reflected XSS</a> |
        <a href="stored-xss.php">Stored XSS</a> |
        <a href="dom-xss.html">DOM XSS</a> |
        <a href="secure-page.php">Secure Page</a>
    </nav>
    <h1>Reflected XSS Example</h1>
    <form method="POST" action="reflected-xss.php">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['name']))
        {
            echo "Hello, " . $_POST['name'];
        }
    ?>
    
</body>
</html>