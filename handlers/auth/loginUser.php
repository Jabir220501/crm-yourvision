<?php
include '../../database/config.php';

function loginUser($pdo, $username, $password)
{
    try {
        // Fetch user data by username
        $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->execute(['email' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Password matches, set user session and return success
            unset($user['password']); // Remove password from user details
            $_SESSION['logged_in'] = true; // Create a session with user details
            $_SESSION['user_id'] = $user["id"]; // Create a session with user details
            echo json_encode(['success' => 'User logged in successfully']);
        } else {
            // Invalid username or password
            echo json_encode(['error' => 'Invalid username or password']);
        }
    } catch (PDOException $e) {
        // Log or handle the database error appropriately
        return ['error' => 'Database error: ' . $e->getMessage()];
    }
}

// Start the session
session_start();

// Assuming this is a POST request for user login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Attempt to log in the user using the function
        $loginResult = loginUser($pdo, $username, $password);

    }
}
?>