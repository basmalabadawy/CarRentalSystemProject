<?php
session_start();

try {
    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: users/index.php");
    exit;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>