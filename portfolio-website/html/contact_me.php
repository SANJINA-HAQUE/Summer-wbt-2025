<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Me</title>
    <link rel = "stylesheet" href = "../css/stylecontactme.css"/>
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>
    <nav class = "navbar">
        <a href = "../index.html">Home</a>
        <a href = "education.html">Education</a>
        <a href = "experience.html">Experience</a>
        <a href = "projects.html">Projects</a>
        <a href = "contact me.html">Contact Me</a>
    </nav>

    <?php
    $firstnameErr = $lastnameErr = $emailErr = $reasonErr = $servicesErr = "";
    $firstname = $lastname = $email = $date = $reason = $services = $job = $position = "";

    function test_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
            $firstnameErr = "First Name is required";
        } else {
            $firstname = test_input($_POST["firstname"]);
        }

        if (empty($_POST["lastname"])) {
            $lastnameErr = "Last Name is required";
        } else {
            $lastname = test_input($_POST["lastname"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        $date = !empty($_POST["date"]) ? test_input($_POST["date"]) : "";

        if (empty($_POST["reason"])) {
            $reasonErr = "Reason is required";
        } else {
            $reason = $_POST["reason"];
        }

        if (empty($_POST["services"])) {
            $servicesErr = "Services is required";
        } else {
            $services = test_input($_POST["services"]);
        }

        $job = !empty($_POST["job"]) ? test_input($_POST["job"]) : "";
        $position = !empty($_POST["position"]) ? test_input($_POST["position"]) : "";
    }
    ?>

    <div class = "contact">
        <h2>Contact Information</h2><hr>

        <!--<div class="left-side">
            <p>Address: Uttara Sector-16, House-26, Dhaka - 1230, Bangladesh</p>
            <p>Email: sanjinahaquesanju@gmail.com</p>
            <p>Phone: +880 1925864836</p>
            <p>Whatsapp: +8801908650020</p>
        </div>

        <div class="divider"></div>-->
        
        <div class="right-side">
        <!--<form method="get" action="login.html">-->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            <h3>Fill up the Form</h3>

            <label>First name:</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <br><br>

            <label>Last name:</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <span class="error">* <?php echo $lastnameErr; ?></span>
            <br><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>

            <label>Consulting Date:</label><br>
            <input type="date" name="date" value="<?php echo $date; ?>">
            <br><br>

            <label>Reason for contacting:</label><br>
            <input type="checkbox" name="reason" value="project" <?php if ($reason == "project") echo "checked"; ?>> Project<br>
            <input type="checkbox" name="reason" value="thesis" <?php if ($reason == "thesis") echo "checked"; ?>> Thesis<br>
            <input type="checkbox" name="reason" value="offer" <?php if ($reason == "offer") echo "checked"; ?>> Offer<br>
            <input type="checkbox" name="reason" value="meet & greet" <?php if ($reason == "meet & greet") echo "checked"; ?>> Meet & Greet
            <span class="error">* <?php echo $reasonErr; ?></span>
            <br><br>

            <label>Services:</label><br>
            <input type="radio" name="services" value="seo" <?php if ($services == "seo") echo "checked"; ?>> SEO<br>
            <input type="radio" name="services" value="web development" <?php if ($services == "web development") echo "checked"; ?>> Web Development<br>
            <input type="radio" name="services" value="data analysis" <?php if ($services == "data analysis") echo "checked"; ?>> Data Analysis<br>
            <input type="radio" name="services" value="graphics design" <?php if ($services == "graphics design") echo "checked"; ?>> Graphics Design<br>
            <input type="radio" name="services" value="lead generation" <?php if ($services == "lead generation") echo "checked"; ?>> Lead Generation
            <span class="error">* <?php echo $servicesErr; ?></span>
            <br><br>

            <label>Are you contacting for providing job?:</label>
            <select name="job">
                <option value="enter" <?php if ($job == "enter") echo "selected"; ?>>Enter</option>
                <option value="yes" <?php if ($job == "yes") echo "selected"; ?>>Yes</option>
                <option value="no" <?php if ($job == "no") echo "selected"; ?>>No</option>
            </select>
            <br><br>

            <label>Your position in your company:</label>
            <select name="position">
                <option value="enter" <?php if ($position == "enter") echo "selected"; ?>>Enter</option>
                <option value="ceo" <?php if ($position == "ceo") echo "selected"; ?>>CEO</option>
                <option value="hr" <?php if ($position == "hr") echo "selected"; ?>>HR</option>
                <option value="employee" <?php if ($position == "employee") echo "selected"; ?>>Employee</option>
            </select>
            <br><br>

            <div class="submit">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

    <!--<?php
        echo "<h2>Your Informations:</h2>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $date;
        echo "<br>";
        echo $reason;
        echo "<br>";
        echo $services;
        echo "<br>";
        echo $job;
        echo "<br>";
        echo $position;
    ?>-->

        <div style="clear: both;"></div>
    </div>
</body>

<footer>
    
    <div class = "social_links">

        <p><img src = "../image/linkedin icon.png" width = "15px"; height = "15px"><a href = "https://www.linkedin.com/in/sanjina-haque/">
            Linkedin 
        </a></p>

        <p><img src = "../image/github icon.png" width = "22px"; height = "14px"><a href="https://github.com/SANJINA-HAQUE">
            Github 
        </a></p>

        <p><img src = "../image/fb icon.jpeg" width = "15px"; height = "15px"><a href="https://www.facebook.com/sanjina.sanju.90/">
            Facebook 
        </a></p>

        <p>&copy; 2025 Sanjina_Haque. All rights reserved.</p>

    </div>

</footer>

</html>