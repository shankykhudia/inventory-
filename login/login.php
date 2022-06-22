<?php
session_start();
  
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
 //Something was posted
 $user_name = $_POST['user_name'];
 $password = $_POST['password'];  

 if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
 {
    
     //read from database
     $query = " select * from users where user_name = '$user_name' limit 1";

    $result = mysqli_query($con , $query);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0 )
        {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {    
                $_SESSION['user_id'] = $user_data ['user_id'];
                header("Location: index.php");
                die; 
            }
        }
    }
    echo "wrong username or password!";
 }else
 {
      echo "wrong username or password!";
 }
}

?>
<!-- <!DOCTYPE html>

<html lang="en">
<head>

   
    <link rel="stylesheet" href="style.php" media="screen">
      <title>Login Form</title>
</head>
<body>
<div id="box">
        <form method="post">
            <div> Login</div>

            <input id="text" type="text" name="user_name" class="form-control" ><br>

            <input id="text" type="password" name="password" class="form-control" ><br>

            <input id="button" type="submit" value="Login"><br>

            <a href="signup.php">Click to Signup<br>
     
        </form>

      </div>  
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="container">
        
        <div class="section1"> <!---Form section-->
            <h1>Login</h1>
            <h5>Welcome to  - Pinaack-Solutions</h5>
            <form method="post">
            <div class="formGroup">
                <p><label for="username">User Name</label></p>
                <input type="text" id="user_name" name="user_name" autocomplete="off" >
            </div>
          
            <div class="formGroup">
                <p><label for="password">Password</label></p>
                <input type="password" id="password" name="password" autocomplete="off" >
            </div>
            <button type="submit" id="btn" value="Login">Login</button>
            <p>Not a register user? <a href="signup.php">Signup</a></p>
          </form>
        </div>

        <div class="section2"> <!---image section-->
         
         <img src="Pinaack-Solutions.png" alt="Pinaack-Solutions" width="150" height="70">
        </div>
    </div>
    
</body>
</html>