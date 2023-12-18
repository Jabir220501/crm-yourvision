<?php
include '../../database/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['client_name'];
    $location = $_POST['client_location'];
    $email = $_POST['client_email'];
    $number = $_POST['client_number'];
    $result = createClient($pdo, $name, $location, $email, $number);
}

function createClient($pdo, $name, $location, $email, $number)
{

    $stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM client WHERE client_email = ?");
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        $errorResponse = [
            'success' => false,
            'message' => 'Client already exists. Please use a different email.'
        ];
        return json_encode($errorResponse);
    }

    $createdAt = $updatedAt = date('Y-m-d H:i:s');
    $last_modified = $_SESSION['user_id'];

    try {
        $stmt = $pdo->prepare("INSERT INTO client (client_name, client_location, client_email, client_phone, created_at, updated_at, last_modified_by	
        ) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $location);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $number);
        $stmt->bindParam(5, $createdAt);
        $stmt->bindParam(6, $updatedAt);
        $stmt->bindParam(7, $last_modified);
        $stmt->execute();

        $response = [
            'success' => true,
            'message' => 'Client created',
        ];
        return json_encode($response); // Return success JSON response
    } catch (PDOException $e) {
        $errorResponse = [
            'success' => false,
            'message' => 'Client not created: Database error - ' . $e->getMessage()
        ];
        return json_encode($errorResponse); // Return error JSON response for database errors
    } catch (Exception $e) {
        $errorResponse = [
            'success' => false,
            'message' => 'Client not created: ' . $e->getMessage()
        ];
        return json_encode($errorResponse); // Return error JSON response for other exceptions
    }

}
?>