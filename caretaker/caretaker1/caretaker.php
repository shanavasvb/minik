<!DOCTYPE html>
<html lang="en">

<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../connection/connect.php';

  $email = $_POST['email'];
  $pass = $_POST['password'];


$sql = "select * from `caretaker` where email = '$email' and password = '$pass'";

  $result = mysqli_query($con, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);

    if ($num > 0) {
      $login = 1;
      foreach ($result as $row) {
        echo " welcome caretaker";
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['myname'] = $row['name'];
        $_SESSION['myemail'] = $row['email'];
        $_SESSION['myphone'] = $row['phone'];
        $_SESSION['myplace'] = $row['place'];
        $_SESSION['mydob'] = $row['dob'];
        header('location:./daccount.php');

      }
    } else {
      $invalid = 1;
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid Credentials</strong> 
              </div>';

    }
  } else {
    echo 'no result';
  }
}
?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor</title>
    <link rel="stylesheet" type="text/css" href="CSS/doctor.css" />
    <script type="text/javascript" src="JS/doctor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    


  </head>
  
  <body class="bg-dark">
    <header>
      <div class="container">
        <p class="text-center text-light mt-3 mb-3 display-4" style="font-family: 'Poppins', sans-serif;">Caretaker Login</p>
      </div>
      </header>
      <div class="container border mb-5">
        <div class="row">
          <div class="col-lg-8 col-md-4 col-12">
            <div id="carouselExampleIndicators" class="carousel slide ml-0" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://source.unsplash.com/550x350/?Online Meet" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/550x350/?Health" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/550x350/?Care" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    
  
          <div class="col-lg-4 col-md-4 col-12 text-light">
              <h5 class="text-center display-4 mt-5">Login</h5>
              <form method="post">
                <div class="form-group mt-5">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Id" autocomplete="off">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remeber me</label>
                </div>
                <input type="submit" class="btn btn-primary"value="submit" name="submit">
                <a type="submit" class="btn btn-primary" href="cregister.php">New account</a>
              </form>
              
            
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
  </body>
</html>

<script>
var errorMessage;
function login() {
  var email = document.getElementById("email").value;
  var psd = document.getElementById("password").value;

  if (email == "") {
    alert("Please Enter your Username");
    // document.write("no name");
    return false;
  }
  

  if (psd == "") {
    alert("Please Enter your Password");
    // document.write("no name");
    return false;
  } 
}



</script>

