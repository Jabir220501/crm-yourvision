<?php
include '../../database/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client = $_POST['client'];
    $name = $_POST['project_name'];
    $category = $_POST['project_category'];
    $location = $_POST['project_location'];
    $start_date = $_POST['project_start_date'];
    $end_date = $_POST['project_end_date'];
    $time = $_POST['project_time'];
    $price = $_POST['project_price'];
    $result = createProject($pdo, $client, $name, $location, $category, $start_date, $end_date, $time, $price);
}

function createProject($pdo, $client, $name, $location, $category, $start_date, $end_date, $time, $price)
{
    $createdAt = $updatedAt = date('Y-m-d H:i:s');
    $created_by = $last_modified = $_SESSION['user_id'];

    try {
        $pdo->beginTransaction(); // Start a transaction

        // Insert into the projects table
        $stmt = $pdo->prepare("INSERT INTO projects 
            (client_id, project_name, project_category, project_address, project_price, start_date, end_date, time, created_by, created_at, updated_at, last_modified) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->execute([$client, $name, $category, $location, $price, $start_date, $end_date, $time, $created_by, $createdAt, $updatedAt, $last_modified]);

        // Get the last inserted project ID
        $projectID = $pdo->lastInsertId();

        // Insert into the projects_attendees table
        $stmt = $pdo->prepare("INSERT INTO projects_attendees (project_id, user_id) VALUES (?, ?)");
        $stmt->execute([$projectID, $created_by]);

        $pdo->commit(); // Commit the transaction

        $response = [
            'success' => true,
            'message' => 'Project created',
        ];
        return json_encode($response); // Return success JSON response
    } catch (PDOException $e) {
        $errorResponse = [
            'success' => false,
            'message' => 'Project not created: Database error - ' . $e->getMessage()
        ];
        print_r($e->getMessage());
        return json_encode($errorResponse); // Return error JSON response for database errors
    } catch (Exception $e) {
        $errorResponse = [
            'success' => false,
            'message' => 'Project not created: ' . $e->getMessage()
        ];
        print_r($e->getMessage());
        return json_encode($errorResponse); // Return error JSON response for other exceptions
    }
}
?>