<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
    require('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
	        margin: 0;
	        padding: 0;
	        /* display: flex;
            flex-direction: column;
	        justify-content: center;
	        align-items: center; */
	        min-height: 100vh;
	        font-family: 'Jost', sans-serif;
	        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .container{
            width: fit-content;
            height: fit-content;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
	        margin: auto;
        }
        .form {
            width: fit-content;
            height: fit-content;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
	        margin: auto;
            /* margin: 50px auto; */
            display: flex;
            flex-direction: column;
            /* width: 300px; */
            /* padding: 30px 25px; */
            border: 1px solid #c71630;
            border-radius: 15px;
            background: linear-gradient(115deg, #212529, black);
            color: white;
            text-align: center;
        }
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0,0,0,1)!important;
        }
        .form-inline{
            display: flex;
        }
        .tble{
            width: fit-content;
            height: fit-content;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: x-large;
	        margin: auto;
            width: 80%;
        }
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><b>Greetings Card Generator (Admin Dashboard)</b></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a style="text-decoration: none; color: #dad9d8; font-size:large"  href="#">Hey, <?php echo $_SESSION['username']; ?></a>
                </div>   
                <div class="navbar-nav ms-5">
                <a style="text-decoration: none; color: #dad9d8; font-size:large" href="logout.php">Logout</a>
                </div>

            </div>
        </div>
    </nav>
    
    <!-- <div class="form">
	<table width=100% align="center">
	<tr>
    <th><h1 style="text-align: left; color:white">Admin Dashboard</h1></th>
	<th><h1 style="text-align: left; color:yellow">   Gratitude card Ganeretion   </h1></th>
       <th ><p>Hey,!         
        <a href="logout.php">Logout</a></p></th>
	</tr>
	</table>
    </div> -->


	
                <div class="tble">
                    <table class="table table-light table-hover table-bordered border-dark caption-top">
                        <caption>List of users</caption>
                        <thead class="table-dark">
                            <tr>
                                
                                <th scope="col">user_id</th>
                                <th scope="col">name</th>
                                <th scope="col">e-mail</th>
                                <th scope="col">phone no</th>
								<th scope="col">Card count</th> 
								<th scope="col" colspan="3" style="text-align: center;">Operetions</th>
								
                            </tr>
                        </thead>
                        <tbody class="customtable">
							<tr>
							<?php

								$sql = "SELECT * FROM user_registration";
								$result = $con->query($sql);

								if ($result->num_rows > 0) {
								  // output data of each row
								  while($row = $result->fetch_assoc()) {?>
								<td><?php echo $row["user_id"];?></td>
                                <td><?php echo $row["name"];?></td>
								<td><?php echo $row["e_mail"];?></td>
								<td><?php echo $row["phone_no"];?></td>
								<td>--</td>
								<td><a href="update.php?user_id=<?php echo $row["user_id"]; ?>"><button class="login-button" style="background-color: purple; color:white">update</button></a></td>
								<td> <select name="role">
								  <option value="admin">admin</option>
								  <option value="user">user</option>
								</select></td>
								<td><a href="card.php?user_id=<?php echo $row["user_id"]; ?>"><button class="login-button" style="background-color: purple; color:white">Show card</button></a></td>
								</tr>
								<?php  }
								} else {
								  echo "0 results";
								}
								$con->close();
								?> 
                        </tbody>
                    </table>
                </div>

    <!-- <div class="form shadow-lg p-3 mb-5 bg-body rounded">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now on admin dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div> -->
    
</body>
</html>