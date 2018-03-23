<?php     
  
//Connecting to the database
    $connect = mysqli_connect("localhost", "root", "Cod3lamp", "surveillance") or die("Error connecting to the database");
    
    if(isset($_POST['submit'])){
        $user_name=$_POST['user_name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['user_pass'];//same  
        $user_email=$_POST['user_email'];//same

        if($user_name=='')  
    {  
        $error_msg = "Please enter the user name";
            header(("Location:Users_Portal.php? msg=$error_msg"));
    exit();
    }  
  
    if($user_pass=='')  
    {  
        $error_msg = "Please enter the password";
            header(("Location:Users_Portal.php? msg=$error_msg"));  
    exit();
    }  

    if(strlen($user_pass)<8)  
    {  
        $error_msg = "Please enter more than 8 characters as your password";
            header(("Location:Users_Portal.php? msg=$error_msg"));  
    exit();
    }

    //here query check weather if user_email already registered so can't add user.  
    $check_email_query="SELECT * FROM users_login WHERE user_name='$user_name'";  
    $run_query=mysqli_query($connection,$check_email_query);
  
    if(mysqli_num_rows($run_query)>0)  
    {  
    $error_msg = "User $user_name is already present in our database, Please try another one";
            header(("Location:Users_Portal.php? msg=$error_msg")); 
    exit();
    }

    //here query check weather if user_name already registered so can't add user.
    $check_user_name_query="SELECT * FROM users_login WHERE user_email='$user_email' LIMIT=1";
    $query_run=mysqli_query($connection,$check_user_name_query);

    if(mysqli_num_rows($query_run)>0)  
    {  
    $error_msg = "Email $user_email is already present in our database, Please try another one";
            header(("Location:Users_Portal.php? msg=$error_msg"));
    exit();
    }

        //GENERATING NEW ID NUMBER
        $query = "SELECT * FROM users_login ORDER BY user_id DESC LIMIT 1";
        $result = mysqli_query($connect, $query) or die("Unable to get record");
        $num_rows = mysqli_num_rows($result);
        if($num_rows==0){
            $user_id = 1;
            $insert_query = "INSERT INTO users_login (user_id, user_name, user_email, user_pass) VALUES ('$user_id', '$user_name', '$user_email', '$user_pass')";
            $insert_results = mysqli_query($connect, $insert_query) or die("Not to save record in first instance");
            echo "<script>window.open('Users_Portal.php','_self')</script>";
        }
        else
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $user_id = $row['user_id'];
                $new_user_id = $user_id + 1;
                $insert_query = "INSERT INTO users_login (user_id, user_name, user_email, user_pass) VALUES ('$new_user_id', '$user_name', '$user_email', '$user_pass')";
                $insert_results = mysqli_query($connect, $insert_query) or die("Unable to save record in second instance");
                echo "<script>window.open('Users_Portal.php','_self')</script>";
            }

        }
    }
    

?>