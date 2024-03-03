<?php
include '../db-connection.php';

$conn = OpenCon();

if(isset($_POST['submit'])){
    if(!empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $confirm_pass = $_POST['confirm_password']; 

        if ($password === $confirm_pass) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            // Check if email already exists in the database
            $check_email_query = "SELECT * FROM user_account WHERE email = '$email'";
            $check_email_result = mysqli_query($conn, $check_email_query);

            if(mysqli_num_rows($check_email_result) > 0){
                $error = "Email already exists.";
                header("Location: ../dist/registration_form.php?error=$error");
                exit();
            }

            $query = "INSERT INTO user_account (fname, mname, lname, email, password) VALUES ('$fname', '$mname', '$lname', '$email', '$password')";

            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
            if($run){
                header("Location: ../dist/login_form.php");
                exit();
            } else {
                $error = "Form not submitted";
                header("Location: ../dist/registration_form.php?error=$error");
                exit();
            }
        } else {
            $error = "Password doesn't match...";
            header("Location: ../dist/registration_form.php?error=$error");
            exit();
        }
        
    } else {
        $error = "All fields required.";
        header("Location: ../dist/registration_form.php?error=$error");
        exit();
    }

    CloseCon($conn);
} else {
    header("Location: ../dist/registration_form.php?error");
    exit();
}
?>