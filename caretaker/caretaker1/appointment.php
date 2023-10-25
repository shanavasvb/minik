<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top "style="font-family: 'Poppins', sans-serif;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-capitalize" href="#"><img src="IMG/logo2.png" width="40" height="40" alt="logo" loading="lazy" class="mr-2">Care</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="daccount.php"> <i class="fa fa-home mr-1" aria-hidden="true"></i> Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="appointment.php"><i class="fa fa-medkit mr-1" aria-hidden="true"></i> Appointment<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dprofile.php"><i class="fa fa-user mr-1" aria-hidden="true"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dcontact.php"><i class="fa fa-phone mr-1" aria-hidden="true"></i> Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dfaq.php"><i class="fa fa-question-circle mr-1" aria-hidden="true"></i> FAQ</a>
            </li>
            <button type="button" class="btn btn-outline btn-md btn-warning ml-4"><i class="fa fa-sign-out"></i><a href="index.php">Logout</a></button>
          </ul>
        </div>
      </nav>
   </header> 
   <section class="container.fluid pt-3">
    <table class="table table-light table-hover">
        <thead class="bg-primary">
          <tr>
            <th>Sl.No</th>
            <th>Name</th>
            <th>Place</th>
            <th>Contact</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Devi</td>
            <td>Thrissur</td>
            <td><button type="button" class="btn btn-info">Details of Customer</button></td>
            <td><div>
              <input type="radio" id="int" name="interest" value="int" checked />
              <label for="int">interested</label>
              <input type="radio" id="int" name="interest" value="int" checked />
              <label for="int">Not interested</label>
            </div>
          </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Chirag Nayak</td>
            <td>Kochi</td>
            <td><button type="button" class="btn btn-info">Details of Customer</button></td>
            <td><div>
              <input type="radio" id="i2" name="i22" value="i2" checked />
              <label for="int">interested</label>
              <input type="radio" id="i2" name="i22" value="i2" checked />
              <label for="int">Not interested</label>
            </div>
          </td>
          </tr>
          
        </tbody>
      </table>
   </section>
   <footer>
       <p></p>
   </footer>
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>