<?php
require "connection.php";

if(isset($_POST['submit'])){
    $task_name = $_POST['task_name'];
    $description = $_POST['description']; 
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $category = $_POST['category'];
    $project_id = $_POST['project_id'];
    
if(empty($project_id) || empty($task_name) || empty($description) || empty($start_date) || empty($end_date) 
    || empty($priority) || empty($status) || empty($category)){
    echo "required fields are missing";
    exit;
}
$insert = "INSERT INTO task (task_name, description, start_date, end_date, priority, status, category, project_id) 
VALUES ('$task_name', '$description', '$start_date', '$end_date', '$priority', '$status', '$category', '$project_id')";
$query = $connection->prepare($insert);
$exect = $query->execute();
if($exect){
echo "Task added successfully";
}
}
?>