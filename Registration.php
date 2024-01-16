

<!-- registration.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
              background-image: url(Background.png);
        }

        .header {
            width: 100%;
            box-sizing: border-box;
        }

        .container {
            width: 400px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 5px;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>

    <link rel="stylesheet" href="header.css">
</head>

<body>

<div class="header">
        <div class="navbar">
            <div class="logo">
                <img src="logo.jpeg" alt="Your Logo">
                <div class="company-name">Kenmark ITAN Solutions</div>
            </div>
            <div class="navigation">
                <a href="https://kenmarkitan.com/home" target="_blank">Home</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Login</a>
            </div>
        </div>
</div>

<div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <p class="error" id="passwordError"></p>
            </div>
            <div class="form-group">
                <label for="mobileNumber">Mobile Number</label>
                <input type="tel" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" required>
            </div>
            <button type="submit">Register</button>
        </form>


        <?php
        // Check if logout parameter is present
        if (isset($_GET['logout']) && $_GET['logout'] == 1) {
            echo '<p class="logout-message">Logout successful. You are now logged out.</p>';
        }
        ?>

         <script>
             function validateForm() {
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                document.getElementById('passwordError').innerText = 'Passwords do not match';
                return false;
            }

            return true;
        }
        </script>

    </div>

    <?php include 'footer.php'; ?>
</body>
</html>

