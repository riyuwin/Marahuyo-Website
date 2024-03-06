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

      <div class="container">
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="button" class="btn btn-info">+ Add to Heart</button>
            </div>
        </div>
    </div>


      <div class="container my-5"> 
         
 
            <div class="row" >
                <div class="col-md-3 mx-auto">
                    <div class="card my-5s"> 
                        <img src="images/museum.jpg" class="card-img-top" alt="..." style="height: 100%;"> 
                    </div>
                </div>

                <div class="col-md-3 mx-auto">
                    <div class="card" style="background-color: transparent; color: white">
                            <span><h1>LAKBAY<br>KINAADMAN</h1></span><br>
                            <h6 style="font-size: 25px;">PHP <?php echo $_GET['price']; ?></h6><br> 
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="background-color: transparent; color: white">
                        <div class="row"> 
                            <div class="col-md-4">
                                <p class="card-text">Quantity: <span id="quantity">1</span></p>
                            </div> 
                            <div class="col-md-4">
                                <button class="btn btn-primary" onclick="incrementQuantity()">+</button>
                                <button class="btn btn-primary" onclick="decrementQuantity()">-</button>
                            </div>  
                            <div class="col-md-4">
                                <p class="card-text" id="subtotalPrice"><?php echo $_GET['price']; ?></p>
                            </div> 

                            <br><hr><br><br><br><br><br>

                            <div class="col-md-4">
                                <p class="card-text">Subtotal  </span></p>
                            </div> 
                            <div class="col-md-4"> 
                            </div>  
                            <div class="col-md-4">
                                <p class="card-text" id="TotalsubtotalPrice"><?php echo $_GET['price']; ?></p>
                            </div>  
                        </div> 
                        <br><hr><br> 
                        <div class="row">
                            <div class="col-md-12">
                                <a id="checkoutLink" href="#" class="btn btn-success btn-block">Checkout</a>
                            </div>
                        </div> 
                    </div>
                </div> 

                <br><hr><br> 
                
            </div>
              


            <script> 
 

                function incrementQuantity() {
                    var realPrice = <?php echo isset($_GET['price']) ? json_encode($_GET['price']) : '0'; ?>;
                    var quantityElement = document.getElementById('quantity');
                    var subtotalPriceElement = document.getElementById('subtotalPrice');
                    var TotalsubtotalPrice = document.getElementById('TotalsubtotalPrice');
                    var currentQuantity = parseInt(quantityElement.textContent);

                    quantityElement.textContent = currentQuantity + 1;

                    // Corrected subtotal calculation
                    var subtotal = realPrice * (currentQuantity + 1);
                    subtotalPriceElement.textContent = subtotal;
                    TotalsubtotalPrice.textContent = subtotal;

                    total_subtotal = subtotal;
                }

                function decrementQuantity() {
                    var realPrice = <?php echo isset($_GET['price']) ? json_encode($_GET['price']) : '0'; ?>;
                    var quantityElement = document.getElementById('quantity');
                    var subtotalPriceElement = document.getElementById('subtotalPrice');
                    var TotalsubtotalPrice = document.getElementById('TotalsubtotalPrice');
                    var currentQuantity = parseInt(quantityElement.textContent);

                    // Check if the current quantity is greater than 1 to avoid negative quantities
                    if (currentQuantity > 1) {
                        quantityElement.textContent = currentQuantity - 1;

                        // Corrected subtotal calculation
                        var subtotal = realPrice * (currentQuantity - 1);
                        subtotalPriceElement.textContent = subtotal;
                        TotalsubtotalPrice.textContent = subtotal;
 
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    var subtotalPriceElement = document.getElementById('TotalsubtotalPrice');
                    var subtotalValue = subtotalPriceElement.textContent.trim(); 
                });

                
                var checkoutLink = document.getElementById('checkoutLink');
        
                // Event listener kapag pinindot ang checkoutLink
                checkoutLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Ito ay upang pigilan ang default na aksyon ng link (i.e., ang pagpunta sa ibang page)
                    
                    var subtotalPriceElement = document.getElementById('TotalsubtotalPrice');
                    var subtotalValue = subtotalPriceElement.textContent.trim(); 
                    // I-set ang tamang URL sa href attribute gamit ang kodigo na iyong ibinigay
                    checkoutLink.href = "payment.php<?php echo isset($_GET['trip']) ? '?email=' . urlencode($_SESSION['email']) . '&trip=' . urlencode($_GET['trip']) : ''; ?>&<?php echo isset($_GET['price']) ? 'price=' . urlencode($_GET['price']) : ''; ?>&subtotal=" + subtotalValue;
                                        
                    // Pumunta sa page na nakalagay sa href attribute
                    window.location.href = checkoutLink.href;
                });

                
            </script>
            </div>    
        </div>
     

    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>