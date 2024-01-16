<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
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

        .contact-container {
            width: 80%;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            border: 1px solid black;

        }

        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form {
            width: 60%;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea {
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

        h2 {
            text-align: center;
            color: #333;
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
            <a href="https://kenmarkitan.com/home" target="_blank">Home</a>        <!-- Kenmark Site ,home button -->
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </div>
    </div>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Phone: +91-9820283097</p>
            <p>Email: itan@kenmark.in</p>
            <p>Address: 601-604,Chaitanya CHS LTD,Near Ram Mandir Signal, Goregaon West, Mumbai-400104</p>
        </div>

        <div class="contact-form">
            <h2>Contact Form</h2>
            <form action="process_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

   <?php include 'footer.php'; ?>
</body>
</html>
