<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
	        margin: 0;
	        padding: 0;
	        display: flex;
            flex-direction: column;
	        justify-content: center;
	        align-items: center;
	        min-height: 100vh;
	        font-family: 'Jost', sans-serif;
	        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .form {
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            width: 300px;
            padding: 30px 25px;
            border: 1px solid #c71630;
            border-radius: 15px;
            background: linear-gradient(115deg, #212529, black);
            color: white;
            text-align: center;
        }
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0,0,0,1)!important;
        }
    </style>
</head>
<body>
<h1 style="text-align: center; color:white">User Dashboard</h1>
    <div class="form shadow-lg p-3 mb-5 bg-body rounded">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>