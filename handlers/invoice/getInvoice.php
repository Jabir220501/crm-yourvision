<?php
function getLastInvoiceId($pdo)
{
    try {
        $stmt = $pdo->query("
        SELECT MAX(invoice_id) FROM invoices
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