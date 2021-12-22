<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>update</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0,0,0,1)!important;
        }
		h5 {
			color : white;
		}
    </style>
</head>
<body>
<?php include 'login_css.php'?>
<?php
    require('dbcon.php');
	$id1=$_GET["user_id"];
	$que =mysqli_query($con,"select name, phone_no, e_mail from `user_registration` where user_id='$id1'");
	$data1= mysqli_fetch_array($que);
    if (isset($_post['update'])) {
        // removes backslashes
        // $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        // $username = mysqli_real_escape_string($con, $username);
        $name = $post_['name'];
        $email= $post_['email'];
        $phone= $post_['phone'];
        $query =mysqli_query($con,"update user_registration set name='$name', e_mail='$email', phone_no='$phone' where user_id ='$id1'"); 
        if ($query) {
            echo "<div class='form'>
                  <h3 style='color: white;'>You are updateed successfully.</h3><br/>
                  <p style='color: white;' class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3 style='color: white;'>Required fields are missing.</h3><br/>
                  <p style='color: white;' class='link'>Click here to <a href='update.php'>registration</a> again.</p>
                  </div>";
        }
    }
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
    <h1 class="login-title" style="color: white;">update</h1>
    <form class="form shadow-lg p-3 mb-5 bg-body rounded" action='' method="POST">
        <!-- <input type="text" class="login-input" name="username" placeholder="Username" required /> -->
		<h5>for user_id : <?php echo $id1;?></h3>
        <h5>Name     :<input type="text" class="login-input" name="name" value="<?php echo $data1['name'];?>"></h5>
        <h5>e-mail   :</h5><input type="email" class="login-input" name="email" value="<?php echo $data1['e_mail'];?>">
        <h5>Phone no :</h5><input type="number" class="login-input" name="phone" value="<?php echo $data1['phone_no'];?>">
        <input type="submit" name="update" value="update" class="login-button">
    </form>
<?php
?>
</body>
</html>