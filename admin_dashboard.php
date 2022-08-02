<?php

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

?>

  <!-- html -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <style>      
      body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("img_girl.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
  </head>
  <!-- Body -->
<div class="container">
  <body class="bg" style="background-image: url(img/admin.jpg); width: 100%;">
    <div class="container">
      <!-- Container -->
      <div class="fixed-top">
        <h1 class="text-uppercase text-center bg-warning "><b style="color: black;">ADMINISTRATOR</b></h1>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <a class="navbar-brand" href="#">Hello, <?php echo $_SESSION['username']; ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="addAdminNew.php">
                  <h5 style="color: red;" class="btn btn-outline-light"><b>STAFF/USER </b></h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="leaves.php">
                <h5 style="color: orange;" class="btn btn-outline-light"><b>REQUEST LEAVE</b></h5>
                </a>
              </li>
            </ul>
          </div>
          <a class="navbar-brand btn btn-outline-danger" href="logout.php">
            <h5 class="text-white"><b>LOG OUT</b></h5>
          </a>
        </nav>
      </div>
      <br><br><br><br><br>
      
    <!-- Container -->
    </div>
  </body>
</div>

  </html>

  
<?php

} else {

  header("Location: index.php");

  exit();
}

?>