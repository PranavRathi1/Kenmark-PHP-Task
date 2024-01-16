<!-- process_contact.php -->
<?php
include 'connect_database.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($database, $_POST['name']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $phone = mysqli_real_escape_string($database, $_POST['phone']);
    $company = mysqli_real_escape_string($database, $_POST['company']);
    $message = mysqli_real_escape_string($database, $_POST['message']);

    $query = "INSERT INTO contact_submissions (name, email, phone, company, message) 
              VALUES ('$name', '$email', '$phone', '$company', '$message')";

    $result = mysqli_query($database, $query);

    if ($result) {
        echo '<div style="text-align: center; margin-top: 50px;">';
        echo '<h2>Thank you for your response! We will get back to you soon.</h2>';
        echo '<img src="clock.gif" alt="Clock Gif" width="100px" height="100px" style="margin-top: 20px;">';
        echo '</div>';
        include 'footer.php';
        exit();
    } else {
        echo 'Error: ' . mysqli_error($database);
        exit();
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
