<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `user_registration` WHERE `e_mail`='$email' AND `password`='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $query = "SELECT * FROM `user_registration` WHERE `e_mail`='$email' AND `password`='" . md5($password) . "' AND `role`='user'";
            $result = mysqli_query($con, $query);
            $rows = mysqli_num_rows($result);
            
            if ($rows == 1){
                $name = mysqli_query($con, "SELECT `name` FROM `user_registration` WHERE `e_mail`='$email' AND `password`='" . md5($password) . "' AND `role`='user'");
                $result = mysqli_fetch_array($name);
                $_SESSION['username'] = $result['name'];
                // Redirect to user dashboard page
                header("Location: user_dashboard.php");
            } else{
                $name = mysqli_query($con, "SELECT `name` FROM `user_registration` WHERE `e_mail`='$email' AND `password`='" . md5($password) . "'");
                $result = mysqli_fetch_array($name);
                $_SESSION['username'] = $result['name'];
                // Redirect to user dashboard page
                header("Location: user_dashboard.php");
                $_SESSION['username'] = $result['name'];
                // Redirect to user dashboard page
                header("Location: admin_dashboard.php");
            }
            
        } else {
            echo "<div class='form'>
                  <h3 style='color: white;'>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="lgin">
    <h1 class="login-title" style="color: white;">Login</h1>
    <form class="form shadow-lg p-3 mb-5 bg-body rounded" method="post" name="login">
        <input type="email" class="login-input" name="email" placeholder="Email" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register.php">For New Registration Click Here</a></p>
    </form>
    </div>
    
<?php
    }
?>
</body>
</html>