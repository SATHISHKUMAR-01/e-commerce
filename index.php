<?php

session_start();
include('config/connect.php');


/*
$name = $email =  $password = ' ';
if (isset($_POST['login'])) {

    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    
    $query    = "SELECT username FROM login WHERE email='$email' AND  password='$password'"; 
    $result   = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
  
    $name = $result->fetch_array()['username'];

    if ($rows == 1) {
        $_SESSION['name'] = $name; 
        $_SESSION['email'] = $email;
        header("Location: home.php");
    } 
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Login</title>
    <?php include('links.php') ?> 
    <style>
        #login_card{
            border-radius:50px;
            width: 450px;
            display:none;
        }
        #login_body{
            background-image: radial-gradient(circle, #95e976, #9aec84, #9fef90, #a5f29d, #acf5a9);
        }
        #topic,#topic1,#topic2,#topic3,#topic4,#topic5,#topic6,#topic7,#topic8,#topic9,#topic10{
            font-size:72px;
            color:white;
            text-shadow: 5px 5px 10px darkred;
            display:none;
        }
    </style>
    <script>
         $(window).ready(function(){
            $("#login_card").fadeIn(3000);
            $("#topic").slideDown(1000);
            $("#topic1").slideDown(1250);
            $("#topic2").slideDown(1500);
            $("#topic3").slideDown(1750);
            $("#topic4").slideDown(1900);
            $("#topic5").slideDown(2000);
            $("#topic6").slideDown(1900);
            $("#topic7").slideDown(1750);
            $("#topic8").slideDown(1500);
            $("#topic9").slideDown(1250);
            $("#topic10").slideDown(1000);

         });

    </script>
    
</head>
<body id="login_body">
    <div class="container">
       
        <h1 class="text-center pt-5"> 
            <span id="topic">S</span>
            <span id="topic1">U</span>
            <span id="topic2">P</span>
            <span id="topic3">E</span>
            <span id="topic4">R</span>
            <span id="topic5">M</span>
            <span id="topic6">A</span>
            <span id="topic7">R</span>
            <span id="topic8">K</span>
            <span id="topic9">E</span>
            <span id="topic10">T</span>
        </h1>
        <br>

        <div class="card  mx-auto my-3 p-5 border-success border-3 shadow" id="login_card">
            
            <h1 class="fs-1 text-center text-secondary">Let's Shop <i class="fa-solid fa-cart-shopping"></i> </h1> 
            <br><br>
            
            <form action="" method="POST" class="m-2">
               
                <div class="mb-3">
                    <label for="email" class="form-label"> <i class="fa-solid fa-envelope"></i> Email: </label>
                    <input type="email" class="form-control shadow border-1 border-success" id="email" name="email" placeholder="example@gmail.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> <i class="fa-solid fa-lock"></i> Password: </label>
                    <input type="password" class="form-control shadow border-1 border-success" id="password" name="password" required>
                </div>

                
                <div class="pt-3  text-center  w-100">
                    <input type="submit" value="Enter" id="login" name="login" class="btn btn-light btn-outline-success shadow-sm">
                </div>

                <div class="pt-3 pb-1 text-center  w-100">
                    <a href="index.php">New User? Create a Account !!!</a>
                </div>
            </form>

        </div>
    </div>
    
   
</body>



</html>