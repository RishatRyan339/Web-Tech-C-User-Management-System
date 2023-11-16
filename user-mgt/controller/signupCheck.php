<?php
session_start();
include('../model/userModel.php');
 
$con = getConnection();

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted using POST

    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Validate the input (e.g., check for empty fields, validate email format, etc.)
 

    // Establish a database connection
 
    // have to learn what mistakes i have done in previous codes, I forgot to use request method here that was the missing piece of the puzzle
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and execute an SQL INSERT statement to insert user data into the database
   // old code
    // $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
   // $stmt = $con->prepare($sql);
  //  $stmt->bind_param("sss", $username, $password, $email);
// new 27 oct new code
$stmt = $con->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");

// Bind parameters
$stmt->bind_param("sss", $username, $password, $email);
    if ($stmt->execute()) {
        header('location: ../view/login.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $con->close();
}

/*



session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];

if($username =="" || $password == "" || $email == ""){
    echo "";

}else{

    $user = [ 
        'username'=> $username, // checking
        'password'=> $password,
        'email'=> $email,
    ];
$_SESSION['user'] = $user;
header('location:../view/login.php');

}




*/










?>



















