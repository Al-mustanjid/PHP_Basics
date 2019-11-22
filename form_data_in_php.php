<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Data in PHP</title>
</head>
<body>
    <form action="test.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" name="submit">
    </form>

    <form action="test.php" method="get">
        <input type="text" name="q">
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>