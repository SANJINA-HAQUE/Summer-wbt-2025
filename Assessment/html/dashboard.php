<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Home</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <!--<style>
        .error{
            color: #FF0000;
        }
    </style>-->
</head>

<body>
    <header>
        <img src="../image/Xcompany.png" alt="Logo" style="width:150px;height:60px;">

        <nav>
            <p>Logged in as<a href="view_profile.php">Bob</a>
            | <a href="logout.php">Logout</a></p>
        </nav>
    </header>

    <div class="sidebar">
        <h3>Account</h3><hr>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_profile_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <h3>Welcome Bob</h3>
    </main>

    <footer>
        <p>Copyright &copy; 2017</p>
    </footer>
</body>

</html>