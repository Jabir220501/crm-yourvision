<?php
include './database/config.php';

// Function to get users' data
function getUsersData($pdo)
{
    try {
        // Prepare and execute query to fetch all users' data
        $stmt = $pdo->query("SELECT * FROM users");
        $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usersData;
    } catch (PDOException $e) {
        return [];
    }
}

function getUserDataById($pdo, $user_id)
{
    $query = "SELECT * FROM users WHERE id = :user_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}
?>