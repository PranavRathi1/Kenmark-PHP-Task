<!-- logout.php -->
<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the registration page with a logout message
header('Location: registration.php?logout=1');
exit();
?>
