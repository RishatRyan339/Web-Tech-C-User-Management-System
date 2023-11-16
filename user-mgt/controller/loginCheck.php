<?php 
    session_start();
    require_once('../model/userModel.php');
  
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];
  
  
  
  
  
    if($username == "" || $password == ""){
        echo"null username/password";


 
    }else{ 
     
    /* $con = mysqli_connect('localhost','root','','web_tech');*/    
     
        $status = login($username, $password);
        if($status){
            $_SESSION['flag'] = " true";
            header('location: ../view/home.php');



        /* 
     } else if($username ==$_SESSION['user']['username'] && $password ==$_SESSION['user']['password']){
            $_SESSION['flag'] = "true";
            header('location: ../view/home.php');
*/
        }else{
            echo"invalid user!";
        }

    }
     ?>