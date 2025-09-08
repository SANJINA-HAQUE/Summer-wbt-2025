<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../css/registration.css">
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = $usernameErr = $passwordErr = $conpasswordErr = $genderErr = $dateErr = "";
    $name = $email = $username = $password = $conpassword = $gender = $date = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $genderErr = "";
        } else {
            $gender = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }

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

        if (empty($_POST["conpassword"])) {
            $conpasswordErr = "Confirm Password is required";
        } else {
            $conpassword = test_input($_POST["conpassword"]);
            if ($password != $conpassword) {
                $conpasswordErr = "Password and Confirm Password must be same";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["date"])) {
            $genderErr = "";
        } else {
            $gender = test_input($_POST["date"]);
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
            <h2>Registration</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <span class="error"><?php echo $nameErr;?></span><br><br><hr>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"> i
                <span class="error"><?php echo $emailErr;?></span><br><br><hr>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <span class="error"><?php echo $usernameErr;?></span><br><br><hr>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $passwordErr;?></span><br><br><hr>

                <label for="conpassword">Confirm Password:</label>
                <input type="password" id="conpassword" name="conpassword">
                <span class="error"><?php echo $conpasswordErr;?></span><br><br><hr>

                <div class="gender">
                <h4>Gender</h4>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <span class="error"><?php echo $genderErr;?></span>
                <br><br>
                </div><hr>

                <div class="date">
                <h4>Date of Birth</h4>
                <input type="date" name="date" value="date">
                <span class="error"><?php echo $dateErr;?></span>
                <br><br>
                </div><hr>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
        </section>

        <footer>
            <p>Copyright &copy; 2017</p>
        </footer>
</body>

</html>