<!DOCTYPE html>
<html lang="en">

<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../connection/connect.php';

  $email = $_POST['email'];
  $pass = $_POST['password'];

if(!($email == 'admin@123' && $pass == 'admin@123'))
  {
      $invalid = 1;
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid Credentials</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

    }else{

      $myemail = $_SESSION[$email];
      header('location:../admin/dash.php');
        }
  } else {
    echo 'no result';
  }

?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor</title>
    <link rel="stylesheet" type="text/css" href="CSS/patient.css" />
    <script typr="text/javascript" src="JS/patient.js"></script>


    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>


  </head>
  <body>
    <div class="head">Admin-Login</div>
    <div class="container">
      <p>Admin-Login</p>
      <form action="" method="post">
      <p>Email ID: <input type="text" id="email" name="email" /></p>
      <p>Password: <input type="password" id="password" name="password"/></p>
      <input type="submit" value="Login" name="submit" />
      <input type="submit" value="Back" onclick="back()"/>
</form>
    </div>
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
