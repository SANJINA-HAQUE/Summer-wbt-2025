<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/forgot_password.css">
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $emailErr = "";
    $email = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
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
            <h3>FORGOT PASSWORD</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="email">Enter Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>">
                <span class="error"><?php echo $emailErr;?></span>
                <br><br><hr>

                <input type="submit" value="Submit">
            </form>
        </section>

        <footer>
            <p>Copyright &copy; 2017</p>
        </footer>
</body>

</html>