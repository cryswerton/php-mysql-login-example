<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Example</title>
</head>
<body>
    <?php
        // Database connection
        include 'database.php';

        $msg = '';

        // check if the POST email is in the database
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            // Gets the user by the email got via POST request
            $email = $_POST['email'];
            $sql = "SELECT * FROM users where email = '$email'";
            $result = $conn -> query($sql);
            $user = $result->fetch_assoc();

            if($_POST['email'] == $user["email"] && $_POST['password'] == $user["password"]){
                session_start();
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['name'] = $user["name"];

                header('Location: index.php');
            }else {
                $msg = 'Wrong email or password.';
            }
        }
    ?>

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