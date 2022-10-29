<?php

session_start();
include('config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Home</title>
    <?php include('links.php') ?> 
    <style>
        #product_nav{
            background-image: linear-gradient(to bottom, #10c764, #58d687, #84e4a8, #adf2c7, #d5ffe6);
        }
        #vegetable{
            /* background-color:#8AFF8A; */
            border: 2px solid #8AFF8A; 
            border-radius:20px;
        }
        #fruits{
            /* background-color:#FFD68A; */
            border: 2px solid #FFD68A;
            border-radius:20px;
        }
        #dairy{
            /* background-color:#B1D4E0; */
            border: 2px solid #B1D4E0;
            border-radius:20px;
        }
        #snacks{
            /* background-color:#FA8072; */
            border: 2px solid #FA8072;
            border-radius:20px;
        }
        #homecare{
            /* background-color:#FFB6C1; */
            border: 2px solid #FFB6C1; 
            border-radius:20px;
        }
        
       
    </style>
    
    
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <div class="container-fluid col">
            <a class="navbar-brand ps-3" href="#"><i class="fa-solid fa-shop"></i> LOGO </a>
            <a class="navbar-brand ps-3" href="#"><button class="border-light btn btn-success text-light fw-normal fs-5" type="button">Your Cart <i class="fa-solid fa-cart-shopping"></i> </button></a>
        </div>
        <div class="col">
        <form class="d-flex p-2">
            <input class="form-control me-2 " type="text" placeholder="Search for products...">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        </div>   
    </nav>

    <nav class="navbar navbar-expand-sm justify-content-center py-3" id="product_nav">
    <div class="fs-5 fw-normal">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item border border-1  rounded shadow me-2">
          <a class="nav-link text-dark " href="#"><i class="fa-solid fa-plus"></i> New Products</a>
        </li>
        <!-- <li class="nav-item dropdown border border-1 rounded shadow me-2">
          <a class="nav-link dropdown-toggle text-dark " href="#" role="button" data-bs-toggle="dropdown">Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Provisions</a></li>
            <li><a class="dropdown-item" href="#">Vegetables</a></li>
            <li><a class="dropdown-item" href="#">Fruits</a></li>
          </ul>
        </li> -->
        <li class="nav-item border border-1  rounded shadow me-2">
          <a class="nav-link text-dark " href="#"><i class="fa-regular fa-star"></i> Favorites</a>
        </li>
        <li class="nav-item border border-1  rounded shadow me-2">
          <a class="nav-link text-dark " href="#"><i class="fa-solid fa-check"></i> Track your order</a>
        </li>  
        <li class="nav-item border border-1 rounded shadow me-2">
          <a class="nav-link text-dark " href="#"><i class="fa-solid fa-phone"></i> Contact Us</a>
        </li>     
      </ul>
    </div>
    </div>
    </nav>

    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-1" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>   
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="./images/vegetable.jpeg" class="d-block w-auto mx-auto h-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
            <h5>Vegetables</h5>    
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="./images/fruits.jpeg" class="d-block w-auto mx-auto h-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
            <h5>Fruits</h5>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <br>

    <div class="container row mx-auto my-1 ">
        <div class="card col mx-3 shadow" id="vegetable"> 
                <h5 class="card-title text-center px-2 py-2">Vegetables</h5>
                <img src="./images/veggies.jpeg" alt="" class="w-50 py-3 text-center mx-auto">
        </div>
        <div class="card col mx-3 shadow" id="fruits"> 
                <h5 class="card-title text-center px-2 py-2">Fruits</h5>
                <img src="./images/fruit.png" alt="" class="w-50 py-3 text-center mx-auto">
        </div>
        <div class="card col mx-3 shadow" id="dairy"> 
                <h5 class="card-title text-center px-2 py-2">Dairy & Eggs</h5>
                <img src="./images/dairy.png" alt="" class="w-50 py-3 text-center mx-auto">
        </div>
        <div class="card col mx-3 shadow" id="snacks"> 
                <h5 class="card-title text-center px-2 py-2">Snacks</h5>
                <img src="./images/snacks.png" alt="" class="w-50 py-3 text-center mx-auto">
        </div>
        <div class="card col mx-3 shadow" id="homecare"> 
                <h5 class="card-title text-center px-2 py-2">Homecare</h5>
                <img src="./images/homeacre.png" alt="" class="w-50 py-3 text-center mx-auto">
        </div>
    </div>






    
</body>
</html>