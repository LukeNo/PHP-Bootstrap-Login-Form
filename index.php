<?php 

session_start();

//create empty variable log
$log = '';
//set log as session variable
if(isset($_SESSION['log']))
{
    $log = $_SESSION['log'];
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
                    <a href="#" class="nav-link">About Us</a>
                </li>
            </ul>
        </div><!-- navbar-collapse -->
        </div><!-- container -->  
    </nav>
    
    <header>
       
       <div class="container">
           <div class="row">
               <!-- d-none d-lg-block - shown on large screens only, invisible on small ones --> 
                   <div class="col-lg-8 d-none d-lg-block" id="welcome">
                       <h1>Genetic News</h1>
                       <ul>
                           <li>Interested in genetic?</li>
                           <li>Wanna know what's new about DNA exploring, cloning etc?</li>
                           <li>Good news - our site is what You're looking for!</li>
                       </ul>
                       <h2>Sign in to get access!</h2>
                   </div><!-- col-lg-8 -->
                          
                    <div class="col-lg-4" id="form">
                           <div class="card bg-primary text-center card-form">
                               <div class="card-body">
                                   <h3>Sign In</h3>
                                   <p><?php
                                            if($log == true)
                                            {
                                                header('Location: main.php');
                                            }
                                            else
                                            {
                                                echo "To get access to this page sign in first";
                                            }
                                      ?></p>
                                   <br>
                                   <form action="login.php" method="post">
                                       <div class="form-group">
                                           <input type="text" name="login" class="form-control form-control-lg" placeholder="Username">
                                       </div>
                                       <div class="form-group">
                                           <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                                       </div>
                                       <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                                   </form><!-- form -->
                               </div>
                           </div>
                        </div><!-- col-lg-4 -->
           </div>
       </div>
    </header>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
