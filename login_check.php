<!-- login_check.php -->
<?php
include 'connect_database.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($database, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: profile.php');
            exit();
        } else {
            echo 'Invalid credentials';
        }
    } else {
        echo 'Error in the database query';
    }
} else {
    echo 'Invalid request';
}
?>
