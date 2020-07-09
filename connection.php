<?php
$server = "127.0.0.1";
$user = "root";
$pass = "123456";
$database = "icode";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Sorry for your inconvinience. At this time we are not able to Connect with Server.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
}


?>