<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Class Representative Voting System</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register_process.php" method="post" id="registerForm">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
