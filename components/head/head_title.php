<?php
function dynamicTitle($pdo, $pageTitle)
{
    // Fetch company name from the database
    $query = "SELECT company_name FROM company"; 
    $statement = $pdo->query($query);
    $company = $statement->fetchColumn();

    // Set the dynamic title
    $title = "Your Vision" . ' - ' . $pageTitle;

    // Output the HTML title tag
    echo "<title>$title</title>";
}
?>