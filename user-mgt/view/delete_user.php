<?php

// Establish a database connection
// Retrieve the ID from the query parameter
require('../controller/sessionCheck.php');
require('../model/userModel.php');

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE ID = $id";
$con = getConnection(); 



$result = mysqli_query($con, $sql);

if ($result) {
    echo"Delete Successful";
    // Deletion successful
    header("Location:../view/view_users.php");
} else {
    // Handle deletion error
    echo "Error: " . mysqli_error($con);
}



// Close the database connection
?>