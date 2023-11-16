
	
<?php session_start();
	
	include_once('../model/userModel.php');
	$con = getConnection();
	if(isset($_POST['update'])) 
    {
            $teamid = $_GET['id'];
            $username = $_POST['username']; 
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $query = mysqli_query($con, "UPDATE users SET username ='$username', email ='$email', password ='$password' WHERE ID = $teamid");
        if($query){
        echo"UPDATED";
        }else{
            echo "Error";
        }
    }
    

?>

	  
<center>





<?php $teamid = $_GET['id']; 
$query=mysqli_query($con,"SELECT * from users WHERE id='$teamid'");
while($row=mysqli_fetch_array($query)){
?>
  

    

<fieldset><legend><h2>Team Update</h2></legend>
        <form method ="post" action="" enctype="">


            <label for="text">User Name:<br>
            <input type="text" value="<?php echo $row['username'];?>" name="username" required='true'><br>
			<label for="email">Email:<br>
           
			<input type="email" value="<?php echo $row['email'];?>" name="email" required='true'><br>
            <label for="email">Password:<br>
            
			<input type="password" value="<?php echo $row['password'];?>" name="password" required='true'><br>
            <label for="password">Team Members:<br>
        
            <input type="submit" value="SUBMIT" name="update">
            <a href="view_users.php">Back</a>
        </form>    
</fieldset>



<?php } ?>


  </th>
    </tbody>
     </table>