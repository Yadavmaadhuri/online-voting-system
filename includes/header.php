<?php
include_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <!-- Dynamic title -->
        <?php echo $title; ?> | ThriveCart
    </title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<!-- Header Section -->
<header>
        <div class="navbar">
            <!-- Logo Section -->
            <div class="logo">
                <img src="assets/image/collegelogo.png" alt="Logo" />
            </div>
            <!-- Navigation Links -->
            <nav>
                <a href="index.php" class="active">Home</a>
                <a href="about.php">About</a>
                <a href="policy.php">Policy</a>
                <a href="#">Account</a>
            </nav>
        </div>
    </header>