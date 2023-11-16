<?php 
    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
      
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;  
        }
        }


    function create_User(){
 // Retrieve data from the form
/*
      
*/ $con = getConnection();

  
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
        echo "Member Added";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $con->close();
}





/* 


        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email); 
        if ($stmt->execute()) {
            echo "User data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
        // Close the database connection
        $stmt->close();
        $con->close();
  
    }

*/
      
    }


    function getUser($id){

    }

    function getAllUser(){
        $con = getConnection(); 
        $sql = "select * from users";

        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        return $users;
    }

    function updateUser() {
        
  
    
          
    }
    function editUser(){

    }
    
/* 





// code 1----------------------------------------


$sql = "UPDATE users SET username=?, email=? WHERE ID=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssi", $username, $email, $ID);

if ($stmt->execute()) {
    // Query executed successfully
    header("Location:view_users.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();



// code 2-------------------------------------------

$sql = "UPDATE users SET username='$username', email='$email' WHERE ID=$ID";
        
        if (mysqli_query($con, $sql)) {
            header("Location:view_users.php");
        } else {
            echo "Error: " . mysqli_error($con);
        }
    
        mysqli_close($con);
    

*/

?>