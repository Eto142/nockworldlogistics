<?php
require_once "db.php";

/* Allow only admin */
if (empty($_SESSION['admin_username'])) {
    exit('Unauthorized access');
}

/* Handle delete safely */
if (
    isset($_GET['q'], $_GET['id']) &&
    $_GET['q'] === 'delete_user'
) {
    $id = (int) $_GET['id'];

    if ($id > 0) {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: ../home/");
    exit;
}
