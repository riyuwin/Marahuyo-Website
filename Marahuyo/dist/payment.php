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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
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

      <div class="container my-5" style="color:white">
        <div class="row">  
            <div class="col-md-6"> 
                <div class="row"> 
                    <h1>Payment</h1>
                </div>

                <label for="creditCard">Credit Card</label>
                <input type="password" class="form-control" placeholder="XX - XX - XX - XX - XX - XX" name="creditCard" id="creditCard">

            </div>

            <div class="col-md-6">
                <!-- First Row of Input Fields -->
                <div class="row"> 
                    <h1>Order Summary</h1>
                </div>
            </div> 
                    

            <!-- First Column (Input Fields) -->
            <div class="col-md-6 my-4">
                <!-- First Row of Input Fields -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mname">Middle Name</label>
                            <input type="text" class="form-control" placeholder="Middle Name" name="mname" id="mname">
                        </div>
                    </div>
                </div>
                <!-- Second Row of Input Fields -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="extname">Ext Name</label>
                            <input type="text" class="form-control" placeholder="Ext Name" name="extname" id="extname">
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address1">Address 1</label>
                            <input type="text" class="form-control" placeholder="Address 1" name="address1" id="address1">
                        </div>
                    </div> 

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address2">Address 2</label>
                            <input type="text" class="form-control" placeholder="Address 2" name="address2" id="address2">
                        </div>
                    </div> 

                    <div class="col-md-12"> 
                        <div class="form-group">
                            <label for="countries">Choose a country:</label>
                            <select id="countries" class="form-control">
                                <!-- Options will be populated dynamically using JavaScript -->
                            </select>
                        </div> 
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lname">Zip Code</label>
                            <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" id="zipcode">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="extname">City</label>
                            <input type="text" class="form-control" placeholder="City" name="city" id="city">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="extname">State</label>
                            <input type="text" class="form-control" placeholder="State" name="state" id="state">
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lname">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Phone Number" name="phoneNumber" id="phoneNumber">
                        </div>
                    </div>  
                </div> 

                <div class="row my-3">
                    <div class="col-md-12"> 
                        <a id="continueButton" class="btn btn-info btn-block" href="#">Continue</a> 
                    </div>   
                </div>
            </div>
 
            <!-- Second Column (Image) -->
            <div class="col-md-6">
                <img src="images/museum.jpg" class="card-img-top" alt="..." style="height: 50%;">
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#countries').select2({
                placeholder: 'Select a country',
                ajax: {
                    url: 'https://restcountries.com/v2/all', // Use the correct API endpoint
                    dataType: 'json',
                    processResults: function(data) {
                        // Map the retrieved data to Select2 format
                        return {
                            results: $.map(data, function(country) {
                                return {
                                    id: country.alpha2Code, // Use ISO 3166-1 alpha-2 code as ID
                                    text: country.name // Display country name
                                };
                            })
                        };
                    }
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var continueButton = document.getElementById('continueButton');

            continueButton.addEventListener('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, continue!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Continued!',
                            'Your action has been confirmed.',
                            'success'
                        ).then(() => {
                            // Redirect to PHP script to handle email sending
                            window.location.href = '../db_con/payment.php<?php echo isset($_GET['trip']) ? '?trip=' . $_GET['trip'] : ''; ?>&<?php echo isset($_GET['price']) ? 'price=' . $_GET['price'] : ''; ?>&<?php echo isset($_GET['subtotal']) ? 'subtotal=' . $_GET['subtotal'] : ''; ?>';
                        });
                    }
                });
            });
        });
    </script>

</body>
</html>