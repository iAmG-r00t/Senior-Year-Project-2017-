<?php    
  
if(isset($_POST['submit']))//this will tell us what to do if some data has been post through form with button.

{
    include_once("Db_Conection.php"); 

    //preventing sql injection
    $admin_name= strip_tags($_POST['admin_name']);
    $admin_pass= strip_tags($_POST['admin_pass']);
            
            $admin_name=stripslashes($admin_name);
            $admin_pass=stripslashes($admin_pass);
            
            $admin_name=mysqli_real_escape_string($connection,$admin_name);
            $admin_pass=mysqli_real_escape_string($connection,$admin_pass);

    $admin_pass=md5($admin_pass);//checks for md5 hashed pass
    
    $admin_query="SELECT * FROM admin_login WHERE admin_name='$admin_name' AND admin_pass='$admin_pass' LIMIT 1";  
  
    $run_query=mysqli_query($connection,$admin_query);
    $num_row=mysqli_num_rows($run_query);  

    if($num_row == 1)  
    {  
  
        //echo success;
        header("Location: Admin_Home.php");    
    }  
    else 
    {

            $error_msg = "INVALID LOGIN DETAILS Please try Again";
            header(("Location:Admin_Login.php? msg=$error_msg"));
    
    }
}  
  
?>