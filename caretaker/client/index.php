<!doctype html>
<html lang="en">

<?php
    session_start();
    $myname = $_SESSION['myname'];
    if(!isset($myname)){
        header('location:../caretaker1/patient.php');
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

    <link rel="stylesheet" href="css/styles.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Care</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-navbar-top navbar-fixed-top bg-white">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="./img/Logo.png" height="68" alt="Docotor Finder">Care
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Caretakers
                          </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="senior.php">Senior-care</a>
                                <a class="dropdown-item" href="child.php">Child-care</a>
                                <a class="dropdown-item" href="physch.php">Physchologist</a>
                                
                                <a class="dropdown-item" href="Emergency.php">Emergency</a>


                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Emergency.php">Emergency Helpline</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="book.php">
                                <button class="btn btn-outline-info">Book Appoinment</button></a>
                        </li>

                    </ul>
                    </div>

                </div>
            </div>
    </nav>

    </section>


    <!--Background section-->
    <div style="background-image: linear-gradient(to left,rgba(0,0,0,0.8),rgba(0,0,0,0)),url('./img/bimg.jpg');
        background-size: cover; 
        height:380px; padding-top: 150px; text-align: center;">

        <h1 style="font-size:55px; color:rgb(255, 240, 157); margin:10px; text-shadow: 2px 2px 8px #000000;">Heath Care</h1>
        <p style="font-size:30px; color: rgb(255, 255, 255);"><em>We Cares You !!</em></p>
    </div>
    <!--Background section-->

    <!-- start card -->
    <h1 class="my-5">
        <span class="fancy fancy--underline" style="font-size:40px;">CareTakers</span>
    </h1>

    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css " rel="stylesheet ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4 col-xl-4 ">
                <div class="card bg-c-blue order-card ">
                    <div class="card-block ">
                        <h2 class="text-right "><i class="fa fa-heartbeat f-left " style="font-size:38px; "></i><span>&nbsp;Senior</span></h2>
                        <p class="m-b-0 ">Senior citizen<span class="f-right ">351</span></p>
                        <a href="senior.php"><button class="btn btn-outline-light ">Search Caretakers</button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-4 ">
                <div class="card bg-c-green order-card ">
                    <div class="card-block ">
                        <h2 class="text-right "><i class="fa fa-medkit f-left " style="font-size:38px; "></i><span>&nbsp;Child Care</span></h2>
                        <p class="m-b-0 ">Child caretaker<span class="f-right ">500</span></p>
                        <a href="child.php"><button class="btn btn-outline-light ">Search Caretakers</button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-4 ">
                <div class="card bg-c-yellow order-card ">
                    <div class="card-block ">
                        <h2 class="text-right "><i class="fa fa-stethoscope f-left " style="font-size:38px; "></i><span>&nbsp;Physchologist</span></h2>
                        <p class="m-b-0 ">Physchologist<span class="f-right ">286</span></p>
                        <a href="physch.php"><button class="btn btn-outline-light ">Search Caretaker</button></a>
                    </div>
                </div>
            </div>


      
    <!-- end card -->

    <!-- Helpline Code -->

    <h1 class="my-5">
        <span class="fancy fancy--underline" style="font-size:40px;">Helpline Code</span>
    </h1>

    <div class="bg-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <h2>Emergency Helpline Code</h2>
                    <p class="lead text-muted mb-0">Find any Country Emergency code
                    </p>
                    <a href="Emergency.php"><button class="btn btn-warning">Emergency Helpline Code</button></a>
                </div>
                <div class="col-md-6"><img src="./img/Emergency-PNG-Pic.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>




    <!-- footer -->
    <hr/>
    <footer class="bg-light text-center text-lg-start ">
        
        <div class="container p-4 ">
            
            <div class="row ">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 ">
                    <h5 class="text-uppercase ">Care</h5>

                    <p>
platform for caretakers and for those who needs care in the society  </p>
<a href="" class="btn btn-primary">Book Now</a>
</p>
                </div>
               
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 ">
                    <h5 class="text-uppercase ">Child Care</h5>

                    <p>
                        Protecting newborn childs and differntly abled childs with utmost care
                    </p>                   <a href="" class="btn btn-primary">Book Now</a>

                    
                </div>
                
            </div>
         
        </div>
        

    </footer>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap');
    </style>

</body>

</html>

</html>

</html>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap');
</style>

</body>

</html>

</html>

</html>