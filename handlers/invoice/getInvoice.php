<?php
function getAllInvoiceData($pdo)
{
    try {
        $stmt = $pdo->query("
        SELECT invoice.created_at AS invoice_created_at, client.*, invoice.*
        FROM invoice 
        LEFT JOIN client ON invoice.client_id = client.client_id;
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log('Error fetching project data: ' . $e->getMessage());
        return array();
    }
}


function getAllInvoiceDataById($pdo, $id)
{
    try {
        $stmt = $pdo->query("
        SELECT *
        FROM invoice_item
        LEFT JOIN invoice ON invoice.invoice_id = invoice_item.invoice_id
        WHERE invoice.invoice_id  = $id;
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log('Error fetching project data: ' . $e->getMessage());
        return array();
    }
}


function getLastInvoiceId($pdo)
{
    try {
        $stmt = $pdo->query("
        SELECT MAX(invoice_id) FROM invoice
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log('Error fetching project data: ' . $e->getMessage());
        return array();
    }
}
function getProjectInvoice($pdo, $id)
{
    try {
        $stmt = $pdo->query("
        SELECT *
        FROM projects
        LEFT JOIN client ON projects.client_id = client.client_id
        WHERE projects.project_id = $id;
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log('Error fetching project data: ' . $e->getMessage());
        return array();
    }
}
?>