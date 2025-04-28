<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; style-src 'self';">
</head>
<body>
    <nav>
        <a href="reflected-xss.php">Reflected XSS</a> |
        <a href="stored-xss.php">Stored XSS</a> |
        <a href="dom-xss.html">DOM XSS</a> |
        <a href="secure-page.php">Secure Page</a>
    </nav>
    <h1>Secure Page</h1>
    <form method="GET" action="secure-page.php">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
    <?php
    if(isset($_GET['name']))
    {
        echo "Hello, " .htmlspecialchars($_GET['name'], ENT_QUOTES,'UTF-8'); 
    }
    ?>
</body>
</html>