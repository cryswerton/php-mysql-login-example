<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Example</title>
</head>
<body>
    <h1>PHP Login Example</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>
        <input class="btn btn-dark" type="submit" value="LOGIN"><br><br>
        <?php echo $msg . "<br>"; ?>
    </form>
</body>
</html>