<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0,0,0,1)!important;
        }
    </style>
</head>
<body>
<?php include 'login_css.php'?>
<?php
    require('dbcon.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        // $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        // $username = mysqli_real_escape_string($con, $username);
        $name = stripslashes($_REQUEST['name']);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `user_registration` (name, phone_no, e_mail, password)
                     VALUES ('$name', '$phone', '$email', '" . md5($password) . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3 style='color: white;'>You are registered successfully.</h3><br/>
                  <p style='color: white;' class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3 style='color: white;'>Required fields are missing.</h3><br/>
                  <p style='color: white;' class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: teal;">
        <div class="container-fluid" style="text-align: center;">
            <a href="#" class="navbar-brand"><b>Greetings Card Generator</b></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="./index.php" class="nav-item nav-link active">Home</a>
                </div>
                

            </div>
        </div>
    </nav>


    <div class="lgin">
    <h1 class="login-title" style="color: white;">Register</h1>
    <form class="form shadow-lg p-3 mb-5 bg-body rounded" action='' method="POST">
        <!-- <input type="text" class="login-input" name="username" placeholder="Username" required /> -->
        <input type="text" class="login-input" name="name" placeholder="Name" required>
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="number" class="login-input" name="phone" placeholder="Phone number" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Already registered? Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>