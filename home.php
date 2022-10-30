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
        #vege-carousel{
            background-image: url('./images/vegetable.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        #fruit-carousel{
            background-image: url('./images/fruits.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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
        <div class="carousel-item active" data-bs-interval="10000" id="vege-carousel">
        <img src="./images/vegetable.jpeg" class="d-block w-auto mx-auto h-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light ">
            <h5 class="fw-bolder fs-1" >15% Offer on Vegetables</h5>    
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000" id="fruit-carousel">
        <img src="./images/fruits.jpeg" class="d-block w-auto mx-auto h-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
            <h5 class="fw-bolder fs-1 ">20% Offer on Fruits</h5>
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
    <h4 class="text-center container text-secondary fs-3"> Shop By Categories</h4>
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

    <br><br>
    <h3 class="text-center text-secondary fs-1"> Today Deals</h3>
    <br>

    <div class="container row mx-auto my-1">
        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="w-75 mx-auto">
            <img src="./images/deals/fantasy.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Britannia Dark Fantasy 150gm</h5>
                <p class="card-text fs-3 text-success">₹50 <span class="text-decoration-line-through text-danger">₹100</span></p>
                <a href="#" class="btn btn-warning border border-dark text-center position-absolute bottom-0 start-50 translate-middle-x mb-3">Add to Cart</a>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="w-75 mx-auto">
            <img src="./images/deals/dhal.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Udhaiyam Thoor Dhal 2kg</h5>
                <p class="card-text fs-3 text-success">₹150 <span class="text-decoration-line-through text-danger">₹250</span></p>
                <a href="#" class="btn btn-warning border border-dark text-center position-absolute bottom-0 start-50 translate-middle-x mb-3">Add to Cart</a>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="w-75 mx-auto">
            <img src="./images/deals/chocolate.jpeg" class="card-img-top img-fluid"  alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Diary Milk Crackles 60gm (Buy 2 + Get 1)</h5>
                <p class="card-text fs-3 text-success">₹60 <span class="text-decoration-line-through text-danger">₹75</span></p>
                <a href="#" class="btn btn-warning border border-dark text-center position-absolute  bottom-0 start-50 translate-middle-x mb-3">Add to Cart</a>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="w-75 mx-auto">
            <img src="./images/deals/oil.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Fortune Cooking Oil 5L (Family Saving Offer) </h5>
                <p class="card-text fs-3 text-success">₹300 <span class="text-decoration-line-through text-danger">₹450</span></p>
                <a href="#" class="btn btn-warning border border-dark text-center position-absolute bottom-0 start-50 translate-middle-x mb-3">Add to Cart</a>
            </div>
        </div>
        </div>
        

    </div>

    <br><br>






    
</body>
</html>