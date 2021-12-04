<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user'];
		$password = $_POST['pass'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] ===$password)
					{

						$_SESSION['registrationno '] = $user_data['registrationno'];
						header("Location: first.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
</head>
<body>
  <div id = "frm">
         <h1>Login</h1>
         <form name="f1"  method = "POST">
             <div class="input-group">
             <p>
                 <label> UserName: </label>
                 <input type = "text" id ="user" name  = "user" >
             </p>
             </div>
               <div class="input-group">
             <p>
                 <label> Password: </label>
                 <input type = "password" id ="pass" name  = "pass" >
             </p>
             </div>
             <p>
                 <input type =  "submit" id = "btn" value = "Login" >
             </p>
						 <a href="signup.php">Click to Signup</a><br><br>
         </form>
     </div>


</body>
</html>
