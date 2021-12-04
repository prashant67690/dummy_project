<?php

function check_login($con)
{

	if(isset($_SESSION['registrationno ']))
	{

		$id = $_SESSION['registrationno '];
		$query = "select * from users where registrationno  = '$registrationno ' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$registrationno = mysqli_fetch_assoc($result);
			return $registrationno;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
