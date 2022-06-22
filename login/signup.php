 <?php
 session_start();
  
   include("connection.php");
   include("function.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password']; 
    // $password = password_hash($password, PASSWORD_DEFAULT); 

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
       
        //save to database
        $user_id = random_num(20);
        $query = " insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password') ";
   
        mysqli_query($con , $query);

       header("Location: login.php");
       die;
    }else
    {
         echo "Please enter some valid information!";
    }
  }

?>
<!-- <!DOCTYPE html>

<html lang="en">
<head>
      <title>Registration Form</title>
</head>
<body>
<div id="box">
        <form method="post">
            <div> Signup</div>

            <input id="text" type="text" name="user_name" class="form-control" ><br>

            <input id="text" type="password" name="password" class="form-control" ><br>

            <input id="button" type="submit" value="Signup"><br>

            <a href="login.php">Click to Login<br>
     
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

    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="section1"> <!---Form section-->
            <h1>Sign Up</h1>
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
            <button type="submit" id="btn">Sign Up Now</button>
            <p>Already a member? <a href="login.php">Log in</a></p>
            </form>
        </div>

        <div class="section2"> <!---image section-->
         
         <img src="Pinaack-Solutions.png" alt="Pinaack-Solutions" width="150" height="70">
        </div>
    </div>
    
</body>
</html>


    
  