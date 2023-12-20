<?php
include '../../database/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $invoice_date = $_POST["invoice_date"];
    $invoice_client_id = $_POST["invoice_client"];
    $invoice_project_id = $_POST["invoice_project"];
    $invoice_names = $_POST["invoice_name"];
    $invoice_descriptions = $_POST["invoice_description"];
    $invoice_price_hours = $_POST["invoice_price_hour"];
    $invoice_hours = $_POST["invoice_hours"];
    $invoice_subtotals = $_POST["invoice_price"];
    $invoice_discount = $_POST["invoice_discount"];
    $invoice_total = $_POST["invoice_total"];
    $invoice_index_id = $_POST["invoice_index"];
    // for ($i = 0; $i < count($invoice_names); $i++) {
    //     echo $invoice_names[$i] . ' ' . $invoice_descriptions[$i] . ' ' . $invoice_price_hours[$i] . ' ' . $invoice_hours[$i] . ' ' . $invoice_subtotals[$i] . ' ' . $invoice_discount .'<br>';
    // }


    $result = createInvoice($pdo, $invoice_date, $invoice_client_id, $invoice_project_id, $invoice_index_id, $invoice_names, $invoice_descriptions, $invoice_price_hours, $invoice_hours, $invoice_subtotals, $invoice_discount, $invoice_total);
}

function createInvoice($pdo, $invoice_date, $invoice_client_id, $invoice_project_id, $invoice_index_id, $invoice_names, $invoice_descriptions, $invoice_price_hours, $invoice_hours, $invoice_subtotals, $invoice_discount, $invoice_total)
{
    $createdAt = $updatedAt = date('Y-m-d H:i:s');
    $created_by = $last_modified = $_SESSION['user_id'];

    try {
        $pdo->beginTransaction(); // Start a transaction

        // Insert into the invoices table
        $stmt_invoice = $pdo->prepare("INSERT INTO `invoice`(`client_id`, `invoice_amount`, `created_at`, `due_date`, `created_by`, `last_modified`) VALUES (?,?,?,?,?,?)");


        $stmt_invoice->execute([$invoice_client_id, $invoice_total, $createdAt, $invoice_date, $created_by, $last_modified]);
        $invoice_id = $pdo->lastInsertId(); // Get the last inserted ID

        // Insert into the invoice_item table for each item
        $stmt_item = $pdo->prepare("INSERT INTO `invoice_item`(`invoice_id`, `invoice_name`,`invoice_index_id` ,`invoice_description`, `invoice_price`, `invoice_hours`, `invoice_subtotal`, `invoice_discount`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        for ($i = 0; $i < count($invoice_names); $i++) {
            $stmt_item->execute([$invoice_id, $invoice_names[$i], $invoice_index_id[$i], $invoice_descriptions[$i], $invoice_price_hours[$i], $invoice_hours[$i], $invoice_subtotals[$i], $invoice_discount]);
        }

        $pdo->commit(); // Commit the transaction

        $response = [
            'success' => true,
            'message' => 'Invoice created',
        ];
        return json_encode($response); // Return success JSON response
    } catch (PDOException $e) {
        $pdo->rollBack(); // Rollback the transaction on error
        $errorResponse = [
            'success' => false,
            'message' => 'Invoice not created: Database error - ' . $e->getMessage()
        ];
        print_r($e->getMessage());
        return json_encode($errorResponse); // Return error JSON response for database errors
    } catch (Exception $e) {
        $pdo->rollBack(); // Rollback the transaction on error
        $errorResponse = [
            'success' => false,
            'message' => 'Invoice not created: ' . $e->getMessage()
        ];
        return json_encode($errorResponse); // Return error JSON response for other exceptions
    }
}
?>