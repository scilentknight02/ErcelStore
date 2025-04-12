<?php
session_start(); // Ensure session is started at the very beginning
include 'dbconnection.php';

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        // Redirect back to login form if fields are empty
        header("Location: login.php?error=Please fill in all fields");
        exit();
    }

    // Prepare SQL query to check if email exists in the database
    $check_user_query = "SELECT * FROM customers WHERE email = ?";
    $stmt = $conn->prepare($check_user_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If user exists, verify the password
    if ($result->num_rows > 0) {
        // User account found, fetch data
        $user = $result->fetch_assoc();

        // Check if the entered password matches the stored hashed password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start the session
            $_SESSION['cid'] = $user['cid']; // Store the user cid in the session
            session_regenerate_id(true); // Regenerate session ID to prevent session fixation

            // Redirect to the homepage
            header("Location: home.php");
            exit();
        } else {
            // Password is incorrect, redirect back to login form with error message
            header("Location: login.php?error=Invalid password");
            exit();
        }
    } else {
        // No account found with that email, redirect back to login form with error message
        header("Location: login.php?error=Invalid email");
        exit();
    }
} else {
    // If no login request was made, just show the login form
    echo "Invalid request.";
    exit();
}
?>