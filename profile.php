
<!-- profile.php -->
<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // User is logged in
    include 'connect_database.php';

    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE id=$user_id";
    $result = mysqli_query($database, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo 'Error fetching user details';
        exit();
    }
} else {
    // Redirect if not logged in
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $user['firstName']; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden; 
            height: 100vh;
            color: #333;
            background-image: url(Background.png);
        }

        .header {
            background-color: #333;
            padding: 15px;
            color: white;
            text-align: center;
            width: 100%;
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

        .container {
            width: 400px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
        .proceed-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .proceed-button:hover {
            background-color: #0056b3;
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
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <div class="container">
        <h2>Welcome, <?php echo "{$user['firstName']} {$user['lastName']}"; ?>!</h2>
        <p>Your profile information:</p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Mobile Number:</strong> <?php echo $user['mobileNumber']; ?></p>

        <form action="https://kenmarkitan.com/home" method="get" target="_blank">
            <button class="proceed-button" type="submit">Proceed to Kenmark ITAN Solutions</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    
</body>
</html>
