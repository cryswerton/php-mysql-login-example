<?php session_start(); ?>
<?php
        // Database connection
        include 'database.php';

        // check if the POST email is in the database
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            // Gets the user by the email got via POST request
            $email = $_POST['email'];
            $sql = "SELECT * FROM users where email = '$email'";
            $result = $conn -> query($sql);
            $user = $result->fetch_assoc();

            if($_POST['email'] == $user["email"] && $_POST['password'] == $user["password"]){                
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['name'] = $user["name"];
                header('Location: home.php');
            }else {
                $msg = "Wrong password or email.";
                header("Location: index.php?msg=$msg");
            }
        }
    ?>