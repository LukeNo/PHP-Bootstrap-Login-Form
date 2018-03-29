<?php 

session_start();

if(!isset($_SESSION['log']))
{
    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<title>PHP Bootstrap Login Form</title>
</head>
<body>
   
    <nav class="nav navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="index.html">Genetic News</a>
        <!-- hamburger menu button shows on small devices only -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="main.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">What's New?</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Archives</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Join Us</a>
    
                </li>
                 <li class="nav-item">
                    <a href="logout.php" class="nav-link">Sign Out</a>
                </li>
            </ul>
        </div><!-- navbar-collapse -->
        </div><!-- container -->  
    </nav>
    
    <header>
       <div class="container">
           <div class="row">
                   <div class="col-md-6 offset-md-3" id="welcome">
                       <h1>Genetic News</h1>
                       <ul>
                           <li>Interested in genetic?</li>
                           <li>Wanna know what's new about DNA exploring, cloning etc?</li>
                           <li>Good news - our site is what You're looking for!</li>
                       </ul>
                       <h1><i class="fas fa-angle-double-down"></i></h1>
                   </div>
           </div>
       </div>
    </header>


  <!-- CONTENT -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur qui molestiae optio animi architecto, labore voluptatem dolor, excepturi vero doloribus quo quam reprehenderit aperiam temporibus eveniet consequuntur quidem ipsam ipsa.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id natus laboriosam earum, perferendis accusantium, magnam, perspiciatis officia nesciunt quibusdam velit odit exercitationem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptates minus tenetur debitis facere fugit quis necessitatibus non corporis atque nobis, soluta iusto laborum. Quos tenetur numquam accusantium, id voluptatibus doloribus ratione iure voluptatum natus at saepe soluta unde consequatur non!</p>
        </div>
        <div class="col-md-6">
            <img src="img/laboratory-2815641_1280.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
      </div>
    </div>
  </section>
  
  
<!-- FOOTER -->
  <section class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="p-5">
            <h1 class="display-4">Our Team</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ut perferendis nostrum, nulla facere quam modi eos vero magni consectetur.</p>
            <a href="#" class="btn btn-outline-light">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
