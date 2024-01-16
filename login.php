<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
              background-image: url(Background.png);
        }

        .header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            vertical-align: middle;
        }

        .company-name {
            margin-left: 10px;
        }

        .navigation {
            float: right;
        }

        .navigation a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: inline-block;
        }

        .navigation a:hover {
            background-color: #555;
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
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .footer {
            margin-left: 130%;
        }


    </style>
       
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="logo.jpeg" alt="Your Logo">
            <div class="company-name">Kenmark ITAN Solutions</div>
        </div>
        <div class="navigation">
            <a href="https://kenmarkitan.com/home" target="_blank">Home</a>
            <a href="contact.php">Contact</a>
            <a href="registration.php">Register</a>
        </div>
    </div>

    <div class="container">
        <h2>Login</h2>
        <form action="login_check.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <div class="footerlogin">
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>
