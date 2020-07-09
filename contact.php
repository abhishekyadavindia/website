<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" href="http://127.0.0.1/www/assets/logo.jpg">
    <title>iCode-Contact Me</title>
  </head>
  <body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $describe = $_POST['message'];

      $server = "127.0.0.1";
      $user = "root";
      $password = "123456";
      $database = "contactus";

      $conn = mysqli_connect($server, $user, $password, $database);
      if (!$conn) {
        die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Sorry for your inconvinience. At this time we are not able to Connect with Server.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      }
      else {
        $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `issue`) VALUES ('$name', '$email', '$phone', '$describe')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your Issue Submitted Successfully. I will Contact you Soon.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
        else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error</strong> You should check in on some of those fields below. If No error please Contact Us on "quantumstudygroup@gmail.com".
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      }
    }
  ?>
  <form class="form-signin" action="/www/contact.php" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="http://127.0.0.1/www/assets/logo.jpg" alt="logo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Contact Me</h1>
    <p>Contact me using this form.</p>
  </div>
  <div class="container">



<!-- THE CONTACT FORM IS HERE -->
    <form action="/www/contact.php" method="post">
        <div class="form-label-group">
            <label for="name">Your Name</label>
            <input type="name" class="form-control" id="name" placeholder="Enter your Name" name="name">
        </div>
        <div class="form-label-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" id="cemail" placeholder="Enter your Email" name="email">
        </div>
        <div class="form-label-group">
            <label for="phone">Your Phone Number (With Country Code)</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your Phone Number" name="phone">
        </div>
        <div class="form-label-group">
            <label for="description">Describe What you want to Contact me for here</label>
            <textarea type="text" class="form-control" id="message" placeholder="Your message" name="message"></textarea>
        </div>
        <div class="text-center mb-4">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </div>
        
    </form>

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