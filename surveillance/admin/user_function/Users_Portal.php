<?php
    $connect = mysqli_connect("localhost", "root", "Cod3lamp", "surveillance") or die("Error connecting to the database");
    
    if(isset($_GET['msg'])){
        $error_msg = $_GET['msg'];
    }else{
        $error_msg ="";
    }

    if(isset($_POST['delete'])){
        $id         = mysqli_real_escape_string($connect, $_POST['id']);
        $query = "DELETE FROM users_login WHERE user_id='$id'";
        $result = mysqli_query($connect, $query) or die("Unable to get record");
    }

?>
<html>  
<head lang="en">
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="shortcut icon" href="http://www.newdesignfile.com/postpic/2009/02/end-user-icon_357368.jpg"/>
    <title>USERS</title>  
</head> 
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}  

    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
  <!--Begin of Page-->
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="../Admin_Home.php" onclick="w3_close()" class="w3-bar-item w3-button">Back-Home</a>
  <a href="../Backup.php" onclick="w3_close()" class="w3-bar-item w3-button">Backup</a>
  <a href="#registered" onclick="w3_close()" class="w3-bar-item w3-button">Registered Users</a>
  <a href="#add_user" onclick="w3_close()" class="w3-bar-item w3-button">Add User</a>
  <a href="../Logout_Button.php" onclick="w3_close()" class="w3-bar-item w3-button">LogOut</a>
</nav>

<div class="w3-top">
  <!-- active users container -->
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-64"><span class="w3-tag w3-wide">-USERS PORTAL-</span></div>
  </div>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <h1 id= "registered" class="w3-center w3-padding-64" class="w3-tag w3-wide">-REGISTERED USERS-</h1>
    <center><img class="w3-round w3-grayscale-min" src="http://www.opensecurityarchitecture.org/cms/images/OSA_images/icon_library/osa_user_blue_sysadmin.png"></center>
</div>
<div class="table-scrol">


<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
   
            <th>USER ID</th>
            <th>USER NAME</th>    
            <th>USER E-MAIL</th> 
        </tr>  
        </thead>  
  
        <?php  
        include("Db_Conection.php");
        $view_users_query="SELECT * FROM `users_login`";  
        $run=mysqli_query($connection,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {    
            $user_id=$row[0];
            $user_name=$row[1];  
            $user_email=$row[2]; 
        ?>  
  
        <!--here showing results in the table -->
        <tr>  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>   
            <td><a href="Delete.php?id=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>
  
        <?php } ?>  
  
        </table>
    </div>
</div>


    <!--add user container-->
    <div class="w3-container" id="add_user">
            <h1 class="w3-center w3-padding-64" class="w3-tag w3-wide">-ADD USER-</h1>
          
            <center><img class="w3-round w3-grayscale-min" src="http://png-4.findicons.com/files/icons/560/fast_icon_users/128/add_user.png"></center>

    <!--<div class="row">-->  
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">

            <div class="panel-heading">  
                    <center><h2 class="panel-title">USER DETAILS</h2></center>  
                </div>

                <div class="panel-body">
                <div align="center"> 

            <form action="Add_User.php" method="post"> <!--calls the login.php script for log in-->

                        <fieldset> 

                            <div class="form-group">  
                        <input class="form-control" placeholder="USER NAME" name="user_name" type="text" autofocus>  
                            </div>

                            <div class="form-group">  
                        <input class="form-control" placeholder="EMAIL" name="user_email" type="email" autofocus>  
                            </div>

                            <div class="frorm-group">
                        <input class="form-control" placeholder="PASSWORD" name="user_pass" type="password" value="">
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD USER" name="submit" >

                            <span style="color: #FF0000; font-weight: bold;"> <?php echo $error_msg; ?></span>
                             
                        </fieldset>  
            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>    
  
</body> 
</html>