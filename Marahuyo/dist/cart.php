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
                Heart
            </div>

            <?php
                include '../db-connection.php';

                $conn = OpenCon();

                $query = "SELECT trip_name, quantity, trip_price FROM shopping_cart";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo "<ul class='list-unstyled' style='background-color: white'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $trip_name = $row['trip_name'];
                        $quantity = $row['quantity'];
                        $trip_price = $row['trip_price'];

                        echo "<li class='media'>";
                        echo "<img src='images/bg2.jpg' class='mr-3 trip_img' alt='...'>";
                        echo "<div class='media-body'>";
                        echo "<h5 class='mt-0 mb-1'>$trip_name</h5><br>";
                        echo "<p>Quantity: <span id='qnty'>$quantity</span></p>";
                        echo "<p>Subtotal: <span id='subtotal'>$trip_price</span></p>";
                        echo "</div>";
                        echo "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No items in shopping cart.";
                }

                CloseCon($conn);
                ?>
                 
        </div>
  

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>