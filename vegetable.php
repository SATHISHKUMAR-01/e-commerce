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
        #veg-list{
             background-color: #8AFF8A;
             border-radius:25px;
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
    <br>
    <h3 class="text-center text-secondary fs-1" > Fresh Vegetables </h3>
    <br>

    <div class = "p-4 m-2" id="veg-list"> 
    <div class="container" >
        <div class="row">

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/onion.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Onion 1kg</h5>
                <p class="card-text fs-4 text-success">₹20 <span class="text-decoration-line-through text-danger">₹18</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/tomato.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Tomato 1kg</h5>
                <p class="card-text fs-4 text-success">₹15 <span class="text-decoration-line-through text-danger">₹20</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/potato.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Potato 1kg</h5>
                <p class="card-text fs-4 text-success">₹25 <span class="text-decoration-line-through text-danger">₹38</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/carrot.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Pomegranate 1kg</h5>
                <p class="card-text fs-4 text-success">₹40 <span class="text-decoration-line-through text-danger">₹58</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>
            
        

        </div>

        <br>

        <div class="row">

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/beetroot.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Beetroot 1kg</h5>
                <p class="card-text fs-4 text-success">₹26 <span class="text-decoration-line-through text-danger">₹18</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/vegetables/brinjal.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Brinjal 1kg</h5>
                <p class="card-text fs-4 text-success">₹18 <span class="text-decoration-line-through text-danger">₹20</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:70%">
            <img src="./images/vegetables/beans.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Beans 1kg</h5>
                <p class="card-text fs-4 text-success">₹29 <span class="text-decoration-line-through text-danger">₹32</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:70%">
            <img src="./images/vegetables/bitter.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-danger text-center border border-danger"> Unavailable </p>
                <h5 class="card-title">Bitter Guard 1kg</h5>
                <p class="card-text fs-4 text-success">₹20 <span class="text-decoration-line-through text-danger">₹28</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>
        
            
        

        </div>

    </div>
    </div>
   <br>
   <br>
</body>
</html>