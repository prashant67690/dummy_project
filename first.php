<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $teacher=$_POST['teach'];

  if(!empty($teacher))
  {

    //save to database
    $query = "insert into teachers (teacher) values ('$teacher)";

    mysqli_query($con, $query);

    header("Location: second.php");
    die;
  }else
  {
    echo "Please enter some valid information!";
  }
}

 ?>
<!Doctype Html>
<Html>
<Head>
<Title>
Project Selection
</Title>

</Head>
<body style="  background-color:#77E4D4;">
  <center>
      <img src="partials/Capture1.PNG" alt="manipal jaipur icon" srcset="partials/Capture1.PNG 3x">
      <hr style="border-color:grey;
      width:30%;">
  <h1>  Welcome to Manipal University Jaipur major project allocation</h1> <br>
  </center>
<center>
  <h2 style="font-family:'Courier New', monospace;">Please Select your Preferred Faculty</h2>
</center>
<br>
<br>
<center>
  <div class="drop">

<form action="second.php" method="POST">
  <div class="input-group1">
<label style="font-size:60px;" name="teach">Faculty: </label>
<select style="font-size:40px">
<option value = "Mr Anurag Bhatnagar"> Mr Anurag Bhatnagar
</option>
<option value = "Dr. Pankaj Vyas"> Dr. Pankaj Vyas
</option>
<option value = "Dr. N.K Gupta"> Dr. N.K Gupta
</option>
<option value = "Dr. N.N Das"> Dr. N.N Das
</option>
</select>
</div>
<br>
<br>
<div class="input-group2">
<label style="font-size:60px;">Projects:</label>
<select style="font-size:30px">
<option value = "Mr Anurag Bhatnagar"> E-Polling System
</option>
<option value = "Dr. Pankaj Vyas"> Online Gate Pass
</option>
<option value = "Dr. N.K Gupta"> Student Database Management System
</option>
<option value = "Dr. N.N Das"> Room Booking System
</option>
</select>
</div>
<br><br>

<input  style="font-size:20px;"class="sumbit" type="submit" value="Submit">
<br>
<br>
<br>
</form>
</div>
<a href="logout.php"><input  style="font-size:20px;"class="sumbit" type="submit" value="logout"></a>
</center>
</body>
</Html>
