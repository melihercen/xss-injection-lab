<?php
$comments=[];

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $comments[]=$_POST['comment'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS</title>
</head>
<body>
    <nav>
        <a href="reflected-xss.php">Reflected XSS</a> |
        <a href="stored-xss.php">Stored XSS</a> |
        <a href="dom-xss.html">DOM XSS</a> |
        <a href="secure-page.php">Secure Page</a>
    </nav>
    <h1>Stored XSS Example</h1>
    <form  method="POST" action="stored-xss.php">
        <label for="comment">Leave a comment:</label>
        <textarea name="comment" id="comment"></textarea>
        <button type="submit">Submit</button>
    </form>
    <h2>Comments:</h2>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li><?php echo $comment; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>