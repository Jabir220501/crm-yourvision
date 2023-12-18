<?php
// Use HTTPS to prevent eavesdropping on the session ID
if ($_SERVER['HTTPS'] !== 'on') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

// Use session cookie settings to enhance security
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);

session_start();

// Function to check if user is logged in
function checkLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: ./login'); // Redirect to login page if not logged in
        exit();
    }
}

// Implement rate-limiting mechanism
$requestsLimit = 1000; // Set a limit for requests within a time frame
$timeFrameInSeconds = 3600; // (3600 seconds = 1 hour)

// Check if logged in, if not, redirect to login page
checkLoggedIn();

$currentTime = time();
if (!isset($_SESSION['requests_start_time'])) {
    $_SESSION['requests_start_time'] = $currentTime;
    $_SESSION['requests_count'] = 1;
} else {
    $elapsedTime = $currentTime - $_SESSION['requests_start_time'];

    if ($elapsedTime < $timeFrameInSeconds) {
        $_SESSION['requests_count']++;

        if ($_SESSION['requests_count'] > $requestsLimit) {
            header('Location: ./error_429'); // Redirect to error_429 page
            exit();
        }
    } else {
        // Reset the session variables
        $_SESSION['requests_start_time'] = $currentTime;
        $_SESSION['requests_count'] = 1;
    }
}
?>