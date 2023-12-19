<?php
function getProjectData($pdo, $user_id)
{
    try {
        $stmt = $pdo->prepare("
            SELECT projects.*
            FROM projects
            LEFT JOIN projects_attendees ON projects.project_id = projects_attendees.project_id
            WHERE projects_attendees.user_id = :user_id
        ");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$result) {
            throw new PDOException('No projects found for the user.');
        }

        return $result;
    } catch (PDOException $e) {
        throw new PDOException('Error fetching project data: ' . $e->getMessage());
    }
}
function getProjectTeam($pdo, $project_id)
{
    try {
        $stmt = $pdo->prepare("
        SELECT *
        FROM `projects_attendees`
        LEFT JOIN users ON projects_attendees.user_id = users.id
        WHERE projects_attendees.project_id = :project_id
        ");
        $stmt->bindParam(':project_id', $project_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    } catch (PDOException $e) {
        throw new PDOException('Error fetching project data: ' . $e->getMessage());
    }
}
function getAllProjectData($pdo)
{
    $stmt = $pdo->query("SELECT * FROM projects");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllProjectDataById($pdo, $id)
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