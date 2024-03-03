<?php

  session_start();  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marahuyo - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
</head>
<body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <img class="marahuyo_logo" src="images/logo.png" alt="Marahuyo Logo">
          <a class="navbar-brand" href="#" style="font-weight: 600;">MARAHUYO PH</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto"> <!-- Add mr-auto class here -->

              </ul>

              <ul class="navbar-nav" > <!-- Add this new ul element for right-aligned items -->
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php" >Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php">About</a>
                    </li><li class="nav-item ">
                        <a class="nav-link" href="trip.php">Trip</a>
                    </li><li class="nav-item ">
                        <a class="nav-link active" href="contact.php">Contact</a>
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
                <h5 class="card-title">Welcome to the site <?php if(isset($_SESSION['email'])){
                  echo $_SESSION['fname']; }  ?>!</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  
                <button class="btn btn-primary"><a href="login_form.php" style="color: white; text-decoration: none;">Login</a></button>
                <button class="btn btn-primary"><a href="register_form.php" style="color: white; text-decoration: none;">Register</a></button>       
            </div>
          </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>