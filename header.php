<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        /* Add your custom styles for the header here */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding: 0;
            background-image: url(Background.png);
        }

        .header {
            background-color: #000000;
            padding: 15px;
            color: white;
            text-align: center;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            background-color: #000000;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
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
            background-color: #000000;
        }
    </style>
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
