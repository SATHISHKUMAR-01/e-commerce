<?php

session_start();
include('config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Fruits</title>
    <?php include('links.php') ?> 
    <style>
        #fruit-list{
             background-color: #FF9194;
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
    <h3 class="text-center text-secondary fs-1" > Fresh Fruits </h3>
    <br>

    <div class = "p-4 m-2" id="fruit-list"> 
    <div class="container" >
        <div class="row">

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem;">
            <div class="mx-auto p-2" style="width:50%">
            <img src="./images/fruits/apple.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Apple 1kg</h5>
                <p class="card-text fs-4 text-success">₹200 <span class="text-decoration-line-through text-danger">₹218</span></p>
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
            <img src="./images/fruits/orange.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Orange 1kg</h5>
                <p class="card-text fs-4 text-success">₹40 <span class="text-decoration-line-through text-danger">₹45</span></p>
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
            <img src="./images/fruits/guava.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Guava 1kg</h5>
                <p class="card-text fs-4 text-success">₹30 <span class="text-decoration-line-through text-danger">₹38</span></p>
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
            <img src="./images/fruits/pome.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Carrot 1kg</h5>
                <p class="card-text fs-4 text-success">₹140 <span class="text-decoration-line-through text-danger">₹158</span></p>
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
            <img src="./images/fruits/watermelon.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Watermelon 1kg</h5>
                <p class="card-text fs-4 text-success">₹27 <span class="text-decoration-line-through text-danger">₹25</span></p>
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
            <img src="./images/fruits/muskmelon.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Muskmelon 1kg</h5>
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
            <div class="mx-auto p-2" style="width:60%">
            <img src="./images/fruits/papaya.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-success text-center border"> Available </p>
                <h5 class="card-title">Papaya 1kg</h5>
                <p class="card-text fs-4 text-success">₹26 <span class="text-decoration-line-through text-danger">₹31</span></p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#" class="btn btn-success border border-dark text-center my-2">Buy Now</a>
                <a href="#" class="btn btn-warning  text-center my-2">Add to Cart</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow border-light rounded border-1" style="width: 18rem; height:25rem">
            <div class="mx-auto p-2" style="width:60%">
            <img src="./images/fruits/sweetlime.jpeg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body text-center">
                <p class="text-danger text-center border border-danger"> Unavailable </p>
                <h5 class="card-title">SweetLime 1kg</h5>
                <p class="card-text fs-4 text-success">₹70 <span class="text-decoration-line-through text-danger">₹64</span></p>
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