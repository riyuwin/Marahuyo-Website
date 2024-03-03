<?php

  session_start();  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marahuyo - Trip</title>
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
                    </li><li class="nav-item active">
                        <a class="nav-link " href="trip.php">Trip</a>
                    </li><li class="nav-item ">
                        <a class="nav-link" href="contact.php">Contact</a>
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
            <div class="trip-container-header">
                LOCAL MUSUEM & GALLERY TOUR
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php?trip=lakbay_kinaadman" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/museum.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Kinaadman</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 1,850</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php?trip=lakbay_maharlika" class="container_selector">
                        <div class="card mt-3">
                            <img src="images/bg2.jpg" class="card-img-top " alt="..." style="height: 140px">
                            <div class="card-trip card-body">
                                <h6>Lakbay Maharlika</h6>
                                <p style="text-align: center">5-Day Tour</p><br>
                                <h6>PHP 3,500</h6> 
                                
                                <div class="container-best-price">
                                    Best Price Guaranteed
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                        <div class="card mt-3">
                            <img src="images/museum.jpg" class="card-img-top " alt="..." style="height: 140px">
                            <div class="card-trip card-body">
                                <h6>Lakbay Gunita</h6> 
                                <p style="text-align: center">5-Day Tour</p><br>
                                <h6>PHP 2,300</h6> 
                                
                                <div class="container-best-price">
                                    Best Price Guaranteed
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/bg2.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Yugto</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 1,700</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/museum.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Sansinukob</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 1,100</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/bg2.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Silakbo</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 2,200</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/museum.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Hiwaga</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 3,700</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="trip_details.php" class="container_selector">
                    <div class="card mt-3">
                        <img src="images/bg2.jpg" class="card-img-top " alt="..." style="height: 140px">
                        <div class="card-trip card-body">
                            <h6>Lakbay Alpas</h6>
                            <p style="text-align: center">5-Day Tour</p><br>
                            <h6>PHP 4,000</h6> 
                            
                            <div class="container-best-price">
                                Best Price Guaranteed
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>    
        </div>
 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>