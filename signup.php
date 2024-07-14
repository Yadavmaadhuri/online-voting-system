<?php
// Include database configuration file
require_once("config/connection.php");

// Handle Sign Up logic
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and store user inputs
    $su_username = mysqli_real_escape_string($conn, $_POST['su_username']);
    $su_contact_no = mysqli_real_escape_string($conn, $_POST['su_contact_no']);
    $su_password = mysqli_real_escape_string($conn, sha1($_POST['su_password']));
    $su_reenter_password = mysqli_real_escape_string($conn, sha1($_POST['su_reenter_password']));
    $user_role = "Voter";

    // Check if passwords match
    if ($su_password == $su_reenter_password) {
        // Insert user data into the database
        mysqli_query($conn, "INSERT INTO signup(su_username, su_contact_no, su_password, user_role) 
            VALUES('$su_username', '$su_contact_no', '$su_password', '$user_role')") or die(mysqli_error($conn));
        // Redirect to sign-up page with success message
		echo "data inserted successfully.";
    } else {
		echo "failed";
        }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>LogIn</title>
    <!-- Link to Bootstrap CSS for styling -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Link to custom CSS for login page -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Link to custom CSS for general styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Main container with full height -->
  <div class="container h-100">
        <!-- Center content horizontally and vertically -->
        <div class="d-flex justify-content-center h-100">
            <!-- User card container -->
            <div class="user_card">
                <!-- Center the logo within the card -->
                <div class="d-flex justify-content-center">
                    <!-- Logo container -->
                    <div class="brand_logo_container">
                        <!-- Logo image -->
                        <img src="assets/image/logo.jpeg" class="brand_logo" alt="Logo">
                    </div>
                </div>
   
<!-- Container for the form, centered using Bootstrap's flex utilities -->
<div class="d-flex justify-content-center form_container">
    <!-- Form element with POST method for sending user input to the server -->
    <form method="POST">
        <!-- Username input group -->
        <div class="input-group mb-3">
            <!-- Icon for username input -->
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <!-- Input field for the username -->
            <input type="text" name="su_username" class="form-control input_user" value="" placeholder="Username" required />
        </div>
        
        <!-- Contact number input group -->
        <div class="input-group mb-2">
            <!-- Icon for contact number input -->
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <!-- Input field for the contact number -->
            <input type="text" name="su_contact_no" class="form-control input_pass" placeholder="Contact" required />
        </div>

        <!-- Password input group -->
        <div class="input-group mb-2">
            <!-- Icon for password input -->
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <!-- Input field for the password -->
            <input type="password" name="su_password" class="form-control input_pass" placeholder="Enter the password" required />
        </div>

        <!-- Re-enter password input group -->
        <div class="input-group mb-2">
            <!-- Icon for re-enter password input -->
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <!-- Input field for re-entering the password -->
            <input type="password" name="su_reenter_password" class="form-control input_pass" placeholder="Re-enter the password" required />
        </div>

        <!-- Submit button container, centered using Bootstrap's flex utilities -->
        <div class="d-flex justify-content-center mt-3 login_container">
            <!-- Submit button for the form -->
            <button type="submit" name="sign_up_button" class="btn login_btn">Sign Up</button>
        </div>
    </form>
</div>

<!-- Link to sign in, centered using Bootstrap's flex utilities -->
<div class="mt-4">
    <div class="d-flex justify-content-center links">
        <!-- Text and link for users who already have an account -->
        Already created an account? <a href="signin.php" class="ml-2 text-marron">Sign In</a>
    </div>
</div>
<script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Link to Bootstrap JS library -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
