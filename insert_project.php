<?php
require "connection.php";

if(isset($_POST['submit'])){
    $project_name = $_POST['projectName'];
    $user_id = 1;
if(empty($project_name)){
    echo "Project name is required";
    exit;
}
$insert = "INSERT INTO project (project_name,user_id) VALUES('$project_name','$user_id')";
$query = $connection->prepare($insert);
$exect = $query->execute();
if($exect){
echo "Project added successfully";
}
}

?>