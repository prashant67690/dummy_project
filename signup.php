<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$registrationno=$_POST['user1'];
		$user_name = $_POST['user2'];
		$password = $_POST['pass'];
		$email = $_POST['user'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users (registrationno,username,password,email) values ('$registrationno','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>

<link rel="stylesheet" href="style1.css">
</head>
<body>
  <div id = "frm">
         <h1>Signup</h1>
         <form name="f1"  method = "POST">
           <div class="input-group">
           <p>
               <label> Registration no </label>
               <input type = "number" id ="user" name  = "user1" >
           </p>
           </div>
             <div class="input-group">
             <p>
                 <label> UserName: </label>
                 <input type = "text" id ="user" name  = "user2" >
             </p>
             </div>
               <div class="input-group">
             <p>
                 <label> Password: </label>
                 <input type = "password" id ="pass" name  = "pass" >
             </p>
             </div>
           <div class="input-group">
         <p>
             <label> Enter email </label>
              <input type="email" name="user" id="inputEmail4">
         </p>
         </div>
             <p>
                 <input type =  "submit" id = "btn" value = "signup" >
             </p>
         </form>
     </div>

</body>
</html>
