<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    $myname = $_SESSION['myname'];
    if(!isset($myname)){
        header('location:./caretaker.php');
    }else{
        include '../connection/connect.php';
        $_SESSION['logged'] = true;
        $myemail = $_SESSION['myemail'];
        $myphone = $_SESSION['myphone'];
        $myplace = $_SESSION['myplace'];
        $mydob = $_SESSION['mydob'];
        $myphone = $_SESSION['myphone'];
    
      
        
    }
    ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D-Meet</title>
  <link rel="stylesheet" href="CSS/daccount.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<header id="home">
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="font-family: 'Poppins', sans-serif;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-capitalize" href="#">
      <img src="IMG/logo2.png" width="40" height="40" alt="" loading="lazy" class="mr-2">
      Care</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#home"> <i class="fa fa-home mr-1" aria-hidden="true"></i>Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php"><i class="fa fa-medkit mr-1" aria-hidden="true"></i> Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dprofile.php"> <i class="fa fa-user mr-1" aria-hidden="true"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dcontact.php"><i class="fa fa-phone-square mr-1" aria-hidden="true"></i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dfaq.php"><i class="fa fa-question-circle mr-1" aria-hidden="true"></i> FAQ</a>
        </li>
        <button type="button" class="btn btn-warning ml-4"><i class="fa fa-sign-out"></i><a href="./logout.php">Logout</a></button>
      </ul>
    </div>
  </nav>
  <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <img
              src="https://source.unsplash.com/1600x800/?Nurse"
              alt="Los Angeles"
              width="1600"
              height="610"
            />
            <h2>Our Branches</h2>

            <div class="carousel-caption">
              <h3>Thrissur</h3>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x800/?Technology,Doctor"
            alt="Chicago" width="1600" height=610" />
            <div class="carousel-caption">
              <h3>Kochi</h3>
             
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://source.unsplash.com/1600x800/?Technology"
              alt="New York"
              width="1600"
              height="610"
            />
            <div class="carousel-caption">
              <h3>Idukki</h3>
              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

</header>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>