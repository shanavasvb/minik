
<!DOCTYPE html>

<html>

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
 
    $sql = "INSERT INTO `caretaker`(`name`, `dob`, `email`, `place`, `password`, `phone`) VALUES
     ('$name','$dob','$email','$place','$pass','$phone')";


    $chkemail = "select * from `caretaker` where email ='$email'";
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
                echo "Registration Failed";
            }

        }

    }
}

?>

<head>
    <title>Sample Registration Page</title>
    <style>
        body {
            background-color: rgb(230, 236, 240);
        }
        
        form {
            padding: 10px;
            line-height: 10px
        }
        
        main {
            width: 200px;
            height: 200px;
            padding: 10px;
            background: beige;
        }
        
        .imgcontainer {
            text-align: center;
            /*border-radius: 500%;*/
            margin: 20px 12px;
        }
        
        p {
            font-family: Open Sans;
            color: black;
            border-bottom: 1.50px solid black;
            font-family: cursive;
            color: black;
        }
        
        button {
            background-color: rgb(0, 0, 0);
            cursor: pointer;
            width: 100px;
            height: 25px;
        }
        
        button:hover {
            opacity: 0.52;
        }
    </style>
</head>



<body>
    <p style="color:rgb(69, 141, 10); 
font-size:49.9px;  
font-weight:bold;
text-align:center;">
        Caretaker Sign-up

    </p>

    <div class="imgcontainer">
        <img src="carel.png" width="170px">
        </div>


        <form  method="post" align="center">

*Date of Birth:<input type="date" name="dob" required><br>
*email address:<input type="text" name="email" placeholder="email address" required><br>
*Name: 	 <input type="text" name="name" placeholder="Name"required><br>
*Phone:  <input type="text"  id="phone" placeholder="Phone" name="phone" required minlength="10" maxlength="12"><br>
*Place:  <input type="text" id="place" name="place" placeholder="Place" required><br>
*Password: 	 <input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
<input type="submit" value="Submit" name="submit">  
<label>
  <input type="checkbox" checked="checked" name="remember"> Remember me
</label>
<label style="color:red">* Must be filled out</label>
</b>
</style>
</p>
</pre>
            <span>Already Registered?<a href="caretaker.php">Login</a></span>
    </div>
    </form>

    <div id="cursor" class="cursor--moved cursor--hidden" style="top: 231px; left: 1036px;"></div>

    <script>
        var myInput = document.getElementById("Password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        function
        validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }
        myInput.onkeyup = function() {
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }
            if (myInput.value.length >=
                8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>


</body>

</html>