<!DOCTYPE HTML>
<html>
	<head>
		
		<title>My Journel</title>
		<link href="css/all.min.css" rel="stylesheet"> 
	<link href="css/fontawesome.min.css" rel="stylesheet"> 

	<link rel="stylesheet" href="css/stylepublish.css">
<div class="container">
	<button class="btn" onclick="location.href='dashboard.php' ">
	BACK<i class="fas fa-backward"></i></button>
</div>
<?php
// Include the database configuration file
require_once 'connection.php';

$editorContent = $statusMsg = '';

// If the form is submitted
if(isset($_POST['submit'])){
    // Get editor content
    $editorContent = $_POST['t1'];
    
    // Check whether the editor content is empty
    if(!empty($editorContent)){
        // Insert editor content in the database
        $insert =  $connection->query("INSERT INTO editor (content, created) VALUES ('".$editorContent."', NOW())");
        
        // If database insertion is successful
        if($insert){
            $statusMsg = "The editor content has been inserted successfully.";
        }else{
            $statusMsg = "Some problem occurred, please try again.";
        } 
    }else{
        $statusMsg = 'Please add content in the editor.';
    }
}
echo "Your entry has been saved";
?>
