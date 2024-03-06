<?php

session_start();

$user_email = "{$_SESSION['email']}";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marahuyo - Trip</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

      <div class="container">
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="button" id="addToHeart" class="btn btn-info">+ Add to Heart</button>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('addToHeart').addEventListener('click', function() {
                        Swal.fire({
                            title: 'Add to Heart',
                            text: 'Are you sure you want to add this item to your heart?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, add it!',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '../db_con/cart.php<?php echo isset($_GET['trip']) ? '?trip=' . $_GET['trip'] : ''; ?>&<?php echo isset($_GET['price']) ? 'price=' . $_GET['price'] : ''; ?>&email=<?php echo "$user_email"?>';
                            }
                        });
                    });
                });
            </script> 
        </div>
    </div>


      <div class="container my-5"> 
        
            <?php if(isset($_GET['trip']) && $_GET['trip'] == "lakbay_kinaadman"): ?>
 
            <div class="row" >
                <div class="col-md-6 mx-auto">
                    <div class="card my-3"> 
                        <img src="images/museum.jpg" class="card-img-top" alt="..." style="height: 100%;"> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="background-color: transparent; color: white">
                        <span><h1>LAKBAY<br>KINAADMAN</h1></span><br>
                        <h6 style="font-size: 25px;">PHP 1,850.00</h6><br>
                        <ul>
                            <li>Embark on a journey with Lakbay Kinaadman, delving into the rich cultural and educational heritage of the Philippines' top 4 universities.</li>
                            <li>Book now to discover the stories behind artifacts, artworks and displays, representing the intellectual intelligence and artistry generated within these universities!</li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <br><br>
            <hr style="background-color: white">
            
            <div class="row" style="margin-top: 10%"> 
                <div class="col-md-6 my-3">
                        <div class="card" style="background-color: transparent; color: white">
                            <span><h2>FIRST STOP: THE MUSEUM AT DE LA SALLE UNIVERSITY</h2></span><br>
                            <h6 style="font-size: 25px;">Highlights:</h6><br>
                            <ul>
                                <li>Embrace the rich stories embedded within the museumwalls anchoring DLSU’s role in Philippine education and society.</li>
                                <li>Wander around its exhibits, from historical artifacts to contemporary art, which now houses the works of more than 10 National Artists!</li>
                            </ul>

                            <p>Location: 2401 Taft Avenue, Don Enrique T. Yuchengco Hall, De La Salle University – Manila, Manila</p>
                            <p>Fee: Local Tourists (PHP 25.00) and Foreign Tourists (PHP50.00)</p>
                            <p>Tour Guide Fee: TBF</p>
                            <p>Open: Tuesdays to Fridays (9:00 AM – 4:00 PM)</p>
                        </div>
                    </div>

                    <div class="col-md-6 my-5">
                        <div class="card my-5"> 
                            <img src="images/bg2.jpg" class="card-img-top" alt="..." style="height: 100%;"> 
                        </div>
                    </div> 
            </div>
                        
            <?php endif; ?>

            <!-- LAKBAY MAHARLIKA -->

            <?php if(isset($_GET['trip']) && $_GET['trip'] == "lakbay_maharlika"): ?>
            
            <div class="row" >
                <div class="col-md-6 mx-auto">
                    <div class="card my-3"> 
                        <img src="images/museum.jpg" class="card-img-top" alt="..." style="height: 100%;"> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="background-color: transparent; color: white">
                        <span><h1>LAKBAY<br>MAHARLIKA</h1></span><br>
                        <h6 style="font-size: 25px;">PHP 3,500.00</h6><br>
                        <ul>
                            <li>Embark on a journey with Lakbay Kinaadman, delving into the rich cultural and educational heritage of the Philippines' top 4 universities.</li>
                            <li>Book now to discover the stories behind artifacts, artworks and displays, representing the intellectual intelligence and artistry generated within these universities!</li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <br><br>
            <hr style="background-color: white">
            
            <div class="row" style="margin-top: 10%"> 
                <div class="col-md-6 my-3">
                        <div class="card" style="background-color: transparent; color: white">
                            <span><h2>FIRST STOP: THE MUSEUM AT DE LA SALLE UNIVERSITY</h2></span><br>
                            <h6 style="font-size: 25px;">Highlights:</h6><br>
                            <ul>
                                <li>Embrace the rich stories embedded within the museumwalls anchoring DLSU’s role in Philippine education and society.</li>
                                <li>Wander around its exhibits, from historical artifacts to contemporary art, which now houses the works of more than 10 National Artists!</li>
                            </ul>

                            <p>Location: 2401 Taft Avenue, Don Enrique T. Yuchengco Hall, De La Salle University – Manila, Manila</p>
                            <p>Fee: Local Tourists (PHP 25.00) and Foreign Tourists (PHP50.00)</p>
                            <p>Tour Guide Fee: TBF</p>
                            <p>Open: Tuesdays to Fridays (9:00 AM – 4:00 PM)</p>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="card "> 
                            <img src="images/bg2.jpg" class="card-img-top" alt="..." style="height: 100%;"> 
                        </div>
                    </div> 
            </div>
                        
            <?php endif; ?>
        </div>    
    </div>
    
    <br><br><br>
    
    <div class="container">
        <div class="row"> 
            <a type="button" class="btn btn-info btn-block" href="checkout.php<?php echo isset($_GET['trip']) ? '?trip=' . $_GET['trip'] : ''; ?>&<?php echo isset($_GET['price']) ? 'price=' . $_GET['price'] : ''; ?>">Book Now!</a> 
        </div>
    </div> 
    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>