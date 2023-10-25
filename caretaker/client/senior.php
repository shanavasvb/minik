<!doctype html>
<html lang="en">

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

    <title>General</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-navbar-top navbar-fixed-top bg-white">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="./img/Logo.png" height="68" alt="Docotor Finder">care
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
                            caretaker
                          </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="General.php">Senior Citizen</a>
                                <a class="dropdown-item" href="child.php">Child care</a>
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
    <div style="background-image: linear-gradient(to left,rgba(0,0,0,0.8),rgba(0,0,0,0)),url('./img/General.jpg');
        background-size: cover; 
        height:380px; padding-top: 150px; text-align: center;">

        <h1 style="font-size:55px; color:rgb(255, 255, 255); margin:10px; text-shadow: 2px 2px 8px #000000;">Senior citizen Caretakers</h1>
    </div>
    <!--Background section-->

    <!-- card -->

    <div class="container mt-4 d-flex justify-content-center p-5 ">
        <div class="row">
            <div class="col-md-4 P-2">
                <div class="cards">
                    <div class="first bg-white p-4 text-center"> <img src="./img/DF.jpg" class="img-fluid" align="center" style="height: auto;" />
                        <h4 class="text-center m-2"> Vandana Sharma</h4> <br/>
                        <p class="text-center m-2">Expirienced</p> <br/>
                        <table class="table table-hover">
                            <tr>
                                <td><b>Speciality:</b></td>
                                <td>Geriatrics</td>
                            </tr>
                            <tr>
                                <td><b>prefered location</b></td>
                                <td>kochi</td>
                            </tr>
                            <tr>
                                <td><b>Gender:</b></td>
                                <td>Female</td>
                            </tr>
                            <tr>
                                <td><b>Available:</b></td>
                                <td> 12PM to 12AM</td>
                            </tr>

                            <tr>
                                <td><b>Contact &#9742; </b></td>
                                <td> +91 8029888288</td>
                            </tr>
                            <tr>
                                <td><b>Adress: </b></td>
                                <td>house,thrissur , India</td>
                            </tr>
                        </table>
                        <button><a href="book.php">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 P-2">
                <div class="cards">
                    <div class=" second bg-white p-4 text-center"> <img src="./img/DM.jpg" class="img-fluid" align="center" style="height: auto;" />

                        <h4 class="text-center m-2">Sahil</h4> <br/>
                        <p class="text-center m-2">Fresher</p> <br/>
                        <table class="table table-hover">
                            <tr>
                                <td><b>Speciality:</b></td>
                                <td>Internal Medicine  </td>
                            </tr>
                            <tr>
                                <td><b>prefered location</b></td>
                                <td>Idukki</td>
                            </tr>
                            <tr>
                                <td><b>Gender:</b></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><b>Available:</b></td>
                                <td> 12PM to 12AM</td>
                            </tr>

                            <tr>
                                <td><b>Contact &#9742; </b></td>
                                <td> +91 9988908238</td>
                            </tr>
                            <tr>
                                <td><b>Adress: </b></td>
                                <td>Idukki, India</td>
                            </tr>
                        </table>
                         <button><a href="book.php">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 P-2">
                <div class="cards">
                    <div class=" third bg-white p-4 text-center"> <img src="./img/DM.jpg" class="img-fluid" align="center" style="height: auto;" />
                        <h4 class="text-center m-2">dev</h4> <br/>
                        <p class="text-center m-2">Expirienced</p> <br/>
                        <table class="table table-hover">
                            <tr>
                                <td><b>Speciality:</b></td>
                                <td>Hematology</td>
                            </tr>
                            <tr>
                                <td><b>prefered location</b></td>
                                <td>kochi</td>
                            </tr>
                            <tr>
                                <td><b>Gender:</b></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><b>Available:</b></td>
                                <td> 12PM to 12AM</td>
                            </tr>

                            <tr>
                                <td><b>Contact &#9742; </b></td>
                                <td> +91 9875898298</td>
                            </tr>
                            <tr>
                                <td><b>Adress: </b></td>
                                <td>kochi , India</td>
                            </tr>
                        </table>
                         <button><a href="book.php">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <hr/>
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">care</h5>

                    <p>platform for caretakers and for those who needs care in the society
                    </p>
                    <a href="" class="btn btn-primary">Book Now</a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Child Care</h5>

                                     <p>Protecting newborn childs and differntly abled childs with utmost care
                   </p>
                   <a href="" class="btn btn-primary">Book Now</a>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap');
    </style>

</body>

</html>

</html>