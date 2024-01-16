
<!-- register.php -->


<?php
include 'connect_database.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = mysqli_real_escape_string($database, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($database, $_POST['lastName']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $mobileNumber = mysqli_real_escape_string($database, $_POST['mobileNumber']);

    $query = "INSERT INTO users (firstName, lastName, email, password, mobileNumber) 
              VALUES ('$firstName', '$lastName', '$email', '$hashedPassword', '$mobileNumber')";

    $result = mysqli_query($database, $query);

    if ($result) {
        echo '<H1  class="success-message" >Registration successful!</H1>';
        echo '<H1 class="redirect-message">Redirecting to login page...</H1>';
        header('Refresh: 3; URL=login.php'); // Redirects to login.php after 3 seconds
        exit();
    } else {
        echo 'Error: ' . mysqli_error($database);
    }
}
?>


<?php include 'footer.php'; ?>
