<?php
$_name = $_email = $_password = $_cpassword = $_address = $_city = $_state = $_zip = "";
// if-else condition to make sign up with post method.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['states'];
  $zip = $_POST['zip'];
  if (!$zip_err){
  intval($zip);
  // Error in Required Fields
  if (empty($name)) {
    echo '<div class="alert alert-danger" role="alert">
    Please Enter Name...
  </div>';
  exit;
  }
  else {
    test_input($name);
  }
  
  }
  // Connection to Server and Database

  $server = "127.0.0.1";
  $user = "root";
  $pass = "123456";
  $database = "icode";
  $conn = mysqli_connect($server, $user, $pass, $database);
  // Error Handling of Connection Using if-else condition
  if (!$conn) {
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Sorry for your inconvinience. At this time we are not able to Connect with Server.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
    else {
      // No Error
    }
  if ($_name || $_password || $_) {
    # code...
  }
    $sql1 = "SELECT * FROM `signup` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql1);
    $check = mysqli_num_rows($result);
    if ($check > 0) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> You have used this Email. Please login to your account.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
       }
       else {
        if ($password==$cpassword) {
          $sql2 = "INSERT INTO `signup` (`name`, `email`, `password`, `address`, `city`, `state`, `zip`) VALUES ('$name', '$email', '$password', '$address', '$city', '$state', '$zip');";
            $result = mysqli_query($conn, $sql2);
            if ($result) {
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your Account Created Successfully. Please Login <a href="/www/login.php">here</a>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
        }
        else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Invalid PIN Code. Please Enter a valid PIN Code.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
          }
        
            }
            else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Passwords do not Match.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }
      
         
       }
       
      }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" href="http://127.0.0.1/www/assets/logo.jpg">
    <title>iCode-Sign Up</title>
  </head>
  <body>
  <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="http://127.0.0.1/www/assets/logo.jpg" alt="" width="72" height="72">
        <h2>iCode-Sign Up</h2>
        <p class="lead">Make your account in iCode here.</p>
      </div>
  <div class="container mt-4">
    <form action="/www/signup.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Enter Your Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter Your Email">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
        </div>
      
      <div class="form-group col-md-6">
          <label for="inputPassword4">Confirm Password</label>
          <input type="password" class="form-control" name ="cpassword" id="inputPassword" placeholder="Confirm Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address</label>
        <input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Enter Your Address">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter Your City">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select name="states" id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Ladakh">Ladakh</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Lakshadweep">Lakshadweep</option>

          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Enter Your PIN Code">
        </div>
      </div>
      <div class="text-center my-4">
  <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
</form>
</div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020-2021 iCode</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="building.html">Privacy</a></li>
          <li class="list-inline-item"><a href="building.html">Terms</a></li>
        </ul>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>