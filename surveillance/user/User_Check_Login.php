<?php

session_start();//session starts here  

if(isset($_POST['submit']))

{

    include_once("Db_Conection.php");

    //preventing sql injection
    $user_email= strip_tags($_POST['user_email']);
    $user_pass= strip_tags($_POST['user_pass']);
            
            $user_email=stripslashes($user_email);
            $user_pass=stripslashes($user_pass);
            
    $user_email=mysqli_real_escape_string($connection,$user_email);
    $user_pass=mysqli_real_escape_string($connection,$user_pass);
  
    $check_user="SELECT * FROM users_login WHERE user_email='$user_email'AND user_pass='$user_pass' LIMIT 1";

    $run=mysqli_query($connection,$check_user);
    $row=mysqli_num_rows($run);
  
    if($row == 1) 
    {  
        $_SESSION['user_email']=$user_email;
        $_SESSION['success']=$user_email;
        
        header("Location: Home_User.php");
    }  

    else 
    {

        $error_msg = "INVALID LOGIN DETAILS Please try Again";
        header(("Location:User_Login.php? msg=$error_msg"));
    
    }
}  

?>