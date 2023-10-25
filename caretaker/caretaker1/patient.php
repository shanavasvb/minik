<!DOCTYPE html>
<html lang="en">

<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../connection/connect.php';

  $email = $_POST['email'];
  $pass = $_POST['password'];


  $sql = "select * from `client` where email = '$email' and password = '$pass'";

  $result = mysqli_query($con, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);

    if ($num > 0) {
      $login = 1;
      foreach ($result as $row) {
          echo " welcome client";
          session_start();
          $_SESSION['logged'] = true;
          $_SESSION['myname'] = $row['name'];
          $_SESSION['myemail'] = $row['email'];
          $_SESSION['myphone'] = $row['phone'];
          $_SESSION['myplace'] = $row['place'];
          $_SESSION['mydob'] = $row['dob'];
          header('location:../client/index.php');
        
      }
    } else {
      $invalid = 1;
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid Credentials</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
    <link rel="stylesheet" type="text/css" href="CSS/patient.css" />
    <script typr="text/javascript" src="JS/patient.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>


  </head>
  <body>
    <div class="head">Customer-Login</div>
    <div class="container">

      <p>Customer-Login</p>
      <form method="post">
      <p>Email ID: <input type="text" id="email" name="email" /></p>
      <p>Password: <input type="password" id="password" name="password" /></p>
      <input type="submit" value="Login" name="submit" />
      <input type="submit" value="Back" onclick="back()"/>
      <p>New Customer? <a href="pregister.php">Register</a></p>
</form>
    </div>
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
    return false;
  } else {
    firebase
      .auth()
      .signInWithEmailAndPassword(email, psd)
      .then(function () {
        var user = firebase.auth().currentUser;
         alert("login successful");

      //  window.location.href = "home.php";
        return true;
      })
      .catch(function (error) {
        var errorCode = error.code;
        errorMessage = error.message;
        // ...

        alert(error);
        hideLoad();
        return false;
      });
  }
}








</script>
