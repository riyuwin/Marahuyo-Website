<?php
include '../db-connection.php';

session_start(); // Start session at the beginning

$conn = OpenCon();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // Prepare and execute the query using prepared statements to prevent SQL injection
    $select_user = "SELECT * FROM user_account WHERE email = ?";
    $stmt = mysqli_prepare($conn, $select_user);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $_SESSION['email'] = $row['email'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['mname'] = $row['mname'];
                $_SESSION['lname'] = $row['lname'];
                header("location:../dist/index.php");
                exit(); // Exit after redirect
            }
        }
        // If password is incorrect
        $_SESSION['error'] = "Incorrect password";
    } else { 
        // If user is not found
        $_SESSION['error'] = "User not found";
    }

    // Redirect back to the login form
    header("location:../dist/login_form.php");
    exit();
}
?>