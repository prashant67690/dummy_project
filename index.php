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
         <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
             <div class="input-group">
             <p>
                 <label> UserName: </label>
                 <input type = "text" id ="user" name  = "user" />
             </p>
             </div>
               <div class="input-group">
             <p>
                 <label> Password: </label>
                 <input type = "password" id ="pass" name  = "pass" />
             </p>
             </div>
             <p>
                 <input type =  "submit" id = "btn" value = "Login" />
             </p>
         </form>
     </div>

     <script>
            function validation()
            {
                var id=document.f1.user.value;
                var ps=document.f1.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
        </script>
</body>
</html>
