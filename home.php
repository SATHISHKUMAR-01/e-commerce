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
    <title>Home</title>
    <?php include('links.php') ?> 
    <style>
       
    </style>
    
    
</head>
<body>
    
</body>



</html>