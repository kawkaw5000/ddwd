<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="index.php">Home</a> |
    <a href="comments.php">Comments</a> |
    <a href="register.php">Register</a> |
    <a href="login.php">Login</a><br /><br />

    <form action="includes/comments.inc.php" method="post">
        <select name="user">
            
        </select><br />
        <textarea name="comments"></textarea><br />
        <button>Submit</button>
    </form>

</body>

</html>