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
                <!-- PHP logic to include sign-up or sign-in form based on URL parameter -->
                <?php
                if (isset($_GET['sign-up'])) {
                    include_once 'signup.php'; // Include the sign-up form
                } else {
                    include_once 'signin.php'; // Include the sign-in form
                }
                include_once 'popupmessage.php'; // Include popup message for notifications
                ?>
            </div>
        </div>
    </div>
    <!-- Link to jQuery library -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Link to Bootstrap JS library -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Include database configuration file
require_once("config/connection.php");

// Handle Sign Up logic
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and store user inputs
    $su_username = mysqli_real_escape_string($db, $_POST['su_username']);
    $su_contact_no = mysqli_real_escape_string($db, $_POST['su_contact_no']);
    $su_password = mysqli_real_escape_string($db, sha1($_POST['su_password']));
    $su_reenter_password = mysqli_real_escape_string($db, sha1($_POST['su_reenter_password']));
    $user_role = "Voter";

    // Check if passwords match
//         $sql = "INSERT INTO cregister (fname, lname, email, password, country, phone) VALUES ('$fname',
// 		 '$lname', '$email', '$password', '$country', '$phone')";

//         if (mysqli_query($conn, $sql)) {
//             header("Location: login.php");
//             exit;
//         } else {
//             echo "Error adding the details: " . $sql . "<br>" . mysqli_error($conn);
//         }
    if ($su_password == $su_reenter_password) {
        // Insert user data into the database
        mysqli_query($conn, "INSERT INTO signup(su_username, su_contact_no, su_password, user_role) 
            VALUES('$su_username', '$su_contact_no', '$su_password', '$user_role')") or die(mysqli_error($conn));
        // Redirect to sign-up page with success message
        // echo "<script>location.assign('index.php?sign-up=1&registered=1');</script>";
		echo "data inserted successfully.";
    } else {
		echo "failed";
        // Redirect to sign-up page with error message
        // echo "<script>location.assign('index.php?sign-up=1&invalid=1');</script>";
    }
}

// Handle Login logic
if (isset($_POST['loginbtn'])) {
    // Sanitize and store user inputs
    $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
    $password = mysqli_real_escape_string($db, sha1($_POST['password']));

    // Fetch user data from the database
    $fetchingData = mysqli_query($db, "SELECT * FROM users WHERE contact_no='$contact_no'") or die(mysqli_error($db));

    // Check if user exists
    if (mysqli_num_rows($fetchingData) > 0) {
        $data = mysqli_fetch_assoc($fetchingData);

        // Validate user credentials
        if ($contact_no == $data['contact_no'] && $password == $data['password']) {
            // Start user session and store user details
            session_start();
            $_SESSION['user_role'] = $data['user_role'];
            $_SESSION['username'] = $data['username'];

            // Redirect to admin or voter dashboard based on user role
            if ($data['user_role'] == "Admin") {
                echo "<script>location.assign('admin/index.php');</script>";
            } else {
                echo "<script>location.assign('voters/index.php');</script>";
            }
        } else {
            // Redirect to login page with invalid access message
            echo "<script>location.assign('index.php?invalid_access=1');</script>";
        }
    } else {
        // Redirect to sign-up page with not registered message
        echo "<script>location.assign('index.php?sign-up=1&not_registered=1');</script>";
    }
}
?>
