<?php
require "connection.php";

$user_id=$_GET['user_id'] ?? 1;

$query = "SELECT * FROM project LEFT JOIN task ON project.project_id = task.project_id WHERE project.user_id = ?";
$statement = $connection -> prepare($query);
$statement -> execute([$user_id]);

if ($statement -> rowCount()==0){
    echo "No project found";
}else{
    $project = $statement -> FETCH(PDO::FETCH_ASSOC);
}
foreach($project as $key => $value){
    echo $key .": " .$value ."<br>";
}
?>