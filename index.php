<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KENMARK ITAN SOLUTIONS</title>
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

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            background-color: #333;
            color: white;
            width: 100%;
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
            margin-left: auto;
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
            text-decoration: underline;
            background-color: #555;
        }

        .Welcome {
            text-align: center;
            margin-top: 20px; 
        }

        h2 {
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="header.css"> 
</head>
<body>
    <!-- Header Section -->
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

    <!-- Your Homepage Content Goes Here -->
    <div class="Welcome">
        <h2>Welcome to KENMARK ITAN SOLUTIONS Website!</h2>
    </div>

    <?php include 'footer.php'; ?> 

</body>
</html>
