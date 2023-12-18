<?php
function dynamicTitle($pdo, $pageTitle)
{
    // Fetch company name from the database
    $query = "SELECT company_name FROM company"; 
    $statement = $pdo->query($query);
    $company = $statement->fetchColumn();

    // Set the dynamic title
    $title = htmlspecialchars($company) . ' - ' . $pageTitle;

    // Output the HTML title tag
    echo "<title>$title</title>";
}
?>