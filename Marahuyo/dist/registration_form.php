<?php

  session_start();  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Marahuyo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto"> <!-- Add mr-auto class here -->

              </ul>

              <ul class="navbar-nav"> <!-- Add this new ul element for right-aligned items -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">About</a>
                </li><li class="nav-item active">
                    <a class="nav-link" href="index.php">Trip</a>
                </li><li class="nav-item active">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
                
                <?php if(isset($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../db_con/logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login_form.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration_form.php">Register</a>
                    </li>
                <?php } ?>
            </ul>
          </div>
      </nav>

      <div class="container my-5">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title">Register form</h5><br>
              <form action="../db_con/registration.php" method="POST">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname"> 
                </div>
                <div class="form-group">
                  <label for="fname">Middle Name</label>
                  <input type="text" class="form-control" id="mname" name="mname"> 
                </div>
                <div class="form-group">
                  <label for="fname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname"> 
                </div> 
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"> 
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                </div> 
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" autocomplete="off" required>
                </div> 

                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                  
                <button type="submit" class="btn btn-primary" name="submit">Register</button>
              </form> 
            </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>