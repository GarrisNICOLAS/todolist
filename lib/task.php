<?php

require_once(get_project_dir() . '/lib/db.php');

function getAllTasks () {
    $results = db()->query('SELECT * FROM Task');
    return $results;
}

function createTask($title, $description, $status, $deadline) {
    $sql = 'INSERT INTO Task (title, description, status, deadline) VALUES (:x, :description, :status, :deadline)';
    $stmt = db()->prepare($sql);
    $result = $stmt->execute([
        'x' => $title,
        'description' => $description,
        'status' => $status,
        'deadline' => $deadline
    ]);

    return $result;
}

