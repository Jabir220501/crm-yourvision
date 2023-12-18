<?php
function getAllClientData($pdo)
{
    $stmt = $pdo->query("SELECT * FROM client");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>