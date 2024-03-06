<?php
include '../db-connection.php';

$conn = OpenCon();

$trip_name = isset($_GET['trip']) ? $_GET['trip'] : ''; // Assuming trip_name is a string

// Remove commas from the price and convert to an integer
$trip_price = isset($_GET['price']) ? intval(str_replace(',', '', $_GET['price'])) : 0;

$quantity = 1;
$email = isset($_GET['email']) ? $_GET['email'] : ''; // Assuming email is a string
$trip_status = "Pending";

// Check if the same trip_name and email with "Pending" status exist in the shopping_cart table
$query_check = "SELECT * FROM shopping_cart WHERE trip_name = '$trip_name' AND email = '$email' AND trip_status = 'Pending'";
$result_check = mysqli_query($conn, $query_check);
$row_check = mysqli_fetch_assoc($result_check);

if ($row_check) {
    // If the same trip_name and email with "Pending" status exist, update the quantity and trip_price
    $new_quantity = $row_check['quantity'] + 1;
    $new_trip_price = $trip_price * $new_quantity;
    
    // Update the existing record with the new quantity and trip_price
    $query_update = "UPDATE shopping_cart SET quantity = '$new_quantity', trip_price = '$new_trip_price' WHERE trip_name = '$trip_name' AND email = '$email' AND trip_status = 'Pending'";
    $run_update = mysqli_query($conn, $query_update);

    if ($run_update) { 
        echo "<script>alert('Quantity updated in cart!'); document.location.href = '../dist/cart.php';</script>";
        exit();
    } else {
        echo 'Error: ' . $mail->ErrorInfo;
        exit();
    }
} else {
    // If the same trip_name and email with "Pending" status do not exist, insert a new record
    $query_insert = "INSERT INTO shopping_cart (trip_name, trip_price, quantity, email, trip_status) VALUES ('$trip_name', '$trip_price', '$quantity', '$email', '$trip_status')";
    $run_insert = mysqli_query($conn, $query_insert);

    if($run_insert){ 
        echo "<script>alert('Item successfully added to cart!'); document.location.href = '../dist/cart.php';</script>";
        exit();
    } else {  
        echo 'Error: ' . $mail->ErrorInfo;
        exit();
    }
}
?>