<?php
include 'db.php';

$action = $_POST['action'];

switch ($action) {
    case 'add':
        $task = $_POST['task'];
        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
        $conn->query($sql);
        break;
    case 'delete':
        $id = $_POST['id'];
        $sql = "DELETE FROM tasks WHERE id=$id";
        $conn->query($sql);
        break;
    case 'complete':
        $id = $_POST['id'];
        $sql = "UPDATE tasks SET is_completed=1 WHERE id=$id";
        $conn->query($sql);
        break;
    case 'get':
        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);
        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        echo json_encode($tasks);
        break;
}
?>
