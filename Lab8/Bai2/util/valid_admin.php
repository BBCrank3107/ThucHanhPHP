<?php
    // Ensure the user is logged in as a valid administrator
    if (!isset($_SESSION['is_valid_admin'])) {
        header("Location: ."); // Redirect to the controller if the user is not a valid admin
    }
?>
