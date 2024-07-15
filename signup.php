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
            <form action="includes/signup.inc.php" method="post" class="login-form">
                <input type="text" name="name" placeholder="username" />
                <input type="email" name="email" placeholder="email" />
                <input type="text" name="username" placeholder="username" />
                <input type="password" name="pwd" placeholder="password" />
                <input type="password" name="pwdrepeat" placeholder="password repeat" />
                <button type="submit" name="submit">signup</button>
                <p class="message">Already Have One?<a href="login.php">Login</a></p>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    } else if ($_GET["error"] == "invaliduid") {
                        echo "<p>Choose a proper username</p>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<p>Choose a proper email</p>";
                    } else if ($_GET["error"] == "passworddoesnotmatch") {
                        echo "<p>Something Does Not Match!</p>";
                    } else if ($_GET["error"] == "stmtfaild") {
                        echo "<p>Something Went Wrong, Try Again</p>";
                    } else if ($_GET["error"] == "usernametaken") {
                        echo "<p>Username Is Already Taken</p>";
                    } else if ($_GET["error"] == "none") {
                        echo "<p>You Have Signed Up!</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>