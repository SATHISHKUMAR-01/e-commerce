<?php

   $conn = mysqli_connect('localhost','esp32','password','ecommerce');
   if(mysqli_connect_errno()){
       echo 'Connection_error : '.mysqli_connect_error();
   }

?>