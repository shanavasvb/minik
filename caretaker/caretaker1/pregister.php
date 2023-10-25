<!DOCTYPE html>
<html lang="en">

<?php
$log = 0;
$invalid = 0;
$validate = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../connection/connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $place = $_POST['place'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
 
    $sql = "INSERT INTO `client`(`name`, `dob`, `email`, `place`, `password`, `phone`) VALUES
     ('$name','$dob','$email','$place','$pass','$phone')";


    $chkemail = "select * from `client` where email ='$email'";
    $check = mysqli_query($con, $chkemail);
    if ($check) {
        $num = mysqli_num_rows($check);
        if ($num > 0) {
            $validate = 1;
            
        } else {
            $result = mysqli_query($con, $sql);

            if ($result) {
                $log = 1;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Registered</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';        
            } else {
                $invalid = 1;
                echo "not inserted";
            }

        }

    }
}

?>


  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Register</title>
    <link rel="stylesheet" type="text/css" href="CSS/patient.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="JS/patient.js"></script>
  </head>
  <body>
    <div class="head">Care.com</div>
    <form method="post">
      <div class="container">
        <p>Customer Register</p>
        <p>Name:<input type="text" class="inputbox" id="name" name="name" /></p>
        <p>DOB:<input type="date" class="inputbox" id="dob" name="dob"/></p>
        <p>Phone No.:<input type="number" class="inputbox" id="phone" name="phone" /></p>
        <p>Email ID:<input type="email" class="inputbox" id="email"  name="email"/></p>
        <p>Password:<input type="password" class="inputbox" id="password" name="password"/></p>
        <p>Place:<input type="text" class="inputbox" id="place"  name="place"/></p>
        <input type="submit" value="Register" onclick="" />
        <input type="button" value="Back" onclick="back()" />
      </div>
    </form>
  </body>
</html>
