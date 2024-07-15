<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form action="includes/login.inc.php" class="login-form">
                <input type="text" name="uid" placeholder="username" />
                <input type="password" name="pwd" placeholder="password" />
                <button type="submit" name="submit">login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Incorrect Login Information!</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>