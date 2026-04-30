<?php
require "connection.php";

$user_id = $_GET['user_id'] ?? 1;
$priority = $_GET['priority'] ?? 'medium'; 

$query = "SELECT * FROM task JOIN project ON task.project_id = project.project_id WHERE project.user_id = ? AND task.priority = ? AND task.archived = 0";
$statement = $connection -> prepare($query);
$statement -> execute([$user_id, $priority]);

$tasks = $statement -> FETCHALL(PDO::FETCH_ASSOC);
foreach($tasks as $task){
    echo "Task Name: " . $task['task_name'] . "<br>";
    echo "Priority: " . $task['priority'] . "<br>";}
?>