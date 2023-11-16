<?php 
/* 



include("../model/userModel.php");
include("../controller/sessionCheck.php");
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the form was submitted using POST

  // Retrieve user input from the form
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

 




  // 
  if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }



if  (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $query = "SELECT * FROM users WHERE ID = $id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $username = $row['username'];
      $email = $row['email'];
    }
  }
 

 
if (isset($_POST['update'])) {
    $id = $_GET['ID'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    
   
  
    $query = "UPDATE users SET username = '$username', email = '$email' WHERE ID = $id";
    mysqli_query($con, $query);
   
    header('Location: ../view/update_user.php');
  }

}

*/


include("../model/userModel.php");
include("../controller/sessionCheck.php");
$users = updateUser(); 

$con = getConnection();



  /* 
  if (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $sql = "SELECT * FROM users WHERE ID = $ID";
  $result = mysqli_query($con, $$sql);
  
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    $email = $row['email'];
  }

}


$ID = $_GET['ID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the form was submitted using POST

  // Retrieve user input from the form (validate and sanitize the input)
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);

  if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM users WHERE ID = $ID";
    $result = mysqli_query($con, $$sql);
    
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $username = $row['username'];
      $email = $row['email'];
    }
  }

  if (isset($_POST['update'])) {
    $ID = $_GET['ID'];
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $sql = "UPDATE users SET username = '$username', email = '$email' WHERE ID = $ID";
  }else{
    echo"System issue";
  }
    if (mysqli_query($con, $sql)) {
      // Update was successful
      header('Location: ../view/update_user.php');
    } else {
      // Handle the error, display a message, or log it
      echo "Error updating user: " . mysqli_error($con);
    }
  }

  
  */

?>














  ?>

  