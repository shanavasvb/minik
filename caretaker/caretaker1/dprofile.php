<!DOCTYPE html>
<html lang="en">
  <?php
      session_start();

      $myname = $_SESSION['myname'];
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../connection/connect.php';
       
      $name=$_POST['name'];
      
      $phone=$_POST['phone'];

      $special=$_POST['special'];

      $type=$_POST['type'];
      $time=$_POST['time'];
      $place=$_POST['place'];
      $gender=$_POST['Gender'];
      $adress=$_POST['adress'];
      $about=$_POST['about'];
      $salary=$_POST['salary'];
      if (isset($_POST['type'])) {
        $selectedValue = $_POST['type'];
    
        if ($selectedValue === 'childcare') {
            // Insert into the "child" database table
            
            
            $sql = "INSERT INTO `child`(`cname`, `ctype`, `cspecial`, `cplace`, `cavail`, `cgender`, `cadress`, `cphone`, `cabout`, `csalary`) VALUES
      ('$name','$type','$special','$place','$time','$gender','$adress','$phone','$about','$salary')";
 
      $res=mysqli_query($con,$sql);
    if($res)
    {
      echo "Submission Suceessful";
    }
      else{
        echo "error".mysqli_error($con);
      }
        } elseif ($selectedValue === 'seniorcare') {
            // Insert into the "senior" database table
           
            $sql = "INSERT INTO `senior`(`sname`, `stype`, `sspecial`, `splace`, `savail`, `sgender`, `sadress`, `sphone`, `sabout`, `ssalary`) VALUES
      ('$name','$type','$special','$place','$time','$gender','$adress','$phone','$about','$salary')";
 
      $res=mysqli_query($con,$sql);
    if($res)
    {
      echo "Submission Suceessful";
    }
      else{
        echo "error".mysqli_error($con);
      }
    
        } 
        elseif ($selectedValue === 'physchologist') {
        
          $sql = "INSERT INTO `physcho`(`pname`, `ptype`, `pspecial`, `pplace`, `pavail`, `pgender`, `padress`, `pphone`, `pabout`, `psalary`) VALUES
      ('$name','$type','$special','$place','$time','$gender','$adress','$phone','$about','$salary')";
 
      $res=mysqli_query($con,$sql);
    if($res)
    {
      echo "Submission Suceessful";
    }
      else{
        echo "error".mysqli_error($con);
      }}
      else {
            echo "Invalid selection.";
            exit();
        }
      }
      
        
      
  }  
      
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="font-family: 'Poppins', sans-serif;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-capitalize" href="#">
            <img src="IMG/logo2.png" width="40" height="40" alt="logo" loading="lazy" class="mr-2">
            Care</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="daccount.php"><i class="fa fa-home mr-1" aria-hidden="true"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.php"><i class="fa fa-medkit mr-1" aria-hidden="true"></i> Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dprofile.php"><i class="fa fa-user mr-1" aria-hidden="true"></i>Profile<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dcontact.php"><i class="fa fa-phone mr-1" aria-hidden="true"></i>Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="dfaq.php"><i class="fa fa-question-circle mr-1" aria-hidden="true"></i>FAQ</a>
            </li>
            <button type="button" class="btn btn-warning ml-4"><a href="index.php">
                <i class="fa fa-sign-out"></i><a href="./logout.php">Logout</a></button>
          </ul>
        </div>
      </nav>
   </header> 
   <section>
    
    <div class="container">
    <div class="row flex-lg-nowrap">
    
      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <image id="doctorDp" height='140' width='140' style="color: rgb(166, 168, 170); font: bold 8pt Arial;"></image>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo " ".$myname?></h4>
                        <div class="mt-2">
                          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-camera" aria-hidden="true"></i>
  <span>Change Photo</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        
          <label for="img">Select image:</label>
          <input type="file" id="img" name="img" accept="image/*">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                        </div>
                      </div>
                      <div class="text-center text-sm-right">
                        <span class="badge badge-success">Caretaker</span>
                        <div class="text-muted"><small>Joined 09 Dec 2022</small></div>
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form class="form" novalidate="">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Full Name</label>
                                  <input id="fName" class="form-control" type="text" name="name" placeholder="Full Name">
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label>Phone No.</label>
                                  <input class="form-control" type="text" name="phone" id="Phone" placeholder="Phone number">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Specialised Area   </label>
                                  <input type="text" name="special" placeholder="special">
                                </div>
                              </div>
                          
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                Type:
<input type="radio" name="type" id="childcare" value="childcare">
<label for="childcare">childcare</label>
<input type="radio" name="type" id="seniorcare" value="seniorcare">
<label for="seniorcare">seniorcare</label>
<input type="radio" name="type" id="physchologist" value="physchologist">
<label for="physchologist">physchologist</label>
                
</div></div></div>
                        <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Gender </label>
                                  <input type="text" name="Gender" placeholder="Gender">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Place preferred for Work </label>
                                  <input type="text" name="place" placeholder="Placeprefered">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Time available(From -to) </label>
                                  <input type="text" name="time" placeholder="12am to 12pm">                  
                                </div>
                              </div>
                            </div>
                          </div>
                        
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Address</label>
                                  <input id="Adress" class="form-control" type="text" name="adress" placeholder="Adress">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Previous Expirience If any</label>
                                  <input id="Clinic" class="form-control" type="text" placeholder="Expirience">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>About</label>
                                  <textarea class="form-control" rows="5" placeholder="My Bio" name="about"></textarea>
                                </div>
                              </div>
                            </div>
                              <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Expected Salary per day   </label>
                                  <input type="text" name="salary" placeholder="Salary">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <input class="btn btn-primary" type="submit" name="submit" value="submit">
                          </div>
                        </div>
                      
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </form>
          <div class="col-12 col-md-3 mb-3">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title font-weight-bold">Support</h6>
                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                <button type="button" class="btn btn-primary">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
   </section>
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<script>

$(document).ready(function(){
  readData();
});

function readData() {
  var database = firebase.database();
  var id ="Ij9mqcPtWPNzUZTZV2LjH2ROsZD2";
  database.ref("doctors/" + id).once("value", function (snapshot) {
    if (snapshot.exists()) {
     
  
      var val = snapshot.val();
      var fname = val.Name;
      var email = val.Email;
      var phone= val.PHONE;
      var clinic = val.CLINIC;
      var img = val.Dp;
      document.getElementById("fName").value=fname;
      document.getElementById("Email").value = email;
      document.getElementById("Phone").value = phone;
      document.getElementById("Clinic").value = clinic;
      if(img != null)
      $("#doctorDp"). attr("src", img);
      console.log(fname);
      console.log(email);
      console.log(phone);
    
      
    }
  });

}

</script>