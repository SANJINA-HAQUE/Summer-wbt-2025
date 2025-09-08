<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $usernameErr = $passwordErr = $rememberErr ="";
    $username = $password = $remember = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
                $usernameErr = "Only letters and white space allowed";
            } 
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z0-9+&@#\/%=~_|' ]*$/", $password)) {
                $passwordErr = "Password must contain at least one of the special characters (@, #, $, %)";
            }    
        }

        if (empty($_POST["remember"])) {
            $remember = "";
        } else {
            $remember = test_input($_POST["remember"]);
        }

        if ($usernameErr === "" && $passwordErr === "") {
            header("Location: dashboard.php");
            exit();
        }
    }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
        <header>
            <img src="../image/Xcompany.png" alt="Logo" style="width:150px;height:60px;">

            <nav>
                <a href="public_home.php">Home</a>
                | <a href="login.php">Login</a>
                | <a href="registration.php">Registration</a>
            </nav>
        </header>

        <section>
            <h2>Login</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <span class="error"><?php echo $usernameErr;?></span><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $passwordErr;?></span><br><br><hr>

                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
                <span class="error"><?php echo $rememberErr;?></span><br><br>

                <input type="submit" value="Submit">
                <a href="forgot_password.php">Forgot Password?</a>
            </form>
        </section>

        <footer>
            <p>Copyright &copy; 2017</p>
        </footer>
</body>

</html>